// immediately invoked function expression
(function($) {
  $(document).ready(function() {
    const $submit = '.main-navigation .icon-search';
    const $field = '.main-navigation .search-field';

    $($submit).on('click', function() {
      event.preventDefault();
      if (this) {
        $($field)
          .toggle()
          .focus();
      }
    }); //end of on click

    $($field).blur(function() {
      if (this) {
        $($field).hide();
      }
    }); //end of blur function
  }); //end of doc ready
})(jQuery);
