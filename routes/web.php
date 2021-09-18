<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect(Route('AuthPage'));
});
Route::get('/client', 'PageController@Auth')->middleware('CheckMyAuth')->name('AuthPage');
Route::get('/client/Recovery', 'PageController@Recovery')->middleware('CheckMyAuth')->name('RecoveryPage');
Route::get('/client/{page}', 'PageController@page')->middleware('MyAuth')->name('page');
Route::get('/client/{page}/{subpage}', 'PageController@page')->middleware('MyAuth')->name('Page');
Route::post('/api/auth', 'UserController@Auth')->middleware('CheckMyAuth')->name('Auth');
Route::post('/api/register', 'UserController@Register')->middleware('CheckMyAuth')->name('Register');
Route::post('/api/code', 'UserController@CheckCode')->middleware('CheckMyAuth')->name('CheckCode'); 
Route::post('/api/recovery', 'UserController@Recovery')->middleware('CheckMyAuth')->name('Recovery');
Route::post('/api/recovery/last', 'UserController@RecoveryLast')->middleware('CheckMyAuth')->name('RecoveryLast');
Route::post('/api/select/order/filter', 'OrderController@Filter')->middleware('MyAuth')->name('Filter');
Route::get('/api/exit', 'UserController@Exit')->middleware('MyAuth')->name('Exit');
Route::post('/api/create/order', 'OrderController@CreateOrder')->middleware('MyAuth')->name('CreateOrder');
Route::post('/api/create/order/upload/image', 'OrderController@UploadOrderPhoto')->middleware('MyAuth')->name('UploadOrderPhoto');
Route::post('/api/history/listen/all', 'NotificationController@AllListen')->middleware('MyAuth')->name('AllListen');
Route::post('/api/history/select', 'NotificationController@Select')->middleware('MyAuth')->name('Select');
Route::post('/api/personal/info/add', 'AdresController@CreateAdres')->middleware('MyAuth')->name('CreateAdres');