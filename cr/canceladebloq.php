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


<div class = "divgeral">

<form method="POST" action="email.php" >
<div class = "peded">
<div class = "pedido">


  <div class = "bu">

<div class = "btnpedido">
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
    echo "Busca não encontrada" ;
}
  $conn->close();
 ?>


</div>


<div class= "divsolicitante">
Solicitante: <input type = "text" name= "solicitante" class = "solicitante" required="required" />
</div>


<div class= "divaprovador">
Gestor Aprovador: <input type = "text" name= "aprovador" class = "aprovador" required="required" />
</div>



<div class = "mot">
Motivo do cancelamento: <select name = "motivo" id = "motivo" data-native-menu="false">
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
OBS:<textarea cols="70" rows = "10" name= "obs" class = "obs" required="required" >
</textarea>
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

