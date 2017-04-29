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
      $disciplina= new Disciplina;
      $disciplina->designacao = 'Estagio Profissional';

      $disciplina->save();

      $disciplina= new Disciplina;
      $disciplina->designacao = 'Trabalho de Licenciatura';

      $disciplina->save();

    }
}
