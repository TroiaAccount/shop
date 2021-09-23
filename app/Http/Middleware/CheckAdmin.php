<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\login;

class CheckAdmin
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
        $CheckUser = User::select('admin')->where('id', $id)->first();
        if($CheckUser->admin == 1){
            return $next($req);
        }
        return redirect(Route('AuthPage'));
    }
}
