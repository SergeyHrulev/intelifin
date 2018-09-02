@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            {{ Breadcrumbs::render('htmlmap') }}
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="h1 px-3">Карта сайта</h1>
                <!-- /.h1 -->
            </div>

            <div class="col-4"></div>
            <div class="col-8">
                <ul>
                    <li><a class="h3" href="{{ route('servises') }}">Услуги</a></li>
                    <ul class="list-unstyled pl-3">
                        <li><a href="{{ route('chief-financial-officer') }}">Ваш Финансовый директор</a></li>
                        <li><a href="{{ route('easy-start') }}">Программа "Легкий старт"</a></li>
                        <li><a href="{{ route('cfo-school') }}">Школа Финансового директора</a></li>
                        <li><a href="{{ route('credit-expert') }}">Кредитный эксперт</a></li>
                        <li><a href="{{ route('business-security') }}">Безопасность бизнеса</a></li>
                        <li><a href="{{ route('personal-banking') }}">Ваш банкир</a></li>
                    </ul>
                    <li><a class="h3" href="{{ route('events') }}">Мероприятия</a></li>
                    <li><a class="h3" href="{{ route('articles') }}">Статьи</a></li>
                    <li><a class="h3" href="{{ route('fin-dictionary') }}">Финсловарь</a><br>
                    <span style="line-height: 1;font-size: small;">
                        В данном разделе приведена справочная информация по финансовым терминам, даны определения. Это интерактивная Вики по финансовой тематике.
                        Также дано много примеров реграментированных документов (инвойсы, аккредитивы, коносаменты и др.).
                    </span>
                    <!-- /.font-weight-light -->
                    </li>
                    <li><a class="h3" href="{{ route('contacts') }}">Контакты</a>
                        <br>
                        <span style="line-height: 1;font-size: small;">
                            Адрес, телефон, контактные данные, карта проезда.
                        </span>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
@stop