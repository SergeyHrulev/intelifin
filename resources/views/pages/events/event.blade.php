@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            {{ Breadcrumbs::render('event', $event) }}
            <img src="{{ asset($event->img) }}" alt="{{ $event->alt }}">
            <h1 class="py-3">{{ $event->title }}</h1>
            <div class="col-lg-12" style="line-height: 2.5;color: #5d5d5d;font-size: 1.5rem;">
                {!! $event->description !!}
            </div>
            <!-- /.col-lg-12 -->

        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
@stop