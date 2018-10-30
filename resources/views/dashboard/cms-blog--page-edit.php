<?php include 'cms-header.blade.php'; ?>

  <div class="cms">

		<div class="cms-container">

      <?php include 'cms-menu.blade.php'; ?>

			<div class="cms-content">

				<h2>Блог Редактирование страницы</h2>

				<div class="cms-blog-page">

					<div class="cms-blog-page__actions">
						<button class="cms-btn">Сохранить</button>
						<button class="cms-btn">Отменить</button>
					</div>


					<div class="cms-tabs">

						<div class="cms-tabs__nav">
							<div class="cms-tabs__nav-name cms-tabs__nav-name--active">Главная</div>
							<div class="cms-tabs__nav-name">Изображения</div>
							<div class="cms-tabs__nav-name">SEO</div>
						</div>

						<div class="cms-tabs__content">

							<div class="cms-tabs__item">
								<div class="cms-edit__settings">
									<div class="cms-edit__settings-item">
										<div class="cms-edit__settings-name">Заголовок</div>
										<div class="cms-edit__settings-content">
											<input class="cms-input" type="text">
										</div>
									</div>
									<div class="cms-edit__settings-item">
										<div class="cms-edit__settings-name">Аннотация</div>
										<div class="cms-edit__settings-content">
											<textarea class="cms-textarea" name="name"></textarea>
										</div>
									</div>
									<div class="cms-edit__settings-item">
										<div class="cms-edit__settings-name">Описание</div>
										<div class="cms-edit__settings-content">
											<textarea class="cms-textarea" name="name"></textarea>
										</div>
									</div>
									<div class="cms-edit__settings-item">
										<div class="cms-edit__settings-name">Статус</div>
										<div class="cms-edit__settings-content">
											<select>
												<option>Черновик</option>
												<option>Опубликовано</option>
												<option>Не опубликовано</option>
											</select>
										</div>
									</div>
								</div>
							</div>

							<div class="cms-tabs__item">
								<div class="cms-edit__settings">
									<div class="cms-edit__settings-item">
										<div class="cms-edit__settings-name">Главное изображение</div>
										<div class="cms-edit__settings-content">
											<div class="cms-edit__settings-main-img">
												<img src="img/blog1.jpg" alt="">
											</div>
											<input type="file">
										</div>
									</div>
									<div class="cms-edit__settings-item">
										<div class="cms-edit__settings-name">Выбор сопутствующих товаров</div>
										<div class="cms-edit__settings-content">
											<div class="cms-edit__settings-gallery">
												<div class="cms-edit__settings-gallery-item">
													<button class="cms-del"><img src="img/delete-icon.svg" alt=""></button>
													<div class="cms-edit__settings-gallery-img">
														<img src="img/product-1.jpg" alt="">
													</div>
													<p>Обеденная группа для кухни Милан-2 (ноги хром)</p>
												</div>
												<div class="cms-edit__settings-gallery-item">
													<button class="cms-del"><img src="img/delete-icon.svg" alt=""></button>
													<div class="cms-edit__settings-gallery-img">
														<img src="img/product-1.jpg" alt="">
													</div>
													<p>Обеденная группа для кухни Милан-2 (ноги хром)</p>
												</div>
											</div>
											<button class="cms-btn" data-toggle="modal" data-target="#add-product">
												Выбрать товары
											</button>
										</div>
									</div>
								</div>
							</div>



							<div class="cms-tabs__item">
								<div class="cms-edit__settings">
									<div class="cms-edit__settings-item">
										<div class="cms-edit__settings-name">Url</div>
										<div class="cms-edit__settings-content">
											<input class="cms-input" type="text" placeholder="">
										</div>
									</div>
									<div class="cms-edit__settings-item">
										<div class="cms-edit__settings-name">Meta заголовок</div>
										<div class="cms-edit__settings-content">
											<input class="cms-input" type="text" placeholder="">
										</div>
									</div>
									<div class="cms-edit__settings-item">
										<div class="cms-edit__settings-name">H1</div>
										<div class="cms-edit__settings-content">
											<input class="cms-input" type="text" placeholder="">
										</div>
									</div>
									<div class="cms-edit__settings-item">
										<div class="cms-edit__settings-name">Meta ключевые слова</div>
										<div class="cms-edit__settings-content">
											<input class="cms-input" type="text" placeholder="">
										</div>
									</div>
									<div class="cms-edit__settings-item">
										<div class="cms-edit__settings-name">Meta описание</div>
										<div class="cms-edit__settings-content">
											<input class="cms-input" type="text" placeholder="">
										</div>
									</div>
								</div>

							</div>

					</div>
					<!-- /cms-tabs -->

				</div>
				<!-- /cms-blog-page__tabs -->

			</div>
			<!-- /cms-content -->

		</div>
		<!-- /cms-container -->

	</div>
	<!-- /cms -->

<?php include 'cms-footer.blade.php'; ?>
