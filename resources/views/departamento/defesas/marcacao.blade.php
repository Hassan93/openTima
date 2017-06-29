<div id="regUtgaende" class="ui stacked segment">
  <a class="ui ribbon orange label">Marcação de defesa</a>
  <div class="ui form">

    <div class="two fields">
      <div class="field">
        <label>Estudante</label>
        <div class="ui right labeled input">
          <div class="ui fluid search selection dropdown">
            <input type="hidden" name="country">
            <i class="dropdown icon"></i>
            <div class="default text">Assane</div>
            <div class="menu">
              <div class="item" data-value="af">
              </i>Valter</div>
              <div class="item" data-value="ax">
              </i>Assane</div>
            </div>
          </div>
        </div>
      </div>
      <div class="field">

        <label>Tema</label>

        <div class="ui fluid search selection dropdown">
          <input type="hidden" name="country">
          <i class="dropdown icon"></i>
          <div class="default text">tema</div>
          <div class="menu">
            <div class="item" data-value="af">
            </i>Gestao de TCC</div>
            <div class="item" data-value="ax">
            </i>Ataques</div>
          </div>
        </div>
      </div>
    </div>

    <div class="field">

      <div class="ui checkbox">
        <input type="checkbox" tabindex="0" class="hidden" checked>
        <label>Notificar intervenientes</label>
      </div>
    </div>
    <div class="ui secondary segment datepicker dont-show small form">
      <div class="field">
        <label>Data</label>

        <div class="fields">
          <div class="three wide field">
            <select class="ui fluid dropdown" name="ut_dato[dato]">
              <option value="01">1</option>
              <option value="02">2</option>
              <option value="03">3</option>
              <option value="04">4</option>
              <option value="05">5</option>
              <option value="06">6</option>
            </select>
          </div>
          <div class="six wide field">

            <select class="ui fluid search dropdown" name="ut_dato[maaned]">
              <option value="">Mes</option>
              <option value="1">Januar</option>
              <option value="2">Februar</option>
              <option value="3">Mars</option>
            </select>
          </div>
          <div class="four wide field">
            <div class="ui input">
              <input type="text" value="2017" placeholder="Ano">
            </div>
          </div>
        </div>
      </div>

      <div class="fields">
        <div class="six wide field">
          <label>Horas</label>

          <div class="two fields">
            <div class="field">


              <div class="ui input">
                <input type="text" value="12">
              </div>
            </div>
            <div class="field">
              <div class="ui input">
                <input type="text" value="00">
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
    <div class="ui button " tabindex="0">Marcar</div>
  </div>
</div>
