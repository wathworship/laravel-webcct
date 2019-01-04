<?php

namespace App\Http\Controllers\FrontEnd;

use App\T_event;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class TeventController extends Controller
{
    //home
    public function index()
    {
        $events = T_event::all();

        return view('frontend.home.calendar', compact('events'));
        /*$current_month = date('m');
		$current_year = date('Y');
    	$events = T_event::whereMonth('date_start','=',$current_month)
    		->whereYear('date_start','=',$current_year)
    		->orderBy('date_start','asc')
    		->get();
        return view('frontend.home.calendar')->with('events',$events);*/
    }
}
