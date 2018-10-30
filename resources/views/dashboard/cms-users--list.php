<?php include 'cms-header.blade.php'; ?>

  <div class="cms">

		<div class="cms-container">

      <?php include 'cms-menu.blade.php'; ?>

			<div class="cms-content">

					<h2>Пользователи</h2>

					<div class="cms-users">

							<div class="cms-table__actions">
								<span>Выбранные</span>
								<select>
									<option>Действие</option>
									<option>Заблокировать</option>
									<option>Разблокировать</option>
									<option>Удалить</option>
								</select>
								<button class="cms-btn">Применить</button>
							</div>

							<table class="cms-table">
								<thead>
									<tr>
										<td><input type="checkbox"></td>
										<td>Имя</td>
										<td>Email</td>
										<td>Телефон</td>
										<td>Статус</td>
										<td>Регистрация</td>
										<td>Смотреть</td>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td><input type="checkbox"></td>
										<td>Иван Иванов</td>
										<td>ivanov@mail.ru</td>
										<td>8999999999</td>
										<td>Заблокирован</td>
										<td>01.01.2018</td>
										<td><button class="cms-btn--edit"><img src="img/pencil.svg" alt=""></button></td>
									</tr>
									<tr>
										<td><input type="checkbox"></td>
										<td>Иван Иванов</td>
										<td>ivanov@mail.ru</td>
										<td>8999999999</td>
										<td>Активен</td>
										<td>01.01.2018</td>
										<td><button class="cms-btn--edit"><img src="img/pencil.svg" alt=""></button></td>
									</tr>
									<tr>
										<td><input type="checkbox"></td>
										<td>Иван Иванов</td>
										<td>ivanov@mail.ru</td>
										<td>8999999999</td>
										<td>Активен</td>
										<td>01.01.2018</td>
										<td><button class="cms-btn--edit"><img src="img/pencil.svg" alt=""></button></td>
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
					<!-- /cms-users -->


			</div>
			<!-- /cms-content -->

		</div>
		<!-- /cms-container -->

	</div>
	<!-- /cms -->

<?php include 'cms-footer.blade.php'; ?>
