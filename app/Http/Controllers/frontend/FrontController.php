<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontController extends Controller
{

    public function index()
    {
        return view('Frontend.index');
    }
}
