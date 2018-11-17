<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @if(Route::current() !== null)
        @if(Route::current()->getName() === 'password/reset' || Route::current()->getName() === 'register')
            <meta name='robots' content="noindex, follow">
        @endif
        @if(Route::current()->getName() === 'htmlmap')
            <meta name="robots" content="noindex, follow, noarchive"/>
    @endif
@endif

@include('templates.meta')

<!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="shortcut icon" href="{{{ asset('favicon.ico') }}}">

<!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">


</head>
<body>
<header>
    @include('budget.layouts.cms-header')
</header>
<main>
    <div id="app">
        @include('layouts.nav')
        <div class="cms">
            <div class="cms-container">
                @include('budget.layouts.cms-menu')
                @yield('content')
            </div>
            <!-- /cms-container -->
        </div>
        <!-- /cms -->
    </div>
</main>
<footer>
    @include('budget.layouts.cms-footer')
</footer>


</body>
</html>
