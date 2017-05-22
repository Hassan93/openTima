@extends('layouts.departamento')
@section('side_nav')
  @include('partials.admin._verticalnav')
@stop
@section('content')
<div class="ui cards">
  @foreach($departamento->cursos as $curso)
 <div class="ui link card">
     <div class="content">
       <div class="header"><a href="{{url('/feuem/'.$departamento->sigla.'/'.$curso->id)}}"><i class="book icon"></i>{{$curso->designacao}}</a></div>
       <div class="description">
         <table class="ui small very compact unstackable selectable olive table">
           <thead>
             <tr>
               <th colspan="2">
                 Culminacao 1 Semestre 2017
               </th>
             </tr>
           </thead>

           <tbody>
             <tr>
               <td><i class="users icon"></i>TL</td>
               <td class="right aligned">5 estudantes</td>
             </tr>
             <tr>
               <td><i class="users icon"></i>EP</td>
               <td class="right aligned">15 estudantes</td>
             </tr>
             <tr>
                 <td><i class="file icon"></i>Actas</td>
                 <td class="right aligned">5</td>
             </tr>
           </tbody>
         </table>

       </div>
     </div>
 </div>
 @endforeach
 <div class="ui link card">
     <div class="content">
       <div class="header"><a href="#"><i class="database icon"></i>Trabalhos concluidos</a></div>
       <div class="description">
         <table class="ui small very compact unstackable selectable olive table">
           <thead>
             <tr>
               <th colspan="2">
                 Culminacao 1 Semestre 2017
               </th>
             </tr>
           </thead>

           <tbody>
             <tr>
               <td><i class="student icon"></i>Electronica</td>
               <td class="right aligned">5</td>
             </tr>
             <tr>
               <td><i class="student icon"></i>Informática</td>
               <td class="right aligned">15</td>
             </tr>
             <tr>
                 <td><i class="student icon"></i>Eléctrica</td>
                 <td class="right aligned">5</td>
             </tr>
           </tbody>
         </table>
       </div>
     </div>
 </div>
 <div class="ui link card">
   <div class="content">
     <div class="header"><a href="#"><i class="announcement icon"></i>Marcacao de defesas</a></div>
     <table class="ui small very compact unstackable selectable olive table">
       <thead>
         <tr>
           <th colspan="2">
             Culminacao 1 Semestre 2017
           </th>
         </tr>
       </thead>

       <tbody>
         <tr>
           <td><i class="users icon"></i>TL</td>
           <td class="right aligned">
             <i class="Arrow Right icon"></i>
           </td>
         </tr>
         <tr>
           <td><i class="users icon"></i>EP</td>
           <td class="right aligned"><i class="Arrow Right icon"></i></td>
         </tr>
       </tbody>
     </table>
   </div>
 </div>
 <div class="ui link card">
   <div class="content">
     <div class="header"><a href="#"><i class="database icon"></i>Repositório de monografias</a></div>
     <div class="description">
       <table class="ui small very compact unstackable selectable olive table">
         <thead>
           <tr>
             <th colspan="2">
               Monografias publicadas em 2017
             </th>
           </tr>
         </thead>

         <tbody>
           <tr>
             <td><i class="student icon"></i>Electronica</td>
             <td class="right aligned">5</td>
           </tr>
           <tr>
             <td><i class="student icon"></i>Informática</td>
             <td class="right aligned">15</td>
           </tr>
           <tr>
               <td><i class="student icon"></i>Eléctrica</td>
               <td class="right aligned">5</td>
           </tr>
         </tbody>
       </table>
     </div>
   </div>
 </div>
