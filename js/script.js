<<<<<<< be4cc270ec0664dc83b10bd8a001b3e377e8acc5
$(document).ready(function(){$(".landing--header-nav-icon").on("click",function(){$(".landing--header-nav-list").toggle(),$("header").toggleClass("mobile-header")}),$(window).resize(function(){$(window).width()>768?$(".landing--header-nav-list").show():$(window).width()<768&&!$("header").hasClass("mobile-header")&&$(".landing--header-nav-list").hide()}),$(".landing--header-nav-icon").click(function(){return $("html, body").animate({scrollTop:0},400),!1})});
// $(document).ready(function(){
// 	$( window ).load(function() {
//   		// Run code
// 		$('.landing--home-bg').css("background", " url('../images/matt-mainbackground.jpg') 0 40px no-repeat");

		
// 	});
// });
=======
$(document).ready(function(){
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
>>>>>>> c989e411c21423a7040ac751186a590270d9999e
