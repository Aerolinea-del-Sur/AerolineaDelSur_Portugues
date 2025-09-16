<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use App\Mail\ContactMail;

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
}