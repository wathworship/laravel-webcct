<?php

namespace App\Http\Controllers\FrontEnd;

use App\T_event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontController extends Controller
{
    public function Index()
    {
        $current_month=date('m');
		$current_year=date('Y');
        $events = T_event::whereMonth('date_start','=',$current_month)
        ->whereYear('date_start','=',$current_year)
        ->orderBy('date_start','asc')
        ->get();
        return view('Frontend.home.index', compact('events'));
    }
}
