<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
Use App\Models\delivery;
Use App\Models\order;

class AdminController extends Controller
{
    //
    public function Page($page, request $req){
        $id = $req->session()->get('id');
        $user_info = User::select()->where('id', $id)->first();
        $table = null;
        if($page == "main"){
            $select_order = order::select()->where('completed', 0)->orderby('id', 'desc')->get();
            $table['DeliveryCount'] = count($select_order);
            $table['DeliveryCost'] = 0;
            $table['NewDelivery'] = 0;
            $last_time = time() - 86400;
            $second_day = time() - 86400 - 86400;
            $history = 0;
            $table['LastOrder'] = [];
            foreach($select_order as $key => $result){
                $table['DeliveryCost'] += $result->cost;
                $time = strtotime($result->created_at);
                
                if($time >= $last_time){
                    $table['NewDelivery'] += 1;
                }
                
                if($time >= $second_day && $time <= $last_time){
                    $history++;
                }
            }

            //
            $percent = 0;
            if($history < $table['NewDelivery']){
                $percent = (100 * $history) / $table['NewDelivery'];
                $table['AllOrder'] = ['percent' => $percent, 'upper' => "+"];
            } else if($history > $table['NewDelivery']){
                $percent = (100 * $table['NewDelivery']) / $history;
                $table['AllOrder'] = ['percent' => $percent, 'upper' => "-"];
            } else {
                $table['AllOrder'] = ['percent' => $percent, 'upper' => null];
            } 
        }

        if($page == "orders"){
            $table = order::select()->where('completed', 0)->orderby('id', 'desc')->get();
        }

        return view('admin/main')->with([
            'page' => $page,
            'user_info' => $user_info,
            'table' => $table
        ]);
    }
}
