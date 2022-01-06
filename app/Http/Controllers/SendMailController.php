<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\TestingMail;

class SendMailController extends Controller
{
    public function loadForm(){
        return view('mail.form');
    }
    
    public function sendMail(Request $request){
        Mail::to($request->get('to'))->send(new TestingMail($request->get('message'), $request->get('from')));
    
        return redirect()->route('mail.form')->with('success','Email berhasil dikirim');
    }
}
