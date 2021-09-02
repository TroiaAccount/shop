<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\login;

class CheckMyAuth
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
                return redirect(Route('page', ['page' => 'orders']));
            }
        }

        return $next($req);
    }
}
