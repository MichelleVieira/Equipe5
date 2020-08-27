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

Route::get('/', 'SiteController@home')->name('index');
Route::get('/about', 'SiteController@about')->name('about');

Route::get('/loginUsuario', 'SiteController@login')->name('loginUsuario');
Route::get('/loginFornecedor', 'SiteController@loginFornecedor')->name('loginFornecedor');
Route::get('/descricaoServico', 'SiteController@descricaoServico')->name('descricaoServico');
Route::get('/cadastrarServicos', 'SiteController@cadastrarServicos')->name('cadastrarServicos');
Route::get('/home', 'SiteController@homeCadastrarServicos')->name('home');
Route::get('/servicosCadastrados', 'SiteController@servicosCadastrados')->name('servicosCadastrados');
Route::get('/logout', 'SiteController@logout')->name('logout');
Route::get('/cadastro', 'SiteController@cadastro')->name('cadastro');
Route::get('/cadastroFornecedor', 'SiteController@cadastroFornecedor')->name('cadastroFornecedor');
Auth::routes();

Route::post('/cadastro', 'ClienteController@cadastrarCliente');
Route::post('/cadastroFornecedor', 'FornecedorController@cadastrarFornecedor')->name('cadastrarFornecedor');
// Route::get('/servicos', 'SiteController@servicos')->middleware('auth');
Route::post('/login', 'LoginController@login');
