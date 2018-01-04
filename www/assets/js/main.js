$(document).ready(function(){
  $('.circle, .burger').click(function() {
    $('.burger').toggleClass('open');

    var header = $('.header');
    header.hasClass('openmenu')
      ? header.removeClass('openmenu')
      : header.addClass('openmenu');
  });
});

