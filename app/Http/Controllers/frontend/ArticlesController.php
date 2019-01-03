<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticlesController extends Controller
{
    
    public function ganeral()
    {
        return view('frontend.articles.articles-ganeral');
    }
   
    public function sermonies()
    {
        return view('frontend.articles.articles-sermonies');
    }

    public function testimonies()
    {
        return view('frontend.articles.articles-testimonies');
    }
    
}
