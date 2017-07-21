<?php

namespace App\Http\Controllers\Estudante;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Departamento;
use App\Curso;
use App\Supervisao;
use App\Acta;

class HomeController extends Controller
{
  public function home($supervisao_id)
  {
    $progresso = 0;
    $total_actas =0;
    $actas_validas=0;
    $supervisao = Supervisao::find($supervisao_id);
    $actas = Acta::where('supervisao_id','=',$supervisao->id)->get();

    if ($actas !==null) {
      $total_actas= count($actas);
      foreach ($actas as $acta) {
        if ($acta->estado!= 'Pendente') {
          $actas_validas+=1;

        }if ($acta->estado == 'Valida') {
          foreach ($acta->actividades as $actividade) {
            $progresso+=$actividade->peso;
          }
        }

      }
    }
     return view('estudante.home')->withSupervisao($supervisao)->withProgresso($progresso)
              ->withTotal_actas($total_actas)->withActas_validas($actas_validas);
  }
  public function vizualizar_actas($supervisao_id)
  {

    $supervisao = Supervisao::find($supervisao_id);


    return view('estudante.actas.index')->withSupervisao($supervisao);
  }
}
