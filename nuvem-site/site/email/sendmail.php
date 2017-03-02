<?php

require_once('PHPMailer_5.2.1/class.phpmailer.php');

$nome  = $_POST['nome'];
$email = $_POST['email'];
$msg   = $_POST['msg'];

try {
	$mail = new PHPMailer(true); //New instance, with exceptions enabled
	
        $body .= "<h2>Contato Nuvem</h2>";       
        $body .= "Nome: $nome <br>";       
        $body .= "E-mail: $email  <br>";        
        $body .= "<br>";
        $body .= "Mensagem: <br>";        
        $body .= $msg;
        $body .= "<br>";
        $body .= "----------------------------";
        $body .= "<br>";
        $body .= "Enviado em <b>".date("h:m:i d/m/Y")." por ".$_SERVER['REMOTE_ADDR']."</b>"; //Mostra data e Endereço IP
        $body .= "<br>";
        $body .= "----------------------------";

	$mail->IsSMTP();                           // tell the class to use SMTP
	$mail->SMTPAuth   = true;                 // enable SMTP authentication
	$mail->Port       = 587;                    // set the SMTP server port, geralmente porta 25 ou 587
	$mail->Host       = "smtp.nuvemdesenvolvimentoweb.com.br"; // SMTP server
	$mail->Username   = "contato@nuvemdesenvolvimentoweb.com.br";     // SMTP server username
	$mail->Password   = "nuvem@prime";            // SMTP server password

	$mail->IsSendmail();  // tell the class to use Sendmail

	$mail->AddReplyTo($email, $nome); //Responder para

	$mail->From       = $email; //De E-mail
	$mail->FromName   = $nome;  //De Nome

	$to = "contato@nuvemdesenvolvimentoweb.com.br"; //Para

	$mail->AddAddress($to);

	$mail->Subject  = "Assunto do E-mail"; //Assunto

	$mail->AltBody    = "Para ver essa mensagem utilize um cliente com suporte HTML!"; // optional, comment out and test
	$mail->WordWrap   = 80; // set word wrap

	$mail->MsgHTML($body);

	$mail->IsHTML(true); // send as HTML

	$mail->Send();
	echo 'Mensagem enviada com sucesso.<br><a href="#">VOLTAR PARA TUTORIAL</a>'; //retorno (html) devolvido para o ajax caso sucesso
} catch (phpmailerException $e) {
	echo $e->errorMessage(); //retorno devolvido para o ajax caso erro
}

?>