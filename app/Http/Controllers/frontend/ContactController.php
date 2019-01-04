<?php

namespace App\Http\Controllers\FrontEnd;

use App\t_contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function contact()
    {
        return view('frontend.contact.contact-index');
    }

    public function office()
    {
        return view('frontend.contact.contact-office');
    }

    public function education()
    {
        $others_schools = t_contact::where('t_unittype_idt_unittype', '=', 10)->get();
        $others_universitys = t_contact::where('t_unittype_idt_unittype', '=', 5)->get();
        $others_religions = t_contact::where('t_unittype_idt_unittype', '=', 8)->get();
        return view('frontend.contact.contact-education',compact('others_schools','others_universitys','others_religions'));
    }

    public function medical()
    {
        $others_medicals = t_contact::where('t_unittype_idt_unittype', '=', 6)->get();
        return view('frontend.contact.contact-medical',compact('others_medicals'));
    }    

    public function others()
    { 
        $others_houses = t_contact::where('t_unittype_idt_unittype', '=', 7)->get();
        $others = t_contact::where('t_unittype_idt_unittype', '=', 9)->get();
        return view('frontend.contact.contact-others',compact('others_houses','others'));
    }

}
