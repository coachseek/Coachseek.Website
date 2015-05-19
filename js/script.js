	
	$(document).ready(function(){

			$('.landing--header-nav-icon').on('click',function(){
				$('.landing--header-nav-list').toggle();
				$('header').toggleClass('mobile-header');
			});

			$(window).resize(function(event) {
				if($( window ).width() >768){
					$('.landing--header-nav-list').show();
				}else if (($( window ).width() <768)&& !$('header').hasClass('mobile-header')){
					$('.landing--header-nav-list').hide();
				}
			});
	});
