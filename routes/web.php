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
  Route::get('/', function () {
    return redirect(url('/login'));

  });

Route::get('/login', 'Usuarios\UsuarioController@login');
Route::post('/login','Usuarios\UsuarioController@postlogin');

//Rotas para logout

Route::get('/logout', 'Usuarios\UsuarioController@logout');

  //admin routes
  Route::post('/registaradmin', 'UsuariosController@registaActiva'); // admin registeration
  Route::get('/usuarios', 'UsuariosController@registo');
  Route::resource('departamentos','Admin\DepartamentoController');
  Route::Post('departamentos/{id}','Admin\DepartamentoController@actualizar');
  Route::resource('cursos','Admin\CursoController');
  Route::resource('docentes','Admin\DocenteController');
  Route::resource('estudantes', 'Admin\EstudanteController');

//rotas chefe do departamentos
Route::get('/feuem/{sigla}', 'chefe_depto\HomeController@home');
Route::get('/feuem/{sigla}/{id}','chefe_depto\HomeController@curso');
Route::get('/feuem', 'HomeController@search');
Route::get('/feuem/{sigla}/estudantes', 'EstudanteDepartamentoController@cursos');
Route::get('/feuem/{sigla}/estudantes/{id}', 'EstudanteDepartamentoController@estudante');



});
//de rotas
Route::get('/administracao','Admin\HomeController@admin');
Route::get('/teste','AdministracaoController@teste');
Route::get('/cadastros','AdministracaoController@cadastros');
