$(function() {
  var nav = $(".site-header");
  $(window).scroll(function() {
      $(this).scrollTop() > 200 ? nav.addClass("fixed") : nav.removeClass("fixed")
  })
});