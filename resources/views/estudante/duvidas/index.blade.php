

@extends('layouts.departamento')
@section('side_nav')
@include('partials.estudante._verticalnav')
@stop
@section('stylesheets')
<link rel="stylesheet" href="{{asset('/css/jquery.dataTables.css')}}">
@stop
@section('scripts')
<script type="text/javascript" src="{{asset('/js/jquery.dataTables.js')}}"></script>
<script type="text/javascript">
$(document).ready(function() {
$('#example').DataTable();
});
function tab(){
  $('.secondary.menu .item')
    .tab();
}

function model() {
  $('.ui.small.modal')
.modal('show');
}
</script>
@stop
@section('content')
 <div class="ui main container">
   <div class="ui stackable grid">
     <div class="eight wide column">
       <div class="ui breadcrumb left floated">
         <a href="{{url('/feng/estudantes/'.$supervisao->id)}}" class="section">Home</a>
         <i class="right arrow icon divider"></i>
         <a href="#"class="active section">Dúvidas</a>
       </div>
     </div>
     <div class="twelve wide column">
       <div class="ui pointing secondary menu" onclick="tab()">
          <a class="item active" data-tab="first">Todas</a>
          <a class="item" data-tab="second">Frequentes</a>
          <a class="item" data-tab="third">Minhas</a>
        </div>
        <div class="ui tab active segment" data-tab="first">
          <table class="ui selectable very basic table" id="example">
             <thead>
               <th>Info. da duv.</th>
               <th>duvida</th>
               <th class="right aligned">detalhes</th>
             </thead>
             <tbody>
                 <tr>
                   <td>
                     <h4 class="ui image header">
                       <div class="">
                          <a class="ui green circular label">2 Respostas</a><br/>
                          <a class="ui pointing teal basic label">22 Views</a>
                       </div>
                    </h4>
                  </td>
                  <td>
                    <div class="content">
                      Não consigo iniciar um projecto de laravel
                      <div class="sub header">
                        <a class="ui teal label">Técnica</a>
                      </div>
                    </div>
                  </td>
                  <td class="right aligned">
                    <a class="ui teal basic button" href="{{url('/feng/estudantes/'.$supervisao->id.'/duvidas/teste')}}"><i class="unhide icon"></i></a><br/>
                    <a class="ui basic image label">
                      <img src="/images/avatar/small/veronika.jpg">
                      Assane
                      <div class="detail">perguntou <br/> 12.06.2017 <br/>pelas 10h</div>
                    </a>
                 </td>
               </tr>
               <tr>
                 <td>
                   <h4 class="ui image header">
                     <div class="">
                        <a class="ui green circular label">2 Respostas</a><br/>
                        <a class="ui pointing teal basic label">22 Views</a>
                     </div>
                  </h4>
                </td>
                <td>
                  <div class="content">
                    Não consigo iniciar um projecto de laravel
                    <div class="sub header">
                      <a class="ui teal label">Técnica</a>
                    </div>
                  </div>
                </td>
                <td class="right aligned">
                  <a class="ui teal basic button" href="{{url('/feng/estudantes/'.$supervisao->id.'/duvidas/teste')}}"><i class="unhide icon"></i></a><br/>
                  <a class="ui basic image label">
                    <img src="/images/avatar/small/veronika.jpg">
                    Assane
                    <div class="detail">perguntou <br/> 12.06.2017 <br/>pelas 10h</div>
                  </a>
               </td>
             </tr>
             <tr>
               <td>
                 <h4 class="ui image header">
                   <div class="">
                      <a class="ui green circular label">2 Respostas</a><br/>
                      <a class="ui pointing teal basic label">22 Views</a>
                   </div>
                </h4>
              </td>
              <td>
                <div class="content">
                  Não consigo iniciar um projecto de laravel
                  <div class="sub header">
                    <a class="ui teal label">Técnica</a>
                  </div>
                </div>
              </td>
              <td class="right aligned">
                <a class="ui teal basic button" href="{{url('/feng/estudantes/'.$supervisao->id.'/duvidas/teste')}}"><i class="unhide icon"></i></a><br/>
                <a class="ui basic image label">
                  <img src="/images/avatar/small/veronika.jpg">
                  Assane
                  <div class="detail">perguntou <br/> 12.06.2017 <br/>pelas 10h</div>
                </a>
             </td>
           </tr>
           <tr>
             <td>
               <h4 class="ui image header">
                 <div class="">
                    <a class="ui green circular label">2 Respostas</a><br/>
                    <a class="ui pointing teal basic label">22 Views</a>
                 </div>
              </h4>
            </td>
            <td>
              <div class="content">
                Não consigo iniciar um projecto de laravel
                <div class="sub header">
                  <a class="ui teal label">Técnica</a>
                </div>
              </div>
            </td>
            <td class="right aligned">
              <a class="ui teal basic button" href="{{url('/feng/estudantes/'.$supervisao->id.'/duvidas/teste')}}"><i class="unhide icon"></i></a><br/>
              <a class="ui basic image label">
                <img src="/images/avatar/small/veronika.jpg">
                Assane
                <div class="detail">perguntou <br/> 12.06.2017 <br/>pelas 10h</div>
              </a>
           </td>
         </tr>
           </tbody>
         </table>
      </div>
      <div class="ui tab segment" data-tab="second">
        <table class="ui selectable very basic table" id="example">
           <thead>
             <th>Info. da duv.</th>
             <th>duvida</th>
             <th class="right aligned">detalhes</th>
           </thead>
           <tbody>
               <tr>
                 <td>
                   <h4 class="ui image header">
                     <div class="">
                        <a class="ui green circular label">2 Respostas</a><br/>
                        <a class="ui pointing teal basic label">22 Views</a>
                     </div>
                  </h4>
                </td>
                <td>
                  <div class="content">
                    Não consigo iniciar um projecto de laravel
                    <div class="sub header">
                      <a class="ui teal label">Técnica</a>
                    </div>
                  </div>
                </td>
                <td class="right aligned">
                  <a class="ui teal basic button" href="{{url('/feng/estudantes/'.$supervisao->id.'/duvidas/teste')}}"><i class="unhide icon"></i></a><br/>
                  <a class="ui basic image label">
                    <img src="/images/avatar/small/veronika.jpg">
                    Assane
                    <div class="detail">perguntou <br/> 12.06.2017 <br/>pelas 10h</div>
                  </a>
               </td>
             </tr>
             <tr>
               <td>
                 <h4 class="ui image header">
                   <div class="">
                      <a class="ui green circular label">2 Respostas</a><br/>
                      <a class="ui pointing teal basic label">22 Views</a>
                   </div>
                </h4>
              </td>
              <td>
                <div class="content">
                  Não consigo iniciar um projecto de laravel
                  <div class="sub header">
                    <a class="ui teal label">Técnica</a>
                  </div>
                </div>
              </td>
              <td class="right aligned">
                <a class="ui teal basic button" href="{{url('/feng/estudantes/'.$supervisao->id.'/duvidas/teste')}}"><i class="unhide icon"></i></a><br/>
                <a class="ui teal image label">
                  <img src="/images/avatar/small/veronika.jpg">
                  Assane
                  <div class="detail">perguntou <br/> 12.06.2017 <br/>pelas 10h</div>
                </a>
             </td>
           </tr>
           <tr>
             <td>
               <h4 class="ui image header">
                 <div class="">
                    <a class="ui green circular label">2 Respostas</a><br/>
                    <a class="ui pointing teal basic label">22 Views</a>
                 </div>
              </h4>
            </td>
            <td>
              <div class="content">
                Não consigo iniciar um projecto de laravel
                <div class="sub header">
                  <a class="ui teal label">Técnica</a>
                </div>
              </div>
            </td>
            <td class="right aligned">
              <a class="ui teal basic button" href="{{url('/feng/estudantes/'.$supervisao->id.'/duvidas/teste')}}"><i class="unhide icon"></i></a><br/>
              <a class="ui basic image label">
                <img src="/images/avatar/small/veronika.jpg">
                Assane
                <div class="detail">perguntou <br/> 12.06.2017 <br/>pelas 10h</div>
              </a>
           </td>
         </tr>
         <tr>
           <td>
             <h4 class="ui image header">
               <div class="">
                  <a class="ui green circular label">2 Respostas</a><br/>
                  <a class="ui pointing teal basic label">22 Views</a>
               </div>
            </h4>
          </td>
          <td>
            <div class="content">
              Não consigo iniciar um projecto de laravel
              <div class="sub header">
                <a class="ui teal label">Técnica</a>
              </div>
            </div>
          </td>
          <td class="right aligned">
            <a class="ui teal basic button" href="{{url('/feng/estudantes/'.$supervisao->id.'/duvidas/teste')}}"><i class="unhide icon"></i></a><br/>
            <a class="ui basic image label">
              <img src="/images/avatar/small/veronika.jpg">
              Assane
              <div class="detail">perguntou <br/> 12.06.2017 <br/>pelas 10h</div>
            </a>
         </td>
       </tr>
         </tbody>
       </table>
      </div>
      <div class="ui tab segment" data-tab="third">
        <table class="ui selectable very basic table" id="example">
           <thead>
             <th>Info. da duv.</th>
             <th>duvida</th>
             <th class="right aligned">detalhes</th>
           </thead>
           <tbody>
               <tr>
                 <td>
                   <h4 class="ui image header">
                     <div class="">
                        <a class="ui green circular label">2 Respostas</a><br/>
                        <a class="ui pointing teal basic label">22 Views</a>
                     </div>
                  </h4>
                </td>
                <td>
                  <div class="content">
                    Não consigo iniciar um projecto de laravel
                    <div class="sub header">
                      <a class="ui teal label">Técnica</a>
                    </div>
                  </div>
                </td>
                <td class="right aligned">
                  <a class="ui teal basic button" href="{{url('/feng/estudantes/'.$supervisao->id.'/duvidas/teste')}}"><i class="unhide icon"></i></a><br/>
               </td>
             </tr>
             <tr>
               <td>
                 <h4 class="ui image header">
                   <div class="">
                      <a class="ui green circular label">2 Respostas</a><br/>
                      <a class="ui pointing teal basic label">22 Views</a>
                   </div>
                </h4>
              </td>
              <td>
                <div class="content">
                  Não consigo iniciar um projecto de laravel
                  <div class="sub header">
                    <a class="ui teal label">Técnica</a>
                  </div>
                </div>
              </td>
              <td class="right aligned">
                <button class="ui teal basic button" onclick="model2()"><i class="plus icon"></i>Responta</button>
             </td>
           </tr>
           </td>
         </tr>

         </tbody>
       </table>
      </div>
   </div>
   <div class="four wide column">
     <button class="ui teal button" onclick="model()"><i class="plus icon"></i>Dúvida</button>
   </div>
