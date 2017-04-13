<?php

namespace App\Http\Controllers;
use Sentinel;
use Session;

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
                      'email'      => 'admin',
                      'password'   => 'admin',
                      'permissions'=>  [' '],
                      'last_login' =>  ' ',
                      'first_name' => 'Muarucha',
                      'last_name'  => 'Assane',
                      ]);

                    $role = Sentinel::findRoleById(1);
                    $role->users()->attach($user);
            Session::flash('success', 'Sucesso: Utilizador Cadastrado com Sucesso');
            return redirect('/');
    }

    public function login()
        {
          return view('usuarios.login');
        }
        public function postLogin(Request $request)
        {
          Sentinel::authenticate($request->all());
          $slug = Sentinel::getUser()->roles()->first()->slug;

          if ($slug=='administrador') {

              Session::flash('success', 'Administrador autenticado com sucesso!');
return redirect('/admin');
          }elseif ($slug=='faculdade') {

               Session::flash('success', 'Autenticado com sucesso!');

            return redirect(url('/faculdade/'.$slug = Sentinel::getUser()->faculdade));
          }
        }
        public function logout($value='')
            {
              Sentinel::logout();
              Session::flash('success','Sessão terminada!');
              return redirect('/');
            }
}
