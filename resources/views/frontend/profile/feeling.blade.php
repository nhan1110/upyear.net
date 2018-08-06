@extends('frontend.layouts.master')
@section('content')
	<div class="section-main">
		<div class="container">
			<div class="row">
				<div class="col-sm-3 sidebar">
					@include('frontend.layouts.sidebar')
				</div>
				<div class="col-sm-9">
					<!-- NEW APPS -->
					<div class="flex-md row">
						<div class="col-sm-8">
							<h2>My Feelings</h2>
						</div>
						<div class="col-sm-4 text-right">
							<h3><a href="?cmd=<?php echo base64_encode('add'); ?>">Add New</a></h3>
						</div>
					</div>
					<?php if (@$showform) : ?>
					<form role="form" method="POST" action="{{ route('profile.feeling') }}">
						<div class="flex-md row">
							<div class="col-sm-12">
								<h4>Add/Edit</h4>
							</div>
						</div>
						{{ csrf_field() }}
						<div class="row">
			                  <div class="col-xs-12">
			                     <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
			                          <textarea name="comments" id="comments" rows="10" class="form-control summernote" placeholder="Please enter your feeling" required>{{ @$record->comments }}</textarea>
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
								<input type="hidden" id="id"name="id" value="{{ @$id }}"/>
								<input type="submit" value="Submit" class="btn btn-primary btn-block">
							</div>
						</div>
		            </form>
					<div class="height30"></div>
					<!-- include summernote css/js-->
					<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
					<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>    
					<script>
					        jQuery(document).ready(function() {
					            jQuery('.summernote').summernote({
								  height: 150,
								  codemirror: {
								    theme: 'monokai'
								  }
								});
					        });
					</script>
					<?php endif; ?>
					
					<?php if ($collections) : ?>
						<form role="form" method="POST" action="{{ route('profile.feeling') }}">
						<table class="table table-hover">
							<thead>
								<tr>
									<th data-field="ID">#</th>
									<th data-field="Comments">Content</th>
									<th data-field="CreatedAt">Created At</th>
									<th data-field="UpdatedAt">Updated At</th>
									<th data-field="Action">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php $index = 0; foreach ($collections as $item) : $index++; ?>
								<tr>
									<td><?php echo $index; ?></td>
									<td><?php echo $item->comments; ?></td>
									<td><?php echo $item->created_at; ?></td>
									<td><?php echo $item->updated_at; ?></td>
									<td><a href="?id=<?php echo base64_encode($item->id).'&cmd='.base64_encode('edit'); ?>">Edit</a> | <a onclick="return confirm('Are you sure you want to delete this?');" href="?id=<?php echo base64_encode($item->id).'&cmd='.base64_encode('delete'); ?>">Delete</a></td>
								</tr>
								<?php endforeach; ?>
							</tbody>
							<tfoot>
								<tr><td colspan="5"><?php echo $collections->render(); ?></td></tr>
							</tfoot>
						</table>
						</form>
					<?php endif; ?>
					<div class="height30"></div>
				</div>
			</div>
		</div>
	</div>
@endsection