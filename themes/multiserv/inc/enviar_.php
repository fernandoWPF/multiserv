<?php
$GetPost = filter_input_array(INPUT_POST, FILTER_DEFAULT);

include_once 'class.smtp.php';
include_once 'class.phpmailer.php';

date_default_timezone_set('America/Sao_Paulo');
$Mailer = new PHPMailer;
$Mailer->Charset = 'UTF-8';
$Mailer->IsSMTP();
$Mailer->isHTML(true);

$Mailer->SMTPAuth = true;
//$Mailer-> SMTPDebug = 3;
$Mailer->SMTPSecure = 'ssl';
$Mailer->Host = 'br554.hostgator.com.br';
$Mailer->Port = 465;
$Mailer->Username = 'contato@multiserv.com.br';
$Mailer->Password = '';

$Mailer->From = $Mailer->Username;

$Mailer->FromName = (utf8_decode($GetPost['nome']));

$Mailer->Subject = (utf8_decode($GetPost['nome']) . '  ' . date("H:i") . " - " . date("d/m/Y"));

$Mailer->Body = '<strong>NOME: </strong>' . (utf8_decode($GetPost['nome']));
$Mailer->Body .= '<br><strong>EMAIL: </strong>' . (utf8_decode($GetPost['email']));
$Mailer->Body .= '<br><strong>FONE: </strong>' . (utf8_decode($GetPost['fone']));
$Mailer->Body .= '<br><strong>ASSUNTO: </strong>' . (utf8_decode($GetPost['assunto']));
$Mailer->Body .= '<br><strong>MENSAGEM: </strong>' . (utf8_decode($GetPost['msg']));

$Mailer->AltBody = 'NOME: ' . (utf8_decode($GetPost['nome']));
$Mailer->AltBody .= ' EMAIL: ' . (utf8_decode($GetPost['email']));
$Mailer->AltBody .= ' FONE: ' . (utf8_decode($GetPost['fone']));
$Mailer->AltBody .= ' ASSUNTO: ' . (utf8_decode($GetPost['assunto']));
$Mailer->AltBody .= ' MENSAGEM: ' . (utf8_decode($GetPost['msg']));


$Mailer->AddAddress('contato@multiserv.com.br');

if ($Mailer->Send()) {
    echo 'Obrigado pelo Contato ' .utf8_decode($GetPost['nome']) . '!';
} else {
    echo 'Houve um erro ao enviar o e-mail:   '
    . $Mailer->ErrorInfo;
}