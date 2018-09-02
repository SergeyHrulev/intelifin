<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Event;

class SitemapController extends Controller
{
    //
    public function index()
    {
        $articles = Article::all();
        $events = Event::all();
        //dd($servises);

        return response()->view('pages.sitemap', [
            'articles' => $articles,
            'events' => $events,
        ])->header('Content-Type', 'text/xml');
    }
}
