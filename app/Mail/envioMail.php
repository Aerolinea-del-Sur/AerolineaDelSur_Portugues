<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
/*    
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
*/

class envioMail extends Mailable
{
    use Queueable, SerializesModels;
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
    /**
     * message instance.
     *
     * @return \Illuminate\Mail\Mailables\Attachment>
     */
    public $data;
    public function _construct($data)
    {
        $this->data = $data;
    }
    /**
     * message.
     *
     * @return \Illuminate\Mail\Mailables\Attachment>
     */

    public function build()
    {
        return $this->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'))
                    ->view('testmail')
                    ->subject('Prueba de Correo')
                    ->with($this->data);
    }
}
