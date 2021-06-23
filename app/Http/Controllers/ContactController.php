<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use App\Notifications\ContactUs;


class ContactController extends Controller
{
    public function sendMail( Request $request){
        $to = ["centromedicodiagnosticoclinico@gmail.com", "poncey977@gmail.com"];
        for($i = 0 ; $i < count($to) ; $i++)
        {
            Notification::route('mail', $to[$i])->notify(new ContactUs($request));
        }
        return back()->with('message', 'Nos contacto exitosamente, pronto nos pondremos en contacto con usted!')->with('type','success');
    }
}
