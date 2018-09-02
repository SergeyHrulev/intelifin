<nav class="navbar bg-fintex shadow-sm">
    <div class="container d-flex justyfy-content-between">
        @if(Request::is('/'))
            <span class="navbar-brand d-flex align-items-center">{{ config('app.name') }}</span>
        @else
            <a href="{{ route('main') }}" class="navbar-brand d-flex align-items-center">{{ config('app.name') }}</a>
        @endif
        <button class="navbar-toggler navbar-dark d-block d-sm-none" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            <!-- /.fa fa-navicon -->
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown"><a href="" class="nav-link dropdown-toggle" id="mobileMenu" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">услуги</a>
                    <div class="dropdown-menu bg-fintex" aria-labelledby="mobileMenu">
                        <a href="{{ route('chief-financial-officer') }}" class="dropdown-item" style="color: #fff!important;">Ваш Финансовый директор</a>
                        <a href="{{ route('easy-start') }}" class="dropdown-item" style="color: #fff!important;">Программа "Легкий старт"</a>
                        <a href="{{ route('cfo-school') }}" class="dropdown-item" style="color: #fff!important;">Школа Финансового директора</a>
                        <a href="{{ route('credit-expert') }}" class="dropdown-item" style="color: #fff!important;">Кредитный эксперт</a>
                        <a href="{{ route('business-security') }}" class="dropdown-item" style="color: #fff!important;">Безопасность бизнеса</a>
                        <a href="{{ route('personal-banking') }}" class="dropdown-item" style="color: #fff!important;">Ваш банкир</a>
                    </div>
                    <!-- /.nav-link --></li>
                <!-- /.nav-item -->
                <li class="nav-item"><a href="{{ url('/articles') }}" class="nav-link" style="color: #fff!important;">статьи</a>
                    <!-- /.nav-link --></li>
                <!-- /.nav-item -->
                <li class="nav-item"><a href="{{ url('/events') }}" class="nav-link" style="color: #fff!important;">мероприятия</a>
                    <!-- /.nav-link --></li>
                <!-- /.nav-item -->
                <li class="nav-item"><a href="{{ url('/fin-dictionary') }}" class="nav-link" style="color: #fff!important;">ФинСловарь</a>
                    <!-- /.nav-link --></li>
                <!-- /.nav-item -->
                <li class="nav-item"><a href="{{ url('/contacts') }}" class="nav-link" style="color: #fff!important;">контакты</a>
                    <!-- /.nav-link --></li>
                <!-- /.nav-item -->
                <li class="nav-item"><a href="" class="nav-link" data-toggle="modal" data-target="#exampleModalCenter">вход</a>
                    <!-- /.nav-link --></li>
                <!-- /.nav-item -->
            </ul>
        </div>

        <ul class="nav justify-content-center d-none d-md-flex text-uppercase">
            <li class="nav-item dropdown d-flex align-items-center"><a href="{{ url('/servises') }}" class="nav-linnav-link dropdown-toggle text-white" id="dropdownMenu" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">услуги</a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenu">
                    <a href="{{ route('chief-financial-officer') }}" class="dropdown-item">Ваш Финансовый директор</a>
                    <a href="{{ route('easy-start') }}" class="dropdown-item">Программа "Легкий старт"</a>
                    <a href="{{ route('cfo-school') }}" class="dropdown-item">Школа Финансового директора</a>
                    <a href="{{ route('credit-expert') }}" class="dropdown-item">Кредитный эксперт</a>
                    <a href="{{ route('business-security') }}" class="dropdown-item">Безопасность бизнеса</a>
                    <a href="{{ route('personal-banking') }}" class="dropdown-item">Ваш банкир</a>
                </div>
                <!-- /.dropdown-menu -->
                <!-- /.nav-link -->
            </li>
            <!-- /.nav-item -->
            <li class="nav-item"><a href="{{ url('/articles') }}" class="nav-link" style="color: #fff!important;">статьи</a>
                <!-- /.nav-link --></li>
            <!-- /.nav-item -->
            <li class="nav-item"><a href="{{ url('/events') }}" class="nav-link" style="color: #fff!important;">мероприятия</a>
                <!-- /.nav-link --></li>
            <!-- /.nav-item -->
            <li class="nav-item"><a href="{{ url('/fin-dictionary') }}" class="nav-link" style="color: #fff!important;">ФинСловарь</a>
                <!-- /.nav-link --></li>
            <!-- /.nav-item -->
            <li class="nav-item"><a href="{{ url('/contacts') }}" class="nav-link" style="color: #fff!important;">контакты</a>
                <!-- /.nav-link --></li>
            <!-- /.nav-item -->
        </ul>
            <a href="tel:+78129809572" rel="tel:+78129809572" style="color: #fff;"><i class="material-icons md-24">phone</i></a>
            <a class="text-right d-none d-md-flex" href="" data-toggle="modal" data-target="#exampleModalCenter" style="color: #fff;">Вход</a>
        <!-- /.nav justify-content-center -->
    </div>
    <!-- /.container d-flex justyfy-content-between -->

</nav>
<!-- /.navbar -->
