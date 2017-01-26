<?php
$servername = "localhost";
$username = "rodrigo";
$password = "BKs=hu&67$";
$dbname = "rafael";

// Cria Conexão
$conn = new mysqli($servername, $username, $password, $dbname );

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$pedido = $_POST['pedido'];
$editora = $_POST ['editora'];
$cliente = $_POST ['cliente'];
$data_pedido = $_POST['data_pedido'];
$notafisc = $_POST['notafisc'];
$status = $_POST['status'];




$sql = "SELECT pedido, cliente, data_pedido, dta_cria_om, dta_liberacao_credito, data_est_pick, status, data_geracao_nf, dat_minuta, editora, sku, volume, peso, valor, nf   from rafa where pedido like '%$pedido' and id_editora LIKE '%$editora%' and cliente LIKE '%$cliente%' and data_pedido LIKE '%$data_pedido%' and nf LIKE '%$notafisc%' and status LIKE '%$status%'";
$result = $conn->query($sql);

 $to = "";
 $subject = "Results from query";
 $body = "<table border='1'>;
 $body .=<tr>
 $body .=<th>Pedido:</th>
 $body .=<th>Cliente:</th>
 $body .=<th>Data do Pedido:</th>
 $body .=<th>Data da Onda:</th>
 $body .=<th>Data Liberação de Credito:</th>
 $body .=<th>Data Picking:</th>
 $body .=<th>Status:</th>
 $body .=<th>Data Geração NF:</th>
 $body .=<th>Data da Minuta:</th>
 $body .=<th>Quantidade SKU:</th>
 $body .=<th>Quantidade de Exemplares:</th>
 $body .=<th>Valor do Pedido:</th>
 $body .=<th>Nota Fiscal:</th>
 $body .=<th>Editora:</th>
 $body .=</tr>";
while($row = mysql_fetch_array($result)){
 $body .="<tr>";
 $body .="<td>" . $row['pedido'] . "</td>";
 $body .="<td>" . $row['cliente'] . "</td>";
 $body .="<td>" . $row['data_pedido'] . "</td>";
 $body .="<td>" . $row['dta_cria_om'] . "</td>";
 $body .="<td>" . $row['dta_liberacao_credito'] . "</td>";
 $body .="<td>" . $row['data_est_pick'] . "</td>";
 $body .="<td>" . $row['status'] . "</td>";
 $body .="<td>" . $row['data_geracao_nf'] . "</td>";
 $body .="<td>" . $row['dat_minuta'] . "</td>";
 $body .="<td>" . $row['sku'] . "</td>";
 $body .="<td>" . $row['volume'] . "</td>";
 $body .="<td>" . $row['peso'] . "</td>";
 $body .="<td>" . $row['valor'] . "</td>";
 $body .="<td>" . $row['nf'] . "</td>";
 $body .="<td>" . $row['editora'] . "</td>";

 $body .="</tr>";
 }
 $body .="</table>";
 mysql_close($con);
 ;
 $headers = "From: someone@example.com";
 mail($to,$subject,$body,$headers);
 echo "Email enviado $to";
?>
