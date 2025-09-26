<?php

namespace App\Email\SwiftMailerMessage;

class SwiftMailerMessage
{
    protected $to;
    protected $subject;
    protected $body;

    public function to($email)
    {
        $this->to = $email;
        return $this;
    }

    public function subject($subject)
    {
        $this->subject = $subject;
        return $this;
    }

    public function body($body)
    {
        $this->body = $body;
        return $this;
    }

    public function send()
    {
        // Implementación usando Laravel Mail
        return \Mail::raw($this->body, function($message) {
            $message->to($this->to)
                   ->subject($this->subject);
        });
    }
}