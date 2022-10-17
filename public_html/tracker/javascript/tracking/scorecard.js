
$(function() {

	function ogt_view_scorecard(roundid) {
		$("#ajaxRound").html('<p>Loading...</p>');
		$("#ajaxRound").addClass('loading');
		$.post(
			'/tracker/ajax-scorecard.php',
			{
				'method': 'get-scorecard',
				'roundid': roundid
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

	$('.view-round-link').bind('click', function() {
		ogt_view_scorecard($(this).attr("roundid"));
	});
	
	if (location.hash.match(/#round_/)) {
		var roundid = location.hash.replace(/#round_/, '');
		ogt_view_scorecard(roundid);
	}
	
});