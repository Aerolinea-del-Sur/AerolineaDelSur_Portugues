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
            // 🎯 PASO 1: VER QUÉ DATOS LLEGAN
            \Log::info('📦 DATOS RECIBIDOS:', $request->all());
            
            // 🎯 PASO 2: Validar datos de forma SIMPLE
            $validated = $request->validate([
                'name' => 'required|string',
                'email' => 'required|email',
                'phone' => 'required|string',
                'aircraft' => 'required|string',
                'country' => 'required|string',
                'date' => 'nullable|date',
                'message' => 'nullable|string'
            ]);

            \Log::info('✅ DATOS VALIDADOS:', $validated);

            // 🎯 PASO 3: Enviar a Google
            $service = new GoogleScriptService();
            $result = $service->sendEmail($validated);

            \Log::info('📧 RESULTADO GOOGLE:', $result);

            if ($result['success']) {
                return response()->json([
                    'success' => true,
                    'message' => '✅ Solicitud enviada correctamente'
                ]);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => '❌ ' . ($result['error'] ?? 'Error al enviar')
                ], 500);
            }

        } catch (\Illuminate\Validation\ValidationException $e) {
            \Log::error('❌ ERROR VALIDACIÓN:', $e->errors());
            
            return response()->json([
                'success' => false,
                'message' => '❌ Faltan campos: ' . implode(', ', array_keys($e->errors()))
            ], 422);
            
        } catch (\Exception $e) {
            \Log::error('❌ ERROR SERVIDOR: ' . $e->getMessage());
            
            return response()->json([
                'success' => false,
                'message' => '❌ Error del servidor'
            ], 500);
        }
    }
}