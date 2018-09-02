@extends('layouts.app')
@section('content')
@include('templates.page_banner', ['text' => 'Услуги'])
    <!-- /.row -->
<div class="container">
    <div class="row d-md-flex">
        @include('templates.service_servises', ['title' => 'Ваш Финансовый директор', 'img' => '/img/test.jpg', 'url' => 'chief-financial-officer'])
        <!-- /.col-md-6 -->
        @include('templates.service_servises', ['title' => 'Программа "Легкий старт"', 'img' => '/img/cardimg.jpg', 'url' => 'easy-start'])
        <!-- /.col-md-6 -->
    </div>
    <div class="row d-md-flex mt-3">
        @include('templates.service_servises', ['title' => 'Кредитный эксперт', 'img' => '/img/loan_expert.jpg', 'url' => 'credit-expert'])
        @include('templates.service_servises', ['title' => 'школа Финансового директора', 'img' => '/img/cfoew.jpg', 'url' => 'cfo-school'])
    </div>
    <!-- /.row d-md-flex -->
    <div class="row d-md-flex mt-3">
        @include('templates.service_servises', ['title' => 'Безопасность бизнеса', 'img' => '/img/business_security.jpg', 'url' => 'business-security'])
        @include('templates.service_servises', ['title' => 'Ваш банкир', 'img' => '/img/pexels-photo.jpg', 'url' => 'personal-banking'])
    </div>
    <!-- /.row d-md-flex mt-3 -->
</div>
    <!-- /.container-fluid -->
    @stop