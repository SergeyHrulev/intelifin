<?php include 'cms-header.blade.php'; ?>

  <div class="cms">

		<div class="cms-container">

      <?php include 'cms-menu.blade.php'; ?>

			<div class="cms-content">

				<h2>Список парсеров</h2>

				<div class="cms-parser">

						<div class="cms-table__actions">
							<span>Выбранные</span>
							<select>
								<option>Действие</option>
								<option>Включить</option>
								<option>Выключить</option>
								<option>Удалить</option>
							</select>
							<button class="cms-btn">Применить</button>
						</div>

						<table class="cms-table">
							<thead>
								<tr>
									<td><input type="checkbox"></td>
									<td>Сайт</td>
									<td>Период</td>
									<td>Начало</td>
									<td>Статус</td>
									<td>След. активация</td>
									<td>Смотреть</td>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><input type="checkbox"></td>
									<td><a href="http://budetskidka.ru/" target="_blank">http://budetskidka.ru/</a></td>
									<td>1 неделя</td>
									<td>01.01.2018</td>
									<td>Активен</td>
									<td>21.05.2018</td>
									<td><a class="cms-btn--show" href="#"><img src="img/show-eye.svg" alt=""></a></td>
								</tr>
							<tbody>
								<tr>
									<td><input type="checkbox"></td>
									<td><a href="http://chinaprices.ru/" target="_blank">http://chinaprices.ru/</a></td>
									<td>2 недели</td>
									<td>01.01.2018</td>
									<td>Активен</td>
									<td>21.05.2018</td>
									<td><a class="cms-btn--show" href="#"><img src="img/show-eye.svg" alt=""></a></td>
								</tr>
							<tbody>
								<tr>
									<td><input type="checkbox"></td>
									<td><a href="http://couponmio.ru/" target="_blank">http://couponmio.ru/</a></td>
									<td>1 месяц</td>
									<td>01.01.2018</td>
									<td>Активен</td>
									<td>21.05.2018</td>
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
				<!-- /cms-parser -->


			</div>
			<!-- /cms-content -->

		</div>
		<!-- /cms-container -->

	</div>
	<!-- /cms -->

<?php include 'cms-footer.blade.php'; ?>
