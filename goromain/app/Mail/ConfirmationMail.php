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
    public $token;

    /**
     * Create a new message instance.
     */
    public function __construct($mailData, $mailKind,$token)
    {
       $this->mailData = $mailData;
       $this->mailKind = $mailKind;
       $this->token = $token;
    }
    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {

        $subject = '';
        switch ($this->mailKind){
            case 'register':
                $subject = '[GORO - DANG KY THANH CONG]';
                break;
            case 'resetpassword':
                $subject = '[GORO - THAY DOI MAT KHAU]';
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
                $view ='mailresetpassword';
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
