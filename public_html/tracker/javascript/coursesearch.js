$(function() {

	function ogt_course_search(query) {
		$("#courseSearchResults").html('<p>Loading...</p>');
		$("#courseSearchResults").addClass('loading');
		$.post(
			'/tracker/ajax-courses.php',
			{
				'method': 'course-search',
				'query': $("#courseFinderQuery").val(),
				'bookable': $("#courseSearchBookable").val()
			},
			function(xml) {
				if ($("status", xml).text() != 1) {
					alert($("message", xml).text());
					$("#courseSearchResults").html('<p>Error: ' + $("message", xml).text() + '</p>');
					$("#courseSearchResults").removeClass('loading');
				} else {
					$("#courseSearchResults").removeClass('loading');				
					$("#courseSearchResults").html($("body", xml).text());
				}
			}
		); 
	}
	
	if ($("#courseSearch")) {
		$("#courseSearch").unbind('submit');
		$("#courseSearch").bind(
			'submit', 
			function () { 
				ogt_course_search(); 
				return false; 
			}
		);
	}	
	
});