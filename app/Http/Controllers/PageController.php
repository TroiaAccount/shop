<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\order;
use App\Models\delivery;

class PageController extends Controller
{

    public function page(request $req, $page, $subpage = null){
        $id = $req->session()->get('id');
        $user_info = User::select()->where('id', $id)->first();
        $table = null;
        if($page == "orders"){
            $table = order::select()->where('user_id', $user_info->id)->paginate(10);
        }
        if($page == "delivery"){
            $table = delivery::select()->where('user_id', $user_info->id)->paginate(10);
        }
        return view('main')->with(['page' => $page, 'user_info' => $user_info, 'table' => $table, 'subpage' => $subpage]);
    }

    public function Auth(request $req){
        return view('Auth');
    }

    public function Recovery(){
        return view('Recovery');
    }
    
}
