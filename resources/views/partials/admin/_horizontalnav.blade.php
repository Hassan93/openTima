<div class="ui fixed  menu">
  <div class="ui container">
    <a href="#" class="header item">
      <i class="bar chart icon"></i>
         Dashboard
    </a>
    <a href="#" class="active item">Home</a>
    <div class="ui simple dropdown item">
      Cursos <i class="dropdown icon"></i>
      <div class="menu">
        <a class="item" href="#">Balanse</a>
        <a class="item" href="#">Inngående</a>
        <a class="item" href="#">Utgående</a>
        <div class="divider"></div>
        <a class="item" href="#">Søk</a>
      </div>
    </div>

    <div class="ui simple dropdown item">
      Temas<i class="dropdown icon"></i>
      <div class="menu">
        <a class="item" href="#">Oversikt</a>
        <div class="divider"></div>
        <a class="item" href="#">Ny kunde</a>
      </div>
    </div>

    <div class="right menu">
        <div class="item">
          <div class="ui icon input">
            <input placeholder="Search..." type="text">
            <i class="search icon"></i>
          </div>
        </div>
        <div class="item">
          <i class="mail outline icon"></i>
        </div>
        <div class="item">
          <i class="user icon"></i>
          <div class="text">
            {{Sentinel::getUser()->first_name." ".Sentinel::getUser()->last_name}}
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
          <div class="item">
            <i class="configure icon"></i>
          </div>
    </div>

  </div>

</div>
