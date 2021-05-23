<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    //return view('welcome');
    return "Bienvenido a la página principal :)";
});

Route::get('curso', function () {
    //return view('welcome');
    return "Bienvenido a la sección de cursos";
});

Route::get('curso/create', function () {
    return "En esta página podras crear un curso";
});

Route::get('curso/{curso}',function($curso){
    return "Bienvenido al curso de: ".$curso;
});