<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\login;
use App\Models\order;

class OrderController extends Controller
{
    //
    public function Filter(request $req){
        $id = $req->session()->get('id');
        $result = ['status' => false, 'error' => 'Вы не указали параметры'];
        $number = addslashes($req['number']);
        $status = addslashes($req['status']);
        if($number != null || $status != null){
            $operation = [];
            if($number != null){
                $operation[] = ['number', 'like', '%' . $number . '%'];
            }
            if($status != null){
                $operation['status'] = $status;
            }
            $select = order::select()->where($operation)->get();
            $result = ['status' => true, 'data' => $select];
        }
        $result = json_encode($result, true);
        return $result;
    }
}
