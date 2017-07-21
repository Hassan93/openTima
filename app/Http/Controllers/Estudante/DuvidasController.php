<?php

namespace App\Http\Controllers\Estudante;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Supervisao;

class DuvidasController extends Controller
{
    public function index($supervisao_id)
    {
        $supervisao = Supervisao::find($supervisao_id);
        return view('estudante.duvidas.index')->withSupervisao($supervisao);
    }
    public function show($supervisao_id)
    {//quando descomentar a sua rota, acresta mais um parametro {duvida_id}
      $supervisao = Supervisao::find($supervisao_id);
      return view('estudante.duvidas.show')->withSupervisao($supervisao);
    }
}
