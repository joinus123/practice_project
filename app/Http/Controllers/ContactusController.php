<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactusController extends Controller
{
    public function Contact_us()
    {
        return view('frontend.contactus');
    }

}
