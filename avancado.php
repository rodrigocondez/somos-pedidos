<html>
<head>
<style>
body {margin:0;}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
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
    position: absolute;
    right: 10px;
    top: 5px;
    display: block;
    width: 300px;
    height: 165px;
    background: url(/img/Somos.png);


}

</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> 
<link type="text/css" href="css/custom-theme/jquery-ui-1.8.20.custom.css" rel="stylesheet" />
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.8.20.custom.min.js"></script>
  
  <script>
  $(document).ready(function () {
            $('#datepicker').datepicker({
                format: 'dd/mm/yyyy',                
                language: 'pt-BR'
            });
        });
  </script>


</head>
<body>

<ul>
  <li><a class="active" href="home.php">Buscar</a></li>
  <li><a href="importar.php">Importar</a></li>
</ul>

<div style="padding:20px;background-color:#A9A9A9;height:1500px;">

<h2>Pesquisa Pedidos Somos Educacao <a class="header-logo" href="home.php"></a></h2>
<a href="home4.php"><h6>Pesquisa Basica >>></h6></a>

<br>
<form action="buscaavancada.php" method="post">
Pedido: <input type = "text" name= "pedido" />

<br>
Editora:
<select name="editora">
<option value="%">Selecione...</option>
<option value="1">Atica</option>
<option value="2">SER</option>
<option value="3">Ético</option>
<option value="4">Scipione</option>
<option value="5">Saraiva</option>


</select>
<br>

Cliente:

<select name="cliente">
 <option value = "%">Selecione...</option>
 
<?php 

   //db connection
mysql_connect("localhost","rodrigo","BKs=hu&67$");
mysql_select_db("rafael");

//Selecione tudo de nomedatabela em ordem crescente pelo nome 
$consulta=mysql_query("SELECT cliente FROM rafa group by cliente "); 
//Fazendo o looping para exibição de todos registros que contiverem em nomedatabela
while ($dados = mysql_fetch_array($consulta)) {echo("<option value='".$dados['cliente']."'>".$dados['cliente']."</option>");}?>
</select>

</select>
<br>

Status do Pedido:

<select name="status">
 <option value = "%">Selecione...</option>
 
<?php 

   //db connection
mysql_connect("localhost","rodrigo","BKs=hu&67$");
mysql_select_db("rafael");

//Selecione tudo de nomedatabela em ordem crescente pelo nome 
$consulta=mysql_query("SELECT status FROM rafa group by status "); 
//Fazendo o looping para exibição de todos registros que contiverem em nomedatabela
while ($dados = mysql_fetch_array($consulta)) {echo("<option value='".$dados['status']."'>".$dados['status']."</option>");}?>
</select>



<br>

Data do pedido: <input id="datepicker" name = "datapedido"/>

<br>

Nota Fiscal: <input type = "text" name = "notafisc" />


<br>
<br>
<input type = "submit" class="btn btn-warning" value="Buscar" name= "buscar">
</form>
</div>

</body>
</html>