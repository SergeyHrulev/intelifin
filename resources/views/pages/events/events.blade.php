@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">{{ Breadcrumbs::render('events') }}</div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
    <div class="container">
        <div class="row">
            @foreach($events as $event)
                <div class="col-lg-4 py-3">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{ asset($event->preview) }}" alt="{{ $event->alt }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $event->title }}</h5>
                            <p class="card-text">{{ $event->anons }}</p>
                            <a href="{{ url('/events/' . $event->slug) }}" class="btn btn-primary">Читать полностью</a>
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