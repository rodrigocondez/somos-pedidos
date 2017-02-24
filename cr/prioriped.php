<html>
<head>
<link rel="stylesheet" href="../wp-includes/js/bootstrap.min.css">

<!--css do formulario -->
<link rel="stylesheet" href="../css/formulario.css" type="text/css" />


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



<div class = "divgeral">

<div class = "peded">
<div class = "npedido">
Nº pedido:       <input id="npedido" name = "npedido" type="text" class = "pedido" disabled/>
  <div class = "bu">
BU: <select name="editora" id="editora" data-native-menu="false" disabled>
<option value="%">Selecione...</option>
<option value="1">Atica</option>
<option value="2">SER</option>
<option value="3">Ético</option>
<option value="4">Scipione</option>
<option value="5">Saraiva</option>
</select>

<div class = "btnpedido">
<input type = "submit" class="btn btn-warning" value="Buscar Pedido" name= "buscapedido" disabled>
</div>
</div>
</div>
</div>


<div class = "infopedido">
<?php
$servername = "localhost";
$username = "rodrigo";
$password = "BKs=hu&67$";
$dbname = "rafael";



// Cria Conexão
$conn = new mysqli($servername, $username, $password, $dbname );
// Verifica conexão
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$pedido = $_POST['pedido'];
$editora = $_POST ['editora'];


$sql = "SELECT pedido, cliente, data_pedido, dta_cria_om, dta_liberacao_credito, data_est_pick, status, data_geracao_nf, dat_minuta, id_editora, editora, sku, volume, peso, valor, nf   from rafa where pedido like '%$pedido' and id_editora like '%$editora'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // Saida para cada linha
    while($row = $result->fetch_assoc()) {
  echo "<strong> - Pedido: </strong>" .$row["pedido"]." ".
  "<strong> - Cliente: </strong>" .$row["cliente"]."<br>".
  "<strong> - Status: </strong>" .$row["status"]." ".
  "<strong> - Data do Pedido: </strong>" .$row["data_pedido"]." ".
  "<strong> - Data da Onda: </strong>" .$row["dta_cria_om"]."<br>".
  "<strong> - Data Picking: </strong>" .$row["data_est_pick"]." ".
  "<strong> - Data Geração NF: </strong>" .$row["data_geracao_nf"]." ".
  "<strong> - Data Minuta: </strong>" .$row["data_geracao_nf"]." ".
  "<strong> - Nota Fiscal: </strong>" .$row["nf"]." ".
  "<br>";
  }
} else {
    echo "Busca não encontrada";
}
  $conn->close();
 ?>


</div>


<div class= "divsolicitante">
Solicitante: <input type = "text" name= "pedido" class = "solicitante" required="required" />
</div>


<div class= "divaprovador">
Gestor Aprovador: <input type = "text" name= "pedido" class = "aprovador" required="required" />
</div>



<div class = "divdrop">


<div class = "modal">
Modal: <select name="modal" id="modal" data-native-menu="false" >
<option value="%">Selecione...</option>
<option value="S">Sedex</option>
<option value="D">Dedicado</option>
<option value="A">Aereo</option>
<option value="C">Comum</option>
</select>


<div class = "cc">
C.C.: <input type = "text" pattern="[0-9]+" name= "pedido" required="true" required />
</div>
</div>
</div>
<!--Data da solicitação: <input id="data_pedido" name = "data_pedido" data-role="date" type="text"/> -->


<div class = "linha">
<div class = "datalimite">
Data limite da Entrega: <input id="data_pedido" name = "data_pedido" data-role="date" type="text" required="required" />



<div class = "qtdexempl">
Qtd. Exemplares: <input type = "text" name= "pedido" required="required" />
</div>
</div>
</div>







<div class = "obs">
OBS:<textarea cols="70" rows = "10" name= "obs" class = "obs" required="required" >
</textarea>
</div>
</div>
<br>
<br>
<div class= "botao">
<input type = "submit" class="btn btn-warning" value="Enviar Solicitação" name= "buscar" >
</form>
</div>
</div>

</body>
</html>
