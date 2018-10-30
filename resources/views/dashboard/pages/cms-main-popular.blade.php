@extends('dashboard.layouts.app')
@section('content')
			<div class="cms-content">


        			<div class="cms-popular">

        				<h2>Порулярные категории</h2>

        				<div class="cms-popular__action">
        					<button class="cms-btn" data-toggle="modal" data-target="#add-product">
        						Выбрать категории
        					</button>
        				</div>

        				<div class="cms-popular__content sortable">

        					<div class="cms-popular__item">
        						Популярные категории
        					</div>

        					<div class="cms-popular__item">
        						<div class="cms-popular__item-pic">
        							<img src="img/category-chair.png" alt="">
        						</div>
        						<div class="cms-popular__item-name">Кресла</div>
        						<div class="cms-popular__item-price">От 3 000 руб</div>
        					</div>

        					<div class="cms-popular__item">
        						<div class="cms-popular__item-pic">
        							<img src="img/category-computer-chair.png" alt="">
        						</div>
        						<div class="cms-popular__item-name">Компьютерные кресла</div>
        						<div class="cms-popular__item-price">От 1 980 руб</div>
        					</div>

        					<div class="cms-popular__item">
        						<div class="cms-popular__item-pic">
        							<img src="img/category-sofa.png" alt="">
        						</div>
        						<div class="cms-popular__item-name">Диваны</div>
        						<div class="cms-popular__item-price">От 2 530 руб</div>
        					</div>

        					<div class="cms-popular__item">
        						<div class="cms-popular__item-pic">
        							<img src="img/category-cupboard.png" alt="">
        						</div>
        						<div class="cms-popular__item-name">Шкафы-Купе</div>
        						<div class="cms-popular__item-price">От 4 760 руб</div>
        					</div>

        					<div class="cms-popular__item">
        						<div class="cms-popular__item-pic">
        							<img src="img/category-table.png" alt="">
        						</div>
        						<div class="cms-popular__item-name">Столы</div>
        						<div class="cms-popular__item-price">От 1 100 руб</div>
        					</div>

        					<div class="cms-popular__item">
        						<div class="cms-popular__item-pic">
        							<img src="img/category-bed.png" alt="">
        						</div>
        						<div class="cms-popular__item-name">Кровати</div>
        						<div class="cms-popular__item-price">От 2 320 руб</div>
        					</div>

        					<div class="cms-popular__item">
        						<div class="cms-popular__item-pic">
        							<img src="img/category-mattress.png" alt="">
        						</div>
        						<div class="cms-popular__item-name">Матрасы</div>
        						<div class="cms-popular__item-price">От 890 руб</div>
        					</div>

        					<div class="cms-popular__item">
        						<div class="cms-popular__item-pic">
        							<img src="img/category-office.png" alt="">
        						</div>
        						<div class="cms-popular__item-name">Офисная мебель</div>
        						<div class="cms-popular__item-price">От 1 520 руб</div>
        					</div>

        				</div>
        				<!-- /cms-popular__content -->

        			</div>
        			<!-- /cms-popular -->

			</div>
			<!-- /cms-content -->
@endsection
