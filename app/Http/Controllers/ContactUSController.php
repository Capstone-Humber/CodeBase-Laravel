<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContactUS;
use Mail;

class ContactUSController extends Controller
{
    public function contactUS()
    {
        return view('/contactus');
    }

    public function contactUSPost(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);
        ContactUS::create($request->all());

        $name = $request->get('name');
        $email = $request->get('email');
        $message = $request->get('message');

        $data = array('name' => $name, 'email' => $email,'message' => $message);



        Mail::send('emails.contact-message', $data, function($message) use ($name,$email){
            $message->to($email,$name)->subject('Do not-reply');
            $message->from('adewalefakeye@gmail.com','Admin');
        });





        return redirect("/contactus")->with('sent', "Thanks for contacting us!");


    }
}