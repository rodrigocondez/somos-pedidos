<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title></title>
<style type="text/css">
body {
	background: #E3F4FC;
	font: normal 14px/30px Helvetica, Arial, sans-serif;
	color: #2b2b2b;
}
a {
	color:#898989;
	font-size:14px;
	font-weight:bold;
	text-decoration:none;
}
a:hover {
	color:#CC0033;
}

h1 {
	font: bold 14px Helvetica, Arial, sans-serif;
	color: #CC0033;
}
h2 {
	font: bold 14px Helvetica, Arial, sans-serif;
	color: #898989;
}
#container {
	background: #CCC;
	margin: 100px auto;
	width: 945px;
}
#form 			{padding: 20px 150px;}
#form input     {margin-bottom: 20px;}
</style>
</head>
<body>
<div id="container">
<div id="form">

<?php

include "dblink.php"; //Connect to Database


//Upload File
if (isset($_POST['submit'])) {
	if (is_uploaded_file($_FILES['filename']['tmp_name'])) {
		echo "<h1>" . "Arquivo ". $_FILES['filename']['name'] ." importado com sucesso." . "</h1>";
		echo "<h2>Conteudo:</h2>";
		readfile($_FILES['filename']['tmp_name']);
	}

	//Import uploaded file to Database
	$handle = fopen($_FILES['filename']['tmp_name'], "r");

	while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
		$import= "INSERT into rafa (pedido, cliente, data_pedido, dta_cria_om, status, data_geracao_nf, dat_minuta, editora, sku, volume, peso, valor, nf) 
		values('$data[0]','$data[1]','$data[2]','$data[3]','$data[4]','$data[5]','$data[6]','$data[7]','$data[8]','$data[9]','$data[10]','$data[10]','$data[11]')";
		mysql_query($import) or die(mysql_error());
	}

	fclose($handle);

	print "Importado com sucesso!";

	//view upload form
}else {

	print "Importar arquivo CSV<br />\n";

	print "<form enctype='multipart/form-data' action='upload.php' method='post'>";

	print "Arquivo .csv para importação:<br />\n";

	print "<input size='50' type='file' name='filename'><br />\n";

	print "<input type='submit' name='submit' value='Importar'></form>";

}

?>

</div>
</div>
</body>
</html>

Versions stay together.
If you upload a file that matches the name of an existing file, Drive will add it as a new version, instead of creating a duplicate.
