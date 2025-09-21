<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\envioMail;
use Mail;
/*
use App\Mail\envioMail;
use Illuminate\Support\Facades\Mail;

use Illuminate\Support\Facades\Validator;
use App\Mail\ContactMail;
use resources\views\g_contactos\contacto;*/

class ContactController extends Controller
{
/*    
    public function ccemail()
    {
        Mail::to('recipent@example.com')->send(new envioMail());
        return 'email sent successfully';
    }
    
    public function sendContact(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'firstName' => 'required|string|min:2|max:30|regex:/^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/',
            'lastName' => 'required|string|min:2|max:30|regex:/^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|regex:/^[+]?[0-9]{8,15}$/',
            'subject' => 'required|string|max:100',
            'message' => 'required|string|min:10|max:1000'
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
                ->send(new envioMail($contactData));

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
    }*/

    public function getMail(){
        $data = ['name'=>'Haise'];
        Mail::to('testeo@aerolineadelsur.com')->send(new envioMail($data));
    }
}