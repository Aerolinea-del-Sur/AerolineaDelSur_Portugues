<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class AircraftController extends Controller
{
    public function sendEmail(Request $request)
    {
        try {
            $validated = $request->validate([
                'name'     => 'required|string|max:255',
                'email'    => 'required|email|max:120',
                'phone'    => 'required|string|max:30',
                'aircraft' => 'required|string|max:100',
                'country'  => 'required|string|max:100',
                'date'     => 'required|date',
                'message'  => 'nullable|string|max:2000'
            ]);

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

            // 👇 AQUÍ ESTÁ LA PARTE QUE DA EL ERROR
            Mail::send('emails.aircraft_request', $emailData, function ($mail) use ($emailData) {
                $mail->to('contacto@aerolineadelsur.com.pe')
                     ->from($emailData['from_email'], $emailData['from_name'])
                     ->subject($emailData['subject']);
            });

            return response()->json([
                'success' => true,
                'message' => '✅ Tu solicitud fue enviada correctamente. Te contactaremos pronto.'
            ]);

        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json([
                'success' => false,
                'message' => '❌ Error de validación: ' . implode(', ', $e->validator->errors()->all())
            ], 422);
        } catch (\Exception $e) {
            Log::error('Error al enviar correo: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'message' => '❌ Hubo un problema al enviar el correo: ' . $e->getMessage()
            ], 500);
        }
    }
}
