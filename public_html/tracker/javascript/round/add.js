
$(function() {

	function ogt_load_holes(teeid, holes, stats) {
		$("#ajaxHoles").html('<p>Loading...</p>');
		$("#ajaxHoles").addClass('loading');
		$.post(
			'/tracker/ajax-round.php',
			{
				'method': 'get-holes',
				'teeid': teeid,
				'holes': holes,
				'stats': stats,
				'teeid': $("#teeid")[0].value
			},
			function(xml) {
				if ($("status", xml).text() != 1) {
					alert($("message", xml).text());
					$("#ajaxHoles").html('<p>Error: ' + $("message", xml).text() + '</p>');
					$("#ajaxHoles").removeClass('loading');
				} else {
					$("#ajaxHoles").removeClass('loading');				
					$("#ajaxHoles").html($("body", xml).text());
					ogt_assign_events();
					ogt_bind_score_fields();
				}
			}
		); 
	}
	
	function ogt_search_courses(query) {
		$("#ajaxCourses").html('<p>Loading...</p>');
		$("#ajaxCourses").addClass('loading');
		$.post(
			'/tracker/ajax-courses.php',
			{
				'method': 'get-courses',
				'query': $("#searchCoursesQuery").val()
			},
			function(xml) {
				if ($("status", xml).text() != 1) {
					alert($("message", xml).text());
					$("#ajaxCourses").html('<p>Error: ' + $("message", xml).text() + '</p>');
					$("#ajaxCourses").removeClass('loading');
				} else {
					$("#ajaxCourses").removeClass('loading');				
					$("#ajaxCourses").html($("body", xml).text());
				}
			}
		); 
	}
	function ogt_assign_events() {
		if ($("#next_load_holes")) {
			$("#next_load_holes").unbind('click');
			$("#next_load_holes").bind('click', 
				function () {
					if ($('#date').val() == 'Enter the date your round was played' || $('#date').val() == "") {
						alert('Please enter the date your round was played');
						return false;
					};
					
					// Last Round
					var lastroundday = parseInt($('#lasttrackedround').val().substring(8,10),10);
					var lastroundmonth = parseInt($('#lasttrackedround').val().substring(5,7),10);
					var lastroundyear = parseInt($('#lasttrackedround').val().substring(0,4),10);
					var lastrounddate = new Date(lastroundyear, lastroundmonth-1, lastroundday-1);
					// This Round
					var thisroundday = parseInt($('#date').val().substring(0,2),10);
					var thisroundmonth = parseInt($('#date').val().substring(3,5),10);
					var thisroundyear = parseInt($('#date').val().substring(6,10),10);
					var thisrounddate = new Date(thisroundyear, thisroundmonth-1, thisroundday); 
					
					if ($('#handicap').val() == 1 && (lastrounddate > thisrounddate)) {
						alert('You can not track your handicap when entering a round which was played before your most recently handicap tracked round.');
						return false;
					}
					
					if ($("#teeid").val() == "") {
						alert('Please choose a tee.');
						return false;
					}
					if ($("#holesplayed").val() == "") {
						alert('Please specify how many holes you played.');
						return false;
					}
					ogt_load_holes(
						$("#teeid").val(), 
						$("#holesplayed").val(), 
						$("#stats").val()
					); 
					return false; 
				}
			);
		}
		if ($("#roundAddSearch")) {
			$("#roundAddSearch").unbind('submit');
			$("#roundAddSearch").bind(
				'submit', 
				function () { 
					ogt_search_courses(); 
					return false; 
				}
			);
		}
	}
	
	function ogt_calculate_scorecard(score_fields_out, score_fields_in, out_status_label, in_status_label, total_status_label) {
		out_status = 0;
		in_status = 0;
		total_status = 0;
		$.each(score_fields_out, function () {
			out_status += (1 * $('#' + this).val());
		});
		$.each(score_fields_in, function () {
			in_status += (1 * $('#' + this).val());
		});
		total_status = out_status + in_status;
		$('.' + out_status_label).html((out_status ? out_status : '0'));
		$('.' + in_status_label).html((in_status ? in_status : '0'));
		$('.' + total_status_label).html((total_status ? total_status : '0'));
	}

	function ogt_bind_score_fields() {
		score_fields_out = Array('hole1score', 'hole2score', 'hole3score', 'hole4score', 'hole5score', 'hole6score', 'hole7score', 'hole8score', 'hole9score');
		score_fields_in = Array('hole10score', 'hole11score', 'hole12score', 'hole13score', 'hole14score', 'hole15score', 'hole16score', 'hole17score', 'hole18score');
		putts_fields_out = Array('hole1putts', 'hole2putts', 'hole3putts', 'hole4putts', 'hole5putts', 'hole6putts', 'hole7putts', 'hole8putts', 'hole9putts');
		putts_fields_in = Array('hole10putts', 'hole11putts', 'hole12putts', 'hole13putts', 'hole14putts', 'hole15putts', 'hole16putts', 'hole17putts', 'hole18putts');
		penalties_fields_out = Array('hole1penalties', 'hole2penalties', 'hole3penalties', 'hole4penalties', 'hole5penalties', 'hole6penalties', 'hole7penalties', 'hole8penalties', 'hole9penalties');
		penalties_fields_in = Array('hole10penalties', 'hole11penalties', 'hole12penalties', 'hole13penalties', 'hole14penalties', 'hole15penalties', 'hole16penalties', 'hole17penalties', 'hole18penalties');
		$.each(score_fields_out, function () {
			$('#' + this).bind('change', function() { ogt_calculate_scorecard(score_fields_out, score_fields_in, 'scoreout', 'scorein', 'scoretotal'); });
		});
		$.each(score_fields_in, function () {
			$('#' + this).bind('change', function() { ogt_calculate_scorecard(score_fields_out, score_fields_in,'scoreout',  'scorein', 'scoretotal'); });
		});
		$.each(putts_fields_out, function () {
			$('#' + this).bind('change', function() { ogt_calculate_scorecard(putts_fields_out, putts_fields_in, 'puttsout', 'puttsin', 'puttstotal'); });
		});
		$.each(putts_fields_in, function () {
			$('#' + this).bind('change', function() { ogt_calculate_scorecard(putts_fields_out, putts_fields_in, 'puttsout', 'puttsin', 'puttstotal'); });
		});
		$.each(penalties_fields_out, function () {
			$('#' + this).bind('change', function() { ogt_calculate_scorecard(penalties_fields_out, penalties_fields_in, 'penaltiesout', 'penaltiesin', 'penaltiestotal'); });
		});
		$.each(penalties_fields_in, function () {
			$('#' + this).bind('change', function() { ogt_calculate_scorecard(penalties_fields_out, penalties_fields_in, 'penaltiesout', 'penaltiesin', 'penaltiestotal'); });
		});
		ogt_calculate_scorecard(score_fields_out, score_fields_in, 'scoreout', 'scorein', 'scoretotal');
		ogt_calculate_scorecard(score_fields_out, score_fields_in,'scoreout',  'scorein', 'scoretotal');
		ogt_calculate_scorecard(putts_fields_out, putts_fields_in, 'puttsout', 'puttsin', 'puttstotal');
		ogt_calculate_scorecard(putts_fields_out, putts_fields_in, 'puttsout', 'puttsin', 'puttstotal');
		ogt_calculate_scorecard(penalties_fields_out, penalties_fields_in, 'penaltiesout', 'penaltiesin', 'penaltiestotal');
		ogt_calculate_scorecard(penalties_fields_out, penalties_fields_in, 'penaltiesout', 'penaltiesin', 'penaltiestotal');
	}
	
	$("#date").datepicker({dateFormat: 'dd-mm-yy', speed: ''});
	$("#date_picker_button").bind(
		'click', 
		function () {
			$("#date").datepicker('show');
			return false;
		}
	);
	
	ogt_assign_events();
	ogt_bind_score_fields();

});