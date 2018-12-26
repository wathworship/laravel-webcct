<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    
    public function mission()
    {
        return view('frontend.about.about-mission');
    }

   
    public function structure()
    {
        return view('frontend.about.about-structure');
    }


    public function manager()
    {
        return view('frontend.about.about-manager');
    }

    
    public function history()
    {
        return view('frontend.about.about-history');
    }

    
}
