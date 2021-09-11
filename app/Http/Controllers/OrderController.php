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

    public function CreateOrder(request $req){
        $id = $req->session()->get('id');
        $result = ['status' => false, 'error' => 'Вы не заполнили все поля'];
        $image = $req['image'];
        $count = addslashes($req['count']);
        $cost = addslashes($req['cost']);
        $color = addslashes($req['color']);
        $size = addslashes($req['size']);
        $model = addslashes($req['model']);
        $ImageUrl = json_decode($req['ImageUrl']);
        $url = json_decode($req['url']);
        $images = [];
        $urls = [];
 

        if($color != null && $cost != null && $size != null && $model != null){
            if($image != null || $ImageUrl != null){
                if($image != null){
                    foreach($req->file('image') as $image_result){
                        $extension = explode('.', $image_result->getClientOriginalName());
                        $extension = end($extension);
                        $filename = $this->CreateFilename($id, $extension) . '.' . $extension;
                        if(file_exists('assets/img/' . $id) == false){
                            mkdir('assets/img/' . $id, 0777, true);
                        }
                        $image_result->move('assets/img/' . $id . '/', $filename);
                        $images[] = 'assets/img/' . $id . '/' . $filename;
                    }
                    exit;
                }
                if($ImageUrl != null){

                    if(is_array($ImageUrl)){
                        foreach($ImageUrl as $image_result){
                            $images[] = $image_result;
                        }
                    }
                }
                if(count($images) >= 1){
                    if(is_array($url)){
                        foreach($url as $url_result){
                            $urls[] = $url_result;
                        }
                        $images = json_encode($images, true);
                        $urls = json_encode($urls, true);
                        $number = "";
                        $word = User::select('word')->where('id', $id)->first();
                        $word = $word->word;
                        $count = order::select('id')->where('user_id', $id)->count();
                        $count = $count + 1;
                        $number = $word . '-' . $count;
                        $datetime = time();
                        order::insert([
                            'user_id' => $id,
                            'number' => $number,
                            'image' => $images,
                            'status' => 4,
                            'cost' => $cost,
                            'count' => $count,
                            'commission' => 0,
                            'color' => $color,
                            'size' => $size,
                            'model' => $model,
                            'status2' => 'Test',
                            'datetime' => $datetime,
                            'urls' => $urls
                        ]);
                        $result = ['status' => true];
                    }
                }
            }
        }
        $result = json_encode($result, true);
        return $result;
    }
}
