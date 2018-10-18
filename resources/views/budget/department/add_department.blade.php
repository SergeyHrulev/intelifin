@extends('layouts.app')
@section('content')
    @include('budget.left_menu')
    <div class="container">
            <div class="row justify-content-md-center">
                    <div class="col-6">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Название отдела</th>
                                <th>Название департамента</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($departments as $department)
                                <tr>
                                    <th>{{ $department->department_name }}</th>
                                    <th>{{ $department->structuralUnit->structural_unit_name }}</th>
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
                            <label for="">Департамент к которому относится отдел</label>
                            <select name="structural_units_id" id="structural_units_id" class="form-control">
                                @foreach($structuralUnits as $structuralUnit)
                                    <option value="{{ $structuralUnit->id }}">{{ $structuralUnit->structural_unit_name }}</option>
                                    @endforeach
                            </select>
                        </div>
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

