<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Upyear.net</title>
	<link rel="shortcut icon" href="{{ asset('frontend/images/u_icon.ico') }}"/>
	<link href="{{ asset('frontend/css/bootstrap.css') }}" rel="stylesheet">
	<!-- Fonts -->
	<link href="{{ asset('frontend/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet">
	<link href="{{ asset('frontend/fonts/fonts.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.5/jquery.bxslider.css">
	<!-- Main style -->

	<link href="{{ asset('frontend/css/grid.css') }}" rel="stylesheet">
	<link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
   	
   	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('frontend/js/typeahead.js') }}"></script>
		
</head>

<body class="home">
	<div class="page-loading"></div>
	<div class="site">
		<header id="masthead" class="site-header fixed" role="banner">
			<div class="container-fluid">
				<div class="row">
					<form action="{{ route('home') }}/search" method="GET">
						<div class="col-sm-8">
							<div class="row">
								<div class="col-sm-2">
									<a href="{{ route('home') }}" class="logo"><img src="{{ asset('frontend/images/logo.png') }}" /></a>
								</div>
								<div class="col-sm-3">
									<select class="form-control" name="category">
										<option value="">Categories</option>
										<?php 
										foreach (@$categories as $value) {
											if ($value->pid == 0) {
												echo '<option value="'.$value->slug.'">'.$value->name.'</option>';
											}
											foreach (@$categories as $value_child) {
												if ($value->id == $value_child->pid) {
													echo '<option value="'.$value_child->name.'"> -- '.$value_child->name.'</option>';
												}
											}
										}
										?>
									</select>
								</div>
								<div class="col-sm-7">
									<div class="row">
										<div class="col-sm-12">
											<input placeholder="Search" name="keyword" type="text" class="form-control search-icon" />
											<button type="submit" class="button-search">Search</button>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-1 text-right"></div>
						<div class="col-sm-3 text-right">
							<ul>
								<li><a href="{{ route('uploadapp') }}" class="download" title="Upload"></a></li>
								<li><a href="{{ route('registerapp') }}" class="register-app" title="Register App"></a></li>
								<li><a href="{{ route('profile.index') }}" class="user" title="User"></a></li>
								@if (Auth::user())
								<li><a href="{{ route('profile.logout') }}" class="logout" title="Logout"></a></li>
								@endif
							</ul>
						</div>
					</form>
				</div>
			</div>
		</header>

		<!-- #masthead -->
		<div id="content" class="site-content fixed_by_header">
			@if(@$is_banner)
			<div id="myCarousel" class="carousel" data-ride="carousel">
				<div class="carousel-inner">
					<div class="item active">
						<img src="{{ asset('frontend/images/banner.jpg') }}" />
					</div>
				</div>
			</div>
			@if(@$slideapps)
			<div class="feature-product">
				<div class="container">
					<div class="bxslider">
						@foreach (@$slideapps as $key => $value)
            			<div class="item">
            				<img src="{{ $value->app_hero_image }}"><br>
		                    <p>
		                        <a href="{{ route('detailapp') }}/{{ $value->app_id }}">{{ $value->app_title }}</a>
		                    </p>
            			</div>
            			@endforeach
			    	</div>
				</div>
			</div>
			@endif
		@endif

			@if(Session::has('message'))
			<br/>
			<div class="container"><div class="row">
              <div class="alert alert-success alert-dismissable">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;
                  </a>
                  {{ Session::get('message') }}
              </div></div>
             </div>
            @endif
            @if(Session::has('warn'))
            	  <br/>
            <div class="container"><div class="row">
              <div class="alert alert-warning alert-dismissable">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;
                  </a>
                  {{ Session::get('warn') }}
              </div></div>
               </div>
            @endif