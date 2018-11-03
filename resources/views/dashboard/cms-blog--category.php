<?php include 'cms-header.blade.php'; ?>

  <div class="cms">

		<div class="cms-container">

      <?php include 'cms-menu.blade.php'; ?>

			<div class="cms-content">

				<h2>Блог Категории</h2>

				<div class="cms-blog-category">

					<ul class="cms-choose__list sortable">
						<li>
							<span>Советы</span>
							<span class="cms-choose__list-count">(12)</span>
							<div class="cms-choose__list-buttons">
								<button class="cms-btn--edit"><img src="img/pencil.svg" alt=""></button>
								<button class="cms-del"><img src="img/delete-icon.svg" alt=""></button>
							</div>
						</li>
						<li>
							<span>Новости</span>
							<span class="cms-choose__list-count">(25)</span>
							<div class="cms-choose__list-buttons">
								<button class="cms-btn--edit"><img src="img/pencil.svg" alt=""></button>
								<button class="cms-del"><img src="img/delete-icon.svg" alt=""></button>
							</div>
						</li>
						<li>
							<span>Видео</span>
							<span class="cms-choose__list-count">(33)</span>
							<div class="cms-choose__list-buttons">
								<button class="cms-btn--edit"><img src="img/pencil.svg" alt=""></button>
								<button class="cms-del"><img src="img/delete-icon.svg" alt=""></button>
							</div>
						</li>
					</ul>

					<div class="cms-blog-category__save">
						<button class="cms-btn">Сохранить изменения</button>
					</div>


					<div class="cms-category__add">
						<h4>Добавить категорию</h4>
						<form action="">
							<input type="text" name="" value="" placeholder="Введите категорию">
							<button class="cms-btn cms-btn--mini">Добавить</button>
						</form>
					</div>


				</div>
				<!-- /cms-block-category -->

			</div>
			<!-- /cms-content -->

		</div>
		<!-- /cms-container -->

	</div>
	<!-- /cms -->

<?php include 'cms-footer.blade.php'; ?>
