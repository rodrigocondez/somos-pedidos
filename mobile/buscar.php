<html>
<head>
<style>
body {margin:0;}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: visible;
    background-color: #333;
    position: fixed;
    bottom: -10;
    width: 100%;
    overflow-y: hidden;
}

li {
    float: left;
    overflow-y: hidden;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    overflow-y: hidden;
}

li a:hover:not(.active) {
    background-color: #112;
    overflow-y: hidden;
}

.active {
    background-color: purple;
    overflow-y: hidden;
}

#wrapperHeader{
    position: relative;
    overflow-y: hidden;
}


.header-logo{
    position: absolute;
    right: 25px;
    top: 5px;
    display: block;
    width: 300px;
    height: 165px;
    max-width: 100%;
    background: url(/img/Somos.png);
    overflow-y: hidden;


}

#wrapper{
  background-color: #d9d9d9;
  height: 100%;

}


</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
  <script type="Text/javascript" src="/wp-includes/js/prototype.js" > </script>
<div id = "wrapper">
<ul>
  <li><a href="home.php">Home</a></li>
  <li><a href="importar.php">Importar</a></li>
  <li><a class="active" href="">Resultado</a></li>
</ul>

<div style="padding:5px;padding-top:165px;background-color:#C5B4E3;height:260px;overflow-y: hidden;color:white; font-height:bold;">
<h1><a class="header-logo" href="home.php"></a></h1>
<h2>Resultado Pesquisa <br> </h2>
<h4>Pedidos Somos Educação</h4>
</div>
<div style ="padding:5px;background-color:#696969;height:10px;color:white;border-radius: 10px;"></div>

<form>
<input type = "button" class="btn btn-warning" value="Nova Pesquisa" onClick="JavaScript: window.history.back();" style="position: absolute; right: 0;">
</form>
<div style="padding:20px;background-color:#d9d9d9; height:auto;">
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
      echo "<strong> Pedido: </strong>" . $row["pedido"]."<br>" .
           "<strong> - Cliente:  </strong>" . $row["cliente"]."<br>" .
           "<strong> - Data do Pedido: </strong>" . $row["data_pedido"]. "<br>" .
           "<strong> - Data da Onda: </strong>". $row["dta_cria_om"]. "<br>" .
           "<strong> - Data Liberação de Credito: </strong>" . $row["dta_liberacao_credito"]. "<br>" .
           "<strong> - Data Picking: </strong>". $row["data_est_pick"]. "<br>" .
           "<strong> - Status: </strong>" . $row["status"]. "<br>" .
           "<strong> - Data Geração NF: </strong>". $row ["data_geracao_nf"]. "<br>" .
           "<strong> - Data da Minuta:</strong>" . $row["dat_minuta"]. "<br>" .
           "<strong> - Quantidade SKU: </strong>". $row["sku"]."<br>" .
           "<strong> - Quantidade de Exemplares: </strong>" . $row["volume"]."<br>" .
           "<strong> - Peso: </strong>" . $row["peso"]. " Kg <br>" .
           "<strong> - Valor do Pedido: </strong> R$ ". $row["valor"]."<br>" .
           "<strong> - Nota Fiscal: </strong>". $row["nf"]."<br>" .
           "<strong> - Editora: </strong>". $row["editora"] . "<br>" .
             "<br>";
    }
} else {
    echo "Busca não encontrada";
}
$conn->close();
?>

</div>

</body>
