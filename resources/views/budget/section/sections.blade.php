@extends('budget.layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-12">
                <h1>Список разделов</h1>
            </div>
            <div class="col-6">
                <table class="table">
                    <thead>
                    <tr>
                        <th>№</th>
                        <th>Наименование раздела</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($sections as $section)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $section->section_name }}</td>
                    </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @endsection
