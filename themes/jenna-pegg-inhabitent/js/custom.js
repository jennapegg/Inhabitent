// immediately invoked function expression
(function($) {
  $(function() {

    $('nav').addClass('colors');

    const $submit = $('.main-navigation .icon-search');
    const $field = $('.main-navigation .search-field');

    $submit.on('mousedown', function() {
      event.preventDefault();
      $field.toggle(1000);
      $field.focus();
    }); //end of on mousedown

    $field.blur(function() {
      console.log('blurred');
      if ($field.val() === '') {
        $field.hide(1000);
      }
    }); //end of blur function
    $(window).scroll(function() {
      if ($(document).scrollTop() > 600) {
        $('nav').removeClass('colors');
      } else {
        $('nav').addClass('colors');
      }
    }); //end of scroll
  }); //end of doc ready
})(jQuery);
