@extends('layouts.departamento')
@section('side_nav')
  @include('partials.admin._verticalnav')
@stop
@section('stylesheets')
    <link rel='stylesheet' href='fullcalendar/fullcalendar.css' />
@stop
@section('scripts')
    <script src='lib/jquery.min.js'></script>
    <script src='lib/moment.min.js'></script>
    <script src='fullcalendar/fullcalendar.js'></script>
@stop
@section('content')
  <div class="ui grid">
    <div class="twelve wide column"></div>
    <div class="four wide column">
      <button class="ui teal button" onclick="model()"><i class="plus icon"></i>Criar calendario de supervisão</button>
    </div>
  </div>
  <div style="margin-top:20px;" id='calendar'></div>
@endsection
<script type="text/javascript">
$(document).ready(function() {

    // page is now ready, initialize the calendar...
    var date = new Date();
    var d = date.getDate();
    var m = date.getMonth();
    var y = date.getFullYear();


    $('#calendar').fullCalendar({
        // put your options and callbacks here
    })

});
</script>
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
  <div class="header">Criação do calendário de supervisão</div>
  <div class="content">
    <form class="ui form" action="#" method="post">
        {{ csrf_field() }}
      <div class="field">
        <label>Estudante</label>
        <select class="ui fluid search dropdown" name="area">
          <option value="5">Assane</option>
        </select>
      </div>
      <div class="two fields">
        <div class="field">
          <label>Data do encontro</label>
                <input placeholder="data do encontro" type="date" name="data_do_encotro">
        </div>
        <div class="field">
          <label>Hora</label>
                <input placeholder="HH:MM" type="text" name="hora_do_encotro">
        </div>
      </div>
      <div class="inline fields">
        <label>Periodicidade dos encontros</label>
        <div class="field">
          <div class="ui radio checkbox">
            <input name="frequency" checked="checked" type="radio">
            <label>Semanalmente</label>
          </div>
        </div>
        <div class="field">
          <div class="ui radio checkbox">
            <input name="frequency" type="radio">
            <label>Bissemanalmente</label>
          </div>
        </div>
      </div>
        <div class="field">
          <button type="submit" class="fluid ui green button" onsubmit="">Gravar</button>
        </div>
      </div>
    </form>
</div>
