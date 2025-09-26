<?php

namespace App\Email\Email;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Email 
{
    protected $to;
    protected $subject;
    protected $body;
    protected $attachments = [];

    public function setTo($email, $name = '')
    {
        $this->to = ['email' => $email, 'name' => $name];
        return $this;
    }

    public function setSubject($subject)
    {
        $this->subject = $subject;
        return $this;
    }

    public function setBody($body)
    {
        $this->body = $body;
        return $this;
    }

    public function addAttachment($path, $name)
    {
        $this->attachments[] = ['path' => $path, 'name' => $name];
        return $this;
    }

    public function send()
    {
        $mail = new PHPMailer(true);

        try {
            $mail->isSMTP();
            $mail->Host = env('MAIL_HOST', 'smtp.gmail.com');
            $mail->SMTPAuth = true;
            $mail->Username = env('MAIL_USERNAME');
            $mail->Password = env('MAIL_PASSWORD');
            $mail->SMTPSecure = env('MAIL_ENCRYPTION', 'tls');
            $mail->Port = env('MAIL_PORT', 587);

            $mail->setFrom(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
            $mail->addAddress($this->to['email'], $this->to['name']);

            foreach ($this->attachments as $attachment) {
                $mail->addAttachment($attachment['path'], $attachment['name']);
            }

            $mail->isHTML(true);
            $mail->Subject = $this->subject;
            $mail->Body = $this->body;
            $mail->AltBody = strip_tags($this->body);

            return $mail->send();
        } catch (Exception $e) {
            throw new \Exception("Error enviando correo: {$mail->ErrorInfo}");
        }
    }
}