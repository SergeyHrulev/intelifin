@extends('budget.layouts.app')
@section('content')
    <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-12">
                    <h1>Отделы</h1>
                </div>
                    <div class="col-6">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Название отдела</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($departments as $department)
                                <tr>
                                    <td>{{ $department->department_name }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
            </div>
            <div class="col-6 m-4">

            </div>
            <div class="row justify-content-md-center">
                <div class="col-6">
                    <form action="{{ route('department.store') }}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="">Наименование отдела</label>
                            <input type="text" class="form-control" name="department_name">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-outline-primary" value="Сохранить">
                        </div>
                    </form>
                </div>
            </div>
    </div>
@stop

