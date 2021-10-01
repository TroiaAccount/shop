<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    //
    public function Page($page, request $req){
        $id = $req->session()->get('id');
        $user_info = User::select()->where('id', $id)->first();
        $table = null;
        return view('admin/main')->with([
            'page' => $page,
            'user_info' => $user_info
        ]);
    }
}
