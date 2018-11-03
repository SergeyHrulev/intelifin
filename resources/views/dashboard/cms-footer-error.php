<?php include 'cms-header.blade.php'; ?>

  <div class="cms">

		<div class="cms-container">

      <?php include 'cms-menu.blade.php'; ?>

			<div class="cms-content">

				<h2>Ошибки на сайте</h2>

				<div class="cms-error">

					<div class="cms-error__content">

						<div class="cms-error__item">
							<div class="cms-error__item-pic">
								<img src="img/send-error.jpg" alt="">
							</div>
							<div class="cms-error__item-info">
								<div class="cms-error__item-number">№ <span>3</span></div>
								<div class="cms-error__item-link">
									<a href="#" target="_blank">http://mebelorg.alexandervaa.ru/</a></div>
								<div class="cms-error__item-comment">Битая ссылка</div>
								<div class="cms-error__item-buttons">
									<button class="cms-btn cms-btn--mini">Удалить</button>
								</div>
							</div>
						</div>

						<div class="cms-error__item">
							<div class="cms-error__item-pic">
								<img src="img/send-error.jpg" alt="">
							</div>
							<div class="cms-error__item-info">
								<div class="cms-error__item-number">№ <span>2</span></div>
								<div class="cms-error__item-link">
									<a href="#" target="_blank">http://mebelorg.alexandervaa.ru/</a></div>
								<div class="cms-error__item-comment">Битая ссылка</div>
								<div class="cms-error__item-buttons">
									<button class="cms-btn cms-btn--mini">Удалить</button>
								</div>
							</div>
						</div>

						<div class="cms-error__item">
							<div class="cms-error__item-pic">
								<img src="img/send-error.jpg" alt="">
							</div>
							<div class="cms-error__item-info">
								<div class="cms-error__item-number">№ <span>1</span></div>
								<div class="cms-error__item-link">
									<a href="#" target="_blank">http://mebelorg.alexandervaa.ru/</a></div>
								<div class="cms-error__item-comment">Опечатка в названии</div>
								<div class="cms-error__item-buttons">
									<button class="cms-btn cms-btn--mini">Удалить</button>
								</div>
							</div>
						</div>

					</div>
					<!-- /cms-error__content -->

				</div>
				<!-- /cms-error -->

			</div>
			<!-- /cms-content -->

		</div>
		<!-- /cms-container -->

	</div>
	<!-- /cms -->

<?php include 'cms-footer.blade.php'; ?>
