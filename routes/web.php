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


Route::group(['middleware'=>'web'], function (){
  Route::get('/',  'PrincipalController@home');
  Route::get('/repositorio',  'PrincipalController@home');
  Route::get('/about',  'PrincipalController@home');
  Route::get('/contact',  'PrincipalController@home');
  Route::get('/admin',  'PrincipalController@admin');
  Route::get('/usuarios', 'UsuariosController@registo');
  Route::post('/registaradmin', 'UsuariosController@registaActiva');
  Route::get('/login', 'UsuariosController@login');
  Route::post('/login','UsuariosController@postlogin');
  Route::get('/logout', 'UsuariosController@logout');
  Route::resource('departamentos','DepartamentoController');
  Route::resource('cursos','CursoController');
  Route::resource('docentes','DocenteController');


});
//Teste de rotas
Route::get('/administracao','AdministracaoController@teste');
Route::get('/teste','AdministracaoController@departamentos');
Route::get('/cadastros','AdministracaoController@cadastros');
