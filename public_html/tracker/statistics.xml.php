<?php

require_once('../../classes/ogt.php');

$ogt = new ogt();

$mode = (isset($_REQUEST['mode']) ? $_REQUEST['mode'] : false);

$statistics = new statistics();

header('Content-Type: text/xml');

switch($mode) {
	case 'average-strokes':
		$rounds = $ogt->getCurrentUser()->listRoundsByCourseid();
		$roundsplayed = count($rounds);
		$useraverage = $ogt->getCurrentUser()->getAverageByCourseid();
		$ogt->assign('caption', 'Average Strokes');
		$ogt->assign('subcaption', 'All Courses - ' . $roundsplayed . ' Rounds');
		$ogt->assign('xaxisname', 'Hole');		
		$ogt->assign('yaxisname', 'Strokes');		
		$ogt->assign('useraverage', $useraverage);
		$ogt->display('statistics/xml/' . $mode . '.tpl');
		break;
	case 'average-putts':
		$rounds = $ogt->getCurrentUser()->listRoundsByCourseid();
		$roundsplayed = count($rounds);
		$useraverage = $ogt->getCurrentUser()->getAverageByCourseid();
		$ogt->assign('caption', 'Average Putts');
		$ogt->assign('subcaption', 'All Courses - ' . $roundsplayed . ' Rounds');
		$ogt->assign('xaxisname', 'Hole');		
		$ogt->assign('yaxisname', 'Putts');		
		$ogt->assign('useraverage', $useraverage);
		$ogt->display('statistics/xml/' . $mode . '.tpl');
		break;
	case 'course-average-strokes':
		$course = new course();
		$course->find_by_id($_REQUEST['id']);
		$rounds = $ogt->getCurrentUser()->listRoundsByCourseid($course->get_courseid());
		if ($roundsplayed = count($rounds)) {
			$round = new round();
			$round->find_by_id($rounds[0]['roundid']);
			$usercourses[$k]['lastround'] = $round->get_details();
			$usercourses[$k]['roundsplayed'] = $roundsplayed;
		}
		$useraverage = $ogt->getCurrentUser()->getAverageByCourseid($course->get_courseid());
		$round = new round();
		$courseaverage = $round->getAverageByCourseid($course->get_courseid());
		$ogt->assign('caption', 'Course Average Strokes');
		$ogt->assign('subcaption', $course->get_name());
		$ogt->assign('xaxisname', 'Hole');		
		$ogt->assign('yaxisname', 'Strokes');		
		$ogt->assign('useraverage', $useraverage);
		$ogt->assign('courseaverage', $courseaverage);
		$ogt->display('statistics/xml/' . $mode . '.tpl');
		break;
	case 'course-average-putts':
		$course = new course();
		$course->find_by_id($_REQUEST['id']);
		$rounds = $ogt->getCurrentUser()->listRoundsByCourseid($course->get_courseid());
		if ($roundsplayed = count($rounds)) {
			$round = new round();
			$round->find_by_id($rounds[0]['roundid']);
			$usercourses[$k]['lastround'] = $round->get_details();
			$usercourses[$k]['roundsplayed'] = $roundsplayed;
		}
		$useraverage = $ogt->getCurrentUser()->getAverageByCourseid($course->get_courseid());
		$round = new round();
		$courseaverage = $round->getAverageByCourseid($course->get_courseid());
		$ogt->assign('caption', 'Course Average Putts');
		$ogt->assign('subcaption', $course->get_name());
		$ogt->assign('xaxisname', 'Hole');		
		$ogt->assign('yaxisname', 'Putts');		
		$ogt->assign('useraverage', $useraverage);
		$ogt->assign('courseaverage', $courseaverage);
		$ogt->display('statistics/xml/' . $mode . '.tpl');
		break;
	case 'lastrounds-advanced':
		$statistics->set_advancedonly();
		$lastrounds = $statistics->get_user_last_rounds($ogt->getCurrentUser()->getUserId(), 10);
		$ogt->assign('caption', 'Overview');
		$ogt->assign('subcaption', 'Your last 10 rounds');
		$ogt->assign('xaxisname', 'Date');
		//$ogt->assign('yaxisname', '#');	
		$ogt->assign('lastrounds', array_reverse($lastrounds));
		$ogt->display('statistics/xml/' . $mode . '.tpl');
		break;
	case 'lastrounds-total':
		$lastrounds = $statistics->get_user_last_rounds($ogt->getCurrentUser()->getUserId(), 10);
		$ogt->assign('caption', 'Total Score');
		$ogt->assign('subcaption', 'Your last 10 rounds');
		$ogt->assign('xaxisname', 'Date');		
		$ogt->assign('yaxisname', 'Strokes');		
		$ogt->assign('lastrounds', array_reverse($lastrounds));
		$ogt->display('statistics/xml/' . $mode . '.tpl');
		break;
	case 'lastrounds-handicap':
		$lastrounds = $statistics->get_user_last_rounds_handicap($ogt->getCurrentUser()->getUserId(), 10);
		$ogt->assign('caption', 'Handicap Progress');
		$ogt->assign('subcaption', 'Your last 10 rounds');
		$ogt->assign('xaxisname', 'Date');		
		$ogt->assign('pyaxisname', 'Strokes');
		$ogt->assign('syaxisname', 'Handicap');
		$ogt->assign('showvalues', '0');
		$ogt->assign('lastrounds', array_reverse($lastrounds));
		$ogt->display('statistics/xml/' . $mode . '.tpl');
		break;
	case 'lastrounds-fir':
		$statistics->set_advancedonly();
		$lastrounds = $statistics->get_user_last_rounds($ogt->getCurrentUser()->getUserId(), 10);
		$ogt->assign('caption', 'Number of Fairways Hit');
		$ogt->assign('subcaption', 'Your last 10 rounds');
		$ogt->assign('xaxisname', '');		
		$ogt->assign('yaxisname', 'Fairways Hit');		
		$ogt->assign('lastrounds', array_reverse($lastrounds));
		$ogt->display('statistics/xml/' . $mode . '.tpl');
		break;
	case 'lastrounds-gir':
		$statistics->set_advancedonly();
		$lastrounds = $statistics->get_user_last_rounds($ogt->getCurrentUser()->getUserId(), 10);
		$ogt->assign('caption', 'Number of Greens Hit');
		$ogt->assign('subcaption', 'Your last 10 rounds');
		$ogt->assign('xaxisname', '');		
		$ogt->assign('yaxisname', 'Greens Hit');		
		$ogt->assign('lastrounds', array_reverse($lastrounds));
		$ogt->display('statistics/xml/' . $mode . '.tpl');
		break;
	case 'lastrounds-updown':
		$statistics->set_advancedonly();
		$lastrounds = $statistics->get_user_last_rounds($ogt->getCurrentUser()->getUserId(), 10);
		$ogt->assign('caption', 'Up & Down Percentage');
		$ogt->assign('subcaption', 'Your last 10 rounds');
		$ogt->assign('xaxisname', '');		
		$ogt->assign('yaxisname', 'Up & Down Percentage');		
		$ogt->assign('lastrounds', array_reverse($lastrounds));
		$ogt->display('statistics/xml/' . $mode . '.tpl');
		break;
	case 'lastrounds-sandsave':
		$statistics->set_advancedonly();
		$lastrounds = $statistics->get_user_last_rounds($ogt->getCurrentUser()->getUserId(), 10);
		$ogt->assign('caption', 'Sand Save Percentage');
		$ogt->assign('subcaption', 'Your last 10 rounds');
		$ogt->assign('xaxisname', '');		
		$ogt->assign('yaxisname', 'Sand Save Percentage');		
		$ogt->assign('lastrounds', array_reverse($lastrounds));
		$ogt->display('statistics/xml/' . $mode . '.tpl');
		break;
	case 'lastrounds-putts':
		$statistics->set_advancedonly();
		$lastrounds = $statistics->get_user_last_rounds($ogt->getCurrentUser()->getUserId(), 10);
		$ogt->assign('caption', 'Total Putts');
		$ogt->assign('subcaption', 'Your last 10 rounds');
		$ogt->assign('xaxisname', '');		
		$ogt->assign('yaxisname', 'Putts');		
		$ogt->assign('lastrounds', array_reverse($lastrounds));
		$ogt->display('statistics/xml/' . $mode . '.tpl');
		break;
	case 'lastrounds-penalties':
		$statistics->set_advancedonly();
		$lastrounds = $statistics->get_user_last_rounds($ogt->getCurrentUser()->getUserId(), 10);
		$ogt->assign('caption', 'Total Penalties');
		$ogt->assign('subcaption', 'Your last 10 rounds');
		$ogt->assign('xaxisname', '');		
		$ogt->assign('yaxisname', 'Penalties');		
		$ogt->assign('lastrounds', array_reverse($lastrounds));
		$ogt->display('statistics/xml/' . $mode . '.tpl');
		break;		
	case 'lastrounds-frequency':
		$strokes = $statistics->get_user_last_rounds_strokes_frequency($ogt->getCurrentUser()->getUserId(), 10);
		$ogt->assign('caption', 'Score Frequency');
		$ogt->assign('subcaption', 'Your last 10 rounds');
		$ogt->assign('strokes', $strokes);
		$ogt->assign('showvalues', '1');
		$ogt->display('statistics/xml/' . $mode . '.tpl');
		break;
	case 'round-frequency':
		$strokes = $statistics->get_round_stroke_frequency($_REQUEST['id']);
		$ogt->assign('caption', 'Score Frequency');
		$round = new round();
		$round->find_by_id($_REQUEST['id']);
		$date = date_create($round->get('date'));
		$ogt->assign('subcaption', $round->get('name') . ' (' . date_format($date, 'd-m-Y') . ')');
		$ogt->assign('strokes', $strokes);
		$ogt->assign('showvalues', '1');
		$ogt->display('statistics/xml/' . $mode . '.tpl');
		break;
	case 'round-holes':
		$ogt->assign('caption', 'Strokes vs. Par');
		$round = new round();
		$round->find_by_id($_REQUEST['id']);
		try {
			$tee = new tee();
			$tee->find_by_id($round->get('teeid'));
			$ogt->assign('tee', $tee->get_details());
		} catch (Exception $e) {}
		$date = date_create($round->get('date'));
		$ogt->assign('subcaption', $round->get('name') . ' (' . date_format($date, 'd-m-Y') . ')');
		$ogt->assign('xaxisname', 'Hole');
		$ogt->assign('yaxisname', 'Strokes / Par');
		$ogt->assign('round', $round->get_details());
		$ogt->display('statistics/xml/round-holes.tpl');
		break;
}

?>