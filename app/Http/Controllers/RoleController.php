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
}
