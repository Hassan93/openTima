<div class="ui secondary vertical pointing menu">
  <a href="{{route('departamentos.index')}}" class="{{Request::is('departamentos' || 'cadastros') ? "active item": ""}}">
    Departamentos
  </a>
  <a class="item">
    Cursos
  </a>
  <a class="item">
    Disciplinas
  </a>
  <a class="item">
    Docentes
  </a>
  <a class="item">
    Estudantes
  </a>
</div>
