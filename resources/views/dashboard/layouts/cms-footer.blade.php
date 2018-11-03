 	<!-- Modal -->
	<div class="cms-modal cms-modal__add modal fade" id="add-product" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Выбор товара</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-md-4">
							<div class="cms-modal__add-catalog">
								<ul class="cms-modal__add-list">
									<li>

										<div class="cms-modal__add-list-info">
											<input type="checkbox">
											<a class="cms-modal__add-link" href="javascript:void(0);">Каталог</a>
										</div>

										<ul class="cms-modal__add-list cms-modal__add-sublist cms-modal__add-sublist--1">

											<li>

												<div class="cms-modal__add-list-info">
													<input type="checkbox">
													<a class="cms-modal__add-link" href="javascript:void(0);">Кухни и бытовая техника</a>
												</div>

												<ul class="cms-modal__add-list cms-modal__add-sublist cms-modal__add-sublist--2">

													<li>
														<div class="cms-modal__add-list-info">
															<input type="checkbox">
															<a class="cms-modal__add-link" href="javascript:void(0);">Кухни</a>
														</div>
														<ul class="cms-modal__add-list cms-modal__add-sublist cms-modal__add-sublist--3">
															<li>
																<a class="cms-modal__add-link" href="javascript:void(0);">Модульные кухни</a>
																<a class="cms-modal__add-link" href="javascript:void(0);">Кухонные гарнитуры</a>
																<a class="cms-modal__add-link" href="javascript:void(0);">Кухни на заказ</a>
															</li>
														</ul>
													</li>

													<li>
														<div class="cms-modal__add-list-info">
															<input type="checkbox">
															<a class="cms-modal__add-link" href="javascript:void(0);">Столы</a>
														</div>
														<ul class="cms-modal__add-list cms-modal__add-sublist cms-modal__add-sublist--3">
															<li><a class="cms-modal__add-link" href="javascript:void(0);">Кухонные столы</a></li>
															<li><a class="cms-modal__add-link" href="javascript:void(0);">Обеденные столы</a></li>
															<li><a class="cms-modal__add-link" href="javascript:void(0);">Столы-книжки</a></li>
														</ul>
													</li>

												</ul>

											</li>



										</ul>

									</li>

									<li>

											<div class="cms-modal__add-list-info">
												<input type="checkbox">
												<a class="cms-modal__add-link" href="javascript:void(0);">Статьи</a>
											</div>

									</li>

									<li>

											<div class="cms-modal__add-list-info">
												<input type="checkbox">
												<a class="cms-modal__add-link" href="javascript:void(0);">Фабрики</a>
											</div>

									</li>


								</ul>
							</div>
							<!-- /cms-modal__add-catalog" -->
						</div>
						<div class="col-md-8">
							<div class="cms-modal__add-content">
								<div class="cms-modal__search">
									<form>
										<input type="text" placeholder="Поиск по названию или артикулу">
										<button>Поиск</button>
									</form>
								</div>
								<div class="cms-modal__add-products">
									<div class="cms-modal__add-row cms-modal__add-row--header">
										<div class="cms-modal__add-cell cms-modal__add-cell--check"><input type="checkbox"></div>
										<div class="cms-modal__add-cell cms-modal__add-cell--code">Артикул</div>
										<div class="cms-modal__add-cell cms-modal__add-cell--name">Название</div>
										<div class="cms-modal__add-cell cms-modal__add-cell--color">Цвет</div>
										<div class="cms-modal__add-cell cms-modal__add-cell--size">Размер</div>
										<div class="cms-modal__add-cell cms-modal__add-cell--price">Цена</div>
									</div>
									<div class="cms-modal__add-row">
										<div class="cms-modal__add-cell cms-modal__add-cell--check"><input type="checkbox"></div>
										<div class="cms-modal__add-cell cms-modal__add-cell--code">123</div>
										<div class="cms-modal__add-cell cms-modal__add-cell--name">Стул</div>
										<div class="cms-modal__add-cell cms-modal__add-cell--color">Черный</div>
										<div class="cms-modal__add-cell cms-modal__add-cell--size">10х10</div>
										<div class="cms-modal__add-cell cms-modal__add-cell--price">200 руб</div>
									</div>
									<div class="cms-modal__add-row">
										<div class="cms-modal__add-cell cms-modal__add-cell--check"><input type="checkbox"></div>
										<div class="cms-modal__add-cell cms-modal__add-cell--code">123</div>
										<div class="cms-modal__add-cell cms-modal__add-cell--name">Стул</div>
										<div class="cms-modal__add-cell cms-modal__add-cell--color">Черный</div>
										<div class="cms-modal__add-cell cms-modal__add-cell--size">10х10</div>
										<div class="cms-modal__add-cell cms-modal__add-cell--price">200 руб</div>
									</div>
									<div class="cms-modal__add-row">
										<div class="cms-modal__add-cell cms-modal__add-cell--check"><input type="checkbox"></div>
										<div class="cms-modal__add-cell cms-modal__add-cell--code">123</div>
										<div class="cms-modal__add-cell cms-modal__add-cell--name">Стул</div>
										<div class="cms-modal__add-cell cms-modal__add-cell--color">Черный</div>
										<div class="cms-modal__add-cell cms-modal__add-cell--size">10х10</div>
										<div class="cms-modal__add-cell cms-modal__add-cell--price">200 руб</div>
									</div>
								</div>
							</div>
							<!-- /cms-modal__add-content -->
						</div>
					</div>
					<!-- /row -->


				</div>
				<div class="modal-footer">
					<button type="button" class="cms-btn">Выбрать</button>
				</div>
			</div>
		</div>
	</div>


	<div class="cms-modal cms-modal__manuf modal fade" id="add-manuf" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Выбор фабрики</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
				</div>
				<div class="modal-body">


					<div class="cms-modal__search">
						<form>
							<input type="text" placeholder="Поиск по названию или артикулу">
							<button>Поиск</button>
						</form>
					</div>

					<div class="cms-modal__manuf-list">
						<div class="cms-modal__manuf-item">
							<label>
								<input type="radio" name="manuf" value="">
								<p>Фабрика 1</p>
							</label>
						</div>
						<div class="cms-modal__manuf-item">
							<label>
								<input type="radio" name="manuf" value="">
								<p>Фабрика 2</p>
							</label>
						</div>
						<div class="cms-modal__manuf-item">
							<label>
								<input type="radio" name="manuf" value="">
								<p>Фабрика 3</p>
							</label>
						</div>
						<div class="cms-modal__manuf-item">
							<label>
								<input type="radio" name="manuf" value="">
								<p>Фабрика 4</p>
							</label>
						</div>
					</div>

				</div>
				<div class="modal-footer">
					<button type="button" class="cms-btn">Выбрать</button>
				</div>
			</div>
		</div>
	</div>

</body>

</html>
