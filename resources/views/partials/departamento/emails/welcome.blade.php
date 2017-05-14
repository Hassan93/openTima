@extends('emails.layouts.master')

@section('title')
  Desejamos-lhe boas vindas ao Sistema de Gestao de TCC!
@stop

@section('content')
  Foi convidado para usar o sistema de gestao de tcc da FEUEM.
  Dados de acesso:
    e-mail: {{Auth::user()->email}}
    senha : {{Auth::user()->password}}
  <br><br>
  <a style="text-decoration: none; background-color: #74cd9e;color: #fff;border-radius: 4px;display: inline-block;padding: 6px 12px;margin-bottom: 0;font-size: 14px;font-weight: 400;line-height:1.42857143;text-align: center;white-space: nowrap;" target="_blank" href="http://opentima.herokuapp.com/login">Go To Hud</a>
@stop
