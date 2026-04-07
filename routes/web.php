<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Pest\Support\View;


Route::get('/', function () {
    return view('welcome');
});



Route::get('/', [HomeController::class,'index']);