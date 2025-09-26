<?php

namespace App\Email\PHPMailerMessage;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class PHPMailerMessage
{
    public function create()
    {
        $mail = new PHPMailer(true);
        define('IMAGES', public_path('images') . '/');

        try {
            $mail->setFrom(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
            $mail->addAddress(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
            
            // Añadir imagen embebida
            if (file_exists(IMAGES . 'Smiley.png')) {
                $mail->addEmbeddedImage(IMAGES . 'Smiley.png', 'smiley');
            }

            $mail->isHTML(true);
            $mail->Subject = 'Here is the subject';
            $mail->Body    = 'This is the HTML message body <b>in bold!</b><p>
            <img style="height: 100px; width: auto;" src="cid:smiley"></p>';
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->preSend();

            return $mail->getSentMIMEMessage();
        } catch (Exception $e) {
            throw new \Exception("Error creando mensaje: {$mail->ErrorInfo}");
        }
    }
}