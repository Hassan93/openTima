<div class="ui secondary vertical pointing menu">
  <a href="{{route('departamentos.index')}}" class="{{Request::is('departamentos' || 'cadastros') ? "active item": ""}}">
    Departamentos
  </a>
  <a href="{{route('cursos.index')}}" class="{{Request::is('cursos' || 'cursos.edit') ? "active item": ""}}">
    Cursos
  </a>
  <a href="{{route('docentes.index')}}" class="{{Request::is('docentes') ? "active item": ""}}">
    Docentes
  </a>
  <a class="item">
    Estudantes
  </a>
  <a href="#" class="item">
    Disciplinas
  </a>
</div>
