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

<form action="buscar2.php" method="post" id="cse-search-box">
    <script src="wp-includes/js/script.js" type="text/javascript"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<p> 
          <input type="button" value="Adicionar Pedido" onClick="addRow('dataTable')" /> 
          <input type="button" value="Remover Pedido" onClick="deleteRow('dataTable')"  /> 
          <p>(O botão remover pedido irá remover pedidos checados)</p>
        </p>
               <table id="dataTable" class="form" border="1">
                  <tbody>
                    <tr>
                      <p>
            <td><input type="checkbox" required="required" name="chk[]" checked="checked" /></td>
            
            <td>
              <label for='pedido'>Pedido</label>
              <input type="text" required="required" name="pedido" id = "pedido">
             </td>
             <td>
            <label for="editora">Editora</label>
              <select name="editora" id="editora">
                <option value="%">Selecione...</option>
                <option value="1">Atica</option>
                <option value="2">SER</option>
                <option value="3">Ético</option>
                <option value="4">Scipione</option>
                <option value="5">Saraiva</option>
              </select>
             </td>
         
                     </p>
                    </tr>
                    </tbody>
                </table>
    <br>

  <script>
    $('#cse-search-box').bind('submit', function(){
        var category = $('[name=editora]').val();
        var contributors = $('[name=pedido]').val();
        $('[name=q]').val(editora+'-'+pedido);
    });
</script>
</script>



<br>
<br>
<input type = "submit" class="btn btn-warning" value="Buscar" name= "buscar">
</form>
</div>

</body>
</html>