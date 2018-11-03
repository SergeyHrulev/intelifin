@extends('dashboard.layouts.app')
@section('content')
			<div class="cms-content">

    			<div class="cms-product-day">

    				<h2>Товар дня</h2>

    				<div class="cms-product-day__timer">
    					<div class="cms-product-day__timer-text">До смены товара</div>
    					<div class="cms-product-day__timer-date">09:43:12</div>
    				</div>

    				<div class="cms-product-day__action">
    					<button class="cms-btn" data-toggle="modal" data-target="#add-product">
    						Изменить товар дня
    					</button>
    				</div>


    				<div class="cms-product-day__content">

    					<div class="cms-product-day__item">
    						<div class="cms-product-day__pic">
    							<img src="img/day.jpg" alt="">
    						</div>
    						<div class="cms-product-day__name">Кухонный гарнитур Кухня "Катя-2" 1,6м</div>
    						<div class="cms-product-day__price-old">3 500 руб.</div>
    						<div class="cms-product-day__price-new">3 500 руб.</div>
    					</div>

    					<div class="cms-product-day__item">
    						<div class="cms-product-day__pic">
    							<img src="img/day.jpg" alt="">
    						</div>
    						<div class="cms-product-day__name">Кухонный гарнитур Кухня "Катя-2" 1,6м</div>
    						<div class="cms-product-day__price-old">3 500 руб.</div>
    						<div class="cms-product-day__price-new">3 500 руб.</div>
    					</div>

    					<div class="cms-product-day__item">
    						<div class="cms-product-day__pic">
    							<img src="img/day.jpg" alt="">
    						</div>
    						<div class="cms-product-day__name">Кухонный гарнитур Кухня "Катя-2" 1,6м</div>
    						<div class="cms-product-day__price-old">3 500 руб.</div>
    						<div class="cms-product-day__price-new">3 500 руб.</div>
    					</div>

    				</div>
    				<!-- /cms-product-day__content -->

    			</div>
    			<!-- /cms-popular -->

			</div>
			<!-- /cms-content -->
@endsection
