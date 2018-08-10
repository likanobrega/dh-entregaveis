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


/* exercicio 02 laravel - LIKA - 2018-07-31 */

Route::get('/', function () {
    return view('welcome');
});

Route::get('/filmes/{id}', 'FilmesController@procurarfilmesid');

Route::get('/filmes/procurar/{nome}', 'FilmesController@procurarfilmenome');

Route::get('/listarfilmes', 'FilmesController@lista');

Route::get('/adicionarfilme/{filme}', 'FilmesController@adicionarfilme');

Route::get('/listartodosfilmes', 'FilmesController@listatodos');



