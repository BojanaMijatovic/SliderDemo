(function($) {
  $('.burger, .nav a').on('click', function(e) {
  $('.nav').slideToggle('open');
  $('.container').toggleClass('push');
});
})( jQuery );
