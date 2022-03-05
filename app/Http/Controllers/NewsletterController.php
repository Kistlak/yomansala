<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Newsletter;

class NewsletterController extends Controller
{
    public function create()
    {
        return view('/contact');
    }

    public function store(Request $request)
    {
        if ( ! Newsletter::isSubscribed($request->email) ) 
        {
            Newsletter::subscribePending($request->email);
            return redirect('/contact')->with('success', 'Thanks For Subscribing!');
        }
        return redirect('/contact')->with('failure', 'Sorry! You have already subscribed.');
            
    }
}
