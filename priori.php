<html>
<head>
<link rel="stylesheet" href="/wp-includes/js/bootstrap.min.css">

<!--css do formulario -->
<link rel="stylesheet" href="css/formulario.css" type="text/css" />


<link type="text/css" href="/wp-includes/js/jquery-ui.theme.css" rel="stylesheet" />
<link href = "/wp-includes/js/jquery-ui.css" rel = "stylesheet">
      <script src = "/wp-includes/js/external/jquery/jquery.js"></script>
      <script src = "/wp-includes/js/jquery-ui.js"></script>
      <script>
         $(function() {
            $( "#data_pedido" ).datepicker();
            minDate:1
         });
      </script>


</head>
<body>

<ul>
  <li><a class="active" href="home.php">Buscar</a></li>
</ul>

<div style="padding:20px;background-color:#d9d9d9;height:100%;">

<h2>Solicitação de priorização de carga Somos Educação <a class="header-logo" href="home.php"></a></h2>
<br>
<br>

<div class = "tiposolicitacao">
Serviço Desejado:
<br>

<input type="checkbox" name="meucheckbox" value="umvalorqualquer">Prioridade de Separação
<input type="checkbox" name="meucheckbox" value="umvalorqualquer">Prioridade de Expedição
<input type="checkbox" name="meucheckbox" value="umvalorqualquer">Prioridade de Entrega
</div>
<br>
<br>
<br>
<br>

<div class= "divsolicitante">
Solicitante: <input type = "text" name= "pedido" class = "solicitante" />
</div>


<div class= "divaprovador">
Gestor Aprovador: <input type = "text" name= "pedido" class = "aprovador" />
</div>



<div class = "divdrop">
  <div class = "bu">
BU: <select name="editora">
<option value="%">Selecione...</option>
<option value="1">Atica</option>
<option value="2">SER</option>
<option value="3">Ético</option>
<option value="4">Scipione</option>
<option value="5">Saraiva</option>
</select>

<div  class = "cc">
C.C.: <input type = "text" name= "pedido" required="true"/>



<div class = "modal">
Modal: <select name="modal" class="modal">
<option value="%">Selecione...</option>
<option value="S">Sedex</option>
<option value="D">Dedicado</option>
<option value="A">Aereo</option>
<option value="C">Comum</option>
</select>
</div>


</div>



<!--Data da solicitação: <input id="data_pedido" name = "data_pedido" data-role="date" type="text"/> -->


<br>

Data limite da Entrega: <input id="data_pedido" name = "data_pedido" data-role="date" type="text"/>

Qtd. Exemplares: <input type = "text" name= "pedido" />

<br>

Nº pedido: <input id="data_pedido" name = "data_pedido" data-role="date" type="text"/>

<br>

OBS:<input type = "text" name= "pedido" class = "obs"/>
<br>
<br>
<input type = "submit" class="btn btn-warning" value="Enviar Solicitação" name= "buscar">
</form>
</div>

</body>
</html>
