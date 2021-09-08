<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\delivery;

class OrderController extends Controller
{
    //
    public function Filter(request $req){
        $id = $req->session()->get('id');
        $result = ['status' => false, 'error' => 'Вы не указали параметры'];
        $operation = [];
        $operation['user_id'] = $id;
        $select = delivery::select()->where($operation)->get();
        $result = ['status' => true, 'data' => $select];
        $result = json_encode($result, true);
        return $result;
    }
}
