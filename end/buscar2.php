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


$pedido = $_REQUEST['pedido'];
$editora = $_REQUEST['editora'];
$id_array = implode($pedido,$editora);
foreach($id_array as $value){

echo $value;
}

?>

</div>

</body>
</html>
