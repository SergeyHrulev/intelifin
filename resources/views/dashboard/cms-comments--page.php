<?php include 'cms-header.blade.php'; ?>

  <div class="cms">

		<div class="cms-container">

      <?php include 'cms-menu.blade.php'; ?>

			<div class="cms-content">

				<h2>Просмотр комментария</h2>

				<div class="cms-comments">

					<div class="cms-back">
						<a class="cms-btn" href="#">Назад</a>
					</div>

					<div class="cms-comments-page">

						<div class="row">

							<div class="col-md-2 offset-md-2">
								<div class="cms-comments-page__info">
									<div class="cms-comments-page__author"><img src="img/personal-photo.png" alt=""></div>
									<div class="cms-comments-page__name">Иванов Иван</div>
									<div class="cms-comments-page__date">Дата публикации - 01.01.2017</div>
									<div class="cms-comments-page__status">Статус - На модерации</div>
									<a class="cms-comments-page__link" href="#">На страницу пользователя</a>
								</div>
								<div class="cms-comments-page__actions">
									<button class="cms-btn">Опубликовать</button>
									<button class="cms-btn">Заблокировать</button>
									<button class="cms-btn cms-btn--red">Удалить</button>
								</div>
							</div>
							<div class="col-md-6">
								<div class="cms-comments-page__category">
									<p>Товар - </p>
									<a href="#" target="_blank">Честерфилдский диван</a>
								</div>
								<div class="cms-comments-page__text">
									<div class="cms-comments-page__text-block">
										<h4>Комментарий</h4>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere consequatur minus magnam fugiat nobis aut sapiente, incidunt quidem accusantium nesciunt alias dicta deserunt molestiae nihil, cum perspiciatis non libero adipisci voluptatem delectus animi. Unde, nisi esse, harum voluptate reiciendis repudiandae? Eligendi dignissimos dolorem odio, vel quisquam fugiat vitae dolorum odit.</p>
									</div>
									<div class="cms-comments-page__text-block">
										<h4>Достоинства</h4>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur quas ex, repudiandae asperiores soluta doloremque nulla id illum explicabo, maxime.</p>
									</div>
									<div class="cms-comments-page__text-block">
										<h4>Недостатки</h4>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur quas ex, repudiandae asperiores soluta doloremque nulla id illum explicabo, maxime.</p>
									</div>
								</div>
							</div>

						</div>
						<!-- /row -->
					</div>
					<!-- /cms-comments-page -->


				</div>
				<!-- /cms-comments -->

			</div>
			<!-- /cms-content -->

		</div>
		<!-- /cms-container -->

	</div>
	<!-- /cms -->

<?php include 'cms-footer.blade.php'; ?>
