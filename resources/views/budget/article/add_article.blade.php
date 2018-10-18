@extends('layouts.app')
@section('content')
    @include('budget.left_menu')
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-8 mb-5">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Номер статьи</th>
                        <th>Название статьи</th>
                        <th>Название главной статьи</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($articles as $article)
                        <tr>
                            <th>{{ $article->article_code }}</th>
                            <th>{{ $article->article_name }}</th>
                            <th>{{ $article->mainArticle->main_article_name }}</th>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="row justify-content-md-center">
            <div class="col-6">
                <form action="{{ route('article.store') }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="">Главная статья</label>
                        <select name="main_articles_id" id="main_articles_id" class="form-control" onchange="setNumber(this)">
                            <option value="0">-- Выберите статью --</option>
                            @foreach($mainArticles as $mainArticle)
                                <option value="{{ $mainArticle->id }}">{{ $mainArticle->main_article_name }}</option>
                                @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Код статьи</label>
                        <input type="text" class="form-control" id="article_code" name="article_code" value="">
                    </div>
                    <div class="form-group">
                        <label for="">Наименование статьи</label>
                        <input type="text" class="form-control" name="article_name">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-outline-primary" value="Сохранить">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
            function setNumber(sel) {
                document.getElementById('article_code').value = sel.value + 0;
            }
    </script>
    @endsection
