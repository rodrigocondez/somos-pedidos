


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
</head>
<body>

<ul>
  <li><a class="active" href="home.php">Buscar</a></li>
  <li><a href="importar.php">Importar</a></li>
</ul>

<div style="padding:20px;background-color:#A9A9A9;height:1500px;">

<h2>Pesquisa Pedidos Somos Educacao <a class="header-logo" href="home.php"></a></h2>
<a href="avancado.php"><h6>Pesquisa Avançada >>></h6></a>

<br>
<form action="buscar.php" method="post">
<input type = "text" name= "pedido" />

    <?php

    //db connection
mysql_connect("localhost","rodrigo","BKs=hu&67$");
mysql_select_db("rafael");

//query
$sql=mysql_query("SELECT editora FROM rafa group by editora");
if(mysql_num_rows($sql)){
$select= '<select name="editora">';
while($rs=mysql_fetch_array($sql)){
      $select.='<option value="'.$rs['editora'].'">'.$rs['editora'].'</option>';
  }
}
$select.='</select>';
echo $select;
?>


</select>
<br>
<br>
<input type = "submit" class="btn btn-warning" value="Buscar" name= "buscar">
</form>
</div>

</body>
</html>
