@extends('layouts.departamento')
@section('side_nav')
  @include('partials.admin._verticalnav')
@stop
@section('content')
<div class="ui cards">
 <div class="ui link card">
     <div class="content">
       <div class="header"><a href="#"><i class="folder icon"></i>Meus Supervisandos</a></div>
       <div class="description">
         <table class="ui small very compact unstackable selectable olive table">
           <thead>
           </thead>

           <tbody>
             <tr>
               <td><i class="users icon"></i>TL</td>
               <td class="right aligned">5</td>
             </tr>
             <tr>
               <td><i class="users icon"></i>EP</td>
               <td class="right aligned">10</td>
             </tr>
           </tbody>
         </table>

       </div>
     </div>
 </div>
 <div class="ui link card">
     <div class="content">
       <div class="header"><a href="{{url('/feng/supervisores/'.$docente->id.'/calendario')}}"><i class="database icon"></i>Calendário de encontros</a></div>
       <div class="description">
         <table class="ui small very compact unstackable selectable olive table">
           <thead>
           </thead>

           <tbody>

           </tbody>
         </table>
       </div>
     </div>
 </div>
 <div class="ui link card">
   <div class="content">
     <div class="header"><a href="{{url('/feng/supervisores/'.$docente->id.'/meus_temas')}}"><i class="announcement icon"></i>Minhas propostas de temas</a></div>
     <table class="ui small very compact unstackable selectable olive table">
       <thead>
         <tr>
           <th colspan="2">
             <button class="ui teal button" onclick="model()"><i class="plus icon"></i>Propor novo tema</button>
           </th>
         </tr>
       </thead>
       <tbody>
       </tbody>
     </table>
   </div>
 </div>
</div>
<div style="margin-top:20px;"></div>
 <div class="ui main container">
   <table class="ui selectable single line table">
     <thead>
       <tr>
         <th>Supervisando</th>
         <th>Ref. do tema</th>
         <th>Actas submeditas</th>
         <th>Trabalho partilhadas</th>
         <th>Dúvidas submetidas</th>
         <th>Progresso</th>
         <th>Próximo encontro</th>
         <th>Detalhes</th>
       </tr>
     </thead>
     <tbody>
       @foreach($docente->supervisaos as $supervisao)
       <tr>
         <td>{{$supervisao->estudante->primeiro_nome.' '.$supervisao->estudante->ultimo_nome}}</td>
         <td>{{$supervisao->tema->referencia}}</td>
         <td>{{count($supervisao->actas)}}</td>
         <td>2</td>
         <td>{{count($supervisao->estudante->duvidas)}}</td>
         <td>
             <div class=" {{($supervisao->progresso < 50 ) ? "ui active red progress": ""}}{{($supervisao->progresso > 50 ) ? "ui active green progress": ""}}" data-percent="{{$supervisao->progresso}}" id="example1">
               <div class="bar">{{$supervisao->progresso.'%'}}</div>
             </div><div class="progress"></div>
         </td>
         <td>10.05.2017</td>
         <td>
           <div class="ui animated fade green button" tabindex="0">
             <div class="visible content">Visualizar</div>
             <div class="hidden content">
               <a href="{{url('/feng/supervisores/'.$docente->id.'/supervisandos/'.$supervisao->id)}}"><i class="unhide icon"></i></a>
             </div>
           </div>
         </td>
       </tr>
       @endforeach
       <tr>
         <td>Michaque</td>
         <td>2017EITLD4</td>
         <td>4</td>
         <td>2</td>
         <td>10</td>
         <td>
           <div class="ui active progress">
             <div class="bar">
               <div class="progress">5%</div>
             </div>
           </div>
         </td>
         <td>10.05.2017</td>
         <td>
           <div class="ui animated fade green button" tabindex="0">
             <div class="visible content">Visualizar</div>
             <div class="hidden content">
               <a href="#"><i class="unhide icon"></i></a>
             </div>
           </div>
         </td>
       </tr>
       <tr>
         <td>Justino</td>
         <td>2017EITLD4</td>
         <td>4</td>
         <td>2</td>
         <td>10</td>
         <td>
           <div class="ui active progress">
             <div class="bar">
               <div class="progress">5%</div>
             </div>
           </div>
         </td>
         <td>10.05.2017</td>
         <td>
           <div class="ui animated fade green button" tabindex="0">
             <div class="visible content">Visualizar</div>
             <div class="hidden content">
               <a href="#"><i class="unhide icon"></i></a>
             </div>
           </div>
         </td>
       </tr>
     </tbody>
   </table>
</div>
@endsection
<script type="text/javascript">
function dimmer() {
  $('.special.cards .image').dimmer({
  on: 'hover'
  });
}
function model() {
  $('.ui.small.modal')
.modal('show');
}
</script>
<div class="ui small modal">
  <i class="close icon"></i>
  <div class="header">Nova proposta de tema</div>
  <div class="content">
    <form class="ui form" action="#" method="post">
        {{ csrf_field() }}
      <div class="field">
        <label>Desgnação</label>
              <input placeholder="designacao" type="text" name="designacao">
      </div>

        <div class="field">
          <label>Área Científica do tema</label>
          <select class="ui fluid search dropdown" name="area">
            @foreach($docente->areas as $area)
            <option value="{{$area->id}}">{{$area->designacao}}</option>
            @endforeach
          </select>
        </div>

        <div class="field">
            <label>Descrição sucinta do tema</label>
            <textarea name="descricao"></textarea>
        </div>
        <div class="field">
          <button type="submit" class="fluid ui green button" onsubmit="">Gravar</button>
        </div>
      </div>
    </form>
</div>
