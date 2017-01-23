<?php

//database connection details
$connect = mysql_connect('localhost','rodrigo','BKs=hu&67$','rafael');

if (!$connect) {
 die('Could not connect to MySQL: ' . mysql_error());
}

//your database name
$cid =mysql_select_db('rafael',$connect);

// path where your CSV file is located
define('CSV_PATH','/opt/lampp/htdocs/Uploads/');

// Name of your CSV file
$csv_file = CSV_PATH . "carga01.csv"; 


if (($handle = fopen($csv_file, "r")) !== FALSE) {
   fgetcsv($handle);   
   while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $num = count($data);
        for ($c=0; $c < $num; $c++) {
          $col[$c] = $data[$c];
        }

 
   
// SQL Query to insert data into DataBase
$query = "INSERT INTO rafa(pedido, cliente, data_pedido, dta_cria_om, status, data_geracao_nf, dat_minuta, editora, sku, volume, peso, valor, nf) 
                   VALUES('".$col[0]."','".$col[1]."','".$col[2]."','".$col[3]."','".$col[4]."','".$col[5]."','".$col[6]."','".$col[7]."','".$col[8]."','".$col[9]."','".$col[10]."','".$col[11]."','".$col[12]."')";
$s     = mysql_query($query, $connect );
 }
    fclose($handle);
}

echo "File data successfully imported to database!!";
mysql_close($connect);
?>