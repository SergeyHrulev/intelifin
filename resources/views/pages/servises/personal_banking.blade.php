@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            {{ Breadcrumbs::render('personal-banking') }}
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
    <div class="container">
        <div class="row text-center">
            <div class="col-sm-12">
                <h1 class="text-center py-4">Ваш банкир</h1>
            </div>
            <!-- /.col-sm-12 -->
        </div>
        <!-- /.row -->
        <div class="row h-100">
            <div class="jumbotron h-100">
                <div class="container h-100">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Поможем выбрать нужный вам банк</li>
                        <!-- /.list-group-item -->
                        <li class="list-group-item">Поможем подобрать подходящие банковские продукты</li>
                        <!-- /.list-group-item -->
                        <li class="list-group-item">Выбрать необходимые услуги, отказаться от не нужных или навязанных</li>
                        <!-- /.list-group-item -->
                        <li class="list-group-item">Поможем с оформлением и работе с банковскими инструментами:</li>
                        <!-- /.list-group-item -->
                        <li class="list-group-item"> - аккредитивы (в т.ч. по импорту),</li>
                        <!-- /.list-group-item -->
                        <li class="list-group-item"> - паспорта сделок,</li>
                        <!-- /.list-group-item -->
                        <li class="list-group-item"> - векселя,</li>
                        <!-- /.list-group-item -->
                        <li class="list-group-item"> - гарантии (в т.ч. по госконтрактам в рамках 226 и 44 ФЗ)</li>
                        <!-- /.list-group-item -->
                    </ul>
                    <!-- /.list-group list-group-flush -->
                </div>
                <!-- /.container h-100 -->
            </div>
            <!-- /.jumbotron h-100 -->
        </div>
        <!-- /.row h-100 -->
    </div>
    <!-- /.container -->
    @stop