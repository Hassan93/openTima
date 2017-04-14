@extends('principal.administrator')
@section('title', '| Registo de Utilizadores')
@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
      <form class="" action="/usuarios" method="post" data-parsley-validate>
        {{csrf_field()}}
          <div class="form-group">
             <label for="role_id">Escolha o grupo:</label>
             <select class="form-control" name="role_id" id="role_id" onchange="displayDiv()">
                <option value="0">Escolha o grupo de utilizadores</option>
                <option value="2">Docentes</option>
                <option value="3">Estudantes</option>
             </select>
          </div>
          <div class="form-group" id="areas_de_interesse" name="areas_de_interesse" hidden>
            <div class="selectBox" onclick="showCheckboxes()">
                <label for="areas">Áreas de Interesse:</label>
                <select class="form-control">
                  <option>Escolha as áreas de interesse dos docentes</option>
                </select>
                <div class="overSelect"></div>
            </div>
            <div id="checkboxes" class="input-group">
                <label for="one">
                  <input type="checkbox" id="one" />First checkbox</label>
                <label for="two">
                  <input type="checkbox" id="two" />Second checkbox</label>
                <label for="three">
                  <input type="checkbox" id="three" />Third checkbox</label>
              </div>
          </div>
          <div class="form-group">
            <label for="first_name">Nome:</label>
            <input type="text" name="first_name" value="" alt="Introduza os primeiros nomes" class="form-control">
          </div>
          <div class="form-group">
            <label for="last_name">Apelido:</label>
            <input type="text" name="last_name" value="" alt="Introduza o apelido" class="form-control">
          </div>
          <div class="form-group">
            <label for="email">E-mail:</label>
            <input type="email" name="email" value="" alt="Introduza o e-mail" class="form-control">
          </div>
          <div class="form-group">
            <label for="password">Senha:</label>
            <input type="password" name="password" value="" alt="Introduza uma senha provisoria" class="form-control">
          </div>
          <div class="form-group">
            <label for="password_confirmation">Confirmacao da Senha:</label>
            <input type="email" name="password_confirmation" value="" alt="Introduza a confirmacao da senha provisoria" class="form-control">
          </div>
          <div class="">
            {{Form::submit('Registar', array('class'=>'btn btn-primary btn-block btn-lg form-spacing-top'))}}
          </div>
      </form>
    </div>
</div>
@endsection
<script type="text/javascript">
    function displayDiv(){
      var role = document.getElementById("role_id");
          if (role.value == 2) {
            var elem = document.getElementById("areas_de_interesse");
            if (elem.style.display ==='none') {
                elem.style.display = 'block';
            }
          }else{
            var elem = document.getElementById("areas_de_interesse");
              elem.style.display ='none';
          }
    }
</script>
<script type="text/javascript">
      var expanded = false;

      function showCheckboxes() {
      var checkboxes = document.getElementById("checkboxes");
      if (!expanded) {
        checkboxes.style.display = "block";
        expanded = true;
      } else {
        checkboxes.style.display = "none";
        expanded = false;
      }
      }
</script>
