<?php

namespace App\Http\Controllers\Dashboard;
use App\Article;
use App\Mail\CreateNewArticle;
use ElForastero\Transliterate\Transliteration;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.pages.cms_create_article');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        cache()->remember('auth_user', 180, function (){
            return ['user_id' => auth()->user()->id, 'user_name' => auth()->user()->name, 'user_email' => auth()->user()->email];
        });

        try{
            $article = Article::create($request->all());
            $article->slug = str_slug(Transliteration::make($request->input('title')));
            $article->save();

            Mail::to('sergey.hrulev@gmail.com')->send(
                new CreateNewArticle()
            );

            return $article;
        } catch (\Exception $e){
            return $e;
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
