<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\GoogleScriptService;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    protected $googleScript;

    public function __construct(GoogleScriptService $googleScript)
    {
        $this->googleScript = $googleScript;
    }

    /**
     * Enviar email de contacto
     */
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
            ], [
                'firstName.required' => 'El nombre es obligatorio',
                'lastName.required' => 'El apellido es obligatorio',
                'email.required' => 'El email es obligatorio',
                'email.email' => 'El email no es válido',
                'subject.required' => 'El asunto es obligatorio',
                'message.required' => 'El mensaje es obligatorio',
                'message.min' => 'El mensaje debe tener al menos 10 caracteres'
            ]);

            Log::info('Datos validados:', $validated);

            // Enviar a Google Apps Script
            $result = $this->googleScript->sendEmail($validated);

            Log::info('Resultado de Google Script:', $result);

            // Verificar si la petición espera JSON (AJAX)
            if ($request->wantsJson() || $request->ajax()) {
                if ($result['success']) {
                    return response()->json([
                        'success' => true,
                        'message' => 'Mensaje enviado correctamente. Te responderemos pronto.'
                    ], 200);
                } else {
                    return response()->json([
                        'success' => false,
                        'message' => 'Error al enviar el mensaje',
                        'error' => $result['error'] ?? 'Error desconocido'
                    ], 500);
                }
            }

            // Si es una petición normal (form submit tradicional)
            if ($result['success']) {
                return redirect()->back()->with('success', 'Mensaje enviado correctamente. Te responderemos pronto.');
            } else {
                return redirect()->back()
                    ->with('error', 'Error al enviar el mensaje: ' . ($result['error'] ?? 'Error desconocido'))
                    ->withInput();
            }

        } catch (\Illuminate\Validation\ValidationException $e) {
            Log::warning('Error de validación:', ['errors' => $e->errors()]);

            if ($request->wantsJson() || $request->ajax()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Por favor corrige los errores del formulario',
                    'errors' => $e->errors()
                ], 422);
            }

            return redirect()->back()
                ->withErrors($e->errors())
                ->withInput();

        } catch (\Exception $e) {
            Log::error('Error en sendEmail:', [
                'message' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);

            if ($request->wantsJson() || $request->ajax()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Error del servidor. Por favor, inténtalo más tarde.',
                    'error' => config('app.debug') ? $e->getMessage() : null
                ], 500);
            }

            return redirect()->back()
                ->with('error', 'Error del servidor. Por favor, inténtalo más tarde.')
                ->withInput();
        }
    }
}