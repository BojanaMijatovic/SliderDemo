(function($) {
    $('.burger, .nav a').on('click', function(e) {
    $('.nav').slideToggle('open');
    $('.container').toggleClass('push');
  });
})( jQuery );


// uradi nav za razlicitu velicinu ekrana
// sredi sliku
