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
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #112;
}

.active {
    background-color: purple;
}

.header-logo{
    float: right;
    right: 10px;
    top: px;
    display: block;
    width: 300px;
    height: 165px;
    background: url(/img/Somos.png);
    display: inlin;


}

</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>

<ul>
  <li><a href="home.php">Home</a></li>
  <li><a href="importar.php">Importar</a></li>
  <li><a class="active" href="">Resultado</a></li>
</ul>

<div style="padding:5px;background-color:#8A2BE2;height:210px;color:white">
<h1><a class="header-logo" href="home.php"></a></h1>
<h2>Resultado Pesquisa <br> </h2>
<h4>Pedidos Somos Educação</h4>
</div>
<div style ="padding:5px;background-color:#696969;height:10px;color:white"></div>
<div style="padding:20px;background-color:#A9A9A9;">
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
$cliente = $_POST ['cliente'];
$data_pedido = $_POST['data_pedido'];
$notafisc = $_POST['notafisc'];
$status = $_POST['status'];


$sql = "SELECT pedido, cliente, data_pedido, dta_cria_om, dta_liberacao_credito, data_est_pick, status, data_geracao_nf, dat_minuta, editora, sku, volume, peso, valor, nf   from rafa where pedido like '%$pedido' and editora LIKE '%$editora%' and cliente LIKE '%$cliente%' and data_pedido LIKE '%$data_pedido%' and nf LIKE '%$notafisc%' and status LIKE '%$status%'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // Saida para cada linha
    while($row = $result->fetch_assoc()) {
        echo "Pedido: " . $row["pedido"]."<br>" .
             " - Cliente: " . $row["cliente"]."<br>" .
             " - Data do Pedido: " . $row["data_pedido"]. "<br>" .
             " - Data da Onda: " . $row["dta_cria_om"]. "<br>" .
             " - Data Liberação de Credito: " . $row["dta_liberacao_credito"]. "<br>" .
             " - Data Picking: " . $row["data_est_pick"]. "<br>" .
             " - Status: " . $row["status"]. "<br>" .
             " - Data Geração NF: " . $row ["data_geracao_nf"]. "<br>" .
             " - Data da Minuta:" . $row["dat_minuta"]. "<br>" .
             " - Quantidade SKU: " . $row["sku"]."<br>" .
             " - Quantidade Volumes: " . $row["sku"]."<br>" .
             " - Peso: " . $row["peso"]. " Kg <br>" .
             " - Valor do Pedido: R$ " . $row["valor"]."<br>" .
             " - Nota Fiscal: " . $row["nf"]."<br>" .
             " - Editora: " . $row["editora"] . "<br>" .
             "<br>";
    }
} else {
    echo "Busca não encontrada";
}
$conn->close();
?>

</div>

</body>
</html>
