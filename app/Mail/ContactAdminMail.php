<?php

namespace App\Mail;

use Illuminate\Http\Request;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactAdminMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build( request $request )
    {
        return $this->view('mail',[
            'msg' => $request->message,
            'from' => $request->email,
            'obj' => $request->objet
        ])
            ->to('fallo072019@gmail.com')->subject( request('objet') );
    }
}
