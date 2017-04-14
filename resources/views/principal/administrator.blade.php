@extends('layouts.layout')
@section('title', '|Página principal')

@section('stylesheets')
<link href="{{ asset('css/style.css') }} " rel="stylesheet" type="text/css"/>
<link href="{{ asset('css/estilo.css') }} " rel="stylesheet" type="text/css"/>
@endsection
@section('content')

@endsection
@section('left_sidebar')
  @include('partials._verticalmenu')
@endsection
@section('right_sidebar')

@endsection
