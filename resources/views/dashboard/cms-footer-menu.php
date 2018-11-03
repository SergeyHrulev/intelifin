<?php include 'cms-header.blade.php'; ?>

  <div class="cms">

		<div class="cms-container">

      <?php include 'cms-menu.blade.php'; ?>

			<div class="cms-content">

				<h2>Редактировать нижнее меню</h2>

				<div class="cms-footermenu">


					<div class="cms-action">
						<button class="cms-btn" data-toggle="modal" data-target="#add-product">
							Добавить страницу
						</button>
					</div>

					<div class="cms-footermenu__content">

						<div class="cms-footermenu__item">
							<div class="cms-footermenu__item-title">
								<h4>Покупателям</h4>
								<button class="cms-btn--edit"><img src="img/pencil.svg" alt=""></button>
							</div>
							<ul id="sortable1" class="connectedSortable">
								<li>
									<span>Заявка на подбор мебели</span>
									<button class="cms-btn--edit"><img src="img/pencil.svg" alt=""></button>
								</li>
								<li>
									<span>Промокоды и купоны</span>
									<button class="cms-btn--edit"><img src="img/pencil.svg" alt=""></button>
								</li>
								<li>
									<span>Оставить отзыв</span>
									<button class="cms-btn--edit"><img src="img/pencil.svg" alt=""></button>
								</li>
								<li>
									<span>Разместить объявление</span>
									<button class="cms-btn--edit"><img src="img/pencil.svg" alt=""></button>
								</li>
							</ul>
						</div>
						<div class="cms-footermenu__item">
							<div class="cms-footermenu__item-title">
								<h4>Продавцам</h4>
								<button class="cms-btn--edit"><img src="img/pencil.svg" alt=""></button>
							</div>
							<ul id="sortable2" class="connectedSortable">
								<li>
									<span>Как продавать на mebel.org</span>
									<button class="cms-btn--edit"><img src="img/pencil.svg" alt=""></button>
								</li>
								<li>
									<span>Статистика посещений</span>
									<button class="cms-btn--edit"><img src="img/pencil.svg" alt=""></button>
								</li>
								<li>
									<span>Тарифы</span>
									<button class="cms-btn--edit"><img src="img/pencil.svg" alt=""></button>
								</li>
								<li>
									<span>Вход для продавцов</span>
									<button class="cms-btn--edit"><img src="img/pencil.svg" alt=""></button>
								</li>
							</ul>
						</div>
						<div class="cms-footermenu__item">
							<div class="cms-footermenu__item-title">
								<h4>Прочее</h4>
								<button class="cms-btn--edit"><img src="img/pencil.svg" alt=""></button>
							</div>
							<ul id="sortable3" class="connectedSortable">
								<li>
									<span>Контакты</span>
									<button class="cms-btn--edit"><img src="img/pencil.svg" alt=""></button>
								</li>
								<li>
									<span>Блог</span>
									<button class="cms-btn--edit"><img src="img/pencil.svg" alt=""></button>
								</li>
								<li>
									<span>Стать автором</span>
									<button class="cms-btn--edit"><img src="img/pencil.svg" alt=""></button>
								</li>
								<li>
									<span>Нашли ошибку</span>
									<button class="cms-btn--edit"><img src="img/pencil.svg" alt=""></button>
								</li>
						</div>
						<div class="cms-footermenu__item">
							<div class="cms-footermenu__item-title">
								<h4>&nbsp;</h4>
								<button class="cms-btn--edit"><img src="img/pencil.svg" alt=""></button>
							</div>
							<ul id="sortable4" class="connectedSortable">
								<li>
									<span>Поиск по фото</span>
									<button class="cms-btn--edit"><img src="img/pencil.svg" alt=""></button>
								</li>
								<li>
									<span>Магазины</span>
									<button class="cms-btn--edit"><img src="img/pencil.svg" alt=""></button>
								</li>
								<li>
									<span>Помощь</span>
									<button class="cms-btn--edit"><img src="img/pencil.svg" alt=""></button>
								</li>
								<li>
									<span>Реферальная программа</span>
									<button class="cms-btn--edit"><img src="img/pencil.svg" alt=""></button>
								</li>
							</ul>
						</div>

					</div>
					<!-- /cms-footermenu__content -->

				</div>
				<!-- /cms-footermenu -->

			</div>
			<!-- /cms-content -->

		</div>
		<!-- /cms-container -->

	</div>
	<!-- /cms -->

<?php include 'cms-footer.blade.php'; ?>
