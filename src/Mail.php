<?php
namespace Src;

use Config\Config;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

class Mail
{
    /**
     * @var PHPMailer
     */
    private PHPMailer $mail;

    // Ele irá chamar o PHPMailer assim que iniciar a classe
    public function __construct()
    {
        $this->mail = new PHPMailer();
    }

    // Função para enviar o email
    public function sendMail(string $title, string $body, string $recipient, string $recipientName = '')
    {
        try {

            // Aqui ele chama a função abaixo, que tem as configurações do PHPMailer
            $this->configMail();

            //Aqui ele recebe o email do destinatário
            $this->mail->addAddress($recipient, $recipientName);
            //Aqui você diz para o PHPMailer que o email aceita tags HTML
            $this->mail->isHTML(true);
            //Título do email
            $this->mail->Subject = $title;
            //Corpo do email
            $this->mail->Body    = $body;
            //Enviar o email
            $this->mail->send();
            echo 'Email eniviado com sucesso!';

        } catch (Exception $e) {
            echo "Erro ao enviar o email! Motivo: {$this->mail->ErrorInfo}";
            }
    }

    /**
     * @throws Exception
     */
    // Função apenas com as configurações do PHPMailer
    public function configMail(): void
    {
        $this->mail->SMTPDebug = SMTP::DEBUG_SERVER;
        $this->mail->isSMTP();
        $this->mail->Host       = Config::SENDGRID_SERVER;
        $this->mail->SMTPAuth   = true;
        $this->mail->Username   = Config::SENDGRID_USERNAME;
        $this->mail->Password   = Config::SENDGRID_PASSWORD;
        $this->mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $this->mail->Port       = 465;

        $this->mail->setFrom(Config::FROM_MAIL);
    }
}