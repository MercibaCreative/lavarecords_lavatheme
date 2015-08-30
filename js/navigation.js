var slideOutMobileHeader = function(e) {
	if ($('nav').hasClass('expanded')) $('nav').removeClass('expanded')
	else $('nav').addClass('expanded')
}

$(document).ready(function() {
	$('i.nav-button').click(slideOutMobileHeader)
});