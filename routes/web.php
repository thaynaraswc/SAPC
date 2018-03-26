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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/registroPessoa/create', 'RegistroPessoaController@index')->name('registroPessoa/create');
Route::get('/registroEmpresa/create', 'RegistroEmpresaController@index')->name('registroEmpresa/create');
Route::get('/registroOpcoes/show', 'RegistroOpcoesController@index')->name('/registroOpcoes/show');

Route::get('/alvaraAnual/create', 'AlvaraAnualController@index')->name('/alvaraAnual/create');


Route::get('/ferramentasAdm/FinalidadeAlvara/create', 'FerramentasAdmController@index')->name('ferramentasAdm/FinalidadeAlvara/create');