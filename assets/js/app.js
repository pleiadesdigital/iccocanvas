jQuery(document).ready(function($){
  // code from Morten... 
  var stickyNavTop = $('.main-navigation').offset().top; // function detects when item hits the top

  $(window).scroll(function(){

    var scrollTop = $(window).scrollTop();

    if (scrollTop > stickyNavTop) {
      $('.fpsection').addClass('shifted');
    } else {
      $('.fpsection').removeClass('shifted');
    }
  });

  // Simple scrolling effect  
 $(function(){
    $('a[href*=#]:not([href=#])').click(function(){
      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
        if (target.length) {
          $('html,body').animate({
            scrollTop: (target.offset().top - 70)
          }, 500);
          return false;
        }
      }
    });
  });

  // Scroll toTopButton button
  var myButton = $('#myBtn');
  window.onscroll = function() {
    scrollFunction();
  };

  function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      document.getElementById('myBtn').style.display = "block";
    } else {
      document.getElementById('myBtn').style.display = "none";
    }
  };  


  $("#myBtn").click(function(e) {
    e.preventDefault();
    $(window).animate({scrollTop: 0}, 600, 'swing', function(){ 
      
    });
  });



}); //jQuery setup

  









