@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">{{ Breadcrumbs::render('contacts') }}</div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
    <div class="container h-100">
        <div class="row align-items-center h-100 py-5">
        <div class="col-12 my-3">
            <h1 class="text-center">Как с нами связаться</h1>
        </div>
<!-- /.col-12 -->
            <div class="col-lg-5 col-xs-12 my-3">
                <form action="">
                    <div class="form-group">
                        <label for="">Ваше имя</label>
                        <!-- /.form-control -->
                    </div>
                    <!-- /.form-group -->
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="text" class="form-control">
                    </div>
                    <!-- /.form-group -->
                    <div class="form-group">
                        <label for="">Телефон</label>
                        <input type="text" class="form-control">
                    </div>
                    <!-- /.form-group -->
                    <div class="form-group">
                        <label for="">Сообщение</label>
                        <textarea type="text" class="form-control"></textarea>
                    </div>
                    <!-- /.form-group -->
                    <button class="btn btn-outline-primary">Отправить</button>
                    <!-- /.form-group -->
                </form>
            </div>
            <div class="col-lg-2"></div>
            <!-- /.col-lg-4 -->
            <div class="col-lg-5 col-xs-12 my-3">
                <p style="font-size: 2rem;font-weight: 500;">Контакты</p>
                <a href="tel:+78129809572"><i class="fa fa-phone fa-lg" aria-hidden="true"></i> (812) 980-95-72</a><br>
                <a href="mailto:info@intelifin.ru"><i class="fa fa-envelope-o" aria-hidden="true"></i> info@intelifin.ru</a><br>
                <p><i class="fa fa-map-marker fa-lg" aria-hidden="true"></i> СПб, Малая Посадская, 10</p>
                <a href="https://yandex.ru/maps/?um=constructor%3A2b2fa6bd90ba2ccc5789087a1fb0d9f997e904c4af079d39e6f241d6c56fd628&amp;source=constructorStatic" target="_blank"><img src="https://api-maps.yandex.ru/services/constructor/1.0/static/?um=constructor%3A2b2fa6bd90ba2ccc5789087a1fb0d9f997e904c4af079d39e6f241d6c56fd628&amp;width=150&amp;height=150&amp;lang=ru_RU" alt="" style="border: 0;" /></a>
                <div class="social" style="margin: 2rem 0;">
                    <a href="#" rel="nofollow"><i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i></a>
                    <a href="#" rel="nofollow"><i class="fa fa-vk fa-2x" aria-hidden="true" style="margin: 0 0.7rem;"></i></a>
                    <a href="#" rel="nofollow"><i class="fa fa-telegram fa-2x" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
        <!-- /.align-items-center h-100 --></div>
    <!-- /.contaner h-100 -->
@stop
