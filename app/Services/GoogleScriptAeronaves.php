<?php

namespace App\Services;

use Illuminate\Support\Facades\Log;
use GuzzleHttp\Client;

class GoogleScriptAeronaves
{
    protected $webAppUrl;

    public function __construct()
    {
        $this->webAppUrl = 'https://script.google.com/macros/s/AKfycbzvND4eaqiYydcLAMwSuBIzi07mktUi7fdBm_O38e68AqOleUN6ZnZLRdgR4EP4h3-Uxg/exec';
    }

    public function sendEmail(array $data)
    {
        try {
            $client = new Client([
                'timeout' => 15,
                'verify' => false,
            ]);

            $response = $client->post($this->webAppUrl, [
                'json' => $data,
                'headers' => [
                    'Content-Type' => 'application/json',
                ],
            ]);

            $result = json_decode($response->getBody(), true);

            return [
                'success' => $result['success'] ?? false,
                'message' => $result['message'] ?? 'Email enviado correctamente',
                'error' => $result['error'] ?? null,
            ];
        } catch (\Exception $e) {
            Log::error('Error Google Script: ' . $e->getMessage());
            return [
                'success' => false,
                'error' => 'Error: ' . $e->getMessage(),
            ];
        }
    }
}
