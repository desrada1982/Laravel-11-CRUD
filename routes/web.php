<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/crud', \App\Http\Controllers\DesradaIsmailController::class);