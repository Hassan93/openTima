<?php

namespace App\Http\Controllers\chefe_depto;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use App\Curso;
use App\Departamento;
use App\Area;

class AreaController extends Controller
{
    public function nova_area($sigla, $curso_id, Request $request)
    {
        $curso = Curso::find($curso_id);
        $departamento = Departamento::where('sigla','=',$sigla);

        $area = new Area;

        $area->designacao = $request->input('designacao');
        $area->descricao = $request->input('descricao');

        $curso->areas()->save($area);
        Session::flash('success','Adicionou-se nova area de interesse');
        return redirect(url('/feuem/'.$curso->departamento->sigla.'/'. $curso->id));
    }
}
