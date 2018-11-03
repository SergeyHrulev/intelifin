<?php include 'cms-header.blade.php'; ?>

  <div class="cms">

		<div class="cms-container">

      <?php include 'cms-menu.blade.php'; ?>

			<div class="cms-content">


				<h2>Редактирование пользователя</h2>

				<div class="cms-users__edit">

					<div class="cms-actions">
						<button class="cms-btn">Сохранить</button>
						<button class="cms-btn">Выйти</button>
					</div>


					<div class="cms-tabs">

						<div class="cms-tabs__nav">
							<div class="cms-tabs__nav-name cms-tabs__nav-name--active">Главная</div>
							<div class="cms-tabs__nav-name">Настройки</div>
							<div class="cms-tabs__nav-name">Заказы</div>
							<div class="cms-tabs__nav-name">Отзывы</div>
						</div>

						<div class="cms-tabs__content">

							<div class="cms-tabs__item cms-users__edit-main">
								<div class="cms-edit__settings">
									<div class="cms-edit__settings-item">
										<div class="cms-edit__settings-name">Логин</div>
										<div class="cms-edit__settings-content">
											<input class="cms-input" type="text">
										</div>
									</div>
									<div class="cms-edit__settings-item">
										<div class="cms-edit__settings-name">Имя</div>
										<div class="cms-edit__settings-content">
											<input class="cms-input" type="text">
										</div>
									</div>
									<div class="cms-edit__settings-item">
										<div class="cms-edit__settings-name">Фамилия</div>
										<div class="cms-edit__settings-content">
											<input class="cms-input" type="text">
										</div>
									</div>
									<div class="cms-edit__settings-item">
										<div class="cms-edit__settings-name">Адрес</div>
										<div class="cms-edit__settings-content">
											<input class="cms-input" type="text">
										</div>
									</div>
									<div class="cms-edit__settings-item">
										<div class="cms-edit__settings-name">Телефон</div>
										<div class="cms-edit__settings-content">
											<input class="cms-input" type="text">
										</div>
									</div>
								</div>
								<!-- /cms-edit__settings -->
							</div>
							<!-- /cms-tabs__item -->

							<div class="cms-tabs__item">
								<div class="cms-edit__settings">
									<div class="cms-edit__settings-item">
										<div class="cms-edit__settings-name">Аватар</div>
										<div class="cms-edit__settings-content">
											<div class="cms-edit__settings-avatar">
												<img src="img/personal-photo.png" alt="">
											</div>
											<input type="file">
											<button class="cms-btn">Удалить фото</button>
										</div>
									</div>
									<div class="cms-edit__settings-item">
										<div class="cms-edit__settings-name">Статус</div>
										<div class="cms-edit__settings-content">
											<select class="" name="">
													<option>Активен</option>
													<option>Заблокирован</option>
												</select>
										</div>
									</div>
									<div class="cms-edit__settings-item cms-edit__settings--centered">
										<div class="cms-edit__settings-name">Подписка</div>
										<div class="cms-edit__settings-content">
											<input type="checkbox">
										</div>
									</div>
								</div>
							</div>



							<div class="cms-tabs__item">

								<div class="cms-edit__order">

									<div class="cms-edit__order-item">
										<div class="cms-edit__order-info">
											<div class="cms-edit__order-number">№ 37864</div>
											<div class="cms-edit__order-status">Доставлен</div>
											<div class="cms-edit__order-date">01.01.2018</div>
											<div class="cms-edit__order-sum">10000 руб</div>
											<div class="cms-edit__order-address">Санкт-Петербург, д.1</div>
											<div class="cms-edit__order-buttons">
												<a class="cms-btn" href="javascript:void(0);">Смотреть</a>
											</div>
										</div>
										<div class="cms-edit__order-content">
											<div class="cms-edit__order-products">
												<a class="cms-edit__order-products-item" href="javascript:void(0);">
													<div class="cms-edit__order-products-pic"><img src="img/product-1.jpg" alt=""></div>
													<div class="cms-edit__order-products-name">Диван</div>
													<div class="cms-edit__order-products-price">5000 руб</div>
												</a>
												<a class="cms-edit__order-products-item" href="javascript:void(0);">
													<div class="cms-edit__order-products-pic"><img src="img/product-2.jpg" alt=""></div>
													<div class="cms-edit__order-products-name">Стол</div>
													<div class="cms-edit__order-products-price">5000 руб</div>
												</a>
												<a class="cms-edit__order-products-item" href="javascript:void(0);">
													<div class="cms-edit__order-products-pic"><img src="img/product-3.jpg" alt=""></div>
													<div class="cms-edit__order-products-name">Стул</div>
													<div class="cms-edit__order-products-price">5000 руб</div>
												</a>
											</div>
										</div>
									</div>

									<div class="cms-edit__order-item">
										<div class="cms-edit__order-info">
											<div class="cms-edit__order-number">№ 37864</div>
											<div class="cms-edit__order-status">Доставлен</div>
											<div class="cms-edit__order-date">01.01.2018</div>
											<div class="cms-edit__order-sum">10000 руб</div>
											<div class="cms-edit__order-address">Санкт-Петербург, д.1</div>
											<div class="cms-edit__order-buttons">
												<a class="cms-btn" href="javascript:void(0);">Смотреть</a>
											</div>
										</div>
										<div class="cms-edit__order-content">
											<div class="cms-edit__order-products">
												<a class="cms-edit__order-products-item" href="javascript:void(0);">
													<div class="cms-edit__order-products-pic"><img src="img/product-1.jpg" alt=""></div>
													<div class="cms-edit__order-products-name">Диван</div>
													<div class="cms-edit__order-products-price">5000 руб</div>
												</a>
												<a class="cms-edit__order-products-item" href="javascript:void(0);">
													<div class="cms-edit__order-products-pic"><img src="img/product-2.jpg" alt=""></div>
													<div class="cms-edit__order-products-name">Стол</div>
													<div class="cms-edit__order-products-price">5000 руб</div>
												</a>
												<a class="cms-edit__order-products-item" href="javascript:void(0);">
													<div class="cms-edit__order-products-pic"><img src="img/product-3.jpg" alt=""></div>
													<div class="cms-edit__order-products-name">Стул</div>
													<div class="cms-edit__order-products-price">5000 руб</div>
												</a>
											</div>
										</div>
									</div>

								</div>

							</div>


							<div class="cms-tabs__item">

								<div class="cms-table__actions">
									<span>Выбранные</span>
									<select>
												<option>Действие</option>
												<option>Заблокировать</option>
												<option>Разблокировать</option>
												<option>Удалить</option>
											</select>
									<button class="cms-btn">Применить</button>
								</div>

								<table class="cms-table">
									<thead>
										<tr>
											<td><input type="checkbox"></td>
											<td>Дата</td>
											<td>Статья\Товар</td>
											<td>Оценка</td>
											<td>Статус</td>
											<td>Смотреть</td>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td><input type="checkbox"></td>
											<td>01.01.2018</td>
											<td>Диван</td>
											<td>5</td>
											<td>Опубликован</td>
											<td><a class="cms-btn--show" href="#"><img src="img/show-eye.svg" alt=""></a></td>
										</tr>
										<tbody>
											<tr>
												<td><input type="checkbox"></td>
												<td>01.01.2018</td>
												<td>Диван</td>
												<td>5</td>
												<td>Опубликован</td>
												<td><a class="cms-btn--show" href="#"><img src="img/show-eye.svg" alt=""></a></td>
											</tr>
											<tbody>
												<tr>
													<td><input type="checkbox"></td>
													<td>01.01.2018</td>
													<td>Диван</td>
													<td>5</td>
													<td>Опубликован</td>
													<td><a class="cms-btn--show" href="#"><img src="img/show-eye.svg" alt=""></a></td>
												</tr>
											</tbody>
								</table>

								<div class="cms-pagination">
									<div class="cms-pagination__item"><span><</span></div>
									<div class="cms-pagination__item cms-pagination__item--active"><span>1</span></div>
									<div class="cms-pagination__item"><span>2</span></div>
									<div class="cms-pagination__item"><span>3</span></div>
									<div class="cms-pagination__item"><span>...</span></div>
									<div class="cms-pagination__item"><span>5</span></div>
									<div class="cms-pagination__item"><span>></span></div>
								</div>
								<!-- /cms-pagination -->

							</div>

						</div>
						<!-- /cms-tabs__content -->

					</div>
					<!-- /cms-tabs -->

				</div>
				<!-- /cms-users__edit -->


			</div>
			<!-- /cms-content -->

		</div>
		<!-- /cms-container -->

	</div>
	<!-- /cms -->

<?php include 'cms-footer.blade.php'; ?>
