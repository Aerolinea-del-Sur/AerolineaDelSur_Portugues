<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\GoogleScriptService;

class AircraftController extends Controller
{
    public function sendEmail(Request $request)
    {
        try {
            // Validación de los datos del formulario
            $validated = $request->validate([
                'name'     => 'required|string|max:255',
                'email'    => 'required|email',
                'phone'    => 'required|string|max:30',
                'aircraft' => 'required|string|max:100',
                'country'  => 'required|string|max:100',
                'date'     => 'required|date',
                'message'  => 'nullable|string|max:2000'
            ]);

            // Servicio que envía el correo
            $service = new GoogleScriptService();
            $result = $service->sendEmail($validated); // 👈 asegúrate de que este método exista

            if (isset($result['success']) && $result['success'] === true) {
                return response()->json([
                    'success' => true,
                    'message' => '✅ Tu solicitud fue enviada correctamente. Te contactaremos pronto.'
                ]);
            }

            // Si no hubo éxito
            return response()->json([
                'success' => false,
                'message' => '❌ Error al enviar: ' . ($result['error'] ?? 'Error desconocido.')
            ], 500);

        } catch (\Illuminate\Validation\ValidationException $e) {
            // Error de validación
            return response()->json([
                'success' => false,
                'message' => '❌ Error en el formulario: ' . collect($e->errors())->flatten()->join(', ')
            ], 422);

        } catch (\Exception $e) {
            // Error inesperado
            return response()->json([
                'success' => false,
                'message' => '❌ Error interno del servidor. Intenta nuevamente más tarde.',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
