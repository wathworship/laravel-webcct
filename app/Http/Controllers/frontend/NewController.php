<?php

namespace App\Http\Controllers\FrontEnd;

use App\t_news;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = t_news::latest()->paginate(5);
  
        return view('frontend.news.news-index',compact('news'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function units()
    {
        $news = t_news::latest()->paginate(5);
  
        return view('frontend.news.news-units',compact('units'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function jobs()
    {
        return view('frontend.news.news-jobs');
    }
    
    public function show(News $new)
    {
        return view('frontend.news.news-detail',compact('news'));
    }

    public function detail()
    {
        return view('frontend.news.news-detail');
    }

    public function update(Request $request, News $new)
    {
        //
    }

    public function destroy(News $new)
    {
        //
    }
}
