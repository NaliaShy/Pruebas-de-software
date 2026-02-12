<?php

use Illuminate\Support\Facades\Route;

// En web.php
Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/integrantes', function () {
    return view('integrantes'); 
})->name('integrantes.index');

Route::get('/ActividadPrevia', function () {
    return view('Pages/Actividad_Previa'); 
})->name('Actividad_Previa.index');

Route::get('/Induccion', function() {
    return view('Pages/Induccion');
})-> name('Induccion.index');

Route::get('/Estrategias_Prueba_Software', function () {
    return view('Pages/Estrategias_Prueba_software');
}) -> name('Estrategias_Prueba_Software.index');

Route::get('/Pruebas_Integracion', function () {
    return view('Pages.Pruebas_integracion');
}) -> name('Pruebas_Integracion.index');

Route::get('/Pruebas_Unitarias', function (){
    return view('Pages.Pruebas_unitarias');
})-> name('Pruebas_Unitarias.index');

Route::get('/Recursos', function (){
    return view('Pages.Recursos');
})-> name('Recursos.index');

Route::get('/Actividad_Didactica', function (){
    return view('Pages.Actividad_didactica');
})-> name('Actividad_Didactica.index');