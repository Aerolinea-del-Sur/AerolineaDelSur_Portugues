<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use App\Mail\ContactMail;
use App\Mail\AircraftInquiryMail;

class ContactController extends Controller
{
    public function sendContact(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'firstName' => 'required|string|min:2|max:30|regex:/^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/',
            'lastName' => 'required|string|min:2|max:30|regex:/^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|regex:/^[+]?[0-9]{8,15}$/',
            'subject' => 'required|string|max:100',
            'message' => 'required|string|min:10|max:1000'
        ], [
            'firstName.required' => 'El nombre es obligatorio',
            'firstName.regex' => 'El nombre solo puede contener letras',
            'lastName.required' => 'El apellido es obligatorio',
            'lastName.regex' => 'El apellido solo puede contener letras',
            'email.required' => 'El correo electrónico es obligatorio',
            'email.email' => 'Por favor, ingresa un correo electrónico válido',
            'phone.regex' => 'El teléfono debe tener entre 8 y 15 dígitos',
            'subject.required' => 'Por favor, selecciona un asunto',
            'message.required' => 'El mensaje es obligatorio',
            'message.min' => 'El mensaje debe tener al menos 10 caracteres'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            $contactData = $request->only(['firstName', 'lastName', 'email', 'phone', 'subject', 'message']);
            
            Mail::to(config('mail.from.address'))
                ->send(new ContactMail($contactData));

            return response()->json([
                'success' => true,
                'message' => 'Mensaje enviado correctamente. Te responderemos pronto.'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error al enviar el mensaje. Por favor, inténtalo de nuevo.'
            ], 500);
        }
    }

    public function sendAircraftInquiry(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|min:2|max:50|regex:/^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|regex:/^[+]?[0-9]{8,15}$/',
            'aircraft' => 'required|string|max:100',
            'departure_date' => 'required|date|after:today',
            'return_date' => 'nullable|date|after:departure_date',
            'passengers' => 'required|integer|min:1|max:20',
            'departure_city' => 'required|string|max:100',
            'destination_city' => 'required|string|max:100',
            'message' => 'nullable|string|max:500'
        ], [
            'name.required' => 'El nombre es obligatorio',
            'name.regex' => 'El nombre solo puede contener letras',
            'email.required' => 'El correo electrónico es obligatorio',
            'email.email' => 'Por favor, ingresa un correo electrónico válido',
            'phone.required' => 'El teléfono es obligatorio',
            'phone.regex' => 'El teléfono debe tener entre 8 y 15 dígitos',
            'aircraft.required' => 'Selecciona una aeronave',
            'departure_date.required' => 'La fecha de salida es obligatoria',
            'departure_date.after' => 'La fecha de salida debe ser posterior a hoy',
            'return_date.after' => 'La fecha de retorno debe ser posterior a la fecha de salida',
            'passengers.required' => 'El número de pasajeros es obligatorio',
            'passengers.min' => 'Debe haber al menos 1 pasajero',
            'passengers.max' => 'Máximo 20 pasajeros permitidos',
            'departure_city.required' => 'La ciudad de salida es obligatoria',
            'destination_city.required' => 'La ciudad de destino es obligatoria'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            $inquiryData = $request->all();
            
            Mail::to(config('mail.from.address'))
                ->send(new AircraftInquiryMail($inquiryData));

            return response()->json([
                'success' => true,
                'message' => 'Consulta enviada correctamente. Te contactaremos pronto con la información solicitada.'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error al enviar la consulta. Por favor, inténtalo de nuevo.'
            ], 500);
        }
    }
}