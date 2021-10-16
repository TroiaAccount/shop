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

    // json example {"name":"test","rights":{"users":{"write":1,"read":1,"delete":1},"admins":{"write":1,"read":1,"delete":1},"adress":{"write":1,"read":1,"delete":1},"orders":{"write":1,"read":1,"delete":1},"roles":{"write":1,"read":1,"delete":1}}}

    public function CreateRole(request $req){
        $req = $req->json()->all();
        $result = ['status' => false, 'error' => 'Вы заполнили не все обязательные поля'];
        if(isset($req['name']) && is_array($req['rights'])){
            $name = addslashes($req['name']);
            $rights = $req['rights'];
            $rights[] = ["main" => [
                'write' => 1,
                'read' => 1,
                'delete' => 1
            ]];
            $rights = json_encode($rights, true);
            role::insert([
                'name' => $name,
                'rights' => $rights
            ]);
            $result = ['status' => true];
        }
        $array = json_encode($array, true);
        return $array;
    }

    public function SelectRole(request $req){
        $id = $req['id'];
        $result = ['status' => false, 'error' => 'Вы заполнили не все обязательные поля'];
        if($id != null){
            $selectRole = role::select()->where('id', $id)->first();
            $result['error'] = "Такой роли не существует";
            if($selectRole != null){
                $selectRole = ['name' => $selectRole->name, 'right' => json_decode($selectRole->rights)];
                $result = ['status' => true, 'data' => $selectRole];
            }
        }
        $result = json_encode($result, true);
        return $result;
    }
    // json example {"id":1,"name":"test","rights":{"users":{"write":1,"read":1,"delete":1},"admins":{"write":1,"read":1,"delete":1},"adress":{"write":1,"read":1,"delete":1},"orders":{"write":1,"read":1,"delete":1},"roles":{"write":1,"read":1,"delete":1}}}

    public function ReplaceRole(request $req){
        $req = $req->json()->all();
        $result = ['status' => false, 'error' => 'Вы заполнили не все обязательные поля'];
        if(isset($req['name']) && isset($req['id']) && is_array($req['rights'])){
            $id = addslashes($req['id']);
            $selectRole = role::select()->where('id', $id)->first();
            $result['error'] = "Такой роли не существует";
            if($selectRole != null){
                $rights = $req['rights'];
                $rights[] = ["main" => [
                    'write' => 1,
                    'read' => 1,
                    'delete' => 1
                ]];
                $selectRole->name = addslashes($req['name']);
                $selectRole->rights = json_encode($rights, true);
                $selectRole->save();
                $result = ['status' => true];
            }
        }
        $result = json_encode($result, true);
    }
}
