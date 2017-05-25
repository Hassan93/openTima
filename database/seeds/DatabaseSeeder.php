<?php

use Illuminate\Database\Seeder;
use App\Disciplina;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //REGISTA admin
      // $disciplina= new Disciplina;
      // $disciplina->designacao = 'Estagio Profissional';
      //
      // $disciplina->save();
      //
      // $disciplina= new Disciplina;
      // $disciplina->designacao = 'Trabalho de Licenciatura';
      //
      // $disciplina->save();

      //user Seeder
      $user= Sentinel::registerAndActivate([
                      'email'      => 'estudante@estudante.com',
                      'password'   => 'estudante',
                      'permissions'=>  [' '],
                      'last_login' =>  ' ',
                      'first_name' => 'Estudante',
                      'last_name'  => 'Teste',
                      'last_login'=>'2017-05-23 01:40:55',
                      ]);

                    $role = Sentinel::findRoleBySlug('estudante');
                    $role->users()->attach($user);

    }
}
