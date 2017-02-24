
<?php
 
 
 
/*** INÍCIO - DADOS A SEREM ALTERADOS DE ACORDO COM SUAS CONFIGURAÇÕES DE E-MAIL ***/
 
$enviaFormularioParaNome = 'Nome do destinatário que receberá formulário';
$enviaFormularioParaEmail = 'rodrigo.condez@gmail.com';
 
$caixaPostalServidorNome = 'WebSite | Formulário';
$caixaPostalServidorEmail = 'rodrigo.condez@gmail.com';
$caixaPostalServidorSenha = 'Reroaline123';
 
/*** FIM - DADOS A SEREM ALTERADOS DE ACORDO COM SUAS CONFIGURAÇÕES DE E-MAIL ***/ 
 
 
/* abaixo as veriaveis principais, que devem conter em seu formulario*/
 
$remetenteNome  = $_POST['remetenteNome'];
$remetenteEmail = $_POST['remetenteEmail'];
$pedido = '.$row["pedido"].';
$editora = '.$row["editora"].';
$solicitante  = $_POST['assunto'];
$aprovador = $_POST['aprovador'];
$motivo = $_POST['motivo'];
$obs = $_POST['obs'];
 
$mensagemConcatenada = 'Formulário gerado via website'.'<br/>'; 
$mensagemConcatenada .= '-------------------------------<br/><br/>'; 
$mensagemConcatenada .= 'Nº Pedido: '.$pedido.'<br/>'; 
$mensagemConcatenada .= 'BU: '.$editora.'<br/>'; 
$mensagemConcatenada .= '-------------------------------<br/><br/>'; 
$mensagemConcatenada .= 'Solicitante: '.$assunto.'<br/>';
$mensagemConcatenada .= 'Motivo: "'.$motivo.'"<br/>';
$mensagemConcatenada .= 'Observação: "'.$obs.'"<br/>';
 
 
/*********************************** A PARTIR DAQUI NAO ALTERAR ************************************/ 
 date_default_timezone_set('America/Sao_Paulo'); 

require_once('PHPMailer-master/PHPMailerAutoload.php');
 
$mail = new PHPMailer();
 
$mail->IsSMTP();
$mail->SMTPAuth  = true;
$mail->Charset   = 'utf8_decode()';
$mail->Host  = 'smtp.'.substr(strstr($caixaPostalServidorEmail, '@'), 1);
$mail->Port  = '587';
$mail->SMTPSecure  = 'tls';
$mail->SMTPAuth = true;
$mail->Username  = $caixaPostalServidorEmail;
$mail->Password  = $caixaPostalServidorSenha;
$mail->From  = $caixaPostalServidorEmail;
$mail->FromName  = utf8_decode($caixaPostalServidorNome);
$mail->IsHTML(true);
$mail->Subject  = utf8_decode($assunto);
$mail->Body  = utf8_decode($mensagemConcatenada);
 
 
$mail->AddAddress($enviaFormularioParaEmail,utf8_decode($enviaFormularioParaNome));
 
if(!$mail->Send()){
$mensagemRetorno = 'Erro ao enviar formulário: '. print($mail->ErrorInfo);
}else{
$mensagemRetorno = 'Formulário enviado com sucesso!';
} 
 
 

?>

