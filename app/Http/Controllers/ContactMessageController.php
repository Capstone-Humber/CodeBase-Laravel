<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class ContactMessageController extends Controller
{
    public function create()
    {

        return view('contactus');
    }

    public function store(Request $request)
    {

        $this->validate($request, [

        'name' => 'required',
        'email' => 'required|email',
        'message' => 'required'

            ]);

        Mail::send('emails.contact-message', [
            'msg' => $request->message
        ], function ($mail) use($request){
            $mail->from($request->email, $request->name);

            $mail->to('adewalefakeye@gmail.com')->subject('Contact Message');
        }
        );

        return redirect()->back()->with('flash_message', 'Thank You For Your Message.');

    }
}
