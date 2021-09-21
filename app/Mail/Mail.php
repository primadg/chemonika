<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Mail extends Mailable
{
    use Queueable, SerializesModels;

    protected $name;
    protected $contacts;
    protected $text;

    /**
     * Create a new message instance.
     *
     * @param $name
     * @param $contacts
     * @param $text
     */
    public function __construct($name, $contacts, $text)
    {
        $this->name = $name;
        $this->contacts = $contacts;
        $this->text = $text;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail')->with(
            [
                'name' => $this->name,
                'contacts' => $this->contacts,
                'text' => $this->text,
            ]
        );
    }
}
