<div class="ui grid">
  <div class="eigth wide column">
    <div class="ui inverted segment">
      <div class="ui inverted form">
        <div class="three fields">
          <div class="field">
            <input placeholder="Pesquisar por nome" type="text">
          </div>
          <div class="field">
            <label></label>
            <div class="ui selection dropdown">
              <div class="default text">Pesquisar por disciplina</div>
              <i class="dropdown icon"></i>
              <input name="gender" type="hidden">
              <div class="menu">
                <div class="item" data-value="1">Trabalho de Licenciatura</div>
                <div class="item" data-value="2">Estágio Profissional</div>
              </div>
            </div>
          </div>
          <div class="field">
            <button type="button" class="ui submit button" name="search"><i class="search icon"></i></button>
          </div>
          </div>
      </div>
    </div>
  </div>
</div>
<div class="u grid"><!--Inicio da lista-->
  <div class="ui middle aligned divided list">
    <div class="item">
      <div class="right floated content">
        <div class="ui grid">
          <div class="two wide column">
            <div class="ui active progress">
              <div class="bar">
                <div class="progress">5%</div>
              </div>
            </div>
          </div>
          <div class="one wide column">
          </div>
          <div class="two wide column">
            <div class="ui button"><i class="unhide icon"></i></div>
          </div>
        </div>
      </div>
        <img class="ui avatar image" src="{{ App\User::get_gravatar(Sentinel::getUser()->email) }}">
        <div class="content">
          <p><b>Muaruca C. Assane</b></p>
        </div>
    </div>
    <div class="item">
      <div class="right floated content">
        <div class="ui grid">
          <div class="two wide column">
            <div class="ui active progress">
              <div class="bar">
                <div class="progress">5%</div>
              </div>
            </div>
          </div>
          <div class="one wide column">
          </div>
          <div class="two wide column">
            <div class="ui button"><i class="unhide icon"></i></div>
          </div>
        </div>
      </div>
        <img class="ui avatar image" src="{{ App\User::get_gravatar(Sentinel::getUser()->email) }}">
        <div class="content">
          <p><b>Maquite Alberto</b></p>
        </div>
    </div>
    <div class="item">
      <div class="right floated content">
        <div class="ui grid">
          <div class="two wide column">
            <div class="ui active progress">
              <div class="bar">
                <div class="progress">5%</div>
              </div>
            </div>
          </div>
          <div class="one wide column">
          </div>
          <div class="two wide column">
            <div class="ui button"><i class="unhide icon"></i></div>
          </div>
        </div>
      </div>
        <img class="ui avatar image" src="{{ App\User::get_gravatar(Sentinel::getUser()->email) }}">
        <div class="content">
          <p><b>Julia Beula</b></p>
        </div>
    </div>
  </div>
</div>
