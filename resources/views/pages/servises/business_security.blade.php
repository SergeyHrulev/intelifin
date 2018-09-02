@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            {{ Breadcrumbs::render('business-security') }}
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
    <div class="container">
        <div class="row text-center">
            <div class="col-sm-12">
                <h1 class="text-center py-4">Безопасность бизнеса</h1>
            </div>
            <!-- /.col-sm-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <p class="article"></p>
            <!-- /.article -->
        </div>
        <!-- /.row -->
        <div class="row h-100">
            <div class="jumbotron h-100">
                <div class="container h-100">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Проведем финансовый аудит компании по возможным угрозам со стороны госорганов, третьих лиц.</li>
                        <!-- /.list-group-item -->
                        <li class="list-group-item">Проведем проверку финансовых операций на предмет подозрительных с точки зрения фискальных органов сделок.</li>
                        <!-- /.list-group-item -->
                        <li class="list-group-item">Проведем проверку контрагентов, партнеров, инвестиционных проектов.</li>
                        <!-- /.list-group-item -->
                        <li class="list-group-item">Поможем избежать угрожающих бизнесу ситуаций</li>
                        <!-- /.list-group-item -->
                    </ul>
                    <!-- /.list-group list-group-flush -->
                </div>
                <!-- /.container h-100 -->
            </div>
            <!-- /.jumbotron h-100 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
@stop