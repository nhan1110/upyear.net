		<!-- #content -->
		<br clear="all" />
		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="container">
				<div class="main-footer">
					<div class="row">
						<div class="col-sm-2">
							<h4>&copy;<?php echo date('Y'); ?> upyear.net</h4>
							<p>Share app freely.</p>
						</div>
						<div class="col-sm-10 text-right cooperated">
							<a href="http://vncosy.com"><img src="{{ asset('frontend/images/vc-logo.png') }}" /></a>
						</div>
					</div>
				</div>
				
			</div>
		</footer>
		<!-- #colophon -->
	</div> 
	<!-- #page -->
	<script src="{{ asset('frontend/js/main.js') }}"></script>
	<script src="{{ asset('frontend/js/bootstrap-rating.min.js') }}"></script>
	<script src="https://cdn.jsdelivr.net/bxslider/4.2.5/jquery.bxslider.min.js"></script>
</body>
<script>
$(function() {
	@if(@$request["category"]) 
	$('.site-header select[name="category"]').val('{{ @$request["category"] }}');
	@endif
	$('.site-header input[name="keyword"]').val('{{ @$request["keyword"] }}');
	
	$('.submit-app .btn-get-app').click(function () {
		$('.submit-app input[name="save"]').val('no');
		
	});
	$('.submit-app .btn-save').click(function () {
		$('.submit-app input[name="save"]').val('yes');
	});
	
	$('.uploadapp-bxslider').bxSlider({
		mode: 'fade',
		captions: true,
		slideWidth: 600
	});
    
	$('.product input[type="hidden"]').rating({
		start: 5,
		stop: 10
	});
		
	$('.feature-product .bxslider').bxSlider({
		//auto: true,
		autoControls: false,
		speed: 500,
		slideSelector: 'div.item',
		minSlides: 4,
		maxSlides: 4,
		moveSlides: 4,
		slideWidth: 360,
		slideMargin: 15,
		responsive: true,
		pager: false
	});
	$('.new-apps-slide').bxSlider({
		//auto: true,
		autoControls: false,
		speed: 500,
		slideSelector: 'div.item',
		minSlides: 5,
		maxSlides: 5,
		moveSlides: 5,
		slideWidth: 270,
		slideMargin: 15,
		responsive: true,
		pager: false
	});
});
</script>