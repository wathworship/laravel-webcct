<?php

namespace App\Http\Controllers\FrontEnd;

use App\T_journal;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JournalsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function church()
    {
        $journals = t_journal::latest()->where('t_journalstype_idt_journalstype', 1)->orderBy('idt_journals', 'desc')->paginate(8);

        return view('frontend.journals.journals-church',compact('journals'))
            ->with('i', (request()->input('page',1) -1) * 8);
    }

    public function others()
    {
        $journals = t_journal::latest()->where('t_journalstype_idt_journalstype', 4)-> orderBy('idt_journals', 'desc')->paginate(8);

        return view('frontend.journals.journals-others',compact('journals'))
            ->with('i', (request()->input('page',1) -1) * 8);
    }

    public function relation()
    {
        $journals = t_journal::latest()->where('t_journalstype_idt_journalstype', 3)-> orderBy('idt_journals', 'desc')->paginate(8);

        return view('frontend.journals.journals-relationship',compact('journals'))
            ->with('i', (request()->input('page',1) -1) * 8);
    }

    public function upper()
    {
        $journals = t_journal::latest()->where('t_journalstype_idt_journalstype', 2)->orderBy('idt_journals', 'desc')->paginate(8);

        return view('frontend.journals.journals-upper-room',compact('journals'))
            ->with('i', (request()->input('page',1) -1) * 8);
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
     * @param  \App\Journal  $journal
     * @return \Illuminate\Http\Response
     */
    public function show(Journal $journal)
    {
        return view('journals.show',compact('journal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Journal  $journal
     * @return \Illuminate\Http\Response
     */
    public function edit(Journal $journal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Journal  $journal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Journal $journal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Journal  $journal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Journal $journal)
    {
        //
    }
}
