@extends('principal.administrator')
@section('title', '| Registo de Utilizadores')

@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
      <form class="" action="/usuarios" method="post" data-parsley-validate>
        {{csrf_field()}}
          <div class="form-group">
             <label for="role_id">Escolha o grupo:</label>
             <select class="form-control" name="role_id">
                <option value="0">Escolha o grupo de utilizadores</option>
                <option value="2">Docentes</option>
                <option value="3">Estudantes</option>
             </select>
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
