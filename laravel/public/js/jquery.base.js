/**
 * Inits base.
 * @author Alejandro Mostajo
 * @version v.1.0
 */
$(document).ready(function () {

  $('.countdown').each(function (index) {
  	var date = $(this).data('date').split('-');
    $(this).countdown({until: new Date(date[0], date[1], date[2])});
    $(this).countdown($.countdown.regionalOptions[$('html').attr('lang')]);
  });

});