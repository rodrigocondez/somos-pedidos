<?php
$connect = mysqli_connect('localhost','rodrigo','BKs=hu&67$','rafael');
if (!$connect) { //Conexão com configuração acima
 die('Não foi possivel conectar ao MySql: ' . mysqli_error());
}

$class="";
$message='';
$error=0;
$target_dir = dirname(__FILE__)."/Uploads/";
if(isset($_POST["import"]) && !empty($_FILES)) {
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $fileType = pathinfo($target_file,PATHINFO_EXTENSION);
    if($fileType != "csv")  // verificando extenção do arquivo .
    {
        $message .= "Apenas arquivos CSV.<br>";
        $error=1;
    }
    else
    {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            $message .="Arquivo importado com sucesso! <br>";

            //teste de import multiplo
            $handle = fopen($target_file,"r");
            $i = 0;
            while (($data = fgetcsv ($handle, 1000, ";")) !== FALSE){
                if ($i > 0) {


            // SQL Query inserir no banco de dados



             $query = "INSERT INTO rafa(id, pedido, cliente, data_pedido, dta_cria_om, dta_liberacao_credito, data_est_pick, status, data_geracao_nf, dat_minuta, id_editora, editora, sku, volume, peso, valor, nf)
                   VALUES('".$data[0]."','".$data[1]."','".$data[2]."','".$data[3]."','".$data[4]."','".$data[5]."','".$data[6]."','".$data[7]."','".$data[8]."','".$data[9]."','".$data[10]."','".$data[11]."','".$data[12]."','".$data[13]."','".$data[14]."','".$data[15]."','".$data[16]."')
                   ON DUPLICATE KEY UPDATE
                   id = '".$data[0]."',
                   pedido = '".$data[1]."',
                   cliente = '".$data[2]."',
                   data_pedido = '".$data[3]."',
                   dta_cria_om = '".$data[4]."',
                   dta_liberacao_credito = '".$data[5]."',
                   data_est_pick ='".$data[6]."',
                   status = '".$data[7]."',
                   data_geracao_nf = '".$data[8]."',
                   dat_minuta = '".$data[9]."',
                   id_editora = '".$data[10]."',
                   editora = '".$data[11]."',
                   sku = '".$data[12]."',
                   volume = '".$data[13]."',
                   peso = '".$data[14]."',
                   valor = '".$data[15]."',
                   nf = '".$data[16]."'";
             $result = mysqli_query($connect ,$query);

            }
            $i++;
             $message .="Dados importados com sucesso! <br>";
            }
            fclose($handle);
        } else {
            $message .="Erro ao importar arquivo.";
            $error=1;
        }
    }
}
$class="perigo";
if($error!=1)
{
    $class="Sucesso";
}
?>

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
  <li><a href="home.php">Buscar</a></li>
  <li><a class="active" href="importar.php">Importar</a></li>
</ul>

<div style="padding:20px;background-color:#d9d9d9;height:100%;">
<h2>Importar Pedidos Somos Educacaoo<a class="header-logo" href="home.php"></a></h2>

<div class="container" style="margin-top:20px; margin-bottom:20px;padding:10px;">
<?php
    if(!empty($message))
    {
?>
<div class="btn-<?php echo $class;?>" style="width:30%;padding:10px;margin-bottom:20px;">
<?php
        echo $message;

 ?>
</div>
<?php } ?>

<form role="form" action="<?php echo $_SERVER['REQUEST_URI'];?>" method="post" enctype="multipart/form-data">
<fieldset class="form-group">
    <div class="form-group">
    <input type="file" name="fileToUpload" id="fileToUpload">
    <label for="image upload" class="control-label">Apenas arquivos .csv permitidos. </label>
    </div>
    <div class="form-group">
    <input type="submit" class="btn btn-warning" value="Importar Arquivo" name="import">
    </div>
    </fieldset>





</body>
</html>
