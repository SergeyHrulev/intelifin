@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">{{ Breadcrumbs::render('articles') }}</div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
    @include('templates.servises_header', ['title' => 'Статьи'])
    <div class="container">
    <div class="row">
        @foreach($articles as $article)
            <div class="col-lg-4 py-3">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset($article->preview) }}" alt="{{ $article->alt }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $article->title }}</h5>
                        <p class="card-text">{{ $article->anons }}</p>
                        <a href="{{ url('/articles/' . $article->slug) }}" class="btn btn-primary">Читать полностью</a>
                    </div>
                </div>
            </div>
            <!-- /.col-lg-4 col-xs-1 -->
        @endforeach
    </div>
    <!-- /.row -->
    </div>
    <!-- /.container -->
@stop