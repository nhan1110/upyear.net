@extends('frontend.layouts.master')
@section('content')
	<div class="section-main child-page">
		<form action="" method="POST" class="submit-app">
		<div class="container padding50px">
			<div class="row form-group">
				<div class="col-sm-3"></div>
				<div class="col-sm-6">
					<div class="header-upload">Input your App Id here</div>
				</div>
				<div class="col-sm-3"></div>
			</div>
			<div class="row form-group">
				<div class="col-sm-6 label-field text-right">https://play.google.com/store/apps/details?id=</div>
				<div class="col-sm-4 text-field">
					<input type="text" class="form-control" name="app_id" value="{{ @$app_info['app_id'] }}" required />
					{!! csrf_field() !!}
				</div>
				<div class="col-sm-2 submit-field">
					<input type="submit" class="btn btn-primary btn-get-app" value="Get It" />
				</div>
			</div>
			<div class="height30"></div>
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
							<div class="col-sm-3 text-right"><input type="hidden" class="rating" data-readonly value="{{ $app_info['app_rating'] }}" /> <span>{{ $app_info['app_rating_number'] }}</span></div>
							<div class="col-sm-2"></div>
						</div>
						<div class="row">
							<div class="col-sm-6"></div>
							<div class="col-sm-2"></div>
							<div class="col-sm-2 submit-field text-right">
								<input type="hidden" name="save" value="no" />
								<input type="submit" class="btn btn-primary btn-save" value="Save" />
							</div>
							<div class="col-sm-2"></div>
						</div>
					</div>
					<div class="col-sm-1"></div>
				</div>
				<div class="height30"></div>
				@if(@$app_info['app_list_images'])
					<div class="uploadapp-bxslider">
					@foreach (@$app_info['app_list_images'] as $key => $value)
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
		</div>
		</form>
	</div>
@endsection