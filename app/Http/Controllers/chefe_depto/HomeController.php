<?php

namespace App\Http\Controllers\chefe_depto;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Curso;
use App\Departamento;
use App\Tema;

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
      $temas = Tema::orderBy('id', 'desc')->get();

    return view('departamento.cursos.home')->withCurso($curso)
                                           ->withTemas($temas);
    }
}
