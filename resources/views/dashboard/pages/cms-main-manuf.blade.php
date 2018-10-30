@extends('dashboard.layouts.app')
@section('content')
			<div class="cms-content">
							<div class="cms-manuf">

								<h2>Производители</h2>

								<div class="cms-action">
									<button class="cms-btn" data-toggle="modal" data-target="#add-product">
										Добавить производителей
									</button>
								</div>

								<div class="cms-manuf__content sortable">

									<div class="cms-manuf__item">
										<div class="cms-manuf__item-pic">
											<img src="img/company2.svg" alt="">
										</div>
										<div class="cms-manuf__item-info">
											<div class="cms-manuf__item-name">Производитель 1</div>
											<div class="cms-manuf__item-buttons">
												<button class="cms-btn cms-btn--mini">Редактировать</button>
												<button class="cms-btn cms-btn--mini">Удалить</button>
											</div>
										</div>
									</div>

									<div class="cms-manuf__item">
										<div class="cms-manuf__item-pic">
											<img src="img/company1.svg" alt="">
										</div>
										<div class="cms-manuf__item-info">
											<div class="cms-manuf__item-name">Производитель 1</div>
											<div class="cms-manuf__item-buttons">
												<button class="cms-btn cms-btn--mini">Редактировать</button>
												<button class="cms-btn cms-btn--mini">Удалить</button>
											</div>
										</div>
									</div>

									<div class="cms-manuf__item">
										<div class="cms-manuf__item-pic">
											<img src="img/company2.svg" alt="">
										</div>
										<div class="cms-manuf__item-info">
											<div class="cms-manuf__item-name">Производитель 2</div>
											<div class="cms-manuf__item-buttons">
												<button class="cms-btn cms-btn--mini">Редактировать</button>
												<button class="cms-btn cms-btn--mini">Удалить</button>
											</div>
										</div>
									</div>

									<div class="cms-manuf__item">
										<div class="cms-manuf__item-pic">
											<img src="img/company3.svg" alt="">
										</div>
										<div class="cms-manuf__item-info">
											<div class="cms-manuf__item-name">Производитель 3</div>
											<div class="cms-manuf__item-buttons">
												<button class="cms-btn cms-btn--mini">Редактировать</button>
												<button class="cms-btn cms-btn--mini">Удалить</button>
											</div>
										</div>
									</div>

									<div class="cms-manuf__item">
										<div class="cms-manuf__item-pic">
											<img src="img/company5.svg" alt="">
										</div>
										<div class="cms-manuf__item-info">
											<div class="cms-manuf__item-name">Производитель 4</div>
											<div class="cms-manuf__item-buttons">
												<button class="cms-btn cms-btn--mini">Редактировать</button>
												<button class="cms-btn cms-btn--mini">Удалить</button>
											</div>
										</div>
									</div>

								</div>
								<!-- /cms-manuf__content -->

							</div>
							<!-- /cms-manuf -->


			</div>
			<!-- /cms-content -->
@endsection
