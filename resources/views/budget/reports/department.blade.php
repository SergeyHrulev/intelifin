@extends('budget.layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <department-report-controller :departments="{{ $departments }}"></department-report-controller>
        </div>
    </div>
    @stop
