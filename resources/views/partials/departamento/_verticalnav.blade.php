<div class="ui vertical menu">
<div class="item" >
<div style="text-align: center;olor: #fff;text-align: center;">
  <a href="#">
    <img class="ui tiny circular centered image" src="{{ App\User::get_gravatar(Sentinel::getUser()->email) }}">
    <p>{{Sentinel::getUser()->first_name.' '.Sentinel::getUser()->last_name}}</p>
  </a>
</div>
</div>
  <div class="item">
    <div class="ui input"><input placeholder="Search..." type="text"></div>
  </div>
  <a class="item">
    <i class="grid layout icon"></i> Dashboard
  </a>
  <a class="item">
      Notificações<i class="mail outline icon"></i>
  </a>
  <a class="item">
      Anexos 5<i class="student icon"></i>
  </a>
  <a class="item" href="{{url('/feuem/'.$departamento->sigla.'/estatisticas')}}">
    Estatísticas<i class="bar chart icon"></i>
  </a>
  <a class="item">
    Defesas<i class="time icon"></i>
  </a>
  <a class="item">
    Rep. de monografias<i class="database icon"></i>
  </a>
  <div class="ui dropdown item">
    <i class="setting icon"></i>Mais
    <i class="dropdown icon"></i>
    <div class="menu">
      <a class="item">
          <i class="file icon"></i>Documentação
      </a>
      <a class="item"><i class="edit icon"></i> Perfil</a>
      <a class="item"><i class="settings icon"></i>Config. da Conta</a>
      <a class="item" href="{{url('/logout')}}"><i class="sign out icon"></i> Logout</a>
    </div>
  </div>
</div>
