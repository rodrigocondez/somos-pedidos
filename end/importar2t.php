

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
 
			 
			 
			 $query = "INSERT INTO rafa(id, pedido, cliente, data_pedido, dta_cria_om, status, data_geracao_nf, dat_minuta, editora, sku, volume, peso, valor, nf) 
                   VALUES('".$data[0]."','".$data[1]."','".$data[2]."','".$data[3]."','".$data[4]."','".$data[5]."','".$data[6]."','".$data[7]."','".$data[8]."','".$data[9]."','".$data[10]."','".$data[11]."','".$data[12]."','".$data[13]."')";
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
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> 
</head>
<body>
 
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
</form>
</div>
</body>
</html>