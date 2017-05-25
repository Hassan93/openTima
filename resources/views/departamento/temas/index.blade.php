<div class="ui green segment grid">
  <div class=" eight wide column">
    <div class="ui form">
      <div class="fields">
        <div class="field">
          <select class="ui search dropdown">
            <option value="0">Ano</option>
            <option value="2015">2015</option>
            <option value="2016">2016</option>
            <option value="2017">2017</option>
          </select>
        </div>
        <div class="field">
          <select class="ui search dropdown">
            <option value="0">Semestre</option>
            <option value="1">Primeiro</option>
            <option value="2">Segundo</option>
          </select>
        </div>
      </div>
    </div>
  </div>
  <div class="four wide column">
  </div>
  <div class="four wide column">
    <button class="ui teal button" onclick="model_temas()"><i class="plus icon"></i>Nova Actividade</button>
  </div>
</div>
<div class="row">
  <table class="ui selectable table">
    <thead>
      <tr>
        <th>Tema</th>
        <th>Referencia</th>
        <th>Estudante</th>
        <th>Estado</th>
        <th class="right aligned">Acção</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>TCC</td>
        <td>2017EID17</td>
        <td>Muarucha Assane</td>
        <td class="positive"><i class="icon checkmark"></i>Alocado</td>
        <td class="right aligned">
          <button class="ui green button" disabled="true"><i class="users icon"></i></button>
          <button class="ui basic button"><i class="pencil icon"></i></button>
        </td>
      </tr>
      <tr>
        <td>Integração de sistemas da UEM</td>
        <td>2017EID19</td>
        <td>Edson Michaque</td>
        <td class="negative"><i class="icon close"></i>Não alocado</td>
        <td class="right aligned">
          <button class="ui green button"><i class="users icon"></i></button>
          <button class="ui basic button"><i class="pencil icon"></i></button>
        </td>
      </tr>
    </tbody>
  </table>
</div>


<script type="text/javascript">

</script>

<div class="ui small modal" id="temas">
  <i class="close icon"></i>
  <div class="header">Registo do tema</div>
  <div class="content">
    <div class="ui form">
      <div class="two wide fields">
       <div class="field">
         <label>Desgnação do tema</label>
               <input placeholder="o tema" type="text">
       </div>
       <div class="field">
         <label>Referência do tema</label>
               <input placeholder="a referência do tema" type="text">
       </div>
      </div>
      <div class="two wide fields">
        <div class="field">
          <label>Area Científica do tema</label>
          <select class="ui fluid search dropdown" name="estado">
            <option value="5">Engenharia de Software</option>
            <option value="10">Redes de Computadores</option>
            <option value="5">Inteligencia Atificial</option>
            <option value="10">Electronica Digital</option>
          </select>
        </div>
        <div class="field">
          <label>Estudante</label>
          <select class="ui fluid search dropdown" name="estado">
            <option value="5">Julia Beula</option>
            <option value="10">Valter Cheque</option>
            <option value="5">Julia Beula</option>
            <option value="10">Valter Cheque</option>
          </select>
        </div>
      </div>
        <div class="field">
            <label>Descrição da actividade</label>
            <textarea></textarea>
        </div>
        <div class="field">
          <button type="submit" class="fluid ui green button" onsubmit="">Gravar</button>
        </div>
      </div>
