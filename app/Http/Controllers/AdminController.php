<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
Use App\Models\delivery;
Use App\Models\order;
Use App\Models\role;
use App\Models\adres;
use App\Models\course;

class AdminController extends Controller
{
    //
    public function Page($page, request $req, $subpage = null){
        $id = $req->session()->get('id');
        $user_info = User::select()->where('id', $id)->first();
        $table = null;
        $course = course::first();
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
            $users = User::select()->where('admin', 0)->get();
            $table = ['admins' => $admins, 'roles' => $roles, 'users' => $users];
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
        if($page == "blank"){
            $table = order::select()->where('id', $subpage)->first();
            if($table != null){
                $json = json_decode($table->json);
                $total_cost = 0;
                $total_pos = 0;
                foreach($json as $result){
                    $total_cost += $result->cost;
                    $total_pos++;
                }
                $select_user = user::select()->where('id', $table->user_id)->first();
                $table->sum = $total_cost;
                $table->pos = $total_pos;
                $table->user_info = $select_user;
            }
            
        }
        if($page == "course"){
            $table = course::first();
        }

        return view('admin/main')->with([
            'page' => $page,
            'user_info' => $user_info,
            'table' => $table,
            'course' => $course
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
        $id = addslashes($req['user_id']);
        $role = addslashes($req['role_id']);
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
