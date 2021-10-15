<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\adres;

class AdresController extends Controller
{
    //
    public function CreateAdres(request $req){
        $result = ['status' => false, 'error' => 'Вы не заполнили все поля'];
        $id = $req->session()->get('id');
        $telephone = addslashes($req['telephone']);
        $adres = addslashes($req['adres']);
        $passport = addslashes($req['passport']);
        $full_name = addslashes($req['full_name']);
        $email = addslashes($req['email']);
        if($telephone != null && $adres != null && $passport != null && $full_name != null && $email != null){
            $check = adres::select()->where('email', $email)->orwhere('telephone', $telephone)->first();
            if($check == null){
                adres::insert([
                    'user_id' => $id,
                    'adres' => $adres,
                    'full_name' => $full_name,
                    'passport' => $passport,
                    'email' => $email,
                    'telephone' => $telephone
                ]);
                $result = ['status' => true];
            } else {
                $result['error'] = "Адрес с такой почтой или номер телефона уже сохранён";
            }
        }
        $result = json_encode($result, true);
        return $result;
    }

    public function DeleteAdres(request $req){
        $result = ['status' => false, 'error' => 'Вы не заполнили все поля'];
        $id = $req->session()->get('id');
        if($id != null){
            $checkAdres = adres::select()->where('id', $id)->first();
            $result['error'] = "Такого адреса не существует";
            if($checkAdres != null){
                $checkAdres->delete();
                $result = ['status' => true];
            }
        }
        $result = json_encode($result, true);
        return $result;
    }
}
