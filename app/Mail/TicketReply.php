<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TicketReply extends Mailable
{
    use Queueable, SerializesModels;

    public $message;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($replyData)
    {
        $this->message = $replyData;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mails.contact.reply')->subject($this->message->subject);
        //check for attachments
        if(count($this->message->files) > 0){
            foreach ($this->message->files as $file) {
                $this->attach($file->location, ['as' => $file->filename]);
            }
        }
        return $this;
    }
}
