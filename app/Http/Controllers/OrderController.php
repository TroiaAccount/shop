<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\order;
use App\Models\User;

class OrderController extends Controller
{
    //
    public function Filter(request $req){
        $id = $req->session()->get('id');
        $result = ['status' => false, 'error' => 'Вы не указали параметры'];
        $number = addslashes($req['number']);
        $status = addslashes($req['status']);
        $operation = [];
        $operation['user_id'] = $id;
        if($number != null){
            $operation[] = ['number', 'like', '%' . $number . '%'];
        }
        if($status != null){
            $operation['status'] = $status;
        }
        $select = order::select()->where($operation)->get();
        $result = ['status' => true, 'data' => $select];
        $result = json_encode($result, true);
        return $result;
    }

    private function CreateFilename($id, $extension){
        $name = md5('file' . $id . 'image' . time() . rand() . 'time' . rand());
        if(file_exists('assets/img/' . $id . '/' . $name . '.' . $extension)){
            $name = $this->CreateFilename($id, $extension);
        }

        return $name;
    }

    public function UploadOrderPhoto(request $req){
        $id = $req->session()->get('id');
        $result = ['status' => false, 'error' => 'Вы не выбрали картинку'];
        if($req->hasFile('image')){
            $image = $req->file('image');
            $extension = explode('.', $image->getClientOriginalName());
            $extension = end($extension);
            $filename = $this->CreateFilename($id, $extension) . '.' . $extension;
            if(file_exists('assets/img/' . $id) == false){
                mkdir('assets/img/' . $id, 0777, true);
            }
            $image->move('assets/img/' . $id . '/', $filename);
            $url = asset('assets/img/' . $id . '/' . $filename);
            $result = ['status' => true, 'url' => $url];
        }
        $result = json_encode($result, true);
        return $result;
    }
    
    public function CreateOrder(request $req){
        $id = $req->session()->get('id');
        $word = $req->session()->get('word');
        $json = $req->json();
        $result = ['status' => false, 'error' => 'Вы не передали весь запрос'];
        if($json != null){
            foreach($json as $object){
                $photos = [];
                array_push($photos, $object['Photo']);
                array_push($photos, $object['PhotoUrl']);
                $ProdctUrls = $object['ProductUrl'];
                $number = order::select('id')->where('user_id', $id)->count() + 1;
                $number = $word . "-" . $number;
                order::insert([
                    'user_id' => $id,
                    'number' => $number,
                    'image' => json_encode($photos, true),
                    'status' => 4,
                    'cost' => $object['cost'],
                    'count' => $object['count'],
                    'size' => $object['size'],
                    'model' => $object['model'],
                    'color' => $object['color'],
                    'ProductUrl' => json_encode($ProdctUrls, true)
                ]);
                $result = ['status' => true];
            }
        }
        $result = json_encode($result, true);
        return $result;
    }
}
