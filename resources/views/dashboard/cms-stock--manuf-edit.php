<?php include 'cms-header.blade.php'; ?>

  <div class="cms">

		<div class="cms-container">

      <?php include 'cms-menu.blade.php'; ?>

			<div class="cms-content">

				<h2>Создать\редактировать фабрику</h2>

				<div class="cms-menuf-edit">

					<div class="cms-actions">
						<button class="cms-btn">Сохранить</button>
						<button class="cms-btn">Отменить</button>
					</div>

					<div class="cms-menuf-edit__content">

						<div class="cms-edit__settings">
							<div class="cms-edit__settings-item">
								<div class="cms-edit__settings-name">Компания</div>
								<div class="cms-edit__settings-content">
									<input class="cms-input" type="text">
								</div>
							</div>
							<div class="cms-edit__settings-item">
								<div class="cms-edit__settings-name">Описание компании</div>
								<div class="cms-edit__settings-content">
									<textarea class="cms-textarea" name="name"></textarea>
								</div>
							</div>
							<div class="cms-edit__settings-item">
								<div class="cms-edit__settings-name">Логотип</div>
								<div class="cms-edit__settings-content">
									<div class="cms-edit__settings-logo">
										<img src="img/manuf-1.jpg" alt="">
									</div>
									<input type="file">
								</div>
							</div>
						</div>

					</div>
					<!-- /cms-menuf-edit -->

				</div>
				<!-- /cms-menuf-edit -->



			</div>
			<!-- /cms-content -->

		</div>
		<!-- /cms-container -->

	</div>
	<!-- /cms -->

<?php include 'cms-footer.blade.php'; ?>
