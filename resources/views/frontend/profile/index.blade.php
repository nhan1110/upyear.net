@extends('frontend.layouts.master')
@section('content')
	<div class="section-main">
		<div class="container">
			<div class="row">
				<div class="col-sm-3 sidebar">
					@include('frontend.layouts.sidebar')
				</div>
				<div class="col-sm-9 max-form-login">
					<!-- NEW APPS -->
					<form role="form" method="POST" action="{{ route('profile.index') }}">
						<div class="flex-md row">
							<div class="col-sm-12">
								<h2 class="new-apps">Profile</h2>
							</div>
						</div>
						{{ csrf_field() }}
						<div class="row">
			                  <div class="col-xs-12">
			                     <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
			                          <input type="text" name="name" id="name" value="{{ @$user['name'] }}" data-content="Please enter name" data-original-title="Name" class="form-control input-md popover-dismiss" placeholder="Name" required>
			                          @if ($errors->has('name'))
			                              <span class="help-block">
			                                  <strong>{{ $errors->first('name') }}</strong>
			                              </span>
			                          @endif
			                     </div>
			                  </div>
			            </div>

						<div class="row">
							<div class="col-xs-12">
								<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
									<input type="text" name="email" id="email" readonly="readonly" value="{{ @$user['email'] }}" class="form-control input-md popover-dismiss" placeholder="Email" required>
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
									<input type="password" name="password" id="password" class="form-control input-md popover-dismiss" placeholder="Leave password blank if dont want to change">
									@if ($errors->has('password'))
			                            <span class="help-block">
			                                <strong>{{ $errors->first('password') }}</strong>
			                            </span>
			                        @endif
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12">
								<div class="form-group">
			                          <input type="password" name="password_confirmation" data-content="Please enter confirm password" id="password_confirmation" class="form-control input-md popover-dismiss" placeholder="Leave password blank if dont want to change">
			                      </div>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12">
								<input type="submit" value="Submit" class="btn btn-primary btn-block">
							</div>
						</div>
						<div class="height30"></div>
		            </form>
					<div class="height30"></div>
				</div>
			</div>
		</div>
	</div>
@endsection