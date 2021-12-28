<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CareerAppointmentController extends Controller
{
    public function sendEmail(Request $request){
        $inputs = \request()->validate([
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'date' => 'required',
        ]);

        Mail::send('iihtClientSite.mailShow', $inputs, function ($message) {
            $message->to("iiht.inflexionpoint@gmail.com")->subject("Appointment For Career Counselling");
        });

        return redirect('/#career')->with('success', 'Successfully Sent Mail for Your Appointment');

    }
}
