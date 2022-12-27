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

Auth::routes([
    'reset' => false,
    'verify' => false,
   // 'register' => true,
 ]);

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/buscador', 'HomeController@buscador')->name('buscador');
Route::get('/buscador-por-caja', 'HomeController@buscadorPorCaja')->name('buscador.por.caja');
// Route::get('buscar-info/', 'ArchivoController@buscarInfo')->name('buscar-info');

Route::resources([
    'archivos' => 'ArchivoController'
]);


