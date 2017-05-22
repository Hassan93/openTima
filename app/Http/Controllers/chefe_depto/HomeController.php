<?php

namespace App\Http\Controllers\chefe_depto;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Curso;
use App\Departamento;

class HomeController extends Controller
{
    public function home($sigla)
    {
      $departamento = Departamento::where('sigla', '=', $sigla)->first();

       return view('departamento.home')->withDepartamento($departamento);
    }
    public function curso($sigla, $id)
    {
      $curso = Curso::find($id);

    return view('departamento.cursos.home')->withCurso($curso);
    }
}
