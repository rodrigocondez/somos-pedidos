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


    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

<ul>
  <li><a class="active" href="home.php">Buscar</a></li>
  <li><a href="importar.php">Importar</a></li>
</ul>

<div style="padding:20px;background-color:#A9A9A9;height:1500px;">

<h2>Pesquisa Pedidos Somos Educacao <a class="header-logo" href="home.php"></a></h2>
<a href="avancado.php"><h6>Pesquisa Avançada >>></h6></a>

<br>
<form action="buscarmult2.php" method="post">

<script type="text/javascript">
$(document).ready(function(){
    var maxField = 10; //Input fields increment limitation
    var addButton = $('.add_button'); //Add button selector
    var wrapper = $('.field_wrapper'); //Input field wrapper
    var fieldHTML = '<div>Pedido: <input type="text" name="pedido" value=""/><select name="editora[]"><option value="%">Selecione...</option><option value="1-$pedido">Atica</option><option value="2-$pedido">SER</option><option value="3-$pedido">Ético</option><option value="4-$pedido">Scipione</option><option value="5-$pedido">Saraiva</option></select><a href="javascript:void(0);" class="remove_button" title="Remove field"><img src="/img/remove-icon.png"/></a></div>'; //New input field html 
    var x = 1; //Initial field counter is 1
    $(addButton).click(function(){ //Once add button is clicked
        if(x < maxField){ //Check maximum number of input fields
            x++; //Increment field counter
            $(wrapper).append(fieldHTML); // Add field html
        }
    });
    $(wrapper).on('click', '.remove_button', function(e){ //Once remove button is clicked
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--; //Decrement field counter
    });
});
</script>
<div class="field_wrapper">
    <div>
        Pedido: <input type = "text" name= "pedido[]" /> 
<select name="editora[]">
<option value='%-$pedido'>Selecione...</option>
<option value='1-$pedido'>Atica</option>
<option value='2-$pedido'>SER</option>
<option value='3-$pedido'>Ético</option>
<option value='4-$pedido'>Scipione</option>
<option value='5-$pedido'>Saraiva</option>
</select>
        <a href="javascript:void(0);" class="add_button" title="Add field"><img src="/img/add-icon.png"/></a>
    </div>
</div>
<br>
<br>
<input type = "submit" class="btn btn-warning" value="Buscar" name= "buscar2">
</form>


</div>

</body>
</html>

