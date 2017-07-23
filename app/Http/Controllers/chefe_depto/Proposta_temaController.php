<?php

namespace App\Http\Controllers\chefe_depto;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Departamento;
use App\Proposta_tema;
use App\Candidato_tema;

class Proposta_temaController extends Controller
{
  public function propostas_de_temas_show($sigla, $proposta_tema_id)
  {
    $departamento = Departamento::where('sigla', '=', $sigla)->first();
    $proposta_tema = Proposta_tema::find($proposta_tema_id);

    $candidatos = Candidato_tema::join('candidatos_temas','candidatos_temas.candidato_id','=', 'candidato_temas.id')
                                  ->where('candidatos_temas.proposta_tema_id','=', $proposta_tema->id)->get();
                    //  dd($candidatos);

    return view('departamento.proposta_temas.show')->withDepartamento($departamento)->withProposta_tema($proposta_tema)
                                                ->withCandidatos($candidatos);
  }
}
