<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ConfirmationMail extends Mailable
{
    use Queueable, SerializesModels;
    public $mailData;
    public $mailKind;

    /**
     * Create a new message instance.
     */
    public function __construct($mailData, $mailKind)
    {
       $this->mailData = $mailData;
       $this->mailKind = $mailKind;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        $subject = '';
        switch ($this->mailKind){
            case 'register':
                $subject = '[Mail DANG KY]';
                break;
            case 'resetpassword':
                $subject = '[MAIL THAY DOI MAT KHAU]';
                break;
        }
        return new Envelope(
            subject: $subject,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        $view = '';
        switch ($this->mailKind){
            case 'register':
                $view = 'mail.register';
                break;
            case 'resetpassword':
                $view ='mail.resetpassword';
                break;
        }
        return new Content(
            view: $view,
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
