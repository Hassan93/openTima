@extends('layouts.departamento')
@section('side_nav')
  @include('partials.departamento._nav')
@stop
@section('content')
<div class="ui cards">
 <div class="card">
     <div class="content">
       <div class="header"><a href="#"><i class="folder icon"></i>Temas</a></div>
       <div class="description">
         Base de dados de temas
       </div>
     </div>
 </div>
 <div class="card">
   <div class="content">
     <div class="header"><a href="#"><i class="file icon"></i>Actas</a></div>
     <div class="description">
       Actas dos encontros de supervisao
     </div>
   </div>
 </div>
 <div class="card">
   <div class="content">
     <div class="header"><a href="#"><i class="history icon"></i>Progresso</a></div>
     <div class="description">
       progresso dos trabalhos
     </div>
   </div>
 </div>
 <div class="card">
     <div class="content">
       <div class="header"><a href="#"><i class="database icon"></i>Trabalhos concluidos</a></div>
       <div class="description">
         Repositorio de monografias
       </div>
     </div>
 </div>
 <div class="card">
   <div class="content">
     <div class="header"><a href="#"><i class="student icon"></i>Estudantes</a></div>
     <div class="description">
       Base de dados de estudantes
     </div>
   </div>
 </div>
 <div class="card">
   <div class="content">
     <div class="header"><a href="#"><i class="unhide icon"></i>Docentes</a></div>
     <div class="description">
       Base de dados de docentes
     </div>
   </div>
 </div>
 <div class="card">
   <div class="content">
     <div class="header"><a href="#"><i class="announcement icon"></i>Marcacao de defesas</a></div>
     <div class="description">
       Publicacao de defesas.
     </div>
   </div>
 </div>

 <div class="card">
   <div class="content">
     <div class="header"><a href="#"><i class="users icon"></i>Alocacao de supervisores</a></div>
     <div class="description">
       Designacao de docente para orientar estudante
     </div>
   </div>
 </div>
 <div class="card">
   <div class="content">
     <div class="header"><a href="#"><i class="users icon"></i>Areas Cientificas</a></div>
     <div class="description">
       Designacao de docente para orientar estudante
     </div>
   </div>
 </div>
 </div>

@endsection
