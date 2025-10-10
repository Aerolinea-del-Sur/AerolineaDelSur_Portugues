<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class GoogleScriptService
{
    protected $webAppUrl;

    public function __construct()
    {
        $this->webAppUrl = 'https://script.google.com/macros/s/AKfycbxlTcuUuJKsLsi-BinyqkCEqttZAKjwCxZ6FImAee3ctMOw31bSnaZSeikj5Zrhvb_bpQ/exec';
    }
    public function sendEmail(array $data)
    {
        try {
            $client = new \GuzzleHttp\Client([
                'timeout' => 15,
                'verify' => false,
            ]);
            
            $response = $client->post($this->webAppUrl, [
                'json' => $formData,
                'headers' => [
                    'Content-Type' => 'application/json',
                ]
            ]);
            
            $result = json_decode($response->getBody(), true);
            
            return [
                'success' => $result['success'] ?? false,
                'message' => $result['message'] ?? 'Email enviado correctamente',
                'error' => $result['error'] ?? null
            ];
            
        } catch (\Exception $e) {
            Log::error('Error Google Script: ' . $e->getMessage());
            
            return [
                'success' => false,
                'error' => 'Error: ' . $e->getMessage()
            ];
        }
    }
}
