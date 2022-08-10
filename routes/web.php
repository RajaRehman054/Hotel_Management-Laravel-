<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;


 Route::get('/', function () {
    $customer = DB::select('select * from feedback');
    return view('home', ["customer"=>$customer]);
 });

 Route::get('/login', function () {
    if(session()->has('data'))

    {   
        $pass = session('data')['uname'];
        $customer = DB::select('select * from users where username = ?',[$pass]);
        $notifications = DB::select('select * from notification');
        return view('customer',["customer"=>$customer,"notifications"=>$notifications]);
    }
    return view('login');
});

Route::get('/adminlogin', function () {
    return view('adminlogin');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/feedback', function () {
    return view('feedback');
});

Route::get('/notifications', function () {
    return view('notifications');
});

Route::get('/logout', function () {
    if(session()->has('data'))
    {
        session()->pull('data');
    }
    $customer = DB::select('select * from feedback');
    return view('home', ["customer"=>$customer]);
});

Route::post('/signup', 'App\Http\Controllers\UserController@addUser');
Route::post('/login', 'App\Http\Controllers\UserController@login');
Route::post('/feedback', 'App\Http\Controllers\UserController@feedback');
Route::post('/adminlogin', 'App\Http\Controllers\AdminController@login');
Route::post('/notifications', 'App\Http\Controllers\AdminController@notification');
Route::get('/admin','App\Http\Controllers\AdminController@viewUsers');
Route::post('/addRooms', 'App\Http\Controllers\AdminController@addRooms');
Route::post('/addUsers', [AdminController::class,'addUsers']);

Route::get('/users', [AdminController::class,'fetchUsers']);
Route::delete('/deleteUsers/{id}', [AdminController::class,'delUser']);
Route::get('/editUsers/{id}','App\Http\Controllers\AdminController@editUser');
Route::put('/updateUsers/{id}','App\Http\Controllers\AdminController@updateUser');
Route::get('/admin-users', function () {
    return view('UpDeluser');
});

Route::get('/rooms', [AdminController::class,'fetchRooms']);
Route::delete('/deleteRooms/{id}', [AdminController::class,'delRoom']);
Route::get('/editRooms/{id}','App\Http\Controllers\AdminController@editRoom');
Route::put('/updateRooms/{id}','App\Http\Controllers\AdminController@updateRoom');
Route::get('/admin-rooms', function () {
    return view('UpDelroom');
});

Route::post('/addLaundary/{id}', [UserController::class,'addLaundary']);
Route::post('/addDinner/{id}', [UserController::class,'addDinner']);
Route::post('/addLunch/{id}', [UserController::class,'addLunch']);
Route::post('/addBreak/{id}', [UserController::class,'addBreak']);
Route::post('/bookRoom/{id}', [UserController::class,'bookRoom']);
Route::post('/addMisc/{id}', [UserController::class,'addMisc']);
Route::get('/getBill/{id}', [UserController::class,'getBill']);
Route::delete('/payment/{id}', [UserController::class,'payment']);



