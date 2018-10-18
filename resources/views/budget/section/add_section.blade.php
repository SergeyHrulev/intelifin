@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-6">
                @foreach($sections as $section)
                    <div class="alert alert-info" role="alert">
                        {{ $section->section_name }}
                    </div>
                    @endforeach
            </div>
            <div class="col-6">
                <form action="{{ route('section.store') }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="">Наименование раздела</label>
                        <input type="text" class="form-control" name="section_name">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-outline-primary" value="Сохранить">
                    </div>
                </form>
            </div>
        </div>
    </div>
    @stop
