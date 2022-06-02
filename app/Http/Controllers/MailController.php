<?php

namespace App\Http\Controllers;
use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendEmail()
    {
        $details =[ 
            'title'=>'Mail from Daud Raza',
            'body'=>'This is for testing mail using gmail'
        ];

        Mail::to("daud.raza@conovoinc.com")
        ->send(new TestMail($details));

        return "Email send";
    }
}
