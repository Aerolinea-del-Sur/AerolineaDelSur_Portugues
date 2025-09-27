<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Google\Client;
use Google\Service\Gmail;
use Google\Service\Gmail\Message;

class ContactController extends Controller
{
    protected $client;
    protected $service;

    public function __construct()
    {
        $this->client = new Client();
        $this->testGmailAPI();
        $this->service = new Gmail($this->client);
    }

    protected function testGmailAPI()
    {
        $this->client->setApplicationName('Aerolinea Del Sur');
        $this->client->setClientId(config('google.oauth.client_id'));
        $this->client->setClientSecret(config('google.oauth.client_secret'));
        $this->client->setRedirectUri(config('google.oauth.redirect_uri'));
        $this->client->setAccessType('offline');
        $this->client->setPrompt('consent');
        $this->client->setScopes([Gmail::GMAIL_SEND]);
        
        // Usar el método correcto para establecer el token
        if (config('google.oauth.refresh_token')) {
            $this->client->refreshToken(config('google.oauth.refresh_token'));
        }
    }

    public function testEmail()
    {
        try {
            $message = new Message();
            $rawMessage = "From: me\r\n";
            $rawMessage .= "To: " . config('google.oauth.client_id') . "\r\n";
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
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ], 500);
        }
    }
    public function enviarMensajePrueba()
    {
        try {
            $message = new Message();
            $rawMessage = "From: Aerolinea Del Sur <me>\r\n";
            $rawMessage .= "To: test@example.com\r\n";
            $rawMessage .= "Subject: Mensaje de Prueba - Aerolinea Del Sur\r\n";
            $rawMessage .= "Content-Type: text/html; charset=utf-8\r\n\r\n";
            $rawMessage .= "<h1>Prueba de Envío de Correo</h1>";
            $rawMessage .= "<p>Este es un mensaje de prueba enviado desde la API de Gmail.</p>";
            $rawMessage .= "<p>Fecha y hora: " . date('Y-m-d H:i:s') . "</p>";

            $message->setRaw(base64_encode($rawMessage));

            $result = $this->service->users_messages->send('me', $message);

            return response()->json([
                'success' => true,
                'message' => 'Mensaje de prueba enviado correctamente',
                'messageId' => $result->getId(),
                'timestamp' => now()
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ], 500);
        }
    }
}