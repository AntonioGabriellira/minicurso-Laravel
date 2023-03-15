<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function (){
    return view('welcome');
});

Route::get('/index', function (){
    return  view('index');
})->name('index');

Route::get('/teste', function (){
    return  view('teste');
})->name('teste');

Route::get('/teste2', function (){
    return view('teste2');
})->name('teste2');

Route::get('/dependencia', function (Request $request){
    return $request;
});