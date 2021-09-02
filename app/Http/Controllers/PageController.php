<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\login;
use App\Models\order;

class PageController extends Controller
{

    public function page(request $req, $page){
        $token = $req->session()->get('token');
        $select_token = login::select()->where('token', $token)->first();
        $user_info = User::select()->where('id', $select_token->user_id)->first();
        $table = null;
        if($page == "orders"){
            $table = order::select()->where('user_id', $user_info->id)->get();
        }
        return view('main')->with(['page' => $page, 'user_info' => $user_info, 'table' => $table]);
    }

    public function Auth(request $req){
        return view('Auth');
    }

    public function Recovery(){
        return view('Recovery');
    }
    
}
