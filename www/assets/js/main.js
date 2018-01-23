$(document).ready(function(){
  $('.circle, .burger').click(function() {
    $('.burger').toggleClass('open');
    $('.navLink').toggleClass('slide');
    if ($('.openmenu').hasClass('slide')) {
      setTimeout(function() {
        $(".openmenu").removeClass('slide');
        $(".header").removeClass('slide');
      }, 800);
    } else {
      $( ".openmenu" ).addClass('slide');
      $( ".header" ).addClass('slide');
    }
  });

});

