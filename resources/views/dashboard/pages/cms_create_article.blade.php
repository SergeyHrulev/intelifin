@extends('dashboard.layouts.app')
@section('content')
			<div class="cms-content">


        			<div class="cms-popular">

        				<h2>Новая статья</h2>

        				<div class="cms-popular__content sortable">
                            <create-article-component :user_id="{{ Auth::user()->id }}"></create-article-component>
        			    </div>
        			    <!-- /cms-popular -->
                    </div>
			</div>
			<!-- /cms-content -->
@endsection
