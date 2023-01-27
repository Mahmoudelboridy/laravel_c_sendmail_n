<?php

namespace App\Http\Controllers;

use App\Mail\gail;
use App\Mail\mailer as MailMailer;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailer;
use Illuminate\Support\Facades\Mail;

class mailcontroller extends Controller
{
    //
    public function mail(){
        $data='ahmed';

        Mail::to('mahmoud.elboridy@gmail.com')->send(new gail($data));
    return view('email',compact('data'));
    }
}