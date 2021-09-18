<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\notification;

class NotificationController extends Controller
{
    //
    public function AllListen(request $req){
        $id = $req->session()->get('id');
        notification::where('user_id', $id)->update(['listen' => 1]);
        return json_encode(['status' => true]);
    }

    /* type 1 - all; type 2 - dont listen */
    public function Select(request $req){
        $id = $req->session()->get('id');
        $type = addslashes($req['type']);
        $result = ['status' => false, 'error' => 'Тип указан не верно'];
        if($type == 1 || $type == 2){
            $select = null;
            if($type == 1){
                $select = notification::select()->where('user_id', $id)->orderby('id', 'desc')->get();
            } else {
                $select = notification::select()->where(['user_id' => $id, 'listen' => 0])->orderby('id', 'desc')->get();
            }
            $result = ['status' => true, 'data' => $select];
        }
        $result = json_encode($result, true);
        return $result;
    }
}
