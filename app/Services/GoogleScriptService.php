<?php

namespace App\Services;

use Illuminate\Support\Facades\Log;

class GoogleScriptService
{
    protected $webAppUrl;

    public function __construct()
    {
        // ⚠️ PEGA AQUÍ TU URL DE GOOGLE SCRIPT (sin espacio al final)
        $this->webAppUrl = 'https://script.google.com/macros/s/AKfycbysAjB8SK9DBUtQrS1sHfhVXVrfyA8O1UNGbTHBZQaSeydOGFkzRYniCbzL1-j2oZEGfw/exec';
    }

    public function sendEmail($formData)
    {
        try {
            $client = new \GuzzleHttp\Client([
                'timeout' => 15,
                'verify' => false, // Para evitar problemas SSL en desarrollo
            ]);
            
            Log::info('📤 Enviando datos a Google Script:', $formData);
            
            $response = $client->post($this->webAppUrl, [
                'json' => $formData,
                'headers' => [
                    'Content-Type' => 'application/json',
                    'User-Agent' => 'AerolineaDelSur-Contact/1.0'
                ]
            ]);
            
            $result = json_decode($response->getBody(), true);
            
            Log::info('✅ Respuesta Google Script:', $result);
            
            return [
                'success' => $result['success'] ?? false,
                'message' => $result['message'] ?? 'Email enviado correctamente',
                'error' => $result['error'] ?? null
            ];
            
        } catch (\GuzzleHttp\Exception\RequestException $e) {
            $errorMessage = 'Error de conexión: ';
            if ($e->hasResponse()) {
                $errorMessage .= $e->getResponse()->getBody();
            } else {
                $errorMessage .= $e->getMessage();
            }
            
            Log::error('❌ Error Google Script Request: ' . $errorMessage);
            
            return [
                'success' => false,
                'error' => $errorMessage
            ];
        } catch (\Exception $e) {
            Log::error('❌ Error Google Script: ' . $e->getMessage());
            
            return [
                'success' => false,
                'error' => 'Error: ' . $e->getMessage()
            ];
        }
    }
}