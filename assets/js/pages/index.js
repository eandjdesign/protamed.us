$('document').ready(function() {

  if(window.location.hash) {
    $('body').addClass('modal-open');

    // User came from thanksUrl + http://formspree.io
    if(window.location.hash == '#thanks') {
      $('.modal').addClass('modal-show--thanks');
    }
  }
  var $sectionContact = $('.section-contact'),
      $contactDrawer  = $('.section-contact-drawer');

  // only hide the form if JS is available
  $contactDrawer.addClass('hidden');

  function openContactDrawer() {
    if (!$sectionContact.hasClass('contact-open')) {
      $sectionContact.addClass('contact-open');
      $contactDrawer.removeClass('hidden');
    }
  }

  $('.modal').on('click', '.modal-close', function() {
    $('body').removeClass('modal-open');
    $('.modal').removeClass('[class*="modal-show--"]');
  });

  /*
   * Smooth Scrolling!
   * https://css-tricks.com/snippets/jquery/smooth-scrolling/
   */
  $(function() {
    $('a[href*="#"]:not([href="#"])').click(function() {
      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
        if (target.length) {
          $('html, body').animate({
            scrollTop: target.offset().top
          }, 750);

          openContactDrawer();

          return false;
        }
      }
    });
  });
});
