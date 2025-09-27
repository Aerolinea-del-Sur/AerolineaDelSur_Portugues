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
            // Configuración básica del cliente
            $this->client->setApplicationName('Aerolinea Del Sur');
            $this->client->setClientId(config('google.oauth.client_id'));
            $this->client->setClientSecret(config('google.oauth.client_secret'));
            $this->client->setRedirectUri(config('google.oauth.redirect_uri'));
            
            // Configuración de OAuth2
            $this->client->setAccessType('offline');
            $this->client->setPrompt('consent');
            $this->client->setScopes([
                'https://www.googleapis.com/auth/gmail.send',
                'https://mail.google.com/'
            ]);

            // Verificar y refrescar el token
            if (config('google.oauth.refresh_token')) {
                try {
                    $accessToken = $this->client->fetchAccessTokenWithRefreshToken(
                        config('google.oauth.refresh_token')
                    );
                    
                    if (isset($accessToken['access_token'])) {
                        $this->client->setAccessToken($accessToken);
                    }
                } catch (\Exception $e) {
                    \Log::error('Error refreshing token: ' . $e->getMessage());
                    throw $e;
                }
            }
        } catch (\Exception $e) {
            \Log::error('Error in configureClient: ' . $e->getMessage());
            throw $e;
        }
    }

    public function enviarMensajePrueba()
    {
        try {
            // Verificar autenticación
            if ($this->client->isAccessTokenExpired()) {
                $this->client->fetchAccessTokenWithRefreshToken(
                    $this->client->getRefreshToken()
                );
            }

            // Crear mensaje
            $message = new Message();
            $rawMessage = "From: me\r\n";
            $rawMessage .= "To: test@example.com\r\n";
            $rawMessage .= "Subject: Prueba de API Gmail\r\n";
            $rawMessage .= "Content-Type: text/html; charset=utf-8\r\n\r\n";
            $rawMessage .= "<h1>Prueba de Envío</h1>";
            $rawMessage .= "<p>Este es un mensaje de prueba enviado a las " . date('Y-m-d H:i:s') . "</p>";

            $message->setRaw(base64_encode($rawMessage));

            // Enviar mensaje
            $result = $this->service->users_messages->send('me', $message);

            return response()->json([
                'success' => true,
                'message' => 'Mensaje enviado correctamente',
                'messageId' => $result->getId(),
                'timestamp' => now()
            ]);

        } catch (\Exception $e) {
            \Log::error('Error sending message: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ], 500);
        }
    }
}