<html>
<head>
<style>
body {
  overflow-x: hidden;
}
body {
  position: relative
}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: auto;
    background-color: #333;
    position: fixed;
    bottom: -10;
    width: 100%;
    max-width:100%;
     max-height:100%;
    overflow-x: hidden;
}

li {
    float: left;
    overflow-x: hidden;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    max-width:100%;
     max-height:100%;
    overflow-x: hidden;
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
    max-width:100%;
     max-height:100%;
    background: url(/img/Somos.png);
    overflow-y: hidden;


}

</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>

<ul>
  <li><a class="active" href="home.php">Buscar</a></li>
  <li><a href="importar.php">Importar</a></li>
</ul>

<div id="wrapperHeader"><a class="header-logo" href="home.php"></a></div>

<div style="padding:20px;padding-top:165px;background-color:#d9d9d9;height:100%;">

<div style="padding:20px;background-color:#d9d9d9;height:100%;">

<h2>Pesquisa Pedidos Somos Educacao <a class="header-logo" href="home.php"></a></h2>
<a href="avancado.php"><h6>Pesquisa Avançada >>></h6></a>

<br>
<form action="buscar.php" method="post">
Pedido: <input type = "text" name= "pedido" />

<select name="editora">
<option value="%">Selecione...</option>
<option value="1">Atica</option>
<option value="2">SER</option>
<option value="3">Ético</option>
<option value="4">Scipione</option>
<option value="5">Saraiva</option>


</select>

<br>
<br>
<input type = "submit" class="btn btn-warning" value="Buscar" name= "buscar">
</form>
</div>

</body>
</html>
