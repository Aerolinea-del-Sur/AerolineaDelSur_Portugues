<?php

namespace App\Services;

use Illuminate\Support\Facades\Log;

class GoogleScriptService
{
    protected $webAppUrl;

    public function __construct()
    {
        $this->webAppUrl = 'https://script.google.com/macros/s/AKfycbw_oIzpr-i4_1sXRnuPTg3cGrQrnJJBJjck2dsaNZ5E-6D4Az7EwBXS8qwnednX4MZVCg/exec';
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