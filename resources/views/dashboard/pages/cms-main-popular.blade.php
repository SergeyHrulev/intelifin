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
                        <balance-sheet-component></balance-sheet-component>
                    </div>

			</div>
			<!-- /cms-content -->
@endsection
