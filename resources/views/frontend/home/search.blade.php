@extends('frontend.layouts.master')
@section('content')
	<div class="section-main">
		<div class="container result">
			@if(@$searchapps)
			<!-- NEW APPS -->
			<div class="flex-md row">
				<div class="col-sm-12">
					<h2>Results</h2>
				</div>
			</div>
			<div class="flex-md row search-result">
				<div class="col-sm-12">
					<div class="row">
						@foreach (@$searchapps as $key => $value)
            			<div class="col-sm-3 item-search">
            				<div class="main-img"><img src="{{ $value->app_hero_image }}"></div>
    						<div class="item">
			                    <p>
			                    	<input type="hidden" class="rating" data-readonly value="{{ $value->app_rating }}" /> <span>{{ $value->app_rating }}</span><br/>
			                        <a class="title-app" href="{{ route('detailapp') }}/{{ $value->app_id }}">{{ $value->app_title }}</a>
			                    </p>
			                    <div class="user"> <a href="{{ $value->app_author_url }}">{{ $value->app_author_name }}</a></div>
		                    </div>
            			</div>
            			@endforeach
            		</div>
            		<div class="row">
            			<div class="col-sm-12"><?php echo $searchapps->appends(request()->input())->links(); ?></div>
            		</div>
        		</div>
			</div>
			<div class="height30"></div>
			@endif
			
			<div class="height30"></div>
			
		</div>
	</div>
</div>
@endsection