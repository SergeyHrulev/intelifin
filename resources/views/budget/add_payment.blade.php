@extends('budget.layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-6">
            <form action="{{ route('payment.store') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="">Наименование статьи</label>
                    <select name="barticles_id" id="barticle_id" class="form-control">
                        <option value="0">-- Выберите статью --</option>
                        @foreach($articles as $article)
                            <option value="{{ $article->id }}">{{ $article->article_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Наименование Департамента</label>
                    <select name="departments_id" id="departments_id" class="form-control">
                        <option value="0">-- Выберите отдел --</option>
                        @foreach($departments as $department)
                            <option value="{{ $department->id }}">{{ $department->department_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Наименование расхода</label>
                    <input type="text" class="form-control" name="payment_name">
                </div>
                <div class="form-group">
                    <label for="">Сумма расхода</label>
                    <input type="text" class="form-control" name="summ">
                </div>
                <fieldset class="form-group">
                    <div class="row">
                        <legend class="col-form-label col-sm-2 pt-0" for="">Даты расхода</legend>
                        <div class="col-10">
                            <div class="form-group">
                                <label for="">БДР план</label>
                                <input type="date" class="form-control" name="bdr_plan">
                            </div>
                            <div class="form-group">
                                <label for="">БДР факт</label>
                                <input type="date" class="form-control" name="bdr_fact">
                            </div>
                            <div class="form-group">
                                <label for="">БДДС план</label>
                                <input type="date" class="form-control" name="bdds_plan">
                            </div>
                            <div class="form-group">
                                <label for="">БДДС факт</label>
                                <input type="date" class="form-control" name="bdds_fact">
                            </div>
                        </div>
                    </div>

                </fieldset>
                <div class="form-group">
                    <input type="submit" class="btn btn-outline-primary" value="Сохранить">
                </div>

            </form>
        </div>
    </div>
</div>
@stop
