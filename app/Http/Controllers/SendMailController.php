<?php

namespace App\Http\Controllers;

use App\Models\footer;
use Illuminate\Http\Request;
use Illuminate\Request\Facades\DB;
use Mail;
use App\Mail\TestingMail;

class SendMailController extends Controller
{
    public function loadForm(){

        $footer = Footer::all();
        return view('mail.form',['footer' => $footer]);
      
    }
    
    public function sendMail(Request $request){

       

        Mail::to($request->get('to'))->send(new TestingMail($request->get('message'), $request->get('from')));
    
        return redirect()->route('mail.form')->with('success','Email berhasil dikirim');
    }
}
