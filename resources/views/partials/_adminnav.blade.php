
<div class="ui secondary pointing menu" style="padding-top:30px;">
<div class="item">
  <a href="/administracao" class="{{Request::is('administracao') ? "active item": ""}}">
    Home
  </a>
</div>
<div class="item">
  <a href="/departamentos" class="{{Request::is('departamentos') ? "active item": ""}}">
    Cadastros
  </a>
</div>
  <a class="item">
    Friends
  </a>
  <div class="right menu">
    <div class="item">
      <div class="ui icon input">
        <input placeholder="Search..." type="text">
        <i class="search icon"></i>
      </div>
    </div>
    <div class="item">
      <i class="user icon"></i>
    </div>
    <div class="item">
      <div class="text">
        {{Sentinel::getUser()->last_name}}
      </div>
      <div class="ui dropdown">
      <i class="dropdown icon"></i>
        <div class="menu">
              <div class="item"><i class="unhide icon"></i>Meu Perfil</div>
            <div class="item" hidden="true"><i class="mail outline icon"></i>Notificacoes</div>
            <div class="item">
                  <i class="sign out icon"></i>
                  <a href="{{url('/logout')}}">Terminar sessao</a>
            </div>
          </div>
      </div>
      </div>
    </div>
</div>
