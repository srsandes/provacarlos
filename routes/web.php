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

Route::get ('/', 'homeController@home') ->name('home');
Route::get ('/cadastro', 'CadastroController@cadastrar') ->name('cadastro');
Route::get ('/faleconosco', 'homeController@faleconosco') ->name('faleconosco');
Route::get ('/specs', 'homeController@specs') ->name('specs');

