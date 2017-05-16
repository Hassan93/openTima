<div class="ui secondary vertical pointing menu">
  <a href="{{route('departamentos.index')}}" class="item {{Request::is('departamentos') ? "active item": ""}}{{Request::is('cadastros') ? "active item": ""}}">
          Departamentos
  </a>
  <a href="{{route('cursos.index')}}" class="item {{Request::is('cursos') ? "active item": ""}}">

        Cursos

  </a>
  <a href="{{route('docentes.index')}}" class="item {{Request::is('docentes') ? "active item": ""}}">
    Docentes
  </a>

  <a href="{{route('estudantes.index')}}" class="item {{Request::is('estudantes') ? "active item": ""}}">
    Estudantes
  </a>
  <a href="#" class="item">
    Disciplinas
  </a>
</div>
