@extends('layouts.app')
@section('content')
    @include('budget.left_menu')
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
                        <th></th>
                        <th>{{ $item->department->department_name }}</th>
                        <th>{{ $item->department->structuralUnit->structural_unit_name }}</th>
                        <th>{{ $item->barticles->article_name }}</th>
                        <th>{{ $item->barticles->article_code }}</th>
                        <th>{{ $item->barticles->mainArticle->main_article_name }}</th>
                        <th>{{ $item->barticles->mainArticle->section->section_name }}</th>
                        <th>{{ $item->payment_name }}</th>
                        <th>{{ $item->summ }}</th>
                        <th>{{ $item->bdr_plan !== null ? $item->bdr_plan : ' - ' }}</th>
                        <th>{{ $item->bdr_fact !== null ? $item->bdr_fact : ' - ' }}</th>
                        <th>{{ $item->bdds_plan !== null ? $item->bdds_plan : ' - ' }}</th>
                        <th>{{ $item->bdr_bdds_fact !== null ? $item->bdds_fact : ' - ' }}</th>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @stop
