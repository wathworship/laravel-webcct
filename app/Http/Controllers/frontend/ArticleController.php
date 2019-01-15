<?php

namespace App\Http\Controllers\FrontEnd;

use App\t_article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    public function generals()
    {
        $articles = t_article::latest()->where('t_articletype_idt_articletype', 1)->orderBy('idt_article', 'desc')->paginate(8);

        return view('frontend.articles.articles-generals',compact('articles'))
            ->with('i', (request()->input('page',1) -1) * 8);
    }
   
    public function sermonies()
    {
        $articles = t_article::latest()->where('t_articletype_idt_articletype', 2)->orderBy('idt_article', 'desc')->paginate(9);

        return view('frontend.articles.articles-sermonie',compact('articles'))
            ->with('i', (request()->input('page',1) -1) * 9);
    }

    public function testimonies()
    {
        $articles = t_article::latest()->where('t_articletype_idt_articletype', 3)->orderBy('idt_article', 'desc')->paginate(9);

        return view('frontend.articles.articles-testimonie',compact('articles'))
            ->with('i', (request()->input('page',1) -1) * 9);
    }

}
