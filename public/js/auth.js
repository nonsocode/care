jQuery(document).ready(function($) {
	$('.close').click(function(event) {
		$(this).parent().remove();
	});
	$('input').blur(function () {
		$(this).removeClass('has-error');
	})
});