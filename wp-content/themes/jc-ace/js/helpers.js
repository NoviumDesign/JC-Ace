$(function() {

  function fullScreen() {

    if ($(window).width() > 640) {
      $('.min-height-100').css('min-height', $(window).height() );
      $('.height-100').css('height', $(window).height() );
    }
  }

  $(window).resize(function() {
    fullScreen();
  });

  fullScreen();

});