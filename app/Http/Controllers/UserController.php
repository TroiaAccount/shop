<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\login;
use App\Models\code;

class UserController extends Controller
{
    
    public function Register(request $req){
        $login = addslashes($req['login']);
        $password = addslashes($req['password']);
        $result = ['status' => false, 'error' => 'Вы заполнили не все обязательные поля'];
        if($login != null && $password != null){
            $check_user = User::select()->where('login', $login)->first();
            if($check_user == null){
                $password = Hash::make($password);
                User::insert([
                    'login' => $login,
                    'password' => $password
                ]);
                $check_user = User::select()->where('login', $login)->first();
                $code = $this->CreateCode($check_user->id); 
                
                code::where('user_id', $check_user->id)->delete();
                code::insert([
                    'user_id' => $check_user->id,
                    'code' => $code
                ]);
                /*$MessageBird = new \MessageBird\Client('Secret');
                $Message = new \MessageBird\Objects\Message();
                $Message->originator = 'ozcom';
                $Message->recipients = array($login);
                $Message->body = "http://moscow.oz-com.ru/\n" . $code;
                $MessageBird->messages->create($Message);*/
                $result = ['status' => true];
            } else {
                $result = ['status' => false, 'error' => 'Пользователь с таким логином уже существует'];
            }
        }
        $result = json_encode($result, true);
        return $result;
    }

    public function CheckCode(request $req){
        $code = addslashes($req['code']);
        $login = addslashes($req['login']);
        $result = ['status' => false, 'error' => 'Вы заполнили не все обязательные поля'];
        if($code != null && $login != null){
            $check_user = User::select()->where('login', $login)->first();
            if($check_user != null){
                $check_code = code::select()->where(['user_id' => $check_user->id, 'code' => $code])->first();
                if($check_code != null){
                    $result = ['status' => true];
                    code::where('id', $check_code->id)->delete();
                    User::where('id', $check_user->id)->update(['agree' => 1]);
                } else {
                    $result = ['status' => false, 'error' => 'Вы ввели неверный код'];
                }
            } else {
                $result = ['status' => false, 'error' => 'Произошла ошибка. Перезапустите страницу и зарегистрируйтесь заново'];
            }
        }
        $result = json_encode($result, true);
        return $result;
    }

    public function CreateCode($id){
        $symbol = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
        $result = "";
        for($i = 0; $i < 4; $i++){
            $rand = rand(0, 9);
            $result .= $symbol[$rand];
        }
        $check = code::select()->where(['code' => $result, 'user_id' => $id])->first();
        if($check != null){
            $result = $this->CreateCode($id);
        }
        return $result;
    }

    public function Auth(request $req){
        $login = addslashes($req['login']);
        $password = addslashes($req['password']);
        $result = ['status' => false, 'error' => 'Вы заполнили не все обязательные поля'];
        if($login != null && $password != null){
            $check_user = User::select()->where('login', $login)->first();
            if($check_user != null){
                if($check_user->agree == 1){
                    if(Hash::check($password, $check_user->password)){
                        $token = $this->CreateToken();
                        login::insert([
                            'user_id' => $check_user->id,
                            'token' => $token
                        ]);
                        $req->session()->put('token', $token);
                        $result = ['status' => true];
                    } else {
                        $result = ['status' => false, 'error' => 'Неверный пароль'];
                    }
                } else {
                    $result = ['status' => false, 'error' => 'Данный пользователь не прошел проверку номера телефона'];
                }
            } else {
                $result = ['status' => false, 'error' => 'Такого пользователя не существует'];
            }
        }
        $result = json_encode($result, true);
        return $result;
    }

    private function CreateToken(){
        $token = Hash::make(md5('BBKJ>@njkwehfksjdahfkdjs@Njkasnbdfkaehrbf' . time() . rand() . time() . rand()));
        $check_token = login::select()->where('token', $token)->first();
        if($check_token != null){
            $token = $this->CreateToken();
        }
        return $token;
    }
}
