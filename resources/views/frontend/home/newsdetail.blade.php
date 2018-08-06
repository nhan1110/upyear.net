@extends('frontend.layouts.master')
@section('content')
	<div class="section-main">
		<div class="container">
			@if(@$newsdetail)
			<!-- NEW APPS -->
			<div class="flex-md row">
				<div class="col-sm-12">
					<h2 class="new-apps">{{ $newsdetail->title }}</h2>
				</div>
			</div>
			<div class="flex-md row">
				<div class="col-sm-12">
					{!! $newsdetail->content !!}
        		</div>
			</div>
			<div class="flex-md row">
				<div class="col-sm-12">
					<p align="right"><a href="{{ route('home') }}">[Back to homepage]</a></p>
        		</div>
			</div>
			<div class="height30"></div>
			@endif
		</div>
	</div>
</div>
@endsection