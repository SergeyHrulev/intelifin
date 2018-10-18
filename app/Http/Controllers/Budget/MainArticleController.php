<?php

namespace App\Http\Controllers\Budget;

use App\Budget\MainArticle;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Budget\Section;

class MainArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(MainArticle $mainArticle)
    {
//        $data = $mainArticle->with('section')->first();
//        dd($data->section->section_name);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(MainArticle $mainArticle)
    {
        $sections = Section::all();
        $mainArticle = $mainArticle->with('section')->get();
        return view('budget.main_article.add_main_article', [
            "sections" => $sections,
            "mainArticles" => $mainArticle
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (MainArticle::create($request->all())){
            return redirect()->route('main-article.create');
        } else {
            return redirect()->back();
        }
//        $data = $request->all();
//        return view('budget.test', ['data' => $data]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Budget\MainArticle  $mainArticle
     * @return \Illuminate\Http\Response
     */
    public function show(MainArticle $mainArticle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Budget\MainArticle  $mainArticle
     * @return \Illuminate\Http\Response
     */
    public function edit(MainArticle $mainArticle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Budget\MainArticle  $mainArticle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MainArticle $mainArticle)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Budget\MainArticle  $mainArticle
     * @return \Illuminate\Http\Response
     */
    public function destroy(MainArticle $mainArticle)
    {
        //
    }
}
