// immediately invoked function expression
(function($) {
  $(document).ready(function() {
    const $submit = $('.main-navigation .icon-search');
    const $field = $('.main-navigation .search-field');

    $submit.on('click', function() {
      // event.preventDefault();
      $field.toggle();
      $field.focus();
    }); //end of on click

    $field.blur(function() {
      console.log('blurred');
      if ($field.val() === '') {
        $field.hide();
      }
    }); //end of blur function
  }); //end of doc ready
})(jQuery);
