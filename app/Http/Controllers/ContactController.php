<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\GoogleScriptService;

class ContactController extends Controller
{
    
    public function sendEmail(Request $request)
    {
        try {
            // Validación
            $validated = $request->validate([
                'firstName' => 'required|string|max:255',
                'lastName' => 'required|string|max:255',
                'email' => 'required|email',
                'phone' => 'nullable|string|max:20',
                'subject' => 'required|string|max:255',
                'message' => 'required|string|min:10'
            ]);

            // Enviar a Google Apps Script
            $service = new GoogleScriptService();
            $result = $service->sendEmail($validated);

            if ($result['success']) {
                return response()->json([
                    'success' => true,
                    'message' => '✅ Mensaje enviado correctamente. Te responderemos pronto.'
                ]);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => '❌ Error: ' . ($result['error'] ?? 'Error desconocido')
                ], 500);
            }

        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json([
                'success' => false,
                'message' => '❌ Error en el formulario: ' . implode(', ', $e->errors())
            ], 422);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => '❌ Error del servidor. Por favor, inténtalo más tarde.'
            ], 500);
        }
        // En lugar de retornar JSON, redirige
        return redirect(/contacto)->back()->with('success', 'Mensaje enviado correctamente. Te responderemos pronto.');
    }
}