</div>
@endsection
<div class="ui small modal">
  <i class="close icon"></i>
  <div class="header">Dúvida nova</div>
  <div class="content">
    <form class="ui form" action="{{url('/feng/estudantes/'.$supervisao->id.'/actas/novaActa')}}" method="post">
        {{ csrf_field() }}
        <div class="field">
            <label>Género da dúvida</label>
            <select multiple="" class="ui dropdown" name="categoria">
              <option value="1">Métodos de pesquisa</option>
              <option value="2">Revisão de literatura</option>
              <option value="3">Técnica</option>
            </select>
        </div>
        <div class="field">
              <label for="duvida" class="ui icon button">
              <input type="text" id="duvida" name="duvida">
        </div>
        <div class="inline fields">
          <label>Tornar pública a sua dúvida?</label>
          <div class="field">
            <div class="ui radio checkbox">
              <input name="frequencia" checked="checked" type="radio" value="sim">
              <label>Sim</label>
            </div>
          </div>
          <div class="field">
            <div class="ui radio checkbox">
              <input name="frequencia" type="radio" value="nao">
              <label>Não, só quero partilhar com meu supervisor.</label>
            </div>
          </div>
        </div>
        <div class="field">
          <button type="submit" class="fluid ui green button" onsubmit="">Gravar</button>
        </div>
    </form>
  </div>
</div>
