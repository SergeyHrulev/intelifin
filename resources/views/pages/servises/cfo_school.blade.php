@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            {{ Breadcrumbs::render('cfo-school') }}
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->

    @include('templates.servises_header', ['title' => 'Школа финансового директора'])
    <div class="container">
        <div class="row text-center">
            <div class="col-sm-12">
                <h1 class="text-center py-4"></h1>
            </div>
            <!-- /.col-sm-12 -->
        </div>
        <!-- /.row -->
        <div class="row h-100">
            <div class="jumbotron h-100">
                <div class="container">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Базовый курс банки, банковские продукты.</li>
                        <!-- /.list-group-item -->
                        <li class="list-group-item">Углубленный курс банки, банковские продукты.</li>
                        <!-- /.list-group-item -->
                        <li class="list-group-item">Курс казначейство. Управление денежными средствами, кредитным портфелем, финансовыми инструментами.</li>
                        <!-- /.list-group-item -->
                        <li class="list-group-item">Курс финансовый анализ. Горизонтальный и вертикальный анализ. Финансовые коэффициенты.</li>
                        <!-- /.list-group-item -->
                        <li class="list-group-item">Бюджетирование и планирование.</li>
                        <!-- /.list-group-item -->
                        <li class="list-group-item">Управленческий учет в производстве. </li>
                        <!-- /.list-group-item -->
                        <li class="list-group-item">Калькуляция, расчет себестоимости. </li>
                        <!-- /.list-group-item -->
                        <li class="list-group-item">Управленческий учет в малом бизнесе, для бухгалтеров и нефинансовых управленцев.</li>
                        <!-- /.list-group-item -->
                    </ul>
                    <!-- /.list-group list-group-flush -->
                </div>
                <!-- /.container -->
            </div>
            <!-- /.h-100 --></div>
        <!-- /.row h-100 -->
    </div>
    <!-- /.container -->
@stop