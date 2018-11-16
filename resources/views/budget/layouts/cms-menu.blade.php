<div class="cms-menu">

	<div class="cms-logo">
		<img src="img/logo-3.svg" alt="">
	</div>
    <script>
        $('.cms-menu__link').collapse()
    </script>
	<div class="cms-menu__item">
		<a class="cms-menu__link cms-menu__link--active" href="{{ route('dashboard') }}">C 00 Dashboard</a>
	</div>


	<div class="cms-menu__item">
		<a class="cms-menu__link"></a>
	</div>

    <div class="cms-menu__item">
        <a class="cms-menu__link" href="{{ url('budget/contractors ') }}">Контрагенты</a>
    </div>
    <div class="cms-menu__item">
        <a class="cms-menu__link" href="{{ url('budget/payment/create') }}">Создать платеж</a>
    </div><div class="cms-menu__item">
        <a class="cms-menu__link" href="{{ url('budget/payment ') }}">Платежи</a>
    </div><div class="cms-menu__item">
        <a class="cms-menu__link" href="{{ url('budget/article') }}">Статьи</a>
    </div><div class="cms-menu__item">
        <a class="cms-menu__link" href="{{ url('budget/payment/create') }}">Создать платеж</a>
    </div>

	<div class="cms-logout">
		Выйти
	</div>


</div>
<!-- /cms-menu -->
