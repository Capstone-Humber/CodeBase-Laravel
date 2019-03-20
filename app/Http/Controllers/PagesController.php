<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Newsletter;
class PagesController extends Controller
{
    //
    public function index(){
        return view('index');
    }

//newsletter
    public function store(Request $request){
        if(!Newsletter::isSubscribed($request->email)){
            Newsletter::subscribePending($request->email);
            return redirect('index')->with('success', 'Thanks For Subscribing');
        }
        return redirect('index')->with('failure','Sorry, you have already subscribed');
    }
}
