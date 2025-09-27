<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Google_Client;
use Google\Service\Gmail;
use Google\Service\Gmail\Message;

class ContactController extends Controller
{
    protected $client;
    protected $service;

    public function __construct()
    {
        $this->client = new Google_Client();
        $this->configureClient();
        $this->service = new Gmail($this->client);
    }

    protected function configureClient()
    {
        $this->client->setClientId(config('google.oauth.client_id'));
        $this->client->setClientSecret(config('google.oauth.client_secret'));
        $this->client->setRedirectUri(config('google.oauth.redirect_uri'));
        $this->client->setAccessType('offline');
        $this->client->setScopes([Gmail::GMAIL_SEND]);
        $this->client->setRefreshToken(config('google.oauth.refresh_token'));
    }

    public function testEmail()
    {
        try {
            $message = new Message();
            $rawMessage = "From: me\r\n";
            $rawMessage .= "To: tu_correo@ejemplo.com\r\n";
            $rawMessage .= "Subject: Prueba de API Gmail\r\n\r\n";
            $rawMessage .= "Este es un correo de prueba enviado desde la API de Gmail.";

            $message->setRaw(base64_encode($rawMessage));

            $result = $this->service->users_messages->send('me', $message);

            return response()->json([
                'success' => true,
                'message' => 'Correo enviado correctamente',
                'messageId' => $result->getId()
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'error' => $e->getMessage()
            ], 500);
        }
    }
}