<?php

namespace App\Http\Controllers\FrontEnd;

use App\T_event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontController extends Controller
{
    public function Index()
    {
        $events = T_event::all();
        return view('Frontend.home.index', compact('events'));
    }
}
