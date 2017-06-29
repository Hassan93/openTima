<?php

namespace App\Http\Controllers\Supervisao;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Docente;
use App\Supervisao;

class SupervisorController extends Controller
{
    public function home($docente_id)
    {
      $docente = Docente::find($docente_id);
      return view('supervisor.home')->withDocente($docente);
    }

    public function visualizar_calendario($supervisao_id)
    {
      return view('supervisor.encontros.calendario');
    }
}
