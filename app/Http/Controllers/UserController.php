<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\login;
use App\Models\code;

class UserController extends Controller
{

    private $ApiKey = "dtmb8bSVQtTByWHYowBmuL2EtHzMHKeI";
    
    public function Register(request $req){
        $login = addslashes($req['login']);
        $password = addslashes($req['password']);
        $result = ['status' => false, 'error' => 'Вы заполнили не все обязательные поля'];
        if($login != null && $password != null){
            $check_user = User::select()->where('login', $login)->first();
            if($check_user == null){
                $password = Hash::make($password);
                $word = substr($login, -4);
                $check = User::select()->where('login', 'LIKE', '%' . $word)->first();
                if($check != null){
                    $word = $this->GenerateWord($word);
                }
                User::insert([
                    'login' => $login,
                    'password' => $password,
                    'word' => $word
                ]);
                $check_user = User::select()->where('login', $login)->first();
                $code = $this->CreateCode($check_user->id); 
                
                code::where('user_id', $check_user->id)->delete();
                code::insert([
                    'user_id' => $check_user->id,
                    'code' => $code
                ]);
                $MessageBird = new \MessageBird\Client($this->ApiKey);
                $Message = new \MessageBird\Objects\Message();
                $Message->originator = 'ozcom';
                $Message->recipients = array($login);
                $Message->body = $code;
                $MessageBird->messages->create($Message);
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

    private function GenerateWord($login, $word_array = []){
        $words = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
        $result = "";
        foreach($words as $word){
            $temp = "";
            foreach($word_array as $temp_word){
                $temp .= $temp_word; 
            }
            $temp .= $word . $login;
            $check = User::select()->where('word', $temp)->first();
            if($check == null){
                $result = $temp;
                break;
            }
            if(!next($words)){
                $count = count($word_array);
                $word_array[] = $words[$count];
            }
        }
        if($result == ""){
            $result = $this->GenerateWord($word_array);
        }
        return $result;
    }

    public function Auth(request $req){
        $login = addslashes($req['login']);
        $password = addslashes($req['password']);
        $result = ['status' => false, 'error' => 'Вы заполнили не все обязательные поля'];
        if($login != null && $password != null){
            $check_user = User::select(['word', 'id', 'password', 'agree'])->where('login', $login)->first();
            if($check_user != null){
                if($check_user->agree == 1){
                    if(Hash::check($password, $check_user->password)){
                        $token = $this->CreateToken();
                        login::insert([
                            'user_id' => $check_user->id,
                            'token' => $token
                        ]);
                        $req->session()->put('token', $token);
                        $req->session()->put('id', $check_user->id);
                        $req->session()->put('word', $check_user->word);
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

    public function Recovery(request $req){
        $result = ['status' => false, 'error' => 'Вы заполнили не все обязательные поля'];
        $login = addslashes($req['login']);
        if($login != null){
            $check_user = User::select()->where('login', $login)->first();
            if($check_user != null){
                if($check_user->agree == 1){
                    $code = $this->CreateCode($check_user->id);
                    code::where('user_id', $check_user->id)->delete();
                    code::insert(['user_id' => $check_user->id, 'code' => $code]);
                    $MessageBird = new \MessageBird\Client($this->ApiKey);
                    $Message = new \MessageBird\Objects\Message();
                    $Message->originator = 'ozcom';
                    $Message->recipients = array($login);
                    $Message->body = $code;
                    $MessageBird->messages->create($Message);
                    $result = ['status' => true, 'data' => $check_user->id];
                } else {
                    $result = ['status' => false, 'error' => 'Данный пользователь не прошел проверку номера телефона'];
                }
            } else {
                $result = ['status' => false, 'error' => 'Вы ввели не верный логин'];
            }
        }
        $result = json_encode($result, true);
        return $result;
    }

    public function RecoveryLast(request $req){
        $result = ['status' => false, 'error' => 'Вы заполнили не все обязательные поля'];
        $password = addslashes($req['password']);
        $id = addslashes($req['id']);
        $code = addslashes($req['code']);
        if($password != null && $id != null && $code != null){
            $check_user = User::select()->where('id', $id)->first();
            if($check_user != null){
                if($check_user->agree == 1){
                    $check_code = code::select()->where(['user_id' => $id, 'code' => $code])->first();
                    if($check_code != null){
                        $password = Hash::make($password);
                        User::where('id', $id)->update(['password' => $password]);
                        $result = ['status' => true];
                    } else {
                        $result = ['status' => false, 'error' => 'Вы указали неверный код'];
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

    public function Exit(request $req){
        $token = $req->session()->get('token');
        login::where('token', $token)->delete();
        $req->session()->put(['token' => '', 'id' => '']);
        $result = ['status' => true];
        return json_encode($result, true);
    }

    public function Delete(request $req){
        $id = addslashes($req['id']);
        $result = ['status' => false, 'error' => 'Вы не заполнили все обязательные параметры'];
        if($id != null){
            $checkUser = User::select()->where('id', $id)->first();
            $result['error'] = "Такого пользователя не существует";
            if($checkUser != null){
                $checkUser->delete();
                $result = ['status' => true];
            }
        }
        $result = json_encode($result, true);
        return $result;
    }

    public function Replace(request $req){
        $req = $req->json()->all();
        $fullName = addslashes($req['fullName']);
        $login = addslashes($req['phone']);
        $id = addslashes($req['id']);
        $result = ['status' => false, 'error' => 'Вы не заполнили все обязательные параметры'];
        if(($fullName != null || $login != null) && $id != null){
            $checkUser = User::select()->where('id', $id)->first();
            $result['error'] = "Такого пользователя не существует";
            if($checkUser != null){
                if($fullName != null){
                    $checkUser->full_name = $fullName;
                }
                if($login != null){
                    $checkUser->login = $login;
                }
                $checkUser->save();
                $result = ['status' => true];
            }
        }
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

    public function GetPayment(request $req){//1001553684897
        $id = $req->session()->get('id');
        $result = ['status' => false, 'error' => 'Вы не выбрали картинку'];
        if($req->hasFile('receipt')){
            $image = $req->file('receipt');
            $extension = explode('.', $image->getClientOriginalName());
            $extension = end($extension);
            $filename = $this->CreateFilename($id, $extension) . '.' . $extension;
            if(file_exists('assets/receipt/' . $id) == false){
                mkdir('assets/receipt/' . $id, 0777, true);
            }
            $image->move('assets/receipt/' . $id . '/', $filename);
            $url = asset('assets/receipt/' . $id . '/' . $filename);
            $getLogin = User::select('login')->where('id', $id)->first();
            $operation = [
                'chat_id' => -1001661618380,
                'text' => 'Ссылка на чек: ' . $url . "\nЛогин: " . $getLogin->login . "\nID - " . $id
            ];
            $operation = http_build_query($operation);
            $ch = curl_init('https://api.telegram.org/bot5093036759:AAEIuL5gD1mvP1Y_ySts3RLgy4HLa2mi16Q/sendMessage?' . $operation);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            $getTelegramResponse = curl_exec($ch);
            curl_close($ch); 
            $getTelegramResponse = json_decode($getTelegramResponse);
            if($getTelegramResponse->ok == false){
                $result['error'] = $getTelegramResponse->description;
            } else {
                $result = ['status' => true, 'data' => $url];
            }
        }
        $result = json_encode($result, true);
        return $result;
    }

}
