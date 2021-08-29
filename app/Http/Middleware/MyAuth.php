<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\login;

class MyAuth
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
        $token = $req->session()->get('token');
        if($token != null){
            $CheckToken = login::select()->where('token', $token)->first();
            if($CheckToken != null){
                return $next($req);
            }
        }

        return redirect(Route('AuthPage'));
    }
}
