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

if ($_FILES[csv][size] > 0) { 

    //seleciona csv 
    $file = $_FILES[csv][tmp_name]; 
    $handle = fopen($file,"r"); 
     
    //inserção do csv no banco
        do { 
        if ($data[0]) { 
            mysql_query("INSERT INTO rafa (pedido, cliente, data_pedido, dta_cria_om, status, data_geracao_nf, dat_minuta, editora, sku, volume, peso, valor, nf) VALUES 
                ( 
                    '".addslashes($data[0])."', 
                    '".addslashes($data[1])."', 
                    '".addslashes($data[2])."',
                    '".addslashes($data[3])."', 
                    '".addslashes($data[4])."',
                    '".addslashes($data[5])."', 
                    '".addslashes($data[6])."',
                    '".addslashes($data[7])."', 
                    '".addslashes($data[8])."',
                    '".addslashes($data[9])."', 
                    '".addslashes($data[10])."',
                    '".addslashes($data[11])."', 
                    '".addslashes($data[12])."'
                ) 
            "); 
        } 
    } while ($data = fgetcsv($handle,1000,",","'")); 
    // 

    //redirect 
    header('Location: importar.php?success=1'); die; 

} 

?> 