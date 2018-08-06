@extends('frontend.layouts.master')
@section('content')
	<div class="section-main child-page">
		<div class="container padding50px">
			<form action="" method="POST" class="submit-app">
			@if(@$app_info)
				<div class="row">
					<div class="col-sm-1"></div>
					<div class="col-sm-2"><img src="{{ $app_info['app_hero_image'] }}" /></div>
					<div class="col-sm-8">
						<div class="row">
							<div class="col-sm-12"><h2>{{ $app_info['app_title'] }}</h2></div>
						</div>
						<div class="row">
							<div class="col-sm-3"><a href="{{ $app_info['app_author_url'] }}">{{ $app_info['app_author_name'] }}</a></div>
							<div class="col-sm-3"><a href="{{ $app_info['app_category_url'] }}">{{ $app_info['app_category_name'] }}</a></div>
							<div class="col-sm-1"></div>
							<div class="col-sm-3 text-right"><input type="hidden" class="rating" data-readonly value="{{ $app_info['app_rating'] }}" /> <span>{{ number_format($app_info['app_rating_number']) }}</span></div>
							<div class="col-sm-2"></div>
						</div>
						<div class="row">
							<div class="col-sm-7"></div>
							<div class="col-sm-3 submit-field text-right">
								<a class="btn btn-primary" href="https://play.google.com/store/apps/details?id={{ $app_info->app_id }}">See Detail</a>
							</div>
							<div class="col-sm-2"></div>
						</div>
					</div>
					<div class="col-sm-1"></div>
				</div>
				<div class="height30"></div>
				@if(@$app_info['app_list_images'])
					<div class="uploadapp-bxslider">
					@foreach (explode(",",@$app_info['app_list_images']) as $key => $value)
					<div class="item">
						<img src="{{ $value }}" width="100%" height="auto" style="max-height:400px;object-fit:contain;" />
					</div>
					@endforeach
					</div>
				@endif
				<div class="height30"></div>
				
				<div class="row">
					<div class="col-sm-1"></div>
					<div class="col-sm-10">{{ str_ireplace(array("<br />","<br>","<br/>","<br />","&lt;br /&gt;","&lt;br/&gt;","&lt;br&gt;"),"\r\n", $app_info['app_description']) }}</div>
					<div class="col-sm-1"></div>
				</div>
			@endif
			</form>
		</div>
	</div>
@endsection