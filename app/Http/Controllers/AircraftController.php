<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class AircraftController extends Controller
{
    /**
     * Maneja la solicitud de información del avión.
     */
    public function sendEmail(Request $request)
    {
        try {
            // ✅ Validar los datos del formulario
            $validated = $request->validate([
                'name' => 'required|string|max:120',
                'email' => 'required|email|max:120',
                'phone' => 'required|string|max:30',
                'country' => 'required|string|max:50',
                'date' => 'required|date',
                'message' => 'nullable|string|max:1000',
                'aircraft' => 'required|string|max:120',
            ]);

            // ✅ Construir el mensaje del correo
            $emailData = [
                'subject' => 'Solicitud de Información - ' . $validated['aircraft'],
                'from_name' => $validated['name'],
                'from_email' => $validated['email'],
                'phone' => $validated['phone'],
                'country' => $validated['country'],
                'date' => $validated['date'],
                'message_content' => $validated['message'] ?? '(Sin mensaje adicional)',
                'aircraft' => $validated['aircraft'],
            ];

            // ✅ Enviar correo
            Mail::send('emails.aircraft_request', $emailData, function ($mail) use ($emailData) {
                $mail->to('contacto@aerolineadelsur.com.pe') // 📩 Cambia este correo al tuyo real
                     ->from($emailData['from_email'], $emailData['from_name'])
                     ->subject($emailData['subject']);
            });

            // ✅ Verificar si falló el envío
            if (count(Mail::failures()) > 0) {
                throw new \Exception('No se pudo enviar el correo. Intente nuevamente.');
            }

            return response()->json([
                'success' => true,
                'message' => '✅ Solicitud enviada correctamente. Nos pondremos en contacto contigo pronto.'
            ]);
        } catch (\Illuminate\Validation\ValidationException $e) {
            // ⚠️ Errores de validación
            return response()->json([
                'success' => false,
                'message' => 'Error de validación: ' . implode(', ', $e->validator->errors()->all())
            ], 422);
        } catch (\Exception $e) {
            // ⚠️ Otros errores
            Log::error('Error al enviar solicitud de aeronave: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'message' => '❌ Hubo un problema al enviar el correo: ' . $e->getMessage()
            ], 500);
        }
    }
}
