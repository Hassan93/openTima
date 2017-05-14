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
  //Home page
  Route::get('/',  'PrincipalController@home');
  Route::get('/repositorio',  'PrincipalController@home');
  Route::get('/about',  'PrincipalController@home');
  Route::get('/contact',  'PrincipalController@home');
  Route::get('/admin',  'PrincipalController@admin');

  //admin routes
  Route::post('/registaradmin', 'UsuariosController@registaActiva'); // admin registeration
  Route::get('/usuarios', 'UsuariosController@registo');
  Route::get('/login', 'UsuariosController@login');
  Route::post('/login','UsuariosController@postlogin');
  Route::get('/logout', 'UsuariosController@logout');
  Route::resource('departamentos','DepartamentoController');
  Route::Post('departamentos/{id}','DepartamentoController@actualizar');
  Route::resource('cursos','CursoController');
  Route::resource('docentes','DocenteController');

//rotas chefe do departamentos
Route::get('/feuem/{sigla}', 'HomeController@home');
Route::get('/feuem', 'HomeController@search');

});
//Teste de rotas
Route::get('/administracao','AdministracaoController@teste');
Route::get('/teste','AdministracaoController@departamentos');
Route::get('/cadastros','AdministracaoController@cadastros');
