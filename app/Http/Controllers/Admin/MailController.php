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
            'title'=>'Contactacto de Almacen de la Constructora RF'            
        ];

        Mail::to("user.prueba.2306@gmail.com")->send(new TestMail($details));
        return view('admin.email.index')->with('info','');
    }
}