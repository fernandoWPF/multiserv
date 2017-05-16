<?php
//criando um filtro
$GetPost = filter_input_array(INPUT_POST, FILTER_DEFAULT);

include_once 'class.smtp.php';
include_once 'class.phpmailer.php';

date_default_timezone_set('America/Sao_Paulo');
$Mailer = new PHPMailer;
$Mailer->Charset = 'UTF-8';
$Mailer->IsSMTP();
$Mailer->isHTML(true);

// Configurações do SMTP
$Mailer->SMTPAuth = true;
//$Mailer-> SMTPDebug = 3;
$Mailer->SMTPSecure = 'ssl';
$Mailer->Host = 'br554.hostgator.com.br';
$Mailer->Port = 465;
$Mailer->Username = 'contato@cidtrix.com.br';
$Mailer->Password = '@rv0re24Xcv';

// E-Mail do remetente (deve ser o mesmo de quem fez a autenticação
// nesse caso seu_login@gmail.com)
$Mailer->From = $Mailer->Username;

// Nome do remetente
$Mailer->FromName = (utf8_decode($GetPost['nome']));

// assunto da mensagem
$Mailer->Subject = (utf8_decode($GetPost['nome']) . '  ' . date("H:i") . " - " . date("d/m/Y"));

// corpo da mensagem
$Mailer->Body = '<strong>NOME: </strong>' . (utf8_decode($GetPost['nome']));
$Mailer->Body .= '<br><strong>EMAIL: </strong>' . (utf8_decode($GetPost['email']));
$Mailer->Body .= '<br><strong>FONE: </strong>' . (utf8_decode($GetPost['fone']));
$Mailer->Body .= '<br><strong>ASSUNTO: </strong>' . (utf8_decode($GetPost['assunto']));
$Mailer->Body .= '<br><strong>MENSAGEM: </strong>' . (utf8_decode($GetPost['msg']));


// corpo da mensagem em modo texto
$Mailer->AltBody = 'NOME: ' . (utf8_decode($GetPost['nome']));
$Mailer->AltBody .= ' EMAIL: ' . (utf8_decode($GetPost['email']));
$Mailer->AltBody .= ' FONE: ' . (utf8_decode($GetPost['fone']));
$Mailer->AltBody .= ' ASSUNTO: ' . (utf8_decode($GetPost['assunto']));
$Mailer->AltBody .= ' MENSAGEM: ' . (utf8_decode($GetPost['msg']));


// adiciona destinatário (pode ser chamado inúmeras vezes)
$Mailer->AddAddress('contato@cidtrix.com.br');

//adciona uma cópia
//$Mailer->AddBcc($_POST['email']);
//
// adiciona um anexo
//$Mailer->AddAttachment('arquivo.pdf');

if ($Mailer->Send()) {
    echo 'Obrigado pelo Contato ' .utf8_decode($GetPost['nome']) . '!';
} else {
    echo 'Houve um erro ao enviar o e-mail:   '
    . $Mailer->ErrorInfo;
}