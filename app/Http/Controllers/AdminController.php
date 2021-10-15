<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
Use App\Models\delivery;
Use App\Models\order;
Use App\Models\role;
use App\Models\adres;

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
        if($page == "users"){
            $table = User::select()->get();
        }
        if($page == "admins"){
            $admins = User::select()->where('admin', 1)->get();
            $roles = [];
            $selectRoles = role::select()->get();
            foreach($selectRoles as $result){
                $roles[$result->id] = $result->name;
            }
            $table = ['admins' => $admins, 'roles' => $roles];
        }
        if($page == "roles"){
            $table = role::select()->get();
        }
        if($page == "adress"){
            $adress = adres::select()->paginate(50);
            $table = [];
            foreach($adress as $result){
                $selectUser = User::select()->where('id', $result->user_id)->first();
                if($selectUser != null){
                    $table[] = [
                        'user' => $selectUser->login,
                        'adres' => $result
                    ];
                }
            }
        }

        return view('admin/main')->with([
            'page' => $page,
            'user_info' => $user_info,
            'table' => $table
        ]);
        
    }

    public function DeleteAdmin(request $req){
        $id = addslashes($req['id']);
        $result = ['status' => false, 'error' => 'Вы не заполнили все обязательные поля'];
        if($id != null){
            $checkAdmin = User::select()->where(['admin' => 1, 'id' => $id])->first();
            $result['error'] = "Такого админа не существует";
            if($checkAdmin != null){
                $checkAdmin->admin = 0;
                $checkAdmin->save();
                $result = ['status' => true];
            }
        }
        $result = json_encode($result, true);
        return $result;
    }

    public function AddAdmin(request $req){
        $id = addslashes($req['id']);
        $role = addslashes($req['role']);
        $result = ['status' => false, 'error' => 'Вы не заполнили все обязательные поля'];
        if($id != null && $role != null){
            $checkUser = User::select()->where('id', $id)->first();
            $result['error'] = "Такого пользователя не сущевствует";
            if($checkUser != null){
                $checkRole = role::select()->where('id', $role)->first();
                $result['error'] = "Такой роли не существует";
                if($checkRole != null){
                    $checkUser->admin = 1;
                    $checkUser->role = $role;
                    $checkUser->save();
                    $result = ['status' => true];
                }
            }
        }
        $result = json_encode($result, true);
        return $result;
    }
}
