<?php

namespace App\Http\Controllers\chefe_depto;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Estudante;
class EstudanteController extends Controller
{
    public function detalhes_estudante($departamento_id, $curso_id, $estudante_id)
    {
      $estudante = Estudante::find($estudante_id);
      return view('departamento.estudantes.show')->withEstudante($estudante);
    }
}
