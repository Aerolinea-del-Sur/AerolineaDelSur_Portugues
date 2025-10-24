<?php

namespace App\Services;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Support\Facades\Log;

class GoogleScriptService
{
    protected $webAppUrl;
    protected $timeout;

    public function __construct()
    {
        $this->webAppUrl = config('services.google_script.url', 
            'https://script.google.com/macros/s/AKfycbxpuymmF0ZZwuz8q828gJMzvAc3qmgjGAESI27EPWfhCcG8Ry2shjhlhDtBX1CXuEVI4Q/exec'
        );
        $this->timeout = 30; // Aumentado a 30 segundos
    }

    /**
     * Enviar email mediante Google Apps Script
     * 
     * @param array $formData
     * @return array
     */
    public function sendEmail(array $formData): array
    {
        try {
            Log::info('📤 Enviando datos a Google Script', [
                'url' => $this->webAppUrl,
                'data' => $formData
            ]);

            $client = new Client([
                'timeout' => $this->timeout,
                'verify' => true, // Cambiar a true para producción
                'http_errors' => false, // No lanzar excepción en errores HTTP
            ]);
            
            $response = $client->post($this->webAppUrl, [
                'json' => $formData,
                'headers' => [
                    'Content-Type' => 'application/json',
                    'Accept' => 'application/json',
                ]
            ]);
            
            $statusCode = $response->getStatusCode();
            $body = $response->getBody()->getContents();
            
            Log::info('📥 Respuesta de Google Script', [
                'status' => $statusCode,
                'body' => $body
            ]);

            // Intentar decodificar la respuesta
            $result = json_decode($body, true);
            
            if (json_last_error() !== JSON_ERROR_NONE) {
                Log::error('Error al decodificar JSON de Google Script', [
                    'error' => json_last_error_msg(),
                    'raw_body' => $body
                ]);
                
                return [
                    'success' => false,
                    'error' => 'Respuesta inválida del servidor de emails',
                    'details' => config('app.debug') ? $body : null
                ];
            }

            // Verificar si fue exitoso
            if ($statusCode >= 200 && $statusCode < 300 && ($result['success'] ?? false)) {
                Log::info('✅ Email enviado exitosamente');
                
                return [
                    'success' => true,
                    'message' => $result['message'] ?? 'Email enviado correctamente'
                ];
            }
            
            // Error en el script
            Log::warning('⚠️ Google Script reportó error', [
                'result' => $result
            ]);
            
            return [
                'success' => false,
                'error' => $result['error'] ?? $result['message'] ?? 'Error al enviar el email',
                'details' => config('app.debug') ? $result : null
            ];
            
        } catch (GuzzleException $e) {
            Log::error('❌ Error de conexión con Google Script', [
                'message' => $e->getMessage(),
                'code' => $e->getCode()
            ]);
            
            return [
                'success' => false,
                'error' => 'Error de conexión con el servidor de emails',
                'details' => config('app.debug') ? $e->getMessage() : null
            ];
            
        } catch (\Exception $e) {
            Log::error('❌ Error general en GoogleScriptService', [
                'message' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);
            
            return [
                'success' => false,
                'error' => 'Error inesperado al enviar el email',
                'details' => config('app.debug') ? $e->getMessage() : null
            ];
        }
    }

    /**
     * Probar la conexión con Google Apps Script
     * 
     * @return array
     */
    public function testConnection(): array
    {
        try {
            $client = new Client([
                'timeout' => 10,
                'verify' => true,
            ]);
            
            $response = $client->get($this->webAppUrl);
            
            return [
                'success' => true,
                'message' => 'Conexión exitosa',
                'status' => $response->getStatusCode()
            ];
            
        } catch (\Exception $e) {
            return [
                'success' => false,
                'error' => $e->getMessage()
            ];
        }
    }
}