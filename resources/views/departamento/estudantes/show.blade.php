@extends('layouts.departamento')
@section('side_nav')
@include('partials.admin._verticalnav')
@stop
@section('content')
<div class="ui grid">
  <div class="four column row">
      <div class="ui breadcrumb left floated">
        <a href="{{url('/feuem/'.$estudante->curso->departamento->sigla)}}" class="section">Home</a>
        <i class="right arrow icon divider"></i>
        <a href="{{url('/feuem/'.$estudante->curso->departamento->sigla.'/'.$estudante->curso->id)}}"class="section">{{$estudante->curso->designacao}}</a>
        <i class="right arrow icon divider"></i>
        <div class="active section">{{$estudante->primeiro_nome.' '.$estudante->ultimo_nome}}</div>
      </div>
  </div>
</div>
<div class="ui main container">
  <div class="ui stackable grid">
        <div class="twelve wide column">
          <div class="ui segment">
            <div class="ui active progress">
              <div class="bar">
                <div class="progress">5%</div>
              </div>
              <div class="label">Progresso do trabalho</div>
            </div>
          </div>
        </div>
        <div class="four wide column">
          <button type="button" name="notificacao"class="ui teal large button"><i class="inbox icon"></i>Notificar aqui</button>
        </div>
   </div>
   <div class="ui horizontal divider"> </div>
   <div class="ui grid">
       <div class="six wide column">
         <div class="ui segment">
         <div class="ui header">
          <i><b>Actas Submetidas</b></i>
         </div>
         <div class="content">
                   <table class="ui selectable olive table">
                     <thead>
                     </thead>

                     <tbody>
                       <tr>
                         <td><i class="file icon"></i>1</td>
                         <td><a href="#">Primeira acta</a></td>
                         <td class="positive right aligned"><i>Valida</i></td>
                       </tr>
                       <tr>
                         <td><i class="file icon"></i>2</td>
                         <td><a href="#">Segunda acta</a></td>
                         <td class="negative right aligned"><i class="ui danger">Inválida</i></td>
                       </tr>
                       <tr>
                         <td><i class="file icon"></i>3</td>
                         <td><a href="#">Terceira acta</a></td>
                         <td class="right aligned"><i class="ui danger">pendente</i></td>
                       </tr>
                       <tr>
                         <td><i class="file icon"></i>4</td>
                         <td><a href="#">Quarta acta</a></td>
                         <td class="right aligned"><i class="ui danger">pendente</i></td>
                       </tr>
                       <tr>
                         <td><i class="file icon"></i>5</td>
                         <td><a href="#">Quinta acta</a></td>
                         <td class="right aligned"><i class="ui danger">pendente</i></td>
                       </tr>
                       <tr>
                         <td><i class="file icon"></i>6</td>
                         <td><a href="#">Sexta acta</a></td>
                         <td class="right aligned"><i class="ui danger">pendente</i></td>
                       </tr>
                     </tbody>
                   </table>

           </div>
         </div>
         </div>

       <div class="six wide column">
         <div class="ui segment">
         <div class="ui header">
           Versões de trabalhos
         </div>
         <div class="content">
           <div class="content">
                     <table class="ui selectable olive table">
                       <thead>
                         <tr class="ui header">
                           <td>Designação da parte</td>
                           <td class="right aligned">Estado</td>
                         </tr>
                       </thead>

                       <tbody>
                         <tr>
                           <td><a href="#">Introdução</a></td>
                           <td class="positive right aligned"><i>Comentada</i></td>
                         </tr>
                         <tr>
                           <td><a href="#">Revisão de literatura</a></td>
                           <td class="negative right aligned"><i class="ui danger">Sem feedback</i></td>
                         </tr>
                       </tbody>
                     </table>

             </div>
           </div>
         </div>
         </div>
       <div class="four wide column">
         <div class="ui segment">
           <div class="ui header">
              Dificuldadades do {{$estudante->ultimo_nome}}
           </div>
           <divvalue="content">
           <div class="ui styled fluid accordion">
           <div class="active title">
             <i class="dropdown icon"></i>
             Metodolofia de Invesntiigação
           </div>
           <div class="active content">
             <p>Por onde começar com a pesquisa</p>
           </div>
           <div class="title">
             <i class="dropdown icon"></i>
             Uso de ferramentas de TI
           </div>
           <div class="content">
             <p>Paginação diferente</p>
           </div>
           <div class="title">
             <i class="dropdown icon"></i>
             Duvidas técnicas?
           </div>
           <div class="content">
             <p>Modelo de arquitectura duma aplicação</p>
          </div>
      </div>
           </div>
         </div>

  </div>
</div>
@endsection
<script type="text/javascript">
$('.ui.accordion')
  .accordion()
;
</script>
