<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Loop;
use App\Http\Controllers\Iff;

Route::get('/welcome', function () {
    return view('welcome');
});


Route::get('Forloop/{num}',[Loop::class, 'num']);

Route::get('while/{num}',[Loop::class,'while']);

// Route::get('iffs/{num}',[Iff::class,'iff']);
