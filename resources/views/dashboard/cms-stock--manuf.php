<?php include 'cms-header.blade.php'; ?>

  <div class="cms">

		<div class="cms-container">

      <?php include 'cms-menu.blade.php'; ?>

			<div class="cms-content">

				<h2>Фабрики</h2>

				<div class="cms-stock-manuf">

					<div class="cms-stock__content">


  					<div class="cms-actions">
  						<a class="cms-btn--link" href="/cms-stock--manuf-edit.php">Добавить фабрику</a>
  					</div>

						<table class="cms-table">
							<thead>
								<tr>
									<td>Название</td>
									<td>Логотип</td>
									<td>Описание</td>
									<td>Купонов</td>
									<td>Акций</td>
									<td>Всего</td>
									<td>Ред.</td>
									<td>Удалить</td>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Балтика Мебель</td>
									<td>
										<img src="img/manuf-1.jpg" alt="">
									</td>
									<td class="cms-table__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, iure!</td>
									<td>3</td>
									<td>2</td>
									<td>5</td>
									<td>
										<a class="cms-btn--link-edit" href="/cms-stock--manuf-edit.php"><img src="img/pencil.svg" alt=""></a>
									</td>
									<td><button class="cms-del"><img src="img/delete-icon.svg" alt=""></button></td>
								</tr>
								<tr>
									<td>Балтика Мебель</td>
									<td>
										<img src="img/manuf-1.jpg" alt="">
									</td>
									<td class="cms-table__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, iure!</td>
									<td>3</td>
									<td>2</td>
									<td>5</td>
									<td>
										<a class="cms-btn--link-edit" href="/cms-stock--manuf-edit.php"><img src="img/pencil.svg" alt=""></a>
									</td>
									<td><button class="cms-del"><img src="img/delete-icon.svg" alt=""></button></td>
								</tr>

							</tbody>
						</table>

					</div>
					<!-- /cms-stock__content -->

				</div>
				<!-- /cms-stock-manuf -->

			</div>
			<!-- /cms-content -->

		</div>
		<!-- /cms-container -->

	</div>
	<!-- /cms -->

<?php include 'cms-footer.blade.php'; ?>
