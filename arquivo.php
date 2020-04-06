<?php 
require 'PHPMailer/PHPMailerAutoload.php';

$nomeRemetente=$_POST['nomeRemetente'];
$UsuárioConta=$_POST['UsuárioConta'];
$SenhaConta=$_POST['SenhaConta'];
$emailDestinatario=$_POST['emailDestinatario'];
$assunto=$_POST['assunto'];
$mensagem=$_POST['mensagem'];
 
// Instância do objeto PHPMailer
$mail = new PHPMailer;
 
// Configura para envio de e-mails usando SMTP
$mail->isSMTP();
 
// Servidor SMTP
$mail->Host = 'smtp.gmail.com';
 
// Usar autenticação SMTP
$mail->SMTPAuth = true;
 
// Usuário da conta
$mail->Username = $UsuárioConta;
 
// Senha da conta
$mail->Password = $SenhaConta;
 
// Tipo de encriptação que será usado na conexão SMTP
$mail->SMTPSecure = 'ssl';
 
// Porta do servidor SMTP
$mail->Port = 465;
 
// Informa se vamos enviar mensagens usando HTML
$mail->IsHTML(true);
 
// Email do Remetente
$mail->From = $UsuárioConta;
 
// Nome do Remetente
$mail->FromName = $nomeRemetente;
 
// Endereço do e-mail do destinatário
$mail->addAddress($emailDestinatario);
 
// Assunto do e-mail
$mail->Subject = $assunto;
 
// Mensagem que vai no corpo do e-mail
$mail->Body = '<h3>'.$mensagem.'</h3>';
 
// Envia o e-mail e captura o sucesso ou erro
if($mail->Send()):
    echo 'Enviado com sucesso !';
else:
    echo 'Erro ao enviar Email:' . $mail->ErrorInfo;
endif;
 ?>