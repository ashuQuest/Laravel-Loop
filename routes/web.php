<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Loop;
Route::get('/', function () {
    return view('welcome');
});


Route::get('Forloop/{num}',[Loop::class, 'num']);

Route::get('while/{num}',[Loop::class,'while']);
