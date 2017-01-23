<?php
function getdb(){
$servername = "localhost";
$username = "rodrigo";
$password = "BKs=hu&67$";
$db = "rafael"

try {
   
    $con = mysqli_connect($servername, $username, $password, $db);
     //echo "Connected successfully"; 
    }
catch(exception $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
    return $con;
}