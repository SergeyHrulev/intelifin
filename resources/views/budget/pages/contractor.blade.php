@extends('budget.layouts.app')
@section('content')
    <div class="cms-content">
        <div class="cms-main">
            <div class="col-12 m-3">
                <get-contractor-component></get-contractor-component>
            </div>
            <div class="col-12 m-2">
                <add-contractor-component :prop_types="{{ json_encode($prop_types) }}"></add-contractor-component>
            </div>

        </div>
    </div>

    @endsection
