@extends('frontend.layouts.master')
@section('content')
	<div class="section-main">
		<div class="container max-form-login">
			<!-- NEW APPS -->
			<form role="form" method="POST" action="{{ route('login') }}">
				<div class="flex-md row">
					<div class="col-sm-12">
						<h2 class="new-apps">Login</h2>
					</div>
				</div>
				{{ csrf_field() }}
				<div class="row">
					<div class="col-xs-12">
						<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
							<input type="text" name="email" id="email" data-content="Please enter an e-mail address" value="{{ old('email') }}" class="form-control input-md popover-dismiss" placeholder="Email" required>
							@if ($errors->has('email'))
								<span class="help-block">
								<strong>{{ $errors->first('email') }}</strong>
								</span>
							@endif
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
							<input type="password" name="password" id="password" data-content="Please enter password." class="form-control input-md popover-dismiss" placeholder="Password" required>
							@if ($errors->has('password'))
							<span class="help-block">
							<strong>{{ $errors->first('password') }}</strong>
							</span>
							@endif
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-6">
						<div class="checkbox">
							<label>
								<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} >
								<span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
								Stay signed in
							</label>
						</div>
					</div>
					<div class="col-xs-6 text-right">
						<a href="{{ route('forgot') }}">Forgot Password?</a>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<input type="submit" value="Submit" class="btn btn-primary btn-block">
					</div>
				</div>
				<div class="height30"></div>
				<div class="row">
					<div class="col-md-12 text-center"><a href="{{ route('register') }}">Don't have an account? Sign up</a></div>
				</div>
            </form>
			<div class="height30"></div>
		</div>
	</div>
@endsection