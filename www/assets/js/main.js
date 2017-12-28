$('.burger img').click(function() {
  var src = ($(this).attr('src') === 'assets/img/menu.png')
    ? 'assets/img/cancel.png'
    : 'assets/img/menu.png';
  $(this).attr('src', src);

  var header = $('.header');
  header.hasClass('openmenu')
    ? header.removeClass('openmenu')
    : header.addClass('openmenu');
});