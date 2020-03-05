$(document).ready(function () {
    $(window).on("scroll", function() {
        
        if($(window).scrollTop()) {
              $('header').addClass('black2');
        }

        else {
            $('header').removeClass('black2');
        }
  });
  $(".navbar-toggler").click(function () { 
    $('header').addClass('black2');
      
  });
  $(".cobm_logo").mouseleave(function () { 
    $('.cobm_logo').addClass('black2');
      
  });
  
});