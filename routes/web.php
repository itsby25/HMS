<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\maincontroller;
use App\Http\Controllers\crudcontroller;


Route::get('/', function () {
    return redirect('/login');
});

Route::get('main',[maincontroller::class,'register']);
Route::get('igd',[maincontroller::class,'igd']);
Route::get('rawin',[maincontroller::class,'rawin']);
Route::get('ranap',[maincontroller::class,'ranap']);
Route::get('login',[maincontroller::class,'login']);
Route::post('dashboard',[maincontroller::class,'dashboard']);
Route::get('user',[maincontroller::class,'user_new']);
Route::get('tindakan_igd',[maincontroller::class,'in_igd']);


Route::post('user_new',[crudcontroller::class,'user_add']);
Route::get('user_get',[crudcontroller::class,'user_get_data']);
Route::post('pasien_new',[crudcontroller::class,'patient_add']);
Route::get('pasien_get',[crudcontroller::class,'get_data_pasien']);