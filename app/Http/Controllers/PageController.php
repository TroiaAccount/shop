<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\login;

class PageController extends Controller
{

    public function page(request $req, $page){
        $token = $req->session()->get('token');
        $select_token = login::select()->where('token', $token)->first();
        $user_info = User::select()->where('id', $select_token->user_id)->first();

        return view('main')->with(['page' => $page]);
    }

    public function Auth(request $req){
        return view('Auth');
    }

    public function Recovery(){
        return view('Recovery');
    }
    
}
