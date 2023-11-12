<?php
// Inclua o arquivo autoload.php do PHPMailer
require 'caminho_para_o_phpmailer/src/PHPMailer.php';
require 'caminho_para_o_phpmailer/src/SMTP.php';

// Crie uma instância do PHPMailer
$mail = new PHPMailer\PHPMailer\PHPMailer();

// Configurações do servidor SMTP
$mail->isSMTP();
$mail->Host       = 'smtp.seuservidor.com';
$mail->SMTPAuth   = true;
$mail->Username   = 'seu_email@dominio.com';
$mail->Password   = 'sua_senha';
$mail->SMTPSecure = 'tls';
$mail->Port       = 587;

// Configurações do e-mail
$mail->setFrom('seu_email@dominio.com', 'Seu Nome');
$mail->addAddress('destinatario@example.com', 'Nome do Destinatário');
$mail->Subject = 'Assunto do E-mail';
$mail->Body    = 'Corpo do E-mail';

// Envia o e-mail
if ($mail->send()) {
    echo 'E-mail enviado com sucesso!';
} else {
    echo 'Erro ao enviar o e-mail: ' . $mail->ErrorInfo;
}
?>
