@extends('layouts.departamento')
@section('side_nav')
  @include('partials.admin._verticalnav')
@stop
@section('content')
<div class="ui grid">
  <div class="four column row">
      <div class="ui breadcrumb left floated">
        <a href="{{url('/feuem/'.$curso->departamento->sigla)}}" class="section">Home</a>
        <i class="right arrow icon divider"></i>
        <a href="{{url('/feuem/'.$curso->departamento->sigla.'/'.$curso->id)}}"class="active section">{{$curso->designacao}}</a>
      </div>
</div>
<div class="six column row">
    <div class="ui top attached tabular menu" onclick="tab()">
      <a class="item active" data-tab="tl">Visão global</a>
      <a class="item" data-tab="ep">EP</a>
      <a class="item" data-tab="temas">Temas</a>
      <a class="item" data-tab="areas">Áreas Científicas</a>
    </div>

    <div class="ui bottom attached tab segment active" data-tab="tl">
      <div class="ui grid">
        <div class="eigth wide column">
          <div class="ui inverted segment">
            <div class="ui inverted form">
              <div class="three fields">
                <div class="field">
                  <input placeholder="Pesquisar por nome" type="text">
                </div>
                <div class="field">
                  <label></label>
                  <div class="ui selection dropdown">
                    <div class="default text">Pesquisar por disciplina</div>
                    <i class="dropdown icon"></i>
                    <input name="gender" type="hidden">
                    <div class="menu">
                      <div class="item" data-value="1">Trabalho de Licenciatura</div>
                      <div class="item" data-value="2">Estágio Profissional</div>
                    </div>
                  </div>
                </div>
                <div class="field">
                  <button type="button" class="ui submit button" name="search"><i class="search icon"></i></button>
                </div>
                </div>
            </div>
          </div>
        </div>
      </div>
      <div class="u grid"><!--Inicio da lista-->
        <div class="ui middle aligned divided list">
          <div class="item">
            <div class="right floated content">
              <div class="ui grid">
                <div class="two wide column">
                  <div class="ui active progress">
                    <div class="bar">
                      <div class="progress">5%</div>
                    </div>
                  </div>
                </div>
                <div class="one wide column">
                </div>
                <div class="two wide column">
                  <div class="ui button"><i class="unhide icon"></i></div>
                </div>
              </div>
            </div>
              <img class="ui avatar image" src="{{ App\User::get_gravatar(Sentinel::getUser()->email) }}">
              <div class="content">
                <p><b>Muaruca C. Assane</b></p>
              </div>
          </div>
          <div class="item">
            <div class="right floated content">
              <div class="ui grid">
                <div class="two wide column">
                  <div class="ui active progress">
                    <div class="bar">
                      <div class="progress">5%</div>
                    </div>
                  </div>
                </div>
                <div class="one wide column">
                </div>
                <div class="two wide column">
                  <div class="ui button"><i class="unhide icon"></i></div>
                </div>
              </div>
            </div>
              <img class="ui avatar image" src="{{ App\User::get_gravatar(Sentinel::getUser()->email) }}">
              <div class="content">
                <p><b>Maquite Alberto</b></p>
              </div>
          </div>
          <div class="item">
            <div class="right floated content">
              <div class="ui grid">
                <div class="two wide column">
                  <div class="ui active progress">
                    <div class="bar">
                      <div class="progress">5%</div>
                    </div>
                  </div>
                </div>
                <div class="one wide column">
                </div>
                <div class="two wide column">
                  <div class="ui button"><i class="unhide icon"></i></div>
                </div>
              </div>
            </div>
              <img class="ui avatar image" src="{{ App\User::get_gravatar(Sentinel::getUser()->email) }}">
              <div class="content">
                <p><b>Julia Beula</b></p>
              </div>
          </div>
        </div>
      </div>
    </div>
    <div class="ui bottom attached tab segment" data-tab="ep">
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
    <div class="ui bottom attached tab segment" data-tab="temas">
      Third
    </div>
    <div class="ui bottom attached tab segment" data-tab="areas">
      usar carbon
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
