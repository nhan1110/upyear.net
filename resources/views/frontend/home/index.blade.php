@extends('frontend.layouts.master')
@section('content')
	<div class="section-main">
		<div class="container">
			@if(@$newapps)
			<!-- NEW APPS -->
			<div class="flex-md row">
				<div class="col-sm-12">
					<h2 class="new-apps">New Apps</h2>
				</div>
			</div>
			<div class="flex-md row">
				<div class="col-sm-12">
					<div class="new-apps-slide">
						@foreach (@$newapps as $key => $value)
            			<div class="item">
            				<img src="{{ $value->app_hero_image }}"><br>
		                    <p>
		                    	<input type="hidden" class="rating" data-readonly value="{{ $value->app_rating }}" /> <span>{{ $value->app_rating }}</span><br/>
		                        <a class="title-app" href="{{ route('detailapp') }}/{{ $value->app_id }}">{{ $value->app_title }}</a>
		                    </p>
		                    <div class="user"> <a href="{{ $value->app_author_url }}">{{ $value->app_author_name }}</a></div>
            			</div>
            			@endforeach
            		</div>
        		</div>
			</div>
			<div class="height30"></div>
			@endif
			
			@if(@$bestapps)
			<!--The Best App-->
			<div class="flex-md row">
				<div class="col-sm-12">
					<h2 class="best-apps">The Best Apps</h2>
				</div>
			</div>
			<div class="flex-md row">
				<div class="col-sm-12">
					<div class="new-apps-slide">
						@foreach (@$bestapps as $key => $value)
            			<div class="item">
            				<img src="{{ $value->app_hero_image }}"><br>
		                    <p>
		                    	<input type="hidden" class="rating" data-readonly value="{{ $value->app_rating }}" /> <span>{{ $value->app_rating }}</span><br/>
		                        <a class="title-app" href="{{ route('detailapp') }}/{{ $value->app_id }}">{{ $value->app_title }}</a>
		                    </p>
		                    <div class="user"> <a href="{{ $value->app_author_url }}">{{ $value->app_author_name }}</a></div>
            			</div>
            			@endforeach
            		</div>
        		</div>
        	</div>
			<div class="height30"></div>
			@endif
			
			@if(@$news)
			<!--The Best App-->
			<div class="flex-md row">
				<div class="col-sm-12">
					<h2 class="interesting-news">Interesting News</h2>
				</div>
			</div>
			<div class="flex-md row interesting-news">
				@foreach (@$news as $key => $value)
    			<div class="col-sm-4 item">
    				<img src="{{ asset('frontend/images/product.png') }}"><br>
    				<div class="avatar"><a href=""><img src="{{ asset('frontend/images/avatar.png') }}" /></a></div>
                    <h3>
                        <a href="{{ route('news.detail') }}/{{ base64_encode($value->id) }}">{{ $value->title }}</a>
                    </h3>
                    <p class="summary">{{ str_limit($value->description, 150, '...') }}</p>
    			</div>
    			@endforeach
			</div>
			<div class="height30"></div>
			@endif
				
			<div class="google-adsense">Google Adsense</div>
			<div class="height30"></div>
			
			@if(@$testimonials)
			<div class="flex-md row">
				<div class="col-sm-12">
					<h2 class="customer-feeling">Customer's Feeling</h2>
				</div>
			</div>
			<div class="flex-md row customer-feeling">
				@foreach (@$testimonials as $key => $value)
    			<div class="col-sm-4 item">
    				<div class="customer-feeling-item">
    					<div class="text">
		                    <p class="summary">{{ str_limit(strip_tags($value->comments), 150, '...') }}</p>
            				<div class="user"> {{ $value->name }}</div>
        				</div>
    				</div>
    			</div>
    			@endforeach
			</div>
			<div class="height30"></div>
			@endif
				
			<div class="flex-md row">
				<div class="col-sm-12">
					<h2 class="steps-upload">Steps to Upload</h2>
				</div>
			</div>
			<div class="height30"></div>
			<div class="flex-md row">
    			<div class="col-sm-12"><img src="{{ asset('frontend/images/steps-upload.png') }}" /></div>
    		</div>
			
			<div class="height30"></div>
			
		</div>
	</div>
</div>
@endsection