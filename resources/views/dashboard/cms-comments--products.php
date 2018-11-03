<?php include 'cms-header.blade.php'; ?>

  <div class="cms">

		<div class="cms-container">

      <?php include 'cms-menu.blade.php'; ?>

			<div class="cms-content">


								<h2>Комментарии к товарам</h2>

								<div class="cms-comments">

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

										<table class="cms-table">
											<thead>
												<tr>
													<td><input type="checkbox"></td>
													<td>Название</td>
													<td>Дата</td>
													<td>Рейтинг</td>
													<td>Статус</td>
													<td>Модерация</td>
													<td>Категория</td>
													<td class="cms-table__text">Комментарий</td>
													<td>Ответ</td>
													<td>Смотреть</td>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><input type="checkbox"></td>
													<td>Коробки для хранения</td>
													<td>01.01.2018</td>
													<td>3</td>
													<td>Опубликован</td>
													<td>Просмотрен</td>
													<td>Диваны</td>
													<td class="cms-table__text">
														<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro accusamus odio, eius suscipit quo dolor, rerum dignissimos voluptates illo. Voluptas accusantium cumque, soluta incidunt inventore similique minus quae fugiat eveniet ratione enim, iusto animi, sequi facere minima mollitia ipsa quibusdam magnam voluptatem omnis, tempore excepturi. Tempore alias a magni natus.</p>
													</td>
													<td>Нет</td>
													<td><a class="cms-btn--show" href="#"><img src="img/show-eye.svg" alt=""></a></td>
												</tr>
												<tr>
													<td><input type="checkbox"></td>
													<td>Коробки для хранения</td>
													<td>01.01.2018</td>
													<td>3</td>
													<td>Опубликован</td>
													<td>Просмотрен</td>
													<td>Мягкая мебель</td>
													<td class="cms-table__text">
														<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro accusamus odio, eius suscipit quo dolor, rerum dignissimos voluptates illo. Voluptas accusantium cumque, soluta incidunt inventore similique minus quae fugiat eveniet ratione enim, iusto animi, sequi facere minima mollitia ipsa quibusdam magnam voluptatem omnis, tempore excepturi. Tempore alias a magni natus.</p>
													</td>
													<td>Да</td>
													<td><a class="cms-btn--show" href="#"><img src="img/show-eye.svg" alt=""></a></td>
												</tr>
												<tr>
													<td><input type="checkbox"></td>
													<td>Коробки для хранения</td>
													<td>01.01.2018</td>
													<td>3</td>
													<td>Опубликован</td>
													<td>Просмотрен</td>
													<td>Мягкая мебель</td>
													<td class="cms-table__text">
														<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro accusamus odio, eius suscipit quo dolor, rerum dignissimos voluptates illo. Voluptas accusantium cumque, soluta incidunt inventore similique minus quae fugiat eveniet ratione enim, iusto animi, sequi facere minima mollitia ipsa quibusdam magnam voluptatem omnis, tempore excepturi. Tempore alias a magni natus.</p>
													</td>
													<td>Да</td>
													<td><a class="cms-btn--show" href="#"><img src="img/show-eye.svg" alt=""></a></td>
												</tr>
												<tr>
													<td><input type="checkbox"></td>
													<td>Коробки для хранения</td>
													<td>01.01.2018</td>
													<td>3</td>
													<td>Опубликован</td>
													<td>Просмотрен</td>
													<td>Мягкая мебель</td>
													<td class="cms-table__text">
														<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro accusamus odio, eius suscipit quo dolor, rerum dignissimos voluptates illo. Voluptas accusantium cumque, soluta incidunt inventore similique minus quae fugiat eveniet ratione enim, iusto animi, sequi facere minima mollitia ipsa quibusdam magnam voluptatem omnis, tempore excepturi. Tempore alias a magni natus.</p>
													</td>
													<td>Да</td>
													<td><a class="cms-btn--show" href="#"><img src="img/show-eye.svg" alt=""></a></td>
												</tr>
												<tr>
													<td><input type="checkbox"></td>
													<td>Коробки для хранения</td>
													<td>01.01.2018</td>
													<td>3</td>
													<td>Опубликован</td>
													<td>Просмотрен</td>
													<td>Мягкая мебель</td>
													<td class="cms-table__text">
														<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro accusamus odio, eius suscipit quo dolor, rerum dignissimos voluptates illo. Voluptas accusantium cumque, soluta incidunt inventore similique minus quae fugiat eveniet ratione enim, iusto animi, sequi facere minima mollitia ipsa quibusdam magnam voluptatem omnis, tempore excepturi. Tempore alias a magni natus.</p>
													</td>
													<td>Да</td>
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
								<!-- /cms-comments -->


			</div>
			<!-- /cms-content -->

		</div>
		<!-- /cms-container -->

	</div>
	<!-- /cms -->

<?php include 'cms-footer.blade.php'; ?>
