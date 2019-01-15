<?php

namespace App\Http\Controllers\FrontEnd;

use App\t_news;
use App\users;
use App\t_unit;
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
        $news = t_news::where('id_newstype' ,'=', '2')->get();
        return view('frontend.news.news-units',compact('news'));
    }

    public function jobs()
    {
        $news = t_news::where('id_newstype' ,'=', '2')->get();
        return view('frontend.news.news-jobs',compact('news'));
    }
    
    public function show(id $id)
    {
        $projects = t_news::find($id);
        return view('frontend.news.news-detail', compact($projects,'projects'));
    }

    public function detail($id)
    {
        $projects = t_news::where('id_newstype', $id)->get();
        return view('frontend.news.news-detail', compact('projects'));
    
    }

    public function tender()
    {
        return view('frontend.news.news-tender');
    }

    public function destroy(News $new)
    {
        //
    }
}
