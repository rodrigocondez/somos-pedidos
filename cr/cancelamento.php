<html>
<head>
<link rel="stylesheet" href="../wp-includes/js/bootstrap.min.css">

<!--css do formulario -->
<link rel="stylesheet" href="../css/cancelamento.css" type="text/css" />


<link type="text/css" href="../wp-includes/js/jquery-ui.theme.css" rel="stylesheet" />
<link href = "../wp-includes/js/jquery-ui.css" rel = "stylesheet">
      <script src = "../wp-includes/js/external/jquery/jquery.js"></script>
      <script src = "../wp-includes/js/jquery-ui.js"></script>
      <script>
         $(function() {
            $( "#data_pedido" ).datepicker();
            minDate:1
         });
      </script>


</head>
<body>


<div style="padding:20px;background-color:#d9d9d9;height:100%;">

<h2>Solicitação de Cancelamento de Pedido Somos Educação <a class="header-logo" href="home.php"></a></h2>
<br>
<br>


<br>

<div class = "divgeral">

<div class = "peded">
<div class = "npedido">
  <form action="canceladebloq.php" method="post"> 
Nº pedido:       <input id="pedido" name = "pedido" type="text" class = "pedido" required="required"/>
  <div class = "bu">
BU: <select name="editora" id="editora" data-native-menu="false">
<option value="%">Selecione...</option>
<option value="1">Atica</option>
<option value="2">SER</option>
<option value="3">Ético</option>
<option value="4">Scipione</option>
<option value="5">Saraiva</option>
</select>

<div class = "btnpedido">
<input type = "submit" class="btn btn-warning" value="Buscar Pedido" name= "buscapedido" >
</div>
</div>
</div>
</div>

<div class= "divsolicitante">
Solicitante: <input type = "text" name= "solicitante" class = "solicitante" required="required" disabled/>
</div>


<div class= "divaprovador">
Gestor Aprovador: <input type = "text" name= "aprovador" class = "aprovador" required="required" disabled/>
</div>



<div class = "mot">
Motivo do cancelamento: <select name = "motivo" id = "motivo" data-native-menu="false" disabled>
<option value="">Selecione...</option>
<option value="a">Erro de Processamento - CR</option>
<option value="b">Sem motivo</option>
<option value="c">Acerto Sistêmico</option>
<option value="d">Teste de TI</option>
<option value="e">Falta de Produto</option>
<option value="d">Duplicidade de Pedido</option>
<option value="e">Condição Comercial em Desacordo</option>
</select>
</div>






<div class = "obs">
OBS:<textarea cols="70" rows = "10" name= "obs" class = "obs" required="required" disabled>
</textarea>
</div>
<br>
<br>
<div class= "botao">
<input type = "submit" class="btn btn-warning" value="Enviar Solicitação" name= "buscar" disabled>
</form>
</div>
</div>

</body>
</html>
