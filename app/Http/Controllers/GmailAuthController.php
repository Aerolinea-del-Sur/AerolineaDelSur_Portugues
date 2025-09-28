<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Google_Client;
use Illuminate\Support\Facades\Storage;

class GmailAuthController extends Controller
{
    public function redirectToGoogle()
    {
        $client = new Google_Client();
        $client->setAuthConfig(storage_path('app/credentials.json'));
        $client->setRedirectUri(route('gmail.callback'));
        $client->addScope('https://www.googleapis.com/auth/gmail.modify');
        $client->setAccessType('offline'); // <- Necesario para refresh_token
        $client->setPrompt('consent'); // <- Obligatorio para forzar el refresh_token

        $authUrl = $client->createAuthUrl();

        return redirect($authUrl);
    }

    public function handleGoogleCallback()
    {
        $client = new Google_Client();
        $client->setAuthConfig(storage_path('app/credentials.json'));
        $client->setRedirectUri(route('gmail.callback'));

        $code = request()->get('code');

        $token = $client->fetchAccessTokenWithAuthCode($code);

        if (isset($token['error'])) {
            return response()->json(['error' => $token['error']]);
        }

        // 🔥 Aquí tienes el refresh_token y access_token
        Storage::disk('local')->put('token.json', json_encode($token));

        return response()->json([
            'message' => 'Autenticación exitosa',
            'token' => $token, // Puedes ver el refresh_token aquí
        ]);
    }
}