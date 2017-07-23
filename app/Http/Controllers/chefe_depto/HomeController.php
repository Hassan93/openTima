<?php

namespace App\Http\Controllers\chefe_depto;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Curso;
use App\Departamento;
use App\Tema;
use App\Proposta_tema;
use App\Monografia;
use App\Defesa;
use App\Docente;
use App\Supervisao;
use App\Helpers\Helpers;
use Session;

class HomeController extends Controller
{
    public function home($sigla)
    {
      $departamento = Departamento::where('sigla', '=', $sigla)->first();
      $monografias = Monografia::where('estado','=', 'Valida')->get();

       return view('departamento.home')->withDepartamento($departamento)->withMonografias($monografias);
    }
    public function curso($sigla, $id)
    {
      $departamento = Departamento::where('sigla', '=', $sigla)->first();
      $curso = Curso::find($id);
      $temas = Tema::orderBy('id', 'desc')->get();

    return view('departamento.cursos.home')->withCurso($curso)
                                           ->withTemas($temas)->withDepartamento($departamento);
    }

    public function propostas_de_temas($sigla)
    {
      $departamento = Departamento::where('sigla', '=', $sigla)->first();
      $proposta_temas = Proposta_tema::all();

      return view('departamento.proposta_temas.index')->withDepartamento($departamento)->withProposta_temas($proposta_temas);
    }

    public function marcacao_de_defesa(Request $request, $sigla)
    {
      $departamento = Departamento::where('sigla', '=', $sigla)->first();
      $supervisao = Supervisao::find($request->input('supervisao_id'));
      $oponente = Docente::find($request->input('oponente_id'));

  //    $supervisao = $monografia->supervisao();
      $defesa = new Defesa;
      $defesa->data = $request->input('dia').'-'.$request->input('mes');
      $defesa->hora = $request->input('horas').'-'.$request->input('minutos');

      $defesa->supervisao()->associate($supervisao);
      $oponente->defesas()->save($defesa);

      Monografia::where('supervisao_id','=', $supervisao->id)->update(['estado'=>'Terminada']);

      $mensagem_supervisor = 'Caro Supervisor, está marcada para '.$defesa->data.' pelas '.$defesa->hora.', a defesa do trabalho com tema da referencia:'.$supervisao->tema->referencia;
      $mensagem_estudante = 'Caro Candidato, está marcada a sua defesa para '.$defesa->data.' pelas '.$defesa->hora.',o seu oponente é:'.$oponente->primeiro_nome.' '.$oponente->ultimo_nome;

      $mensagem_oponente = 'Caro Docente, está designada para opor no dia'.$defesa->data.' pelas '.$defesa->hora.', a defesa de trabalho com tema da referencia:'.$supervisao->tema->referencia;

      Helpers::enviar_sms_teste($supevisao->docente->celular, $mensagem_supervisor); //Notifica-se ao supervisor
      Helpers::enviar_sms_teste($supevisao->estudante->celular, $mensagem_estudante); //Notifica-se ao estudante
      Helpers::enviar_sms_teste($supevisao->oponente->celular, $mensagem_oponente); //Notifica-se ao oponente
    Session::flash('success','Foram notificados todos envolvidos na defesa');

    return redirect(url('/feuem/'.$departamento->sigla));

    }
}
