@extends('layouts.guests.candidatos')
@section('stylesheets')
<link rel="stylesheet" href="{{asset('/css/jquery.dataTables.css')}}">
@stop
@section('scripts')
<script type="text/javascript" src="{{asset('/js/jquery.dataTables.js')}}"></script>
<script type="text/javascript">
  $(document).ready(function() {
  $('#example').DataTable();
  } );
</script>
@stop
@section('title', '|Repositório de monografias')
@section('content')
<div class="ui middle aligned center aligned grid" style="padding-top: 0px">
  <div class="two wide column">
  </div>
  <div class="twelve wide column">
    <h2 class="ui image header">
        <div class="content">
          <div class="ui larg image">
            <img src="/guest/img/header.jpg" alt="Universidade Eduardo Mondlane - Faculdade de Engenharia"/>
          </div>
        </div>
      </h2>
  </div>
  <div class="two wide column">
  </div>
  <div class="twelve wide column">
    <div class="ui horizontal divider">#</div>
  </div>
  <div class="twelve wide column">
      @include('partials._messages')
  </div>
  <div class="twelve wide column">
      <table class="ui selectable very basic table" id="example">
         <thead>
           <th>Dados da monografia</th>
           <th class="right aligned">Encontre aqui o pdf da monografia</th>
         </thead>
         <tbody>
             <tr>
               <td>
                 <h4 class="ui image header">
                   <img src="/images/avatar2/small/lena.png" class="ui mini rounded image">
                   <div class="content">
                     Tema da monografia
                     <div class="sub header">
                       Autor: Assane<br/>
                       Supervisor: Vali Issufo
                     </div>
                 </div>
                </h4>
              </td>
             <td class="right aligned">
              <a href="#"><i class="download icon"></i></a>
             </td>
           </tr>
       </tbody>
     </table>
</div>

</div>
<div style="margin-top:20px;" id='calendar'></div>
@stop
