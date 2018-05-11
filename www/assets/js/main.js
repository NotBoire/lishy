$(document).ready(function(){
  $('.circle, .burger').click(function() {

    $('.burger').toggleClass('open');
    $('.navLink').toggleClass('slide');


    if ($('.openmenu').hasClass('slide')) {
      $("#tile-blurb").css("opacity", 0.81);
      setTimeout(function() {
        $(".openmenu").removeClass('slide');
        $(".header").removeClass('slide');
      }, 600);
      $(".openmenu").addClass('slide-desk');
      $(".header").addClass('slide-desk');
    } else {
      $("#tile-blurb").css("opacity", 1);
      $( ".openmenu" ).addClass('slide');
      $( ".header" ).addClass('slide');
      $(".openmenu").removeClass('slide-desk');
      $(".header").removeClass('slide-desk');
    }
  });

});
