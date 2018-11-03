<?php include 'cms-header.blade.php'; ?>

  <div class="cms">

		<div class="cms-container">

      <?php include 'cms-menu.blade.php'; ?>

			<div class="cms-content">

				<h2>Промо коды</h2>

				<div class="cms-stock">

					<div class="cms-stock__content">

  					<div class="cms-actions">
  						<a class="cms-btn--link" href="/cms-stock--promo-edit.php">Добавить промокод</a>
  					</div>

						<table class="cms-table cms-stock__table">
							<thead>
								<tr>
									<td class="cms-stock__table-company">Компания</td>
									<td class="cms-stock__table-category">Категория</td>
									<td class="cms-stock__table-name">Заголовок</td>
									<td class="cms-stock__table-text">Текст акции</td>
									<td class="cms-stock__table-type">Вид</td>
									<td class="cms-stock__table-code">Код</td>
									<td class="cms-stock__table-link">Ссылка</td>
									<td class="cms-stock__table-end">Дата окончания</td>
                  <td>Активен</td>
									<td class="cms-stock__table-edit">Ред.</td>
									<td class="cms-stock__table-delete">Удалить</td>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td class="cms-stock__table-company">Балтика Мебель</td>
									<td class="cms-stock__table-category">
										<span>Мягкая мебель</span>, <span>Диваны</span>
									</td>
									<td class="cms-stock__table-name">Скидка 30% на столы из белого дерева</td>
									<td class="cms-stock__table-text">При правильном выборе модели стол из дерева подойдет для любого помещения. Вы можете выбрать стол из бука, гевеи, дуба, березы или других сортов дерева, и каждый из них будет особенным</td>
									<td class="cms-stock__table-type">Промокод</td>
									<td class="cms-stock__table-code">2gMnv8N</td>
									<td class="cms-stock__table-link">
										<a href="https://baltikamebel.ru/promo" target="_blank">https://baltikamebel.ru/promo</a>
									</td>
									<td class="cms-stock__table-end"></td>
									<td>
										<div class="cms-btn--check">
										  <div class="cms-btn--check__wrap">
										    <div class="cms-btn--check__bg">
										      <div class="cms-btn--check__out"></div>
										      <div class="cms-btn--check__in"></div>
										      <div class="cms-btn--check__switch"></div>
										    </div>
										  </div>
										</div>
									</td>
									<td class="cms-stock__table-edit">
										<a class="cms-btn--link-edit" href="/cms-stock--promo-edit.php"><img src="img/pencil.svg" alt=""></a>
									</td>
									<td class="cms-stock__table-delete">
										<button class="cms-del"><img src="img/delete-icon.svg" alt=""></button>
									</td>
								</tr>

								<tr>
									<td class="cms-stock__table-company">Балтика Мебель</td>
									<td class="cms-stock__table-category">
										<span>Мягкая мебель</span>, <span>Диваны</span>
									</td>
									<td class="cms-stock__table-name">Скидка 30% на столы из белого дерева</td>
									<td class="cms-stock__table-text">При правильном выборе модели стол из дерева подойдет для любого помещения. Вы можете выбрать стол из бука, гевеи, дуба, березы или других сортов дерева, и каждый из них будет особенным</td>
									<td class="cms-stock__table-type">Акция</td>
									<td class="cms-stock__table-code"></td>
									<td class="cms-stock__table-link">
										<a href="https://baltikamebel.ru/promo" target="_blank">https://baltikamebel.ru/promo</a>
									</td>
									<td class="cms-stock__table-end">12.12.2018</td>
									<td>
										<div class="cms-btn--check">
											<div class="cms-btn--check__wrap cms-btn--check__active">
												<div class="cms-btn--check__bg">
													<div class="cms-btn--check__out"></div>
													<div class="cms-btn--check__in"></div>
													<div class="cms-btn--check__switch"></div>
												</div>
											</div>
										</div>
									</td>
									<td class="cms-stock__table-edit">
										<button class="cms-btn--edit"><img src="img/pencil.svg" alt=""></button>
									</td>
									<td class="cms-stock__table-delete">
										<button class="cms-del"><img src="img/delete-icon.svg" alt=""></button>
									</td>
								</tr>
							</tbody>
						</table>

					</div>
					<!-- /cms-stock__content -->

				</div>
				<!-- /cms-stock -->

			</div>
			<!-- /cms-content -->

		</div>
		<!-- /cms-container -->

	</div>
	<!-- /cms -->

<?php include 'cms-footer.blade.php'; ?>
