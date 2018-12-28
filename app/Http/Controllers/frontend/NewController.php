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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\New  $new
     * @return \Illuminate\Http\Response
     */
    public function show(News $new)
    {
        return view('frontend.news.news-detail',compact('news'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\New  $new
     * @return \Illuminate\Http\Response
     */
    public function edit(News $new)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\New  $new
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $new)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\New  $new
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $new)
    {
        //
    }
}
