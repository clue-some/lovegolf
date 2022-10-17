
$(function() {

	function ogt_view_statistics(courseid) {
		$("#ajaxRound").html('<p>Loading...</p>');
		$("#ajaxRound").addClass('loading');
		$.post(
			'/tracker/ajax-statistics.php',
			{
				'method': 'get-statistics',
				'courseid': courseid
			},
			function(xml) {
				if ($("status", xml).text() != 1) {
					alert($("message", xml).text());
					$("#ajaxRound").html('<p>Error: ' + $("message", xml).text() + '</p>');
					$("#ajaxRound").removeClass('loading');
				} else {
					$("#ajaxRound").removeClass('loading');				
					$("#ajaxRound").html($("body", xml).text());
				}
			}
		); 
	}

	$('.view-course-link').bind('click', function() {
		ogt_view_statistics($(this).attr("courseid"));
		return false;
	});
	
});