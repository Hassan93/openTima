@extends('layouts.admin')
@section('title', '|Area do Administrador')

@section('secundary_nav')
  @include('partials._admin_cadastros_nav')
@endsection

@section('content_Area')
<div class="ui grid">
  <div class="four column row">
    <div class="right floated column">
        <button class="ui green button" onclick="show_model()"><i class="plus icon"></i>Novo departamento</button>
    </div>
  </div>
</div>
<table class="ui compact celled definition table">
<thead>
<tr>
  <th></th>
  <th>SIGLA</th>
  <th>Chefe</th>
  <th>Accao</th>
</tr>
</thead>
<tbody>
@foreach($departamentos as $departamento)
<tr>
  <td class="collapsing">
    <div class="ui fitted slider checkbox">
      <input type="checkbox"> <label></label>
    </div>
  </td>
  <td>{{$departamento->sigla}}</td>
  <td>{{$departamento->designacao}}</td>
  <td>
    <a href="#" class="ui primary basic button"><i class="icon add user"></i></a>
    <a href="#" class="ui positive basic button"><i class="icon write"></i></a>
  </td>
</tr>
@endforeach
</tbody>
</table>
@endsection

@section('scripts')
    <script type="text/javascript">
      function show_model() {
        $('.ui.modal')
      .modal('show');
      }
</script>
@stop
<script type="text/javascript">
function validacao() {
  $('.ui.form')
    .form({
      fields: {
        designacao: {
          identifier: 'designacao',
          rules: [
            {
              type   : 'empty',
              prompt : 'Introduza a designacao do departamento'
            }
          ]
        },
        sigla: {
          identifier: 'sigla',
          rules: [
            {
              type   : 'maxCount[8]',
              prompt : 'Sigla nao deve ter mais de 8 caracteres'
            }
          ]
        },
      }
    })
  ;

  }

</script>
<div class="ui modal">
  <i class="close icon"></i>
  <div class="header">
    Registo de Departamento
  </div>
  <div class="content">
    <div class="ui grid">
      <div class="four wide column">
      </div>
      <div class="eight wide column">
        <form class="ui form" action="{{route('departamentos.store')}}" method="post">
        {{ csrf_field() }}

                <div class="twelve wide field">
                  <label>Designacao</label>
                  <input placeholder="Introduza a designacao do departamento" type="text" name="designacao" id="designacao">
                </div>
              <div class="twelve wide field">
                <label>SIGLA</label>
                <input placeholder="Introduza a SIGLA" type="text" name="sigla" id="sigla">
              </div>
              <div class="twelve  wide field">
                <label>Chefe</label>
                <select class="ui search dropdown" name="chefe_id" id="chefe_id">
                  <option value="0">Alocar um chefe ao departamento</option>
                  <option value="1">Assane</option>
                </select>
              </div>
              <div class="twelve  wide field"style="padding-top:10px">

                    <button type="submit" class="fluid ui green button" onsubmit="validacao()">Gravar</button>

              </div>
        </form>
      </div>
    </div>
  </div>
</div>
