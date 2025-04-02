<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\auth;

Route::get('/', function () {
    return view('welcome');
});
Route::get ('/cadastro', function(){
    return view('login_inicial');
});
Route::get ('/recuperar', function(){
    return view('recuperar');
});

