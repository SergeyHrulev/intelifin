@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row d-flex align-items-center" style="height: 80vh;">
            <img src="{{ asset('img/404.png') }}" alt="Страница не найдена">
            <p style="font-size: 1.5rem;">Извините, но запрашиваемая вами страница не найдена</p>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
@stop
