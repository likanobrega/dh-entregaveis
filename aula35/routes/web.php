<?php

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
    return view('welcome');
});


Route::get('/meuPrimeiroCaminho', function () {
     return "Criei meu primeiro caminho em Laravel";
});     


Route::get('/resultado/{numero}', function ($numero) {
    if ($numero % 2 == 0) {
        return "par";
    } else {
        return  "impar";
    }
});


Route::get('/resultado/{numero}', function ($numero) {
    if ($numero % 2 == 0) {
        return "par";
    } else {
        return  "impar";
    }
});


Route::get('/resultado/{numero}/(numero2?}', function ($numero, $numero2 = null) {
    if ($numero % 2 == 0) {
        return "par";
    } else {
        return ($numero * $numero2);
    }
});


Route::get('/result/{numero}/{numero2?}', function($numero, $numero2 = null) {
    if ($numero2) {
        return ($numero * $numero2);
    } else {
        if ($numero % 2 == 0) {
        return "par";
        } else {
        return "ímpar";
        }
    }
});


Route::get('/meuPrimeiroCaminho/{nome}', function ($nome) {
    if ($nome == 'Lika') {
     return "Criei meu primeiro caminho em Laravel";
    } else {
        return redirect('/');
    }
});

