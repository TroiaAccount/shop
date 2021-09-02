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
        $id = $req->session()->get('id');
        if($token != null){
            $CheckToken = login::select()->where('token', $token)->first();
            if($CheckToken != null){
                if($CheckToken->user_id == $id){
                    return $next($req);
                }
            }
        }
        login::where('token', $token)->delete();
        $req->session()->put('token', null);
        $req->session()->put('id', null);
        return redirect(Route('AuthPage'));
    }
}
