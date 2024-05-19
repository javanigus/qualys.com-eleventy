jQuery(document).ready(function ($) {
	$('#changes-grid_c0_all').live('click', function () {
		if ($('#changes-grid_c0_all:checked').size()) {
			$('#number-of-changes-selected').html($('div.changes tbody input[type=checkbox]').size());
		} else {
			$('#number-of-changes-selected').html("0");
		}
	});
	$('div.changes tbody input[type=checkbox]').live('click', function () {
		$('#number-of-changes-selected').html($('div.changes tbody input[type=checkbox]:checked').size());
	});
	$('#number-of-changes-selected').html($('div.changes tbody input[type=checkbox]:checked').size());
});