<?php

	function pegaValor($valor) {
		return filter_var($_POST[$valor]) ? $_POST[$valor] : '';
		}

	function validaEmail($email) {
		return filter_var($email, FILTER_VALIDATE_EMAIL);
		}

	function enviaEmail ($de, $assunto, $mensagem, $para, $email_servidor) {
		$headers = "From: $email_servidor\r\n" .
					"Reply-to: $de\r\n " .
					"X-Mailer: PHP/" . phpversion() . "\r\n";  
					$headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
  
  mail($para, $assunto, nl2br($mensagem), $headers);
}
 
$email_servidor = "email@servidor.com";
$para = "seu@email.com";
$de = pegaValor("email");
$mensagem = pegaValor("mensagem");
$assunto = "Assunto da mensagem";

    if ($nome && validaEmail($de) && $mensagem) {
        enviaEmail($de, $assunto, $mensagem, $para, $email_servidor);
        $pagina = "mail_ok.php";
    } else {
        $pagina = "mail_error.php";
    }
     
    header("location:$pagina");
 
?>