@extends('budget.layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <table class="table">
                <thead>
                <tr>
                    <th>№</th>
                    <th>Департамент</th>
                    <th>Отдел</th>
                    <th>Статья</th>
                    <th>Номер статьи</th>
                    <th>Главная статья</th>
                    <th>Раздел</th>
                    <th>Наименование платежа</th>
                    <th>Сумма</th>
                    <th>Дата отгрузки план</th>
                    <th>Дата отгрузки факт</th>
                    <th>Дата оплаты план</th>
                    <th>Дата оплаты факт</th>
                </tr>
                </thead>
                <tbody>
                @foreach($data as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->department->department_name }}</td>
                        <td>{{ $item->department->structuralUnit->structural_unit_name }}</td>
                        <td>{{ $item->barticles->article_name }}</td>
                        <td>{{ $item->barticles->article_code }}</td>
                        <td>{{ $item->barticles->mainArticle->main_article_name }}</td>
                        <td>{{ $item->barticles->mainArticle->section->section_name }}</td>
                        <td>{{ $item->payment_name }}</td>
                        <td>{{ $item->summ }}</td>
                        <td>{{ $item->bdr_plan !== null ? $item->bdr_plan : ' - ' }}</td>
                        <td>{{ $item->bdr_fact !== null ? $item->bdr_fact : ' - ' }}</td>
                        <td>{{ $item->bdds_plan !== null ? $item->bdds_plan : ' - ' }}</td>
                        <td>{{ $item->bdr_bdds_fact !== null ? $item->bdds_fact : ' - ' }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @stop
