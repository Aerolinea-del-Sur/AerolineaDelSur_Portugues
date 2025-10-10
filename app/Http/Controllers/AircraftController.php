<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\GoogleScriptService;

class AircraftController extends Controller
{
    public function sendAircraft (Request $request)
    {
        try {
            // ✅ Validación de los campos según tu formulario
            $validated = $request->validate([
                'name'     => 'required|string|max:255',
                'email'    => 'required|email',
                'phone'    => 'required|string|max:30',
                'aircraft' => 'required|string|max:100',
                'country'  => 'required|string|max:100',
                'date'     => 'required|date',
                'message'  => 'nullable|string|max:2000'
            ]);

            // ✅ Enviar datos a tu servicio (Google Apps Script o email)
            $service = new GoogleScriptService();
            $result = $service->sendAircraft($validated);

            // ✅ Manejo de respuesta
            if ($result['success']) {
                return response()->json([
                    'success' => true,
                    'message' => '✅ Tu solicitud fue enviada correctamente. Te contactaremos pronto.'
                ]);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => '❌ Error al enviar: ' . ($result['error'] ?? 'Error desconocido.')
                ], 500);
            }

        } catch (\Illuminate\Validation\ValidationException $e) {
            // Errores de validación
            return response()->json([
                'success' => false,
                'message' => '❌ Error en el formulario: ' . collect($e->errors())->flatten()->join(', ')
            ], 422);

        } catch (\Exception $e) {
            // Errores generales
            return response()->json([
                'success' => false,
                'message' => '❌ Error interno del servidor. Intenta nuevamente más tarde.'
            ], 500);
        }
    }
}
