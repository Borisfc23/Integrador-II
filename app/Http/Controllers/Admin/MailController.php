<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;

class MailController extends Controller
{
    public function sendEmail(){
        $details =[
            'title'=>'titulo del correo',
            'body'=>'cuerpo del correo',            
        ];

        Mail::to("borisfc96@gmail.com")->send(new TestMail($details));
        return "Correo enviado";
    }
}