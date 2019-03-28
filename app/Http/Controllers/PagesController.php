<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Newsletter;
class PagesController extends Controller
{
    //
    public function index(){
        return view('home');
    }

//newsletter
    public function store(Request $request){
        $this->validate($request,['email'=>'required']);
        if(!Newsletter::isSubscribed($request->email)){
            Newsletter::subscribePending($request->email);
            return redirect('home')->with('success', 'Thanks For Subscribing');
        }
        return redirect('home')->with('failure','Sorry, you have already subscribed');
    }
}