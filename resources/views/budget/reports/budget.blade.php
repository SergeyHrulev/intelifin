@extends('budget.layouts.app')
@section('content')
    <div class="container-fluid">
        <budget-report-component></budget-report-component>

        <div class="row">
            {{--<table class="table">--}}
                {{--<thead>--}}
                {{--<tr>--}}
                    {{--<th>№</th>--}}
                    {{--<th>Отдел</th>--}}
                    {{--<th>Раздел</th>--}}
                    {{--<th>Статья</th>--}}
                    {{--<th>Номер статьи</th>--}}
                    {{--<th>Наименование платежа</th>--}}
                    {{--<th>Сумма</th>--}}
                    {{--<th>Дата отгрузки план</th>--}}
                    {{--<th>Дата отгрузки факт</th>--}}
                    {{--<th>Дата оплаты план</th>--}}
                    {{--<th>Дата оплаты факт</th>--}}
                {{--</tr>--}}
                {{--</thead>--}}
                {{--<tbody>--}}
                {{--@foreach($data as $item)--}}
                    {{--<tr>--}}
                        {{--<td>{{ $loop->iteration }}</td>--}}
                        {{--<td>{{ $item->department->department_name }}</td>--}}
                        {{--<td>{{ $item->barticles->section->section_name }}</td>--}}
                        {{--<td>{{ $item->barticles->article_name }}</td>--}}
                        {{--<td>{{ $item->barticles->article_code }}</td>--}}
                        {{--<td>{{ $item->payment_name }}</td>--}}
                        {{--<td>{{ $item->summ }}</td>--}}
                        {{--<td>{{ $item->bdr_plan !== null ? $item->bdr_plan : ' - ' }}</td>--}}
                        {{--<td>{{ $item->bdr_fact !== null ? $item->bdr_fact : ' - ' }}</td>--}}
                        {{--<td>{{ $item->bdds_plan !== null ? $item->bdds_plan : ' - ' }}</td>--}}
                        {{--<td>{{ $item->bdds_fact !== null ? $item->bdds_fact : ' - ' }}</td>--}}
                    {{--</tr>--}}
                    {{--@endforeach--}}
                {{--</tbody>--}}
            {{--</table>--}}
        </div>
    </div>
    @stop
