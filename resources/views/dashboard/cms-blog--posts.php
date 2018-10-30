<?php include 'cms-header.blade.php'; ?>

  <div class="cms">

		<div class="cms-container">

      <?php include 'cms-menu.blade.php'; ?>

			<div class="cms-content">

				<h2>Блог Посты</h2>

				<div class="cms-blog-posts">

					<div class="cms-table__actions">
						<span>Выбранные</span>
						<select>
							<option>Действие</option>
							<option>Опубликовать</option>
							<option>Снять в публикации</option>
							<option>Удалить</option>
						</select>
						<button class="cms-btn cms-btn--mini">Применить</button>
					</div>

					<table class="cms-table cms-blog-posts__table">
						<thead>
							<tr>
								<td class="cms-blog-posts__table-check"><input type="checkbox"></td>
								<td class="cms-blog-posts__table-published">Опубликовано</td>
								<td class="cms-blog-posts__table-title">Заголовок</td>
								<td class="cms-blog-posts__table-date">Дата</td>
								<td class="cms-blog-posts__table-comments">Комментарии</td>
								<td class="cms-blog-posts__table-category">Категория</td>
								<td class="cms-blog-posts__table-rating">Рейтинг</td>
								<td class="cms-blog-posts__table-edit">Ред.</td>
								<td class="cms-blog-posts__table-delete">Удалить</td>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="cms-blog-posts__table-check"><input type="checkbox"></td>
								<td class="cms-blog-posts__table-published">Да</td>
								<td class="cms-blog-posts__table-title">Одежда для ваших окон: как выбрать тюль</td>
								<td class="cms-blog-posts__table-date">01.01.2017</td>
								<td class="cms-blog-posts__table-comments">10</td>
								<td class="cms-blog-posts__table-category">
									<select>
									  <option>Советы</option>
									  <option>Новости</option>
									  <option>Видео</option>
									</select>
								</td>
								<td class="cms-blog-posts__table-rating">4.9</td>
								<td class="cms-blog-posts__table-edit">
									<button class="cms-btn--edit"><img src="img/pencil.svg" alt=""></button>
								</td>
								<td class="cms-blog-posts__table-delete">
									<button class="cms-del"><img src="img/delete-icon.svg" alt=""></button>
								</td>
							</tr>
							<tr>
								<td class="cms-blog-posts__table-check"><input type="checkbox"></td>
								<td class="cms-blog-posts__table-published">Нет</td>
								<td class="cms-blog-posts__table-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem saepe eum, a adipisci deserunt non!</td>
								<td class="cms-blog-posts__table-date">01.01.2017</td>
								<td class="cms-blog-posts__table-comments">5</td>
								<td class="cms-blog-posts__table-category">
									<select>
									  <option>Советы</option>
									  <option selected>Новости</option>
									  <option>Видео</option>
									</select>
								</td>
								<td class="cms-blog-posts__table-rating">4.9</td>
								<td class="cms-blog-posts__table-edit">
									<button class="cms-btn--edit"><img src="img/pencil.svg" alt=""></button>
								</td>
								<td class="cms-blog-posts__table-delete">
									<button class="cms-del"><img src="img/delete-icon.svg" alt=""></button>
								</td>
							</tr>
							<tr>
								<td class="cms-blog-posts__table-check"><input type="checkbox"></td>
								<td class="cms-blog-posts__table-published">Да</td>
								<td class="cms-blog-posts__table-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste fugit velit, suscipit quasi veritatis hic, expedita placeat ea maiores officiis quia optio quae repudiandae itaque! Quibusdam harum maiores atque architecto?</td>
								<td class="cms-blog-posts__table-date">01.01.2017</td>
								<td class="cms-blog-posts__table-comments">2</td>
								<td class="cms-blog-posts__table-category">
									<select>
									  <option>Советы</option>
									  <option>Новости</option>
									  <option selected>Видео</option>
									</select>
								</td>
								<td class="cms-blog-posts__table-rating">4.9</td>
								<td class="cms-blog-posts__table-edit">
									<button class="cms-btn--edit"><img src="img/pencil.svg" alt=""></button>
								</td>
								<td class="cms-blog-posts__table-delete">
									<button class="cms-del"><img src="img/delete-icon.svg" alt=""></button>
								</td>
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
				<!-- /cms-cms-blog-posts -->

			</div>
			<!-- /cms-content -->

		</div>
		<!-- /cms-container -->

	</div>
	<!-- /cms -->

<?php include 'cms-footer.blade.php'; ?>
