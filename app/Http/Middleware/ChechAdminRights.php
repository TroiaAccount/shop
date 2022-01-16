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
                    if(isset($rights['page']['read']) == true && $rights[$page]['read'] == 1){
                        $status = true;
                    }
                } else {
                    $route = explode("_", $routes);
                    $page = $route[1];
                    $right = $route[0];
                    if(isset($rights[$page][$right]) == true && $rights[$page][$right] == 1){
                        $status = true;
                    }
                }
            }
        }
        if($status == false){
            if($page == "main"){
                return redirect(Route('AuthPage'));
            } else {
                return redirect(Route('AdminPage', ['page' => 'main']));
            }
        }
        return $next($req);
    }
}
