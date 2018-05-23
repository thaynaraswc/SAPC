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
Route::get('/faq', 'FaqController@index')->name('faq');


Route::get('/registroPessoa/show', 'RegistroPessoaController@show')->name('registroPessoa/show');
Route::post('/registroPessoa/create', 'RegistroPessoaController@store')->name('registroPessoa/create');
Route::get('/registroPessoa/create', 'RegistroPessoaController@create')->name('registroPessoa/create');

Route::get('/registroEmpresa/create', 'RegistroEmpresaController@index')->name('registroEmpresa/create');
Route::get('/registroEmpresa/create', 'RegistroEmpresaController@create')->name('registroEmpresa/create');

Route::get('/registroOpcoes/show', 'RegistroOpcoesController@index')->name('/registroOpcoes/show');


Route::get('/alvaraAnual/create', 'AlvaraAnualController@index')->name('/alvaraAnual/create');
Route::get('/alvaraAnual/create', 'AlvaraAnualController@create')->name('/alvaraAnual/create');


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


Route::get('/ferramentasAdm/grauEscolaridade/create', 'GrauEscolaridadeController@index')->name('/ferramentasAdm/grauEscolaridade/create');
Route::post('/ferramentasAdm/grauEscolaridade/create', 'GrauEscolaridadeController@store')->name('/ferramentasAdm/grauEscolaridade/create');

Route::get('/ferramentasAdm/estadoCivil/create', 'EstadoCivilController@index')->name('/ferramentasAdm/estadoCivil/create');
Route::post('/ferramentasAdm/estadoCivil/create', 'EstadoCivilController@store')->name('/ferramentasAdm/estadoCivil/create');

Route::get('/ferramentasAdm/sexo/create', 'SexoPessoaController@index')->name('/ferramentasAdm/sexo/create');
Route::post('/ferramentasAdm/sexo/create', 'SexoPessoaController@store')->name('/ferramentasAdm/sexo/create');

Route::get('/estados/{id}', 'EstadosController@show');

Route::get('/viewpdf', 'PdfviewController@index');
Route::get('pdf/notificacao-regularidade', 'NotificacaoPDFController@index');