@extends('layouts.app')
@section('content')
    @include('budget.left_menu')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <div class="col">
                    
                </div>
                <div class="col align-self-end">
                    <div class="form-group">
                        <select name="department_id" id="" class="custom-select">
                            @foreach($departments as $department)
                                <option value="{{ $department->id }}">{{ $department->department_name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-8">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Подразделение</th>
                        <th>Статья</th>
                        <th>План</th>
                        <th>Факт</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $item)
                    <tr>
                        <th>{{ $item->department->department_name }}</th>
                        <th>{{ $item->payment_name }}</th>
                        <th>{{ $item->bdr_plan !== null ? $item->summ : ' - '}}</th>
                        <th>{{ $item->bdr_fact !== null ? $item->summ : ' - '}}</th>
                    </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @stop
