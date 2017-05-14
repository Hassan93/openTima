<?php

namespace App\Http\Controllers;
use Sentinel;
use Session;
use App\Docente;

use Illuminate\Http\Request;

class UsuariosController extends Controller
{
  public function registo()
  {
    return view('usuarios.register');
}
public function registaActiva(Request $request)
{
      $user= Sentinel::registerAndActivate([
                      'email'      => 'admin@admin.com',
                      'password'   => 'admin',
                      'permissions'=>  [' '],
                      'last_login' =>  ' ',
                      'first_name' => 'Admin',
                      'last_name'  => 'Admin',
                      ]);

                    $role = Sentinel::findRoleById(1);
                    $role->users()->attach($user);
            Session::flash('success', 'Sucesso: Utilizador Cadastrado com Sucesso');
            return redirect('/');
    }

public function cadatraUsuario(Request $request){
  $usuario= Sentinel::registerAndActivate([
                      'email'      => $request->input('email'),
                      'password'   => $request->input('password'),
                      'permissions'=>  [' '],
                      'last_login' =>  ' ',
                      'first_name' => $request->input('first_name'),
                      'last_name'  => $request->input('last_name'),
                      ]);

              if ($request->input('role_id')== 2) {
                      $role = Sentinel::findRoleById(2);
                      $role->users()->attach($user);

              }
  return redirect('/');
}

public function login(){
  return view('usuarios.login');
 }
public function postLogin(Request $request){
          Sentinel::authenticate($request->all());
          $slug = Sentinel::getUser()->roles()->first()->slug;
          if ($slug=='administrador') {

              Session::flash('success', 'Administrador autenticado com sucesso!');
          return redirect('/administracao');
;
          }elseif ($slug=='chefe_do_departamento') {
               $docente = Docente::where('email','=',Sentinel::getUser()->email)->first();
               Session::flash('success', 'Autenticado com sucesso!');

            return redirect(url('/feuem/'.$docente->departamento->sigla));
          }
        }
        public function logout($value='')
            {
              Sentinel::logout();
              Session::flash('success','Sessão terminada!');
              return redirect('/');
            }
}
