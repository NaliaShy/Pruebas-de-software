<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/integrantes', function () {
    return view('integrantes'); 
})->name('integrantes.index');
