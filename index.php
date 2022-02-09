<?php
require_once 'vendor/autoload.php';
use Src\Mail;

$mailer = new Mail();

// Aqui você define o título do email
$titulo = 'Opa!';
// Aqui é o corpo do email
$corpo = 'Tudo bem com você?';
// O email do destinatário
$destinatario = 'marcelonralves@gmail.com';
// Esse campo não é obrigatório, mas é o nome do destinatário, é interessante preencher :D
$destinatarioNome = 'Marcelo';

// Aqui chama a classe Mail (src/Mail) e aciona o Método sendMail
$mailer->sendMail($titulo, $corpo, $destinatario, $destinatarioNome);