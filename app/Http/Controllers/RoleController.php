<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\role;

class RoleController extends Controller
{
    //
    public function DeleteRole(request $req){
        $id = addslashes($req['id']);
        $result = ['status' => false, 'error' => 'Вы не заполнили все поля'];
        if($id != null){
            $checkRole = role::select()->where('id', $id)->first();
            $result['error'] = "Такой роли не существует";
            if($checkRole != null){
                $checkRole->delete();
                $result = ['status' => true];
            }
        }
        $result = json_encode($result, true);
        return $result;
    }

    public function CreateRole(request $req){
        //$req = $req->json()->all();
        $array = [
            'users' => [
                "write" => 1,
                "read" => 1,
                "delete" => 1
            ],
            "admins" => [
                'write' => 1,
                'read' => 1,
                'delete' => 1
            ],
            "adress" => [
                'write' => 1,
                'read' => 1,
                'delete' => 1
            ],
            'orders' => [
                'write' => 1,
                'read' => 1,
                'delete' => 1
            ],
            'roles' => [
                'write' => 1,
                'read' => 1,
                'delete' => 1
            ]
        ];
        $array = json_encode($array, true);
        return $array;
    }
}
