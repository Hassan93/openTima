@extends('layouts.departamento')
@section('side_nav')
  @include('partials.admin._verticalnav')
@stop
@section('content')
<div class="ui cards">
 <div class="ui link card">
     <div class="content">
       <div class="header"><a href="#"><i class="folder icon"></i>Actas</a></div>
       <div class="description">
         <table class="ui small very compact unstackable selectable olive table">
           <thead>
             <tr>
               <th colspan="2">
                 Ref do tema:EID20179
               </th>
             </tr>
           </thead>

           <tbody>
             <tr>
               <td><i class="users icon"></i>Validadas</td>
               <td class="right aligned">5</td>
             </tr>
             <tr>
               <td><i class="users icon"></i>Submetidas</td>
               <td class="right aligned">10</td>
             </tr>
           </tbody>
         </table>

       </div>
     </div>
 </div>
 <div class="ui link card">
     <div class="content">
       <div class="header"><a href="#"><i class="database icon"></i>Versões do trabalho</a></div>
       <div class="description">
         <table class="ui small very compact unstackable selectable olive table">
           <thead>
             <tr>
               <th colspan="2">
                 Ref do tema: EID20179
               </th>
             </tr>
           </thead>

           <tbody>
             <tr>
               <td><i class="student icon"></i>Revistas</td>
               <td class="right aligned">5</td>
             </tr>
             <tr>
               <td><i class="student icon"></i>Submetidas</td>
               <td class="right aligned">15</td>
             </tr>
           </tbody>
         </table>
       </div>
     </div>
 </div>
 <div class="ui link card">
   <div class="content">
     <div class="header"><a href="#"><i class="announcement icon"></i>Log de duvidas</a></div>
     <table class="ui small very compact unstackable selectable olive table">
       <thead>
         <tr>
           <th colspan="2">
             Ref do tema: EID20179
           </th>
         </tr>
       </thead>
       <tbody>
         <tr>
           <td><i class="users icon"></i>Metodologias de investigacao</td>
           <td class="right aligned">
             <i class="">2</i>
           </td>
         </tr>
         <tr>
           <td><i class="users icon"></i>Revisao de literatura</td>
           <td class="right aligned"><i class="">5</i></td>
         </tr>
         <tr>
           <td><i class="users icon"></i>Outras</td>
           <td class="right aligned"><i class="">5</i></td>
         </tr>
       </tbody>
     </table>
   </div>
 </div>
