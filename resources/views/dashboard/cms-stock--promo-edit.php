<?php include 'cms-header.blade.php'; ?>

  <div class="cms">

		<div class="cms-container">

      <?php include 'cms-menu.blade.php'; ?>

      <div class="cms-content">

				<h2>Редактировать промокод</h2>

				<div class="cms-promo-edit">

					<div class="cms-actions">
						<button class="cms-btn">Сохранить</button>
						<button class="cms-btn">Отменить</button>
					</div>

					<div class="cms-tabs">

						<div class="cms-tabs__nav">
							<div class="cms-tabs__nav-name cms-tabs__nav-name--active">Главная</div>
							<div class="cms-tabs__nav-name">Категории</div>
						</div>

						<div class="cms-tabs__content">

							<div class="cms-tabs__item">
								<div class="cms-edit__settings">
									<div class="cms-edit__settings-item cms-edit__settings--centered">
										<div class="cms-edit__settings-name">Компания</div>
										<div class="cms-edit__settings-content cms-edit__promo-name">
											<p>Балтика Мебель</p>
    									<button class="cms-btn--edit" data-toggle="modal" data-target="#add-manuf">
                        <img src="img/pencil.svg" alt="">
                      </button>
										</div>
									</div>
									<div class="cms-edit__settings-item">
										<div class="cms-edit__settings-name">Заголовок</div>
										<div class="cms-edit__settings-content">
											<input class="cms-input" type="text">
										</div>
									</div>
									<div class="cms-edit__settings-item">
										<div class="cms-edit__settings-name">Ссылка</div>
										<div class="cms-edit__settings-content">
											<input class="cms-input" type="text">
										</div>
									</div>
									<div class="cms-edit__settings-item">
										<div class="cms-edit__settings-name">Код</div>
										<div class="cms-edit__settings-content">
											<input class="cms-input" type="text">
										</div>
									</div>
									<div class="cms-edit__settings-item">
										<div class="cms-edit__settings-name">Дата начала</div>
										<div class="cms-edit__settings-content">
											<input class="cms-input" type="text">
										</div>
									</div>
									<div class="cms-edit__settings-item">
										<div class="cms-edit__settings-name">Дата окончания</div>
										<div class="cms-edit__settings-content">
											<input class="cms-input" type="text">
											<!-- <p style="color: red;">Примечание: что будет после окончания?</p> -->
										</div>
									</div>
									<div class="cms-edit__settings-item">
										<div class="cms-edit__settings-name">Текст акции</div>
										<div class="cms-edit__settings-content">
											<textarea class="cms-textarea" name="name"></textarea>
										</div>
									</div>
									<div class="cms-edit__settings-item">
										<div class="cms-edit__settings-name">Вид</div>
										<div class="cms-edit__settings-content">
											<select>
												<option>Промокод</option>
												<option>Акция</option>
											</select>
										</div>
									</div>
									<div class="cms-edit__settings-item">
										<div class="cms-edit__settings-name">Статус</div>
										<div class="cms-edit__settings-content">
											<select>
												<option>Вкл</option>
												<option>Выкл</option>
											</select>
										</div>
									</div>
								</div>
							</div>

							<div class="cms-tabs__item">
								<div class="cms-edit__settings">

									<div class="cms-edit__settings-item">
										<div class="cms-edit__settings-name">Выберите категории</div>
										<div class="cms-edit__settings-content">

				                 <div class="filter-list__item">
				                   <label>
				                   <input class="filter__checkbox" type="checkbox">
				                   <span class="filter__checkbox-custom"></span>
				                   <span>Кухни и бытовая техника</span>
				                 </label>
				                 </div>
				                 <div class="filter-list__item">
				                   <label>
				                   <input class="filter__checkbox" type="checkbox">
				                   <span class="filter__checkbox-custom"></span>
				                   <span>Кухонные аксессуары</span>
				                 </label>
				                 </div>
				                 <div class="filter-list__item">
				                   <label>
				                   <input class="filter__checkbox" type="checkbox">
				                   <span class="filter__checkbox-custom"></span>
				                   <span>Кровати</span>
				                 </label>
				                 </div>
				                 <div class="filter-list__item">
				                   <label>
				                   <input class="filter__checkbox" type="checkbox">
				                   <span class="filter__checkbox-custom"></span>
				                   <span>Матрасы</span>
				                 </label>
				                 </div>
				                 <div class="filter-list__item">
				                   <label>
				                   <input class="filter__checkbox" type="checkbox">
				                   <span class="filter__checkbox-custom"></span>
				                   <span>Столы</span>
				                 </label>
				                 </div>
				                 <div class="filter-list__item">
				                   <label>
				                   <input class="filter__checkbox" type="checkbox">
				                   <span class="filter__checkbox-custom"></span>
				                   <span>Cтулья</span>
				                 </label>
				                 </div>
				                 <div class="filter-list__item">
				                   <label>
				                   <input class="filter__checkbox" type="checkbox">
				                   <span class="filter__checkbox-custom"></span>
				                   <span>Мягкая мебель</span>
				                 </label>
				                 </div>
				                 <div class="filter-list__item">
				                   <label>
				                   <input class="filter__checkbox" type="checkbox">
				                   <span class="filter__checkbox-custom"></span>
				                   <span>Хранение одежды и обуви</span>
				                 </label>
				                 </div>
				                 <div class="filter-list__item">
				                   <label>
				                   <input class="filter__checkbox" type="checkbox">
				                   <span class="filter__checkbox-custom"></span>
				                   <span>Мебель и сантехника для ванной</span>
				                 </label>
				                 </div>
				                 <div class="filter-list__item">
				                   <label>
				                   <input class="filter__checkbox" type="checkbox">
				                   <span class="filter__checkbox-custom"></span>
				                   <span>Зеркала</span>
				                 </label>
				                 </div>
				                 <div class="filter-list__item">
				                   <label>
				                   <input class="filter__checkbox" type="checkbox">
				                   <span class="filter__checkbox-custom"></span>
				                   <span>Хранение одежды и обуви</span>
				                 </label>
				                 </div>

										</div>
									</div>

								</div>
							</div>

						</div>
						<!-- /cms-tabs__content -->

					</div>
					<!-- /cms-tabs -->

				</div>
				<!-- /cms-promo-edit -->




			</div>
			<!-- /cms-content -->

		</div>
		<!-- /cms-container -->

	</div>
	<!-- /cms -->

<?php include 'cms-footer.blade.php'; ?>
