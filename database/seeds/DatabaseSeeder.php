<?php

use Illuminate\Database\Seeder;
use App\Disciplina;
use App\Categoria;

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
    //   $user= Sentinel::registerAndActivate([
    //                   'email'      => 'estudante@estudante.com',
    //                   'password'   => 'estudante',
    //                   'permissions'=>  [' '],
    //                   'last_login' =>  ' ',
    //                   'first_name' => 'Estudante',
    //                   'last_name'  => 'Teste',
    //                   'last_login'=>'2017-05-23 01:40:55',
    //                   ]);
    //
    //                 $role = Sentinel::findRoleBySlug('estudante');
    //                 $role->users()->attach($user);
    //
    //

    //registar categorias de duvidas

    $categoria_1 = new Categoria;
    $categoria_1->designacao = 'Metodologias de investigação';
    $categoria_1->descricao  = 'Técnicas de pesquisa';
    $categoria_1->save();

    $categoria_2 = new Categoria;
    $categoria_2->designacao = 'Técnicas de escrita';
    $categoria_1->descricao  = 'EScrever bem é uma arte';
    $categoria_1->save();

    $categoria_1 = new Categoria;
    $categoria_1->designacao = 'Técnica';
    $categoria_1->descricao  = 'Duvida virada a uma area de actuação';
    $categoria_1->save();

    $categoria_1 = new Categoria;
    $categoria_1->designacao = 'Outras';
    $categoria_1->descricao  = 'Duvida virada a uma area de actuação';
    $categoria_1->save();

  }

}