</div>
 <div class="ui main container">
   <div class="ui stackable grid">
         <div class="eight wide column">
           <div class="ui segment">
             <div class="ui active progress">
               <div class="bar">
                 <div class="progress">5%</div>
               </div>
               <div class="label">Progresso do trabalho</div>
             </div>
           </div>
         </div>
         <div class="eight wide column">
           <div class="ui warning message">
             <div class="header">
                Data prevista para o proximo encontro!
               </div>
             <p>12-05-2017</p>
           </div>
         </div>
     <div class="twelve wide column">
       <div class="ui top attached tabular menu" onclick="tab()">
         <a class="item active" data-tab="first">Actividades em progresso</a>
         <a class="item" data-tab="second">Actividades por iniciar</a>
         <a class="item" data-tab="third">Actividades terminadas</a>
       </div>

       <div class="ui bottom attached tab active segment" data-tab="first">
         <table class="ui small very compact unstackable selectable olive table">
          <thead>

          </thead>
           <tbody>
             <tr>
               <td>
                 <a class="ui green tag label">Actividade 1</a>
               </td>
               <td class="right aligned">
                    <div class="ui dropdown item">
                      <i class="ellipsis vertical icon"></i>
                      <div class="menu">
                        <a class="item">Terminada</a>
                        <a class="item">Pausada</a>
                      </div>
                  </div>
               </td>
             </tr>
             <tr>
               <td>
                 <a class="ui green tag label">Actividade 2</a>
               </td>
               <td class="right aligned">
                    <div class="ui dropdown item">
                      <i class="ellipsis vertical icon"></i>
                      <div class="menu">
                        <a class="item">Terminada</a>
                        <a class="item">Pausada</a>
                      </div>
                  </div>
               </td>
             </tr>
             <tr>
               <td>
                 <a class="ui green tag label">Actividade 3</a>
               </td>
               <td class="right aligned">
                    <div class="ui dropdown item">
                      <i class="ellipsis vertical icon"></i>
                      <div class="menu">
                        <a class="item">Terminada</a>
                        <a class="item">Pausada</a>
                      </div>
                  </div>
               </td>
             </tr>
           </tbody>
         </table>
       </div>
       <div class="ui bottom attached tab segment" data-tab="second">
         <table class="ui small very compact unstackable selectable olive table">
          <thead>

          </thead>
           <tbody>
             <tr>
               <td>
                 <a class="ui red tag label">Actividade 1</a>
               </td>
               <td class="right aligned">
                    <div class="ui dropdown item">
                      <i class="ellipsis vertical icon"></i>
                      <div class="menu">
                        <a class="item">Terminada</a>
                        <a class="item">Pausada</a>
                      </div>
                  </div>
               </td>
             </tr>
             <tr>
               <td>
                 <a class="ui red tag label">Actividade 2</a>
               </td>
               <td class="right aligned">
                    <div class="ui dropdown item">
                      <i class="ellipsis vertical icon"></i>
                      <div class="menu">
                        <a class="item">Terminada</a>
                        <a class="item">Pausada</a>
                      </div>
                  </div>
               </td>
             </tr>
             <tr>
               <td>
                 <a class="ui red tag label">Actividade 3</a>
               </td>
               <td class="right aligned">
                    <div class="ui dropdown item">
                      <i class="ellipsis vertical icon"></i>
                      <div class="menu">
                        <a class="item">Terminada</a>
                        <a class="item">Pausada</a>
                      </div>
                  </div>
               </td>
             </tr>
           </tbody>
         </table>
       </div>
       <div class="ui bottom attached tab segment" data-tab="third">
         <table class="ui small very compact unstackable selectable olive table">
          <thead>

          </thead>
           <tbody>
             <tr>
               <td>
                 <a class="ui yellow tag label">Actividade 1</a>
               </td>
               <td class="right aligned">
                    <div class="ui dropdown item">
                      <i class="ellipsis vertical icon"></i>
                      <div class="menu">
                        <a class="item">Terminada</a>
                        <a class="item">Pausada</a>
                      </div>
                  </div>
               </td>
             </tr>
             <tr>
               <td>
                 <a class="ui yellow tag label">Actividade 2</a>
               </td>
               <td class="right aligned">
                    <div class="ui dropdown item">
                      <i class="ellipsis vertical icon"></i>
                      <div class="menu">
                        <a class="item">Terminada</a>
                        <a class="item">Pausada</a>
                      </div>
                  </div>
               </td>
             </tr>
             <tr>
               <td>
                 <a class="ui yellow tag label">Actividade 3</a>
               </td>
               <td class="right aligned">
                    <div class="ui dropdown item">
                      <i class="ellipsis vertical icon"></i>
                      <div class="menu">
                        <a class="item">Terminada</a>
                        <a class="item">Pausada</a>
                      </div>
                  </div>
               </td>
             </tr>
           </tbody>
         </table>
       </div>
     </div>
     <div class="four wide column">
       <button class="ui teal button" onclick="model()"><i class="plus icon"></i>Nova Actividade</button>
     </div>
   </div>
</div>
@endsection
<script type="text/javascript">
function dimmer() {
  $('.special.cards .image').dimmer({
  on: 'hover'
  });
}
function tab() {
  $('.tabular.menu .item')
  .tab();
}
function model() {
  $('.ui.small.modal')
.modal('show');
}
</script>
<div class="ui small modal">
  <i class="close icon"></i>
  <div class="header">Nova Actividade</div>
  <div class="content">
    <div class="ui form">
      <div class="field">
        <label>Desgnação</label>
              <input placeholder="designacao" type="text">
      </div>
      <div class="three wide fields">
        <div class="field">
          <label>Peso(%)</label>
          <select class="ui fluid search dropdown" name="peso">
            <option value="5">5</option>
            <option value="10">10</option>
            <option value="15">15</option>
            <option value="20">20</option>
            <option value="25">25</option>
            <option value="3">30</option>
          </select>
        </div>
        <div class="field">
          <label>Estado</label>
          <select class="ui fluid search dropdown" name="estado">
            <option value="5">Em progresso</option>
            <option value="10">Por começar</option>
          </select>
        </div>
        <div class="field">
          <label>Prioridade</label>
          <select class="ui fluid search dropdown" name="peso">
            <option value="5">Normal</option>
            <option value="15">Média</option>
            <option value="20">Alta</option>
          </select>
        </div>
      </div>
      <div class="field">
        <div class="field">
            <label>Descrição da actividade</label>
            <textarea></textarea>
        </div>
        <div class="field">
          <button type="submit" class="fluid ui green button" onsubmit="">Gravar</button>
        </div>
      </div>
    </div>
  </div>
</div>
