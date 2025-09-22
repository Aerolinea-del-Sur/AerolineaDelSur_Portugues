<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;

class envioMail extends Mailable
{
    use Queueable, SerializesModels;
    
    /**
     * message instance.
     *
     * @return \Illuminate\Mail\Mailables\Attachment>
     */

    public function _construct()
    {
        //
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'test laravel 12',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'g_contactos.prueba',
        );
    }

    /**
     * message.
     *
     * @return \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
    /*public function build()
    {
        return $this->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'))
                    ->view('testmail')
                    ->subject('Prueba de Correo')
                    ->with($this->data);
    }*/
    /* 
    public $data;
    
    public function __construct($data = null)
    {
        $this->data = $data;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Nuevo mensaje de contacto: ' . ($this->data['subject'] ?? 'Sin asunto'),
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'g_contactos.prueba',
            with: ['data' => $this->data]
        );
    }
    */
}
