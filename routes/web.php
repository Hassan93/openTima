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
  Route::post('/registaradmin', 'Usuarios\UsuarioController@registaActiva'); // admin registeration
  Route::get('/usuarios', 'Usuarios\UsuarioController@registo');
  Route::resource('departamentos','Admin\DepartamentoController');
  Route::Post('departamentos/{id}','Admin\DepartamentoController@actualizar');
  Route::resource('cursos','Admin\CursoController');
  Route::resource('docentes','Admin\DocenteController');
  Route::resource('estudantes', 'Admin\EstudanteController');

//rotas chefe do departamentos
Route::get('/feuem/{sigla}', 'chefe_depto\HomeController@home');
Route::get('/feuem/{sigla}/{id}','chefe_depto\HomeController@curso');
Route::post('/feuem/{sigla}/{id}/temas','chefe_depto\TemasController@novo_tema');
Route::get('/feuem/{sigla}/{id}/temas/{tema_id}','chefe_depto\TemasController@tema_supervisor');
Route::post('/feuem/{sigla}/{id}/temas/{tema_id}','chefe_depto\TemasController@tema_supervisor_save');
Route::get('/feuem/{sigla}/{cursoo_id}/estudantes/{estuante_id}', 'chefe_depto\EstudanteController@detalhes_estudante');


Route::post('/feuem/{sigla}/{id}/area','chefe_depto\AreaController@nova_area');
Route::get('/feuem/{sigla}/{id}/area/{area_id}','chefe_depto\AreaController@show_area');
Route::post('/feuem/{sigla}/{id}/area/{area_id}','chefe_depto\AreaController@docente_areas');



//Route::get('/feuem', 'HomeController@search');
Route::get('/feuem/{sigla}/estudantes', 'EstudanteDepartamentoController@cursos');
Route::get('/feuem/{sigla}/estudantes/{id}', 'EstudanteDepartamentoController@estudante');

//rotas estudante
Route::get('/feng/estudantes/{supervisao_id}', 'Estudante\HomeController@home');

Route::post('/feng/estudantes/{supervisao_id}/actividades/create', 'Estudante\ActividadeController@novaActividade');
Route::get('/feng/estudantes/actividades/{id}/{estado}', 'Estudante\ActividadeController@actualizar_estado');
});
//de rotas
Route::get('/administracao','Admin\HomeController@admin');
Route::get('/teste','Supervisao\SupervisorController@home'); //testar a interface
//Route::get('/cadastros','AdministracaoController@cadastros');

//Rotas do docente supervisor

Route::get('/feng/supervisores/{id}','Supervisao\SupervisorController@home');
Route::get('/feng/supervisores/{id}/calendario','Supervisao\SupervisorController@visualizar_calendario');
Route::post('/feng/supervisores/{id}/calendario/create','Supervisao\SupervisorController@registo_de_encontro');

Route::get('/feng/supervisores/{id}/meus_temas','Supervisao\SupervisorController@propostas_de_temas');
Route::post('/feng/supervisores/{id}/meus_temas/create','Supervisao\SupervisorController@nova_proposta');


//Rotas públicas
Route::get('/feng/propostas_de_temas','Guests\CandidatosTemaController@lista_de_temas');
Route::post('/feng/propostas_de_temas/candidatar-se/{tema_id}','Guests\CandidatosTemaController@candidatar_se_tema');
