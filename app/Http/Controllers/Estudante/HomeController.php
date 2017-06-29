<?php

namespace App\Http\Controllers\Estudante;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Departamento;
use App\Curso;
use App\Supervisao;

class HomeController extends Controller
{
  public function home($supervisao_id)
  {
    $supervisao = Supervisao::find($supervisao_id);
     return view('estudante.home')->withSupervisao($supervisao);
  }
}
