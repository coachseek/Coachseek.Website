(function(){
  $(document).ready(function(){
        $(window).load(function(){
          loading_screen.finish();
        });
        var position = $(window).scrollTop();
        var owl = $(".fullpage--features");
        $(window).scroll(function () {
            var scroll = $(window).scrollTop();
            console.log(isScrolledIntoView(owl));
            if (scroll > position && isScrolledIntoView(owl)) {
              //scrolling down
              detectMouseEvent(owl);
            }else if(scroll < position && isScrolledIntoView(owl)){
              detectMouseEvent(owl);
            }
          });

        var keys = {37: 1, 38: 1, 39: 1, 40: 1};

        function detectMouseEvent(elem){
                elem.mousewheel(function(event) {
                if(event.deltaY<0 &&isScrolledIntoView(elem)){
                   //scrolling down
                  $(".fullpage--features-slides").data('owlCarousel').next();

                }else if(event.deltaY>0&&isScrolledIntoView(elem)){
                   //scrolling up
                  $(".fullpage--features-slides").data('owlCarousel').prev();
               
                }
                console.log(event.deltaX, event.deltaY, event.deltaFactor);
              });
        }

        function preventDefault(e) {
          e = e || window.event;
          if (e.preventDefault)
              e.preventDefault();
          e.returnValue = false;  
        }

        function preventDefaultForScrollKeys(e) {
            if (keys[e.keyCode]) {
                preventDefault(e);
                return false;
            }
        }

        function disableScroll() {
          if (window.addEventListener) // older FF
              window.addEventListener('DOMMouseScroll', preventDefault, false);
          window.onwheel = preventDefault; // modern standard
          window.onmousewheel = document.onmousewheel = preventDefault; // older browsers, IE
          window.ontouchmove  = preventDefault; // mobile
          document.onkeydown  = preventDefaultForScrollKeys;
        }

        function enableScroll() {
            if (window.removeEventListener)
                window.removeEventListener('DOMMouseScroll', preventDefault, false);
            window.onmousewheel = document.onmousewheel = null; 
            window.onwheel = null; 
            window.ontouchmove = null;  
            document.onkeydown = null;  
        }

        function isScrolledIntoView(elem)
        {
            var $elem = elem;
            var $window = $(window);

            var docViewTop = $window.scrollTop();
            var docViewBottom = docViewTop + $window.height();

            var elemTop = $elem.offset().top;
            var elemBottom = elemTop + $elem.height();

            return ((docViewTop < elemTop) && (docViewBottom > elemBottom));
        }

        $('.fullpage--scroll-arrow a').click(function(event) {
          /* Act on the event */
          event.preventDefault();
          $.fn.fullpage.moveSectionDown();
        });
        $('.fullpage--testimonial-slides').owlCarousel({
          lazyLoad:true,
          singleItem:true,
          autoPlay: 5000,
          pagination:false
        }); 
        $('.fullpage--features-slides').owlCarousel({
          lazyLoad:true,
          singleItem:true,
          // autoPlay: 5000,
          pagination:false,
          // scrollPerPage:true,
          transitionStyle : "fade",
          responsiveRefreshRate:0,
          mouseDrag : false,
          rewindNav:false,
          afterMove: function(){
            if(this.currentItem === 0&&isScrolledIntoView(owl)){
              setTimeout(function(){
                enableScroll();
              }, 1000);
              
            }else if(this.currentItem !== 0&&isScrolledIntoView(owl)){
              if(this.currentItem ===2){
                setTimeout(function(){
                  enableScroll();
                }, 1000);
              }
              disableScroll();
            }
          }
        });
       
        $('a.angle-left').click(function(e) {
          /* Act on the event */
          e.preventDefault();
          $(".fullpage--testimonial-slides").data('owlCarousel').prev();

        });
        $('a.angle-right').click(function(e) {
          /* Act on the event */
          e.preventDefault();
          $(".fullpage--testimonial-slides").data('owlCarousel').next();  
        });
      });
      $('.loading-submit').hide();
      $('.footer-demo-post-success').hide();
      $('.footer-demo-post-error').hide();
      $('#footer-demo-request-submit').click(function(e) {
        e.preventDefault();
        $('.loading-submit').show();
        /* Act on the event */
         var data = {
          firstname: $("input[name='firstname']").val(),
          email: $("input[name='email']").val(),
          lastname: $("input[name='lastname']").val(),
          business: $("input[name='business']").val()
        };
        if($("#footer-demo-request-form").valid()){
          $.ajax({
              type: "POST",
              url: "<?php echo get_stylesheet_directory_uri();?>/adwords-email.php",
              data: data,
              success: function(){
                  $('.loading-submit').hide();
                  $('.footer-demo-post-success').show();
              },
              error: function(XMLHttpRequest, textStatus, errorThrown) { 
                  // alert("Status: " + textStatus); alert("Error: " + errorThrown); 
                  $('.footer-demo-post-error').show();
              }  
          });
        }else{
          $('.loading-submit').hide();
        }
      });
})();
 