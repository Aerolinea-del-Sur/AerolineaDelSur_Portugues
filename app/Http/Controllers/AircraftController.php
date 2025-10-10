<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\GoogleScriptService;

class AircraftController extends Controller
{
    public function sendEmail(Request $request)
    {
        try {
            $validated = $request->validate([
                'name'     => 'required|string|max:255',
                'email'    => 'required|email',
                'phone'    => 'required|string|max:30',
                'aircraft' => 'required|string|max:100',
                'country'  => 'required|string|max:100',
                'date'     => 'required|date',
                'message'  => 'nullable|string|max:2000'
            ]);

            $service = new GoogleScriptService();
            $result = $service->sendEmail($validated); // 👈 asegúrate de este nombre correcto

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
            return response()->json([
                'success' => false,
                'message' => '❌ Error en el formulario: ' . collect($e->errors())->flatten()->join(', ')
            ], 422);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => '❌ Error interno del servidor. Intenta nuevamente más tarde.'
            ], 500);
        }
    }
}
