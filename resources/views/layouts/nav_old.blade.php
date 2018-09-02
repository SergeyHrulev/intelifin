<nav class="navbar navbar-expand-md navbar-light navbar-laravel position-sticky">
    <div class="container">
        <div class="row d-flex align-items-center">
            @if(Request::is('/'))
                <i class="fa fa-bars pr-2" style="cursor: pointer;" @click="openSidebar"></i><span class="navbar-brand">{{ config('app.name', 'Laravel') }}</span>

            @else
                <i class="fa fa-bars pr-2" style="cursor: pointer;" @click="openSidebar"></i>
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
            @endif
            <ul class="navbar-nav d-none d-lg-flex" style="color: #fff;">
                <li class="nav-item active mx-1"><a href="{{ route('chief-financial-officer') }}">Ваш Финансовый директор</a></li>
                <!-- /.nav-item active -->
                <li class="nav-item mx-1"><a href="{{ route('events') }}">Мероприятия</a></li>
                <!-- /.nav-item active -->
                <li class="nav-item mx-1"><a href="{{ route('articles') }}">Статьи</a></li>

                <li class="nav-item mx-1"><a href="{{ route('contacts') }}">Контакты</a></li>
                <!-- /.nav-item active -->
            </ul>
            <div class="col-sm ml-auto">

                <a class="text-right" href="" data-toggle="modal" data-target="#exampleModalCenter" style="color: #fff;">Вход</a>
            </div>
            <!-- /.float-right -->

        </div>
        <!-- /.row -->
    </div>
</nav>
