<?php include 'cms-header.blade.php'; ?>

  <div class="cms">

		<div class="cms-container">

      <?php include 'cms-menu.blade.php'; ?>

			<div class="cms-content">

				<h2>Настройки сайта</h2>

				<div class="cms-settings__edit">

					<div class="cms-actions">
						<button class="cms-btn">Сохранить</button>
						<button class="cms-btn">Выйти</button>
					</div>


					<div class="cms-tabs">

						<div class="cms-tabs__nav">
							<div class="cms-tabs__nav-name cms-tabs__nav-name--active">Главная</div>
							<div class="cms-tabs__nav-name">Изображения</div>
						</div>

						<div class="cms-tabs__content">

							<div class="cms-tabs__item">
								<div class="cms-edit__settings">
									<div class="cms-edit__settings-item">
										<div class="cms-edit__settings-name">Главный заголовок</div>
										<div class="cms-edit__settings-content">
											<input class="cms-input" type="text">
										</div>
									</div>
									<div class="cms-edit__settings-item">
										<div class="cms-edit__settings-name">Meta Tag Description</div>
										<div class="cms-edit__settings-content">
											<textarea class="cms-textarea"></textarea>
										</div>
									</div>
									<div class="cms-edit__settings-item">
										<div class="cms-edit__settings-name">Meta Tag Keywords</div>
										<div class="cms-edit__settings-content">
											<textarea class="cms-textarea"></textarea>
										</div>
									</div>
								</div>
								<!-- /cms-edit__settings -->
							</div>
							<!-- /cms-tabs__item -->

							<div class="cms-tabs__item">
								<div class="cms-edit__settings">
									<div class="cms-edit__settings-item">
										<div class="cms-edit__settings-name">Логотип</div>
										<div class="cms-edit__settings-content">
											<div class="cms-edit__settings-logo">
												<img src="img/logo-3.svg" alt="">
											</div>
											<input type="file">
										</div>
									</div>
									<div class="cms-edit__settings-item">
										<div class="cms-edit__settings-name">Favicon</div>
										<div class="cms-edit__settings-content">
											<div class="cms-edit__settings-icon">
												<img src="img/logo-3.svg" alt="">
											</div>
											<input type="file">
										</div>
									</div>
								</div>
								<!-- /cms-edit__settings -->
							</div>
							<!-- /cms-tabs__item -->

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
