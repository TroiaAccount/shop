<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\order;
use App\Models\delivery;
use App\Models\notification;
use App\Models\adres;
use App\Models\favorite;

class PageController extends Controller
{

    public function page(request $req, $page, $subpage = null){
        $id = $req->session()->get('id');
        $user_info = User::select()->where('id', $id)->first();
        $table = null;
        if($page == "orders"){
            $order = order::select()->where('user_id', $id)->paginate(10);
            $favorites = null;
            foreach($order as $result){
                $selectFavorite = favorite::select()->where(['order_id' => $result->id, 'user_id' => $id])->first();
                $favorite = false;
                if($selectFavorite != null){
                    $favorite = true;
                    $favorites[] = $selectFavorite->order_id;
                }
                
            }
            $table = ['favorites' => $favorites, 'order' => $order];
        }
        if($page == "delivery"){
            $table = delivery::select()->where('user_id', $id)->paginate(10);
        }
        if($page == "history"){
            $table = notification::select()->where(['user_id' => $id])->orderby('id', 'desc')->get();
            $listen = notification::select('id')->where(['user_id' => $id, 'listen' => 0])->count();
            $table = ['list' => $table, 'count' => $listen];
        }
        if($page == "personal-info"){
            $table = adres::select()->where('user_id', $id)->orderby('id', 'desc')->get();
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
