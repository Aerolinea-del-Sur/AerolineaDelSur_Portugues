<?php

namespace App\Services;

use Illuminate\Support\Facades\Log;

class GoogleScriptService
{
    protected $webAppUrl;

    public function __construct()
    {
        $this->webAppUrl = 'https://script.google.com/macros/s/AKfycbxh0VTTesmQPVbFxsUNgZy6Ld67aEUtiwGwfPD94ZgKs-VEPf6aYLIGLsBk1T3hOju1sQ/exec';
    }

    public function sendEmail($formData)
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