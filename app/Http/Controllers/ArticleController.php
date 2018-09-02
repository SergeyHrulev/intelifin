<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Modules\SEO\Seo;

class ArticleController extends Controller
{
    public function index(){
        $data = [
            'metatitle' => 'Статьи| intelifin.ru',
            'metadesc' => 'Статьи  о финансах · управление финансами в бизнесе ·  Экспертное мнение  · Заходите!',
            'metacanonical' => ''
        ];

        $head = Seo::extractHead($data);

        $articles = Article::all();

        return view('pages.articles.articles', [
            'articles' => $articles,
            'head' => $head
        ]);
    }

    public function getArticle(Article $article, $slug){
        $article = $article->getArticleBySlug($slug);

        $head = Seo::extractHead($article);

        return view('pages.articles.article', [
            'article' => $article[0],
            'head' => $head
        ]);
    }
}
