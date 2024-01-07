<?php

use App\Http\Controllers\usercontroller;
use App\Http\Controllers\UserController as ControllersUserController;
use Illuminate\Support\Facades\Route;


    Route::get('/',[ControllersUserController::class,'show']);
    Route::get('/insert/{f_name}/{l_name}/{father_name}',[UserController::class,'insertquery']);
    Route::get('/del/{id}',[usercontroller::class,'del']);
    Route::get('/delall',[usercontroller::class,'delall']);
    // Route::get('/editform/{id}',[usercontroller::class,'edit']);
    route::get('/edit/{id}',[usercontroller::class,'edit']);
    route::get('edit/update/{id}/{f_name}/{l_name}/{father}',[usercontroller::class,'update']);


