$(document).ready(function(){$(".landing--header-nav-icon").on("click",function(){$(".landing--header-nav-list").toggle(),$("header").toggleClass("mobile-header")}),$(window).resize(function(){$(window).width()>768?$(".landing--header-nav-list").show():$(window).width()<768&&!$("header").hasClass("mobile-header")&&$(".landing--header-nav-list").hide()}),$(".landing--header-nav-icon").click(function(){return $("html, body").animate({scrollTop:0},400),!1})});
$(document).ready(function(){
	$( window ).load(function() {
  		// Run code
		$('.landing--home-bg').css("background", " url('../images/matt-mainbackground.jpg') 0 40px no-repeat");

		
	});
});