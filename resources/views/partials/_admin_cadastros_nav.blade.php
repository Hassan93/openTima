<div class="ui secondary vertical pointing menu">
  <div class="element">
    <a href="{{route('departamentos.index')}}" class="{{Request::is('departamentos') ? "active item": ""}}">
        Departamentos
    </a>
  </div>
  <div class="element">
    <a href="{{route('cursos.index')}}" class="{{Request::is('cursos') ? "active item": ""}}">
      Cursos
    </a>
  </div>
<div class="element">
  <a href="{{route('docentes.index')}}" class="{{Request::is('docentes') ? "active item": ""}}">
    Docentes
  </a>
</div>

  <a class="item">
    Estudantes
  </a>
  <a href="#" class="item">
    Disciplinas
  </a>
</div>
