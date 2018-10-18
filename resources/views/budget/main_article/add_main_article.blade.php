@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-8 mb-5">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Главная статья</th>
                        <th>Раздел</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($mainArticles as $mainArticle)
                        <tr>
                            <th>{{ $mainArticle->main_article_name }}</th>
                            <th>{{ $mainArticle->section->section_name }}</th>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-8">
                <form action="{{ route('main-article.store') }}"  method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="">Название раздела</label>
                        <select name="sections_id" id="" class="form-control">
                            @foreach($sections as $section)
                                <option value="{{ $section->id }}">{{ $section->section_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Название главной статьи</label>
                        <input type="text" class="form-control" name="main_article_name">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-outline-primary" value="Сохранить">
                    </div>
                </form>
            </div>
        </div>
    </div>
    @stop
