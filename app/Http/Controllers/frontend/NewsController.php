<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    public function relations()
    {
        return view('frontend.news.news-public-relations');
    }

    public function units()
    {
        return view('frontend.news.news-units');
    }

    public function tender()
    {
        return view('frontend.news.news-tender');
    }

    public function jobs()
    {
        return view('frontend.news.news-apply-jobs');
    }

    public function detail()
    {
        return view('frontend.news.news-detail');
    }
}
