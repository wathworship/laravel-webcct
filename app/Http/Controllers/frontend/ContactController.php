<?php

namespace App\Http\Controllers\FrontEnd;

use App\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function contact()
    {
        return view('frontend.contact.contact');
    }

    public function office()
    {
        return view('frontend.contact.contact-office');
    }

    public function education()
    {
        return view('frontend.contact.contact-education');
    }

    public function medical()
    {
        return view('frontend.contact.contact-medical');
    }    

    public function other()
    {
        return view('frontend.contact.contace-other');
    }

}