</div>

 <div class="ui main container">
   <!--<h1 class="ui header">Hjem</h1>-->
   <div class="ui stackable grid">
     <div class="seven wide column">
       <div id="regInnkommende" class="ui stacked segment">
         <a class="ui olive ribbon label">Alocação de temas</a>

         <div class="ui form">

           <div class="two fields">
             <div class="field">
               <label>Tema</label>

               <div class="ui fluid search selection dropdown">
                 <input type="hidden" name="country">
                 <i class="dropdown icon"></i>
                 <div class="default text">Tema</div>
                 <div class="menu">
                   <div class="item" data-value="af">
                   </i>Reclamações</div>
                   <div class="item" data-value="ax">
                   </i>Integação</div>
                 </div>
               </div>
             </div>
             <div class="field">

               <label>Supervisor</label>

               <div class="ui fluid search selection dropdown">
                 <input type="hidden" name="country">
                 <i class="dropdown icon"></i>
                 <div class="default text">supervisor</div>
                 <div class="menu">
                   <div class="item" data-value="af">
                   </i>Vali Issufo
                    </div>
                   <div class="item" data-value="ax">
                   </i>Rúben Manhiça</div>
                 </div>
               </div>
             </div>
           </div>

           <div class="field">

             <div class="ui checkbox datepicker">
               <input type="checkbox" tabindex="0" class="hidden" checked>
               <label>Incluir co-supervisores?</label>
             </div>
           </div>
       <div class="ui secondary segment datepicker dont-show small form">
             <div class="field">
               <label>Data Início</label>

               <div class="fields">
                 <div class="three wide field">
                   <select class="ui fluid dropdown" name="inn_dato[dato]">
                     <option value="01">1</option>
                     <option value="02">2</option>
                     <option value="03">3</option>
                     <option value="04">4</option>
                     <option value="05">5</option>
                   </select>
                 </div>
                 <div class="six wide field">

                   <select class="ui fluid search dropdown" name="inn_dato[maaned]">
                     <option value="">Mes</option>
                     <option value="1">Januar</option>
                     <option value="2">Februar</option>
                   </select>
                 </div>
                 <div class="four wide field">
                   <div class="ui input">
                     <input type="text" value="2016" placeholder="Ano">
                   </div>
                 </div>
               </div>
             </div>

             <div class="field">
               <label>Data Fim</label>
               <div class="fields">
                 <div class="three wide field">
                   <select class="ui fluid dropdown" name="inn_dato[dato]">
                     <option value="01">1</option>
                     <option value="02">2</option>
                     <option value="03">3</option>
                     <option value="04">4</option>
                     <option value="05">5</option>
                   </select>
                 </div>
                 <div class="six wide field">

                   <select class="ui fluid search dropdown" name="inn_dato[maaned]">
                     <option value="">Mes</option>
                     <option value="1">Januar</option>
                     <option value="2">Februar</option>
                   </select>
                 </div>
                 <div class="four wide field">
                   <div class="ui input">
                     <input type="text" value="2016" placeholder="Ano">
                   </div>
                 </div>
               </div>
             </div>
           </div>

           <div class="ui button" tabindex="0">Alocar</div>
         </div>

       </div>
       <div class="ui hidden divider"></div>
     </div>
     <div class="one wide column">

     </div>
     <div class="seven wide column">
       <div id="regUtgaende" class="ui stacked segment">
         <a class="ui ribbon orange label">Marcação de defesa</a>
         <div class="ui form">

           <div class="two fields">
             <div class="field">
               <label>Estudante</label>
               <div class="ui right labeled input">
                 <div class="ui fluid search selection dropdown">
                   <input type="hidden" name="country">
                   <i class="dropdown icon"></i>
                   <div class="default text">Assane</div>
                   <div class="menu">
                     <div class="item" data-value="af">
                     </i>Valter</div>
                     <div class="item" data-value="ax">
                     </i>Assane</div>
                   </div>
                 </div>
               </div>
             </div>
             <div class="field">

               <label>Tema</label>

               <div class="ui fluid search selection dropdown">
                 <input type="hidden" name="country">
                 <i class="dropdown icon"></i>
                 <div class="default text">tema</div>
                 <div class="menu">
                   <div class="item" data-value="af">
                   </i>Gestao de TCC</div>
                   <div class="item" data-value="ax">
                   </i>Ataques</div>
                 </div>
               </div>
             </div>
           </div>

           <div class="field">

             <div class="ui checkbox">
               <input type="checkbox" tabindex="0" class="hidden" checked>
               <label>Notificar intervenientes</label>
             </div>
           </div>
           <div class="ui secondary segment datepicker dont-show small form">
             <div class="field">
               <label>Data</label>

               <div class="fields">
                 <div class="three wide field">
                   <select class="ui fluid dropdown" name="ut_dato[dato]">
                     <option value="01">1</option>
                     <option value="02">2</option>
                     <option value="03">3</option>
                     <option value="04">4</option>
                     <option value="05">5</option>
                     <option value="06">6</option>
                   </select>
                 </div>
                 <div class="six wide field">

                   <select class="ui fluid search dropdown" name="ut_dato[maaned]">
                     <option value="">Mes</option>
                     <option value="1">Januar</option>
                     <option value="2">Februar</option>
                     <option value="3">Mars</option>
                   </select>
                 </div>
                 <div class="four wide field">
                   <div class="ui input">
                     <input type="text" value="2017" placeholder="Ano">
                   </div>
                 </div>
               </div>
             </div>

             <div class="fields">
               <div class="six wide field">
                 <label>Horas</label>

                 <div class="two fields">
                   <div class="field">


                     <div class="ui input">
                       <input type="text" value="12">
                     </div>
                   </div>
                   <div class="field">
                     <div class="ui input">
                       <input type="text" value="00">
                     </div>
                   </div>

                 </div>
               </div>
             </div>
           </div>
           <div class="ui button " tabindex="0">Marcar</div>
         </div>
       </div>
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
</script>
