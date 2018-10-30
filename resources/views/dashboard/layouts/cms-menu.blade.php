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
		<a class="cms-menu__link" href="#collapse1" data-toggle="collapse" aria-expanded="true">C 01 Главная</a>
		<ul id="collapse1" class="cms-menu__submenu collapse in">
			<li><a class="cms-menu__link" href="{{ route('mainPopular') }}">C 01.1 Популярные категории</a></li>
			<li><a class="cms-menu__link" href="{{ route('mainProductDay') }}">C 01.2 Товар дня</a></li>
			<li><a class="cms-menu__link" href="{{ route('mainRecommended') }}">C 01.3 Рекомендуемые</a></li>
			<li><a class="cms-menu__link" href="{{ route('mainSets') }}">C 01.4 Готовые комплекты</a></li>
			<li><a class="cms-menu__link" href="{{ route('mainInteresting') }}">C 01.5 Интересно</a></li>
			<li><a class="cms-menu__link" href="{{ route('mainSale') }}">C 01.6 Распродажа</a></li>
			<li><a class="cms-menu__link" href="{{ route('mainManuf') }}">C 01.7 Производители</a></li>
			<li><a class="cms-menu__link" href="{{ route('mainAbout') }}">C 01.8 О нас</a></li>
		</ul>
	</div>


	<div class="cms-menu__item">
		<a class="cms-menu__link" href="#collapse2" data-toggle="collapse" aria-expanded="true">C 02 Подписки</a>
		<ul id="collapse2" class="cms-menu__submenu collapse in">
			<li><a class="cms-menu__link" href="/cms-subscribe.php">C 02.1 Подписка</a></li>
		</ul>
	</div>

	<div class="cms-menu__item">
		<a class="cms-menu__link" href="#collapse3" data-toggle="collapse" aria-expanded="true">C 03 Подвал</a>
		<ul id="collapse3" class="cms-menu__submenu collapse in">
			<li><a class="cms-menu__link" href="/cms-footer-menu.php">C 03.1 Меню</a></li>
			<li><a class="cms-menu__link" href="/cms-footer-social.php">C 03.2 Социальные сети</a></li>
			<li><a class="cms-menu__link" href="/cms-footer-error.php">C 03.3 Ошибки на сайте</a></li>
		</ul>
	</div>

	<div class="cms-menu__item">
		<a class="cms-menu__link" href="#collapse4" data-toggle="collapse" aria-expanded="true">C 04 Акции</a>
		<ul id="collapse4" class="cms-menu__submenu collapse in">
			<li><a class="cms-menu__link" href="/cms-stock--category.php">C 04.1 Категории</a></li>
			<li><a class="cms-menu__link" href="/cms-stock--promo.php">C 04.2 Промо коды</a></li>
			<li><a class="cms-menu__link" href="/cms-stock--send.php">C 04.3 Новые акции</a></li>
			<li><a class="cms-menu__link" href="/cms-stock--manuf.php">C 04.4 Фабрики</a></li>
			<li><a class="cms-menu__link" href="/cms-stock--promo-edit.php">C 04.5 Редактировать промокод</a></li>
			<li><a class="cms-menu__link" href="/cms-stock--manuf-edit.php">C 04.6 Редактировать фабрику</a></li>
		</ul>
	</div>



	<div class="cms-menu__item">
		<a class="cms-menu__link" href="#collapse5" data-toggle="collapse" aria-expanded="true">C 05 Блог</a>
		<ul id="collapse5" class="cms-menu__submenu collapse in">
			<!-- <li><a class="cms-menu__link" href="javascript:void(0);">05.1 Корневая</a></li> -->
			<li><a class="cms-menu__link" href="/cms-blog--posts.php">C 05.2 Посты</a></li>
			<li><a class="cms-menu__link" href="/cms-blog--category.php">C 05.3 Категории</a></li>
			<li><a class="cms-menu__link" href="/cms-blog--page-edit.php">C 05.4 Редактрование страницы</a></li>
		</ul>
	</div>



	<div class="cms-menu__item">
		<a class="cms-menu__link" href="#collapse6" data-toggle="collapse" aria-expanded="true">C 06 Статичные страницы</a>
		<ul id="collapse6" class="cms-menu__submenu collapse in">
			<li><a class="cms-menu__link" href="/cms-pages--rules.php">C 06.1 Правила портала</a></li>
			<li><a class="cms-menu__link" href="/cms-pages--protection.php">C 06.2 Программа защиты покупателей</a></li>
			<li><a class="cms-menu__link" href="/cms-pages--confidentiality.php">C 06.3 Политика конфиденциальности</a></li>
		</ul>
	</div>


	<div class="cms-menu__item">
		<a class="cms-menu__link" href="#collapse7" data-toggle="collapse" aria-expanded="true">C 07 Комментарии</a>
		<ul id="collapse7" class="cms-menu__submenu collapse in">
			<li><a class="cms-menu__link" href="/cms-comments--articles.php">C 07.1 К статьям</a></li>
			<li><a class="cms-menu__link" href="/cms-comments--products.php">C 07.2 К товарам</a></li>
			<li><a class="cms-menu__link" href="/cms-comments--page.php">C 07.3 Редактирование</a></li>
		</ul>
	</div>

	<div class="cms-menu__item">
		<a class="cms-menu__link" href="#collapse8" data-toggle="collapse" aria-expanded="true">C 08 Пользователи</a>
		<ul id="collapse8" class="cms-menu__submenu collapse in">
			<li><a class="cms-menu__link" href="/cms-users--list.php">C 08.1 Все пользователи</a></li>
			<li><a class="cms-menu__link" href="/cms-users--page.php">C 08.2 Редактировать пользователя</a></li>
		</ul>
	</div>

	<div class="cms-menu__item">
		<a class="cms-menu__link" href="#collapse9" data-toggle="collapse" aria-expanded="true">C 09 Парсер</a>
		<ul id="collapse9" class="cms-menu__submenu collapse in">
			<li><a class="cms-menu__link" href="/cms-parser--list.php">C 09.1 Список парсеров</a></li>
		</ul>
	</div>

	<div class="cms-menu__item">
		<a class="cms-menu__link" href="#collapse11" data-toggle="collapse" aria-expanded="true">C 10 Настройки сайта</a>
		<ul id="collapse11" class="cms-menu__submenu collapse in">
			<li><a class="cms-menu__link" href="/cms-settings--main.php">C 10.1 Главные настройки</a></li>
		</ul>
	</div>




	<div class="cms-menu__item" style="display: none;">
		<a class="cms-menu__link" href="#collapse-old" data-toggle="collapse" aria-expanded="true">Старый дизайн</a>
		<div id="collapse-old" class="cms-menu__submenu collapse in">

			<div class="cms-menu__item">
				<a class="cms-menu__link" href="#collapse21" data-toggle="collapse" aria-expanded="true">Каталог</a>
				<ul id="collapse21" class="cms-menu__submenu collapse in">
					<li><a class="cms-menu__link" href="/cms-products.php">Товары</a></li>
					<li><a class="cms-menu__link" href="/cms-category.php">Категории</a></li>
					<li><a class="cms-menu__link" href="/cms-mediafiles.php">Медиафайлы</a></li>
					<li><a class="cms-menu__link" href="/cms-comments.php">Оценки и коментарии</a></li>
					<li><a class="cms-menu__link" href="/cms-stock.php">Акции</a></li>
					<li><a class="cms-menu__link" href="/cms-settings.php">Настройки</a></li>
				</ul>
			</div>

			<div class="cms-menu__item">
				<a class="cms-menu__link" href="#collapse31" data-toggle="collapse" aria-expanded="true">Статьи</a>
				<ul id="collapse31" class="cms-menu__submenu collapse in">
					<li><a class="cms-menu__link" href="/cms-comments.php">Оценка и коментарии</a></li>
				</ul>
			</div>

			<div class="cms-menu__item">
				<a class="cms-menu__link" href="#collapse41" data-toggle="collapse" aria-expanded="true">Страницы</a>
				<ul id="collapse41" class="cms-menu__submenu collapse in">
					<li><a class="cms-menu__link" href="/cms-pages.php">Страница</a></li>
				</ul>
			</div>

			<div class="cms-menu__item">
				<a class="cms-menu__link" href="#collapse51" data-toggle="collapse" aria-expanded="true">Заявки</a>
				<ul id="collapse51" class="cms-menu__submenu collapse in">
					<li><a class="cms-menu__link" href="/cms-orders.php">Обратная связь</a></li>
					<li><a class="cms-menu__link" href="/cms-orders.php">Ошибки</a></li>
					<li><a class="cms-menu__link" href="/cms-orders.php">Подбор мебели</a></li>
				</ul>
			</div>

			<div class="cms-menu__item">
				<a class="cms-menu__link" href="#collapse61" data-toggle="collapse" aria-expanded="true">Пользователи</a>
				<ul id="collapse61" class="cms-menu__submenu collapse in">
					<li><a class="cms-menu__link" href="/cms-users.php">Пользователи</a></li>
				</ul>
			</div>

			<div class="cms-menu__item">
				<a class="cms-menu__link" href="#collapse71" data-toggle="collapse" aria-expanded="true">Компании</a>
				<ul id="collapse71" class="cms-menu__submenu collapse in">
					<li><a class="cms-menu__link" href="/cms-company.php">Компании</a></li>
				</ul>
			</div>

			<div class="cms-menu__item">
				<a class="cms-menu__link" href="#collapse81" data-toggle="collapse" aria-expanded="true">Теги</a>
				<ul id="collapse81" class="cms-menu__submenu collapse in">
					<li><a class="cms-menu__link" href="/cms-tags.php">Теги</a></li>
				</ul>
			</div>

			<div class="cms-menu__item">
				<a class="cms-menu__link" href="#collapse91" data-toggle="collapse" aria-expanded="true">Настройки</a>
				<ul id="collapse91" class="cms-menu__submenu collapse in">
					<li><a class="cms-menu__link" href="/cms-settings.php">Настройки</a></li>
				</ul>
			</div>

			<div class="cms-menu__item">
				<a class="cms-menu__link" href="#collapse101" data-toggle="collapse" aria-expanded="true">Подбор мебели</a>
				<ul id="collapse101" class="cms-menu__submenu collapse in">
					<li><a class="cms-menu__link" href="/cms-orders.php">Заявки</a></li>
					<li><a class="cms-menu__link" href="/cms-comments.php">Комментарии</a></li>
				</ul>
			</div>

			<div class="cms-menu__item">
				<a class="cms-menu__link" href="#collapse111" data-toggle="collapse" aria-expanded="true">Подписки</a>
				<ul id="collapse111" class="cms-menu__submenu collapse in">
					<li><a class="cms-menu__link" href="/cms-subscribe.php">Подписки</a></li>
				</ul>
			</div>

		</div>
	</div>

	<div class="cms-logout">
		Выйти
	</div>


</div>
<!-- /cms-menu -->
