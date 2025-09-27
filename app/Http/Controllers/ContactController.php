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
        $this->configureGoogleClient();
        $this->service = new Gmail($this->client);
    }

    protected function configureGoogleClient()
    {
        $this->client->setApplicationName('Aerolinea Del Sur');
        $this->client->setClientId(config('google.client_id'));
        $this->client->setClientSecret(config('google.client_secret'));
        $this->client->setRedirectUri(config('google.redirect_uri'));
        $this->client->setAccessType('offline');
        $this->client->setPrompt('select_account consent');
        $this->client->setScopes([Gmail::GMAIL_SEND]);
        
        if (config('google.refresh_token')) {
            $this->client->setRefreshToken(config('google.refresh_token'));
        }
    }

    public function getMail(Request $request)
    {
        try {
            $email = $this->createMessage(
                'testeo@aerolineadelsur.com',
                $request->input('email'),
                $request->input('subject'),
                $this->createEmailBody($request->all())
            );

            $this->service->users_messages->send('me', $email);

            return response()->json([
                'success' => true,
                'message' => 'Mensaje enviado exitosamente'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error al enviar el mensaje: ' . $e->getMessage()
            ], 500);
        }
    }

    private function createMessage($from, $to, $subject, $messageText)
    {
        $message = new Message();
        $rawMessageString = "From: {$from}\r\n";
        $rawMessageString .= "To: {$to}\r\n";
        $rawMessageString .= "Subject: {$subject}\r\n";
        $rawMessageString .= "MIME-Version: 1.0\r\n";
        $rawMessageString .= "Content-Type: text/html; charset=utf-8\r\n";
        $rawMessageString .= "\r\n" . $messageText;

        $rawMessage = base64_encode($rawMessageString);
        $message->setRaw($rawMessage);

        return $message;
    }

    private function createEmailBody($data)
    {
        return view('emails.contact', $data)->render();
    }
}
?>