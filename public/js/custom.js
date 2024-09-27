(function ($) {

  "use strict";

    // COLOR MODE
    $('.color-mode').click(function(){
        $('.color-mode-icon').toggleClass('active')
        $('body').toggleClass('dark-mode')
        if ($('body').hasClass('dark-mode')) {
          switchToDarkMode();
        } else {
          switchToLightMode();
        }
    })

    function switchToDarkMode() {
      $('img').each(function() {
        const currentSrc = $(this).attr('src');
        if (currentSrc && !currentSrc.includes('-dark')) {
          const darkSrc = currentSrc.replace('.svg', '-dark.svg'); // Replace with dark version
          $(this).attr('src', darkSrc); // Set image to dark mode source
        }
      });
    }

    function switchToLightMode() {
      $('img').each(function() {
        const currentSrc = $(this).attr('src');
        if (currentSrc && currentSrc.includes('-dark')) {
          const lightSrc = currentSrc.replace('-dark.svg', '.svg'); // Replace with light version
          $(this).attr('src', lightSrc); // Set image to light mode source
        }
      });
    }

    // HEADER
    $(".navbar").headroom();

    // PROJECT CAROUSEL
    $('.owl-carousel').owlCarousel({
      items: 1,
      loop:true,
      margin:10,
      nav:true
	});

    // SMOOTHSCROLL
    $(function() {
      $('.nav-link, .custom-btn-link').on('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top - 49
        }, 1000);
        event.preventDefault();
      });
    });  

    // TOOLTIP
    $('.social-links a').tooltip();

})(jQuery);
