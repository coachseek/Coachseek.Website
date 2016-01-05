jQuery(document).ready(function($) {
	// function contact_ajax(){
 //        var fname = $('#fname').val();
	// 	var email = $('#email').val();
	// 	var phone = $('#phone').val();
	// 	var message = $('#message').val();
	// 	var data = {
	// 	  		action: 'contact_ajax',
	// 	  		security : MyAjax.security,
	// 	  		fname: fname,
	// 	  		email: email,
	// 	  		phone: phone,
	// 	  		message: message
	// 	 };
		 
	// 	 $.post(MyAjax.ajaxurl, data, function(response) {
	// 			var parsed_json = jQuery.parseJSON(response);
	// 			$('#contact_ajax').hide();
	// 			$("#contact_ajax_response").html(parsed_json);
				
	// 	});
	// 	return false;
		
	// }
	
	// $('#contact').submit( function(e){
	// 	e.preventDefault();
	// 	$('#contact_ajax').show();
	// 	$("#contact_ajax_response").html('');
	// 	contact_ajax();
	// 	return false;
	// });
	

	$('a.landing--header-nav-feature').on('click',function(e){
		$('ul.landing--header-nav-feature-dropdown').toggle();
		$('a.landing--header-nav-feature i').toggleClass('fa-rotate-180');

	});
	$('a.landing--header-nav-more').on('click',function(){
		$('ul.landing--header-nav-more-dropdown').toggle();
		$('a.landing--header-nav-more i').toggleClass('fa-rotate-180');

	});
	$(".landing--header-nav-icon").on("click",function(){$(".landing--header-nav-list").toggle(),$("header").toggleClass("mobile-header"),$('i.fa-bars').toggleClass('fa-rotate-90')}),$(window).resize(function(){$(window).width()>768?$(".landing--header-nav-list").show():$(window).width()<768&&!$("header").hasClass("mobile-header")&&$(".landing--header-nav-list").hide()}),$(".landing--header-nav-icon").click(function(){return $("html, body").animate({scrollTop:0},400),!1})
});

