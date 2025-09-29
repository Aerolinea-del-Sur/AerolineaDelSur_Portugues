<?php

namespace App\Services;

use Google\Client;
use Google\Service\Gmail;
use Google\Service\Gmail\Message;

class GmailService
{
    protected $client;

    public function __construct()
    {
        $this->client = new Client();
        $this->client->setClientId(config('services.google.client_id'));
        $this->client->setClientSecret(config('services.google.client_secret'));
        $this->client->setRedirectUri(config('services.google.redirect'));
        $this->client->addScope(Gmail::GMAIL_SEND);
        $this->client->setAccessType('offline');
        $this->client->setPrompt('consent');
    }

    // Obtener URL de autenticación (solo una vez)
    public function getAuthUrl()
    {
        return $this->client->createAuthUrl();
    }

    // Obtener token con el código
    public function getTokenWithCode($code)
    {
        return $this->client->fetchAccessTokenWithAuthCode($code);
    }

    // Configurar token
    public function setAccessToken($token)
    {
        $this->client->setAccessToken($token);
    }

    // Verificar si el token expiró
    public function isAccessTokenExpired()
    {
        return $this->client->isAccessTokenExpired();
    }

    // Refrescar token
    public function refreshToken($refreshToken)
    {
        return $this->client->refreshToken($refreshToken);
    }

    // MÉTODO PRINCIPAL: Enviar email
    public function sendEmail($to, $subject, $messageBody)
    {
        try {
            $service = new Gmail($this->client);
            
            // Crear el mensaje
            $message = new Message();
            
            // Construir el email en formato MIME
            $rawMessage = "To: {$to}\r\n";
            $rawMessage .= "Subject: {$subject}\r\n";
            $rawMessage .= "Content-Type: text/html; charset=utf-8\r\n";
            $rawMessage .= "\r\n";
            $rawMessage .= $messageBody;
            
            // Codificar en base64 URL-safe
            $encodedMessage = base64_encode($rawMessage);
            $encodedMessage = str_replace(['+', '/', '='], ['-', '_', ''], $encodedMessage);
            
            $message->setRaw($encodedMessage);
            
            // Enviar el email
            $result = $service->users_messages->send('me', $message);
            
            return [
                'success' => true,
                'message_id' => $result->getId()
            ];
            
        } catch (\Exception $e) {
            return [
                'success' => false,
                'error' => $e->getMessage()
            ];
        }
    }
}