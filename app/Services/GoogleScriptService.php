<?php

namespace App\Services;

use Illuminate\Support\Facades\Log;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

class GoogleScriptService
{
    protected $webAppUrl;

    public function __construct()
    {
        $this->webAppUrl = config('services.google_script.url', 
            'https://script.google.com/macros/s/AKfycbyRqmprBsZFwxbuIe8CcDp_03L1KOs4-5gpfo0HjaUs29vPDVHtTqcAZqWIdsou6WncKw/exec'
        );
    }

    public function sendEmail(array $formData): array
    {
        try {
            $client = new Client([
                'timeout' => 30,
                'verify' => true,
                'http_errors' => false,
            ]);

            Log::info('📤 Enviando datos a Google Script', [
                'url' => $this->webAppUrl,
                'data' => $formData
            ]);

            $response = $client->post($this->webAppUrl, [
                'json' => $formData,
                'headers' => [
                    'Content-Type' => 'application/json',
                    'Accept' => 'application/json',
                ]
            ]);

            $statusCode = $response->getStatusCode();
            $body = (string) $response->getBody();

            Log::info('📥 Respuesta de Google Script', [
                'status' => $statusCode,
                'body' => $body
            ]);

            $result = json_decode($body, true);

            if (isset($result['success']) && $result['success'] === true) {
                return [
                    'success' => true,
                    'message' => $result['message'] ?? 'Email enviado correctamente',
                ];
            }

            return [
                'success' => false,
                'message' => $result['message'] ?? 'Error al procesar la solicitud',
                'error' => $result['error'] ?? 'Error desconocido'
            ];

        } catch (GuzzleException $e) {
            Log::error('❌ Error de conexión con Google Script', [
                'message' => $e->getMessage(),
                'code' => $e->getCode(),
                'trace' => $e->getTraceAsString()
            ]);

            return [
                'success' => false,
                'message' => 'No se pudo conectar con el servicio de email',
                'error' => config('app.debug') ? $e->getMessage() : 'Error de conexión'
            ];

        } catch (\Exception $e) {
            Log::error('❌ Error inesperado en Google Script Service', [
                'message' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);

            return [
                'success' => false,
                'message' => 'Ocurrió un error inesperado',
                'error' => config('app.debug') ? $e->getMessage() : 'Error del servidor'
            ];
        }
    }
}