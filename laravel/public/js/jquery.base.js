/**
 * Inits base.
 * @author Alejandro Mostajo
 * @version v.1.0
 */
$(document).ready(function () {

  $('.countdown').each(function (index) {
    $(this).countdown({until: $(this).data('date')});
  });

});