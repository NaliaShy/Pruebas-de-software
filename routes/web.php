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
})->name('Actividad_Previa');

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




//Ruta carpetas

Route::get('/Induccion/tema1', function () { 
    return view('Pages.induccion.tema1'); 
})->name('induccion.tema1'); 
Route::get('/Induccion/tema2', function () { 
    return view('Pages.induccion.tema2'); 
})->name('induccion.tema2');
Route::get('/Induccion/tema3', function () { 
    return view('Pages.induccion.tema3'); 
})->name('induccion.tema3');


Route::get('/Estrategia_Software/tema1', function () { 
    return view('Pages.Estrategia_Software.tema1'); 
})->name('Estrategia_Software.tema1'); 
Route::get('/Estrategia_Software/tema2', function () { 
    return view('Pages.Estrategia_Software.tema2'); 
})->name('Estrategia_Software.tema2');