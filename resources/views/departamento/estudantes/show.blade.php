@extends('layouts.departamento')
@section('side_nav')
  @include('partials.departamento._nav')
@stop
@section('content')
<div class="ui grid">
  <div class="four column row">
      <div class="ui breadcrumb left floated">
        <a href="{{url('/feuem/'.$departamento->sigla)}}" class="section">Home</a>
        <i class="right arrow icon divider"></i>
        <a href="{{url('/feuem/'.$departamento->sigla.'/estudantes/')}}"class="section">Estudantes</a>
        <i class="right arrow icon divider"></i>
        <div class="active section">{{$estudante->primeiro_nome.' '.$estudante->ultimo_nome}}</div>
      </div>
</div>
<div class="six column row">
    <div class="ui top attached tabular menu" onclick="tab()">
      <a class="item" data-tab="first">Calendario de encontros</a>
      <a class="item" data-tab="second">Actas e historico do progresso</a>
      <a class="item active" data-tab="third">Versoes do trabalho</a>
    </div>

    <div class="ui bottom attached tab segment" data-tab="first">
      usar carbon
    </div>
    <div class="ui bottom attached tab segment" data-tab="second">
      <div class="ui grid" style="padding-top: 60px">
        <div class="eight wide column">
          <table class="ui celled table">
            <thead>
              <tr><th>Ordem</th>
              <th>Actividades</th>
              <th>Peso</th>
              <th>Estado da acta</th>
              <th>Notificar</th>
            </tr>
          </thead>
            <tbody>
            </tbody>
          </table>
        </div>
        <div class="one wide column">
          <i class="ui vertical divider"></i>
        </div>
        <div class="six wide column">
          <div class="ui segment">
            <div class="ui active progress">
              <div class="bar">
                <div class="progress"></div>
              </div>
              <div class="label">Progresso(%)</div>
            </div>
          </div>

        </div>
      </div>
    </div>
    <div class="ui bottom attached tab segment active" data-tab="third">
      Third
    </div>
</div>
</div>
@endsection
<script type="text/javascript">
function tab() {
  $('.tabular.menu .item')
  .tab();
}
</script>
