<?php

namespace App\Http\Middleware;
use Illuminate\Http\Response;
use Closure;
use Illuminate\Http\Request;
use App\Models\role;
use App\Models\User;

class ChechAdminRights
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $req, Closure $next)
    {
        $id = $req->session()->get('id');
        $CheckUser = User::select(['admin', 'role'])->where('id', $id)->first();
        $page = null;
        $routes = $req->Route()->action['as'];
        if($routes == "AdminPage" || $routes == "AdminPages"){
            $page = $req->Route()->parameters['page'];
        }
        $status = false;
        if($CheckUser->admin == 1){
            $selectRole = role::select()->where('id', $CheckUser->role)->first();
            if($selectRole != null){
                $rights = json_decode($selectRole->rights, true);
                if($page != null){
                    if($rights[$page]['read'] == 1){
                        $status = true;
                    }
                } else {
                    $route = explode("_", $routes);
                    $page = $route[1];
                    $right = $route[0];
                    if($rights[$page][$right] == 1){
                        $status = true;
                    }
                }
            }
        }
        if($status == false){
            $result = ['status' => false, 'error' => "You don't have enough rights"];
            $result = json_encode($result, true);
            return response($result, 200)->header('Content-Type', "json");
        }
        return $next($req);
    }
}
