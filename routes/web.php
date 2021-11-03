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

/* Page route start */
Route::get('/', function () {
    return redirect(Route('AuthPage'));
});


Route::middleware('MyAuth')->group(function(){ // Other route
    /* User route start */
    Route::get('/api/exit', 'UserController@Exit')->name('Exit');
    /* User route end
    Order route start */
    Route::post('/api/create/order', 'OrderController@CreateOrder')->name('CreateOrder');
    Route::post('/api/create/order/upload/image', 'OrderController@UploadOrderPhoto')->name('UploadOrderPhoto');
    Route::post('/api/select/order/filter', 'OrderController@Filter')->name('Filter');
    Route::post('/api/copy/order', 'OrderController@Copy')->name('CopyOrder');
    Route::post('/api/favorite', 'OrderController@Favorite')->name('Favorite');
    Route::post('/api/select/order', 'OrderController@SelectOrder')->name('SelectOrder');
    /* Order route end
    Notification route start */
    Route::post('/api/history/listen/all', 'NotificationController@AllListen')->name('AllListen');
    Route::post('/api/history/select', 'NotificationController@Select')->name('Select');
    /* Notification route end
    Personal data route start */
    Route::post('/api/personal/info/add', 'AdresController@CreateAdres')->name('CreateAdres');
    /* Personal data route end
    Page route start
    */
    Route::get('/client/{page}', 'PageController@page')->name('page');
    Route::get('/client/{page}/{subpage}', 'PageController@page')->name('Page');
    Route::post('/api/order/replace', 'OrderController@ReplaceOrder')->name('ReplaceOrder');
    Route::post('/api/order/select/info', 'OrderController@SelectOrder')->name('SelectOrder');
    /* Page route end */
    Route::middleware('CheckAdmin')->group(function(){
        Route::get('/admin', function(){
            return redirect(Route('AdminPage', ['page' => 'main']));
        })->name('Admin');
        Route::middleware('ChechAdminRights')->group(function(){
            Route::get('/admin/{page}', 'AdminController@page')->name('AdminPage');
            Route::get('/admin/{page}/{id}', 'AdminController@page')->name('AdminPages');
            Route::post('/admin/order/completed', 'OrderController@CompletedOrder')->name('write_orders_CompletedOrder');
            Route::post('/admin/order/replace', 'OrderController@ReplaceOrderAdmin')->name('write_orders_ReplaceOrder');
            Route::post('/admin/order/select', 'OrderController@SelectOrderAdmin')->name('read_orders_SelectOrder');
            Route::post('/admin/users/delete', 'UserController@Delete')->name('delete_users_DeleteUser');
            Route::post('/admin/users/replace', 'UserController@Replace')->name('write_users_ReplaceUser');
            Route::post('/admin/admins/delete', 'AdminController@DeleteAdmin')->name('delete_admins_DeleteAdmin');
            Route::post('/admin/admins/add', 'AdminController@AddAdmin')->name('write_admins_AddAdmin');
            Route::post('/admin/roles/delete', 'RoleController@DeleteRole')->name('delete_roles_DeleteRole');
            Route::post('/admin/roles/add', 'RoleController@CreateRole')->name('write_roles_CreateRole');
            Route::post('/admin/roles/select', 'RoleController@SelectRole')->name('read_roles_SelectRole');
            Route::post('/admin/roles/replace', 'RoleController@ReplaceRole')->name('write_roles_ReplaceRole');
            Route::post('/admin/adress/delete', 'AdresController@DeleteAdres')->name('delete_adress_DeleteAdres');
            Route::post('/admin/adress/replace', 'AdresController@ReplaceAdres')->name('write_adress_ReplaceAdres');
        });
        Route::get('/api/check', 'RoleController@CreateRole');
    });
});

Route::middleware('CheckMyAuth')->group(function(){ // User Route
    Route::get('/client', 'PageController@Auth')->middleware('CheckMyAuth')->name('AuthPage');
    Route::get('/client/Recovery', 'PageController@Recovery')->middleware('CheckMyAuth')->name('RecoveryPage');
    Route::post('/api/auth', 'UserController@Auth')->middleware('CheckMyAuth')->name('Auth');
    Route::post('/api/register', 'UserController@Register')->middleware('CheckMyAuth')->name('Register');
    Route::post('/api/code', 'UserController@CheckCode')->middleware('CheckMyAuth')->name('CheckCode'); 
    Route::post('/api/recovery', 'UserController@Recovery')->middleware('CheckMyAuth')->name('Recovery');
    Route::post('/api/recovery/last', 'UserController@RecoveryLast')->middleware('CheckMyAuth')->name('RecoveryLast');
});

