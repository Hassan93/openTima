@extends('layouts.guests.guest')
@section('title', '|Login')
@section('content')
<div class="ui middle aligned center aligned grid" style="padding-top: 0px">
  <div class="column">
    <h2 class="ui image header">
      <div class="content">
        <div class="ui larg image">
          <img src="/guest/img/header.jpg" alt="Universidade Eduardo Mondlane - Faculdade de Engenharia">
      </div>
    </h2>
    <form action="{{url('/login')}}" method="POST" class="ui large form" style="padding-top: 30px">
      {{ csrf_field() }}
      <div class="ui stacked secondary  segment">
        <div class="field">
          <div class="ui left icon input">
            <i class="user icon"></i>
            <input type="text" name="email" placeholder="E-mail address">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="lock icon"></i>
            <input type="password" name="password" placeholder="Password">
          </div>
        </div>
          <button type="submit" class="ui fluid large teal submit button">Login</button>
      </div>

      <div class="ui error message"></div>

    </form>
    <div class="ui message">
      Esqueceu-se da senha? <a href="http://s.codepen.io/voltron2112/debug/PqrEPM?">Recupere aqui</a>
    </div>
    <div class="ui message">
      Procura por tema? <a href="{{url('/feng/propostas_de_temas')}}">Encontre aqui</a>
    </div>
    <div class="ui message">
      Procura por monografias? <a href="{{url('/feng/monografias')}}">Encontre o nosso respositório</a>
    </div>
  </div>
</div>
@stop
