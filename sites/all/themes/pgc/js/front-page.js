$('.views-field-field-number-of-trainers-value .field-content').hide();

$(document).ready(function() {
	$('.views-field-field-notes-value').hide();
	$('.views-field-view-node').click(function() {
		$(this).siblings('.views-field-field-notes-value').slideToggle(300);
		return false;
	});
});

$('.unflag-action').hide();