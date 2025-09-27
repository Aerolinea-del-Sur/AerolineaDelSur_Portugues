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
        $this->configureClient();
        $this->service = new Gmail($this->client);
    }

    protected function configureClient()
    {
        try {
            $this->client->setApplicationName('Aerolinea Del Sur');
            $this->client->setClientId(config('google.oauth.client_id'));
            $this->client->setClientSecret(config('google.oauth.client_secret'));
            $this->client->setRedirectUri(config('google.oauth.redirect_uri'));
            $this->client->setAccessType('offline');
            $this->client->setPrompt('consent');
            $this->client->setScopes([Gmail::GMAIL_SEND]);
            
            // Usar el refresh token para obtener un nuevo access token
            if (config('google.oauth.refresh_token')) {
                $this->client->fetchAccessTokenWithRefreshToken(config('google.oauth.refresh_token'));
            }
        } catch (\Exception $e) {
            \Log::error('Error configurando cliente Gmail: ' . $e->getMessage());
            throw $e;
        }
    }

    public function enviarMensajePrueba()
    {
        try {
            // Verificar si tenemos un token válido
            if (!$this->client->isAccessTokenExpired()) {
                $this->client->fetchAccessTokenWithRefreshToken($this->client->getRefreshToken());
            }

            $message = new Message();
            $rawMessage = "From: me\r\n";
            $rawMessage .= "To: test@example.com\r\n";
            $rawMessage .= "Subject: Prueba de API Gmail\r\n";
            $rawMessage .= "Content-Type: text/html; charset=utf-8\r\n\r\n";
            $rawMessage .= "<h1>Prueba de Envío</h1>";
            $rawMessage .= "<p>Este es un mensaje de prueba desde la API de Gmail.</p>";

            $message->setRaw(base64_encode($rawMessage));

            $result = $this->service->users_messages->send('me', $message);

            return response()->json([
                'success' => true,
                'message' => 'Mensaje enviado correctamente',
                'messageId' => $result->getId()
            ]);
        } catch (\Exception $e) {
            \Log::error('Error enviando mensaje: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ], 500);
        }
    }
}