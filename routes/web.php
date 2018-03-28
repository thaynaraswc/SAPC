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

Route::get('/ferramentasAdm/show', 'FerramentasAdmController@index')->name('/ferramentasAdm/show');
Route::get('/ferramentasAdm/FinalidadeAlvara/create', 'FrmtFinAlvaraController@create')->name('ferramentasAdm/FinalidadeAlvara/create');
Route::post('/ferramentasAdm/FinalidadeAlvara/create', 'FrmtFinAlvaraController@store')->name('ferramentasAdm/FinalidadeAlvara/create');
Route::get('/ferramentasAdm/FinalidadeAlvara/{finAlvara}/edit','FrmtFinAlvaraController@edit')->name('ferramentasAdm/FinalidadeAlvara/edit');
Route::put('/ferramentasAdm/FinalidadeAlvara/{finAlvara}','FrmtFinAlvaraController@update')->name('ferramentasAdm/FinalidadeAlvara');
Route::delete('/ferramentasAdm/FinalidadeAlvara/{finAlvara}','FrmtFinAlvaraController@destroy')->name('ferramentasAdm/FinalidadeAlvara');

Route::get('/ferramentasAdm/ProfissaoPessoa/create', 'FrmtProfPessoaController@create')->name('ferramentasAdm/ProfissaoPessoa/create');
Route::post('/ferramentasAdm/ProfissaoPessoa/create', 'FrmtProfPessoaController@store')->name('ferramentasAdm/ProfissaoPessoa/create');
Route::get('/ferramentasAdm/ProfissaoPessoa/{prof}/edit','FrmtProfPessoaController@edit')->name('ferramentasAdm/ProfissaoPessoa/edit');
Route::put('/ferramentasAdm/ProfissaoPessoa/{prof}','FrmtProfPessoaController@update')->name('ferramentasAdm/ProfissaoPessoa');

Route::get('/ferramentasAdm/Nacionalidade/create', 'NacionalidadesController@create')->name('ferramentasAdm/Nacionalidade/create');
Route::post('/ferramentasAdm/Nacionalidade/create', 'NacionalidadesController@store')->name('ferramentasAdm/Nacionalidade/create');