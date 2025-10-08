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
            // 1. Verificar que los datos vengan bien
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email',
                'phone' => 'required|string|max:20',
                'aircraft' => 'required|string|max:100',
                'country' => 'required|string',
                'date' => 'nullable|date',
                'message' => 'nullable|string|max:1000'
            ]);

            // 2. Usar el servicio que ya tienes
            $service = new GoogleScriptService();
            $result = $service->sendEmail($validated);

            // 3. Si todo salió bien
            if ($result['success']) {
                return response()->json([
                    'success' => true,
                    'message' => '✅ Solicitud enviada correctamente. Te contactaremos pronto.'
                ]);
            } else {
                // 4. Si hubo error
                return response()->json([
                    'success' => false,
                    'message' => '❌ Error: ' . ($result['error'] ?? 'Error desconocido')
                ], 500);
            }

        } catch (\Illuminate\Validation\ValidationException $e) {
            // 5. Si el formulario tiene errores
            return response()->json([
                'success' => false,
                'message' => '❌ Error en el formulario: ' . implode(', ', $e->errors())
            ], 422);
        } catch (\Exception $e) {
            // 6. Si hay error del servidor
            return response()->json([
                'success' => false,
                'message' => '❌ Error del servidor. Por favor, inténtalo más tarde.'
            ], 500);
        }
    }
}