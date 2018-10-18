@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-6">
                @foreach($structuralUnits as $structuralUnit)
                    <div class="alert alert-info" role="alert">
                        {{ $structuralUnit->structural_unit_name }}
                    </div>
                @endforeach
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-6">
                <form action="{{ route('structural-unit.store') }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="">Наименование подразделения</label>
                        <input type="text" class="form-control" name="structural_unit_name">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-outline-primary" value="Сохранить">
                    </div>
                </form>
            </div>
        </div>
    </div>
    @stop
