;
(function ($) {
   
    var MAIN_UI = {
		//INIT
        init: function () {
            this.init_funct();
        },
		resize: function(){
			
		},
		init_funct: function(){
			$('input.search-icon').typeahead({
                name: 'keyword',
                remote: '/suggest/?keyword=%QUERY'
            });
		},
    };
    $(document).ready(function () {
        MAIN_UI.init();
    });
    $(window).resize(function () {
       
    });
    $(window).load(function () {

    });
	$(window).scroll(function () {
		/*var sticky = $('#masthead'),
		scroll = $(window).scrollTop();
		if (scroll >= 100) { 
			sticky.addClass('fixed'); 
		}
		else sticky.removeClass('fixed');*/
    });
})(jQuery);