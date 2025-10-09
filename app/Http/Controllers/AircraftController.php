<?php
// app/Http/Controllers/AircraftController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\GoogleScriptService;

class AircraftController extends Controller
{
    public function submitAircraftRequest(Request $request)
    {
        try {
            // 🎯 PASO 1: OBTENER DATOS COMO JSON
            $datos = $request->json()->all();
            
            // Si no llegan como JSON, intentar de forma normal
            if (empty($datos)) {
                $datos = $request->all();
            }
            
            \Log::info('📦 DATOS RECIBIDOS EN CONTROLADOR:', $datos);

            // 🎯 PASO 2: Validar datos MANUALMENTE (más fácil)
            $errores = [];
            
            if (empty($datos['name'])) {
                $errores[] = 'El nombre es requerido';
            }
            if (empty($datos['email'])) {
                $errores[] = 'El email es requerido';
            }
            if (empty($datos['phone'])) {
                $errores[] = 'El teléfono es requerido';
            }
            if (empty($datos['country'])) {
                $errores[] = 'El país es requerido';
            }
            if (empty($datos['aircraft'])) {
                $errores[] = 'El modelo de aeronave es requerido';
            }
            
            if (!empty($errores)) {
                \Log::error('❌ ERRORES DE VALIDACIÓN:', $errores);
                return response()->json([
                    'success' => false,
                    'message' => '❌ Error: ' . $errores[0]
                ], 422);
            }

            // 🎯 PASO 3: Preparar datos para enviar
            $datosParaEnviar = [
                'name' => $datos['name'],
                'email' => $datos['email'],
                'phone' => $datos['phone'],
                'aircraft' => $datos['aircraft'],
                'country' => $datos['country'],
                'date' => $datos['date'] ?? '',
                'message' => $datos['message'] ?? ''
            ];

            \Log::info('✅ DATOS PREPARADOS PARA GOOGLE:', $datosParaEnviar);

            // 🎯 PASO 4: Enviar a Google
            $service = new GoogleScriptService();
            $result = $service->sendEmail($datosParaEnviar);

            \Log::info('📧 RESULTADO DE GOOGLE:', $result);

            if ($result['success']) {
                return response()->json([
                    'success' => true,
                    'message' => '✅ Solicitud enviada correctamente. Te contactaremos pronto.'
                ]);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => '❌ ' . ($result['error'] ?? 'Error al enviar la solicitud')
                ], 500);
            }

        } catch (\Exception $e) {
            \Log::error('❌ ERROR EN CONTROLADOR: ' . $e->getMessage());
            \Log::error('🔍 TRAZA:', $e->getTrace());
            
            return response()->json([
                'success' => false,
                'message' => '❌ Error del servidor: ' . $e->getMessage()
            ], 500);
        }
    }
}