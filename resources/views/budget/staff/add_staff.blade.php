@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-6">
                <form action="">
                    <label for="">Наименование подразделения</label>
                    <input type="text" class="form-control">

                    <div class="row">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Имя">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Фамилия">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Отчество">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Оклад">
                        </div>
                    </div>
                    <input type="submit" class="btn btn-outline-primary" value="Сохранить">
                </form>
            </div>
        </div>
    </div>
@stop
