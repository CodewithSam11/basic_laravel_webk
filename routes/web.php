<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAuth;
// use App\product\Logic\TestLogic;
use App\Http\Controllers\TestController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('home',[UserAuth::class,'index']);
// Route::view('home','home');

// Route::get('test',function(){
//     $product = new TestLogic;
//     return $product->getName();
// });
//OR   by controller 
Route::get('test',[TestController::class,'index']);