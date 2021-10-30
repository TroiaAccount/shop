<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\order;
use App\Models\User;
use App\Models\favorite;

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
        $json = $req->all();
        $result = ['status' => false, 'error' => 'Вы не передали весь запрос'];
        if($json != null){
            $number = order::select('id')->where('user_id', $id)->count() + 1;
            $number = $word . "-" . $number;
            order::insert([
                'user_id' => $id,
                'number' => $number,
                'status' => 4,
                'json' => json_encode($json)
            ]);
            $result = ['status' => true];
        }
        $result = json_encode($result, true);
        return $result;
    }

    public function Copy(request $req){
        $id = $req->session()->get('id');
        $order_id = addslashes($req['order_id']);
        $word = $req->session()->get('word');
        $result = ['status' => false, 'error' => 'Вы не заполнили все поля'];
        if($order_id != null){
            $check_order = order::select()->where(['user_id' => $id, 'id' => $order_id])->first();
            if($check_order != null){
                $number = order::select('id')->where('user_id', $id)->count() + 1;
                $number = $word . "-" . $number;
                $order = new order();
                $order->user_id = $id;
                $order->number = $number;
                $order->image = $check_order->image;
                $order->status = 4;
                $order->cost = $check_order->cost;
                $order->count = $check_order->count;
                $order->size = $check_order->size;
                $order->model = $check_order->model;
                $order->color = $check_order->color;
                $order->ProductUrl = $check_order->ProductUrl;
                $order->save();
                $result = ['status' => true, 'data' => ['number' => $number, 'id' => $order->id]];
            } else {
                $result['error'] = "Вы передали неверный ID";
            }
        }
        $result = json_encode($result, true);
        return $result;
    }

    // Admin Api

    public function CompletedOrder(request $req){
        $req = $req->json()->all();

        $id = addslashes($req['id']);
        $result = ['status' => false, 'error' => 'Вы не указали все параметры'];
        if($id != null){
            $check_order = order::select('id')->where(['id' => $id, 'completed' => 0])->first();
            if($check_order != null){
                order::where('id', $id)->update(['completed' => 1]);
                $result = ['status' => true];
            } else {
                $result['error'] = "Такого заказа не существует или он уже завершен";
            }
        }
        $result = json_encode($result, true);
        return $result;
    }

    public function ReplaceOrder(request $req){
        $req = $req->json()->all();
        $id = addslashes($req['id']);
        $status = addslashes($req['status']);
        $cost = addslashes($req['cost']);
        $commission = addslashes($req['commission']);
        $count = addslashes($req['count']);
        $size = addslashes($req['size']);
        $model = addslashes($req['model']);
        $color = addslashes($req['color']);
        $result = ['status' => false, 'error' => 'Вы не заполнили все параметры'];
        if($id != null){
            $check_order = order::select()->where(['id' => $id, 'completed' => 0])->first();
            if($check_order != null){
                $parameters = [];
                if($status != null){
                    $parameters['status'] = $status;
                }
                if($cost != null){
                    $parameters['cost'] = $cost;
                }
                if($commission != null){
                    $parameters['commission'] = $commission;
                }
                if($count != null){
                    $parameters['count'] = $count;
                }
                if($size != null){
                    $parameters['size'] = $size;
                }
                if($model != null){
                    $parameters['model'] = $model;
                }
                if($color != null){
                    $parameters['color'] = $color;
                }
                order::where('id', $id)->update($parameters);
                $result = ['status' => true];
            }
        }
        $result = json_encode($result, true);
        return $result;
    }

    public function Favorite(request $req){
        $id = $req->session()->get('id');
        $order_id = addslashes($req['order_id']);
        $result = ['status' => false, 'error' => 'Вы не заполнили все обязательные поля'];
        if($order_id != null){
            $checkOrder = order::select('id')->where(['id' => $order_id, 'user_id' => $id])->first();
            $result['error'] = "Такого заказа не существует или он пренадлежит не вам";
            if($checkOrder != null){
                $checkFavorite = favorite::select('id')->where(['user_id' => $id, 'order_id' => $order_id])->first();
                if($checkFavorite == null){
                    $checkFavorite = new favorite();
                    $checkFavorite->user_id = $id;
                    $checkFavorite->order_id = $order_id;
                    $checkFavorite->save();
                } else {
                    $checkFavorite->delete();
                }
                $result = ['status' => true];
            }
        }
        $result = json_encode($result, true);
        return $result;
    }

    public function SelectOrder(request $req){
        $id = $req->session()->get('id');
        $order_id = addslashes($req['order_id']);
        $result = ['status' => false, 'error' => 'Вы не заполнили все обязательные поля'];
        if($order_id != null){
            $checkOrder = order::select()->where(['id' => $order_id, 'user_id' => $id])->first();
            $result['error'] = "Такого заказа не существует или он пренадлежит не вам";
            if($checkOrder != null){
                $result = ['status' => true, 'data' => $checkOrder->json];
            }
        }
        $result = json_encode($result, true);
        return $result;
    }
}
