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
        $client->setAccessType('offline');
        $client->setPrompt('consent');

        return redirect($client->createAuthUrl());
    }

    public function handleGoogleCallback()
    {
        $client = new Google_Client();
        $client->setAuthConfig(storage_path('app/credentials.json'));
        $client->setRedirectUri(route('gmail.callback'));

        $code = request()->get('code');
        $token = $client->fetchAccessTokenWithAuthCode($code);

        Storage::disk('local')->put('token.json', json_encode($token));

        return response()->json([
            'message' => 'Autenticación exitosa',
            'token' => $token
        ]);
    }
}
