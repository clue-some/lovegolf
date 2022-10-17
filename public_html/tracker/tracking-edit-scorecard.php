<?php

require_once('../../classes/ogt.php');

$ogt = new ogt();

$ogt->requireLogin();
	
$ogt->addJavascript('tracking/scorecard');

$ogt->assign('pagetitle', 'Edit your scorecard - Tracking Centre - Love Golf');

$ogt->assign('current', 'tracking');

// Load scorecard
$round = new round();
$round->find_by_id((int)$_GET['page']);

$course = new course();
$course->find_by_id((int)$round->get('courseid'));

$ogt->assign('tees', $course->list_tees());

$tee = new tee();
$tee->find_by_id($round->get('teeid'));
$ogt->assign('tee', $tee->get_details());

$weather = new weather();
$ogt->assign('weathers', $weather->list_all());

// Check ownership
if ($round->get('userid') != $ogt->getCurrentUser()->getUserid()) {
	throw new Exception("Access Denied");
}

if (isset($_POST['editround'])) {
	
	try {
		if ($_POST['name'] == "Type a name for this round") {
			throw new Exception('Please enter a name for your round.');
		}
		if ($_POST['comments'] == "Add comments for your round (Optional)") {
			$_POST['comments'] = '';
		}
		$round->set('name', $_POST['name'], 'Round name', 5);
		$dateTime = new DateTime($_POST['date']);
		$round->set('date', date_format($dateTime, 'Y-m-d'), 'Date', false, false, REGEX_DATE_YYYYMMDD);
		$round->set('primaryweatherid', $_POST['primaryweatherid']);
		$round->set('secondaryweatherid', $_POST['secondaryweatherid']);
		if (!isset($_POST['front9']) && !isset($_POST['back9'])) {
			throw new Exception('No score data received.');
		}
		if (isset($_POST['front9'])) {
			$round->set('hole1score', $_POST['hole1score'], 'Hole 1 Score', false, true);
			$round->set('hole2score', $_POST['hole2score'], 'Hole 2 Score', false, true);
			$round->set('hole3score', $_POST['hole3score'], 'Hole 3 Score', false, true);
			$round->set('hole4score', $_POST['hole4score'], 'Hole 4 Score', false, true);
			$round->set('hole5score', $_POST['hole5score'], 'Hole 5 Score', false, true);
			$round->set('hole6score', $_POST['hole6score'], 'Hole 6 Score', false, true);
			$round->set('hole7score', $_POST['hole7score'], 'Hole 7 Score', false, true);
			$round->set('hole8score', $_POST['hole8score'], 'Hole 8 Score', false, true);
			$round->set('hole9score', $_POST['hole9score'], 'Hole 9 Score', false, true);
		}
		if (isset($_POST['back9'])) {
			$round->set('hole10score', $_POST['hole10score'], 'Hole 10 Score', false, true);
			$round->set('hole11score', $_POST['hole11score'], 'Hole 11 Score', false, true);
			$round->set('hole12score', $_POST['hole12score'], 'Hole 12 Score', false, true);
			$round->set('hole13score', $_POST['hole13score'], 'Hole 13 Score', false, true);
			$round->set('hole14score', $_POST['hole14score'], 'Hole 14 Score', false, true);
			$round->set('hole15score', $_POST['hole15score'], 'Hole 15 Score', false, true);
			$round->set('hole16score', $_POST['hole16score'], 'Hole 16 Score', false, true);
			$round->set('hole17score', $_POST['hole17score'], 'Hole 17 Score', false, true);
			$round->set('hole18score', $_POST['hole18score'], 'Hole 18 Score', false, true);
		}
		if ($round->get('stats')) {
			$round->set('hole1putts', $_POST['hole1putts']);
			$round->set('hole2putts', $_POST['hole2putts']);
			$round->set('hole3putts', $_POST['hole3putts']);
			$round->set('hole4putts', $_POST['hole4putts']);
			$round->set('hole5putts', $_POST['hole5putts']);
			$round->set('hole6putts', $_POST['hole6putts']);
			$round->set('hole7putts', $_POST['hole7putts']);
			$round->set('hole8putts', $_POST['hole8putts']);
			$round->set('hole9putts', $_POST['hole9putts']);
			$round->set('hole10putts', $_POST['hole10putts']);
			$round->set('hole11putts', $_POST['hole11putts']);
			$round->set('hole12putts', $_POST['hole12putts']);
			$round->set('hole13putts', $_POST['hole13putts']);
			$round->set('hole14putts', $_POST['hole14putts']);
			$round->set('hole15putts', $_POST['hole15putts']);
			$round->set('hole16putts', $_POST['hole16putts']);
			$round->set('hole17putts', $_POST['hole17putts']);
			$round->set('hole18putts', $_POST['hole18putts']);
			$round->set('hole1fir', $_POST['hole1fir']);
			$round->set('hole2fir', $_POST['hole2fir']);
			$round->set('hole3fir', $_POST['hole3fir']);
			$round->set('hole4fir', $_POST['hole4fir']);
			$round->set('hole5fir', $_POST['hole5fir']);
			$round->set('hole6fir', $_POST['hole6fir']);
			$round->set('hole7fir', $_POST['hole7fir']);
			$round->set('hole8fir', $_POST['hole8fir']);
			$round->set('hole9fir', $_POST['hole9fir']);
			$round->set('hole10fir', $_POST['hole10fir']);
			$round->set('hole11fir', $_POST['hole11fir']);
			$round->set('hole12fir', $_POST['hole12fir']);
			$round->set('hole13fir', $_POST['hole13fir']);
			$round->set('hole14fir', $_POST['hole14fir']);
			$round->set('hole15fir', $_POST['hole15fir']);
			$round->set('hole16fir', $_POST['hole16fir']);
			$round->set('hole17fir', $_POST['hole17fir']);
			$round->set('hole18fir', $_POST['hole18fir']);
			$round->set('hole1firposition', $_POST['hole1firposition']);
			$round->set('hole2firposition', $_POST['hole2firposition']);
			$round->set('hole3firposition', $_POST['hole3firposition']);
			$round->set('hole4firposition', $_POST['hole4firposition']);
			$round->set('hole5firposition', $_POST['hole5firposition']);
			$round->set('hole6firposition', $_POST['hole6firposition']);
			$round->set('hole7firposition', $_POST['hole7firposition']);
			$round->set('hole8firposition', $_POST['hole8firposition']);
			$round->set('hole9firposition', $_POST['hole9firposition']);
			$round->set('hole10firposition', $_POST['hole10firposition']);
			$round->set('hole11firposition', $_POST['hole11firposition']);
			$round->set('hole12firposition', $_POST['hole12firposition']);
			$round->set('hole13firposition', $_POST['hole13firposition']);
			$round->set('hole14firposition', $_POST['hole14firposition']);
			$round->set('hole15firposition', $_POST['hole15firposition']);
			$round->set('hole16firposition', $_POST['hole16firposition']);
			$round->set('hole17firposition', $_POST['hole17firposition']);
			$round->set('hole18firposition', $_POST['hole18firposition']);
			$round->set('hole1gir', $_POST['hole1gir']);
			$round->set('hole2gir', $_POST['hole2gir']);
			$round->set('hole3gir', $_POST['hole3gir']);
			$round->set('hole4gir', $_POST['hole4gir']);
			$round->set('hole5gir', $_POST['hole5gir']);
			$round->set('hole6gir', $_POST['hole6gir']);
			$round->set('hole7gir', $_POST['hole7gir']);
			$round->set('hole8gir', $_POST['hole8gir']);
			$round->set('hole9gir', $_POST['hole9gir']);
			$round->set('hole10gir', $_POST['hole10gir']);
			$round->set('hole11gir', $_POST['hole11gir']);
			$round->set('hole12gir', $_POST['hole12gir']);
			$round->set('hole13gir', $_POST['hole13gir']);
			$round->set('hole14gir', $_POST['hole14gir']);
			$round->set('hole15gir', $_POST['hole15gir']);
			$round->set('hole16gir', $_POST['hole16gir']);
			$round->set('hole17gir', $_POST['hole17gir']);
			$round->set('hole18gir', $_POST['hole18gir']);					
			$round->set('hole1girposition', $_POST['hole1girposition']);
			$round->set('hole2girposition', $_POST['hole2girposition']);
			$round->set('hole3girposition', $_POST['hole3girposition']);
			$round->set('hole4girposition', $_POST['hole4girposition']);
			$round->set('hole5girposition', $_POST['hole5girposition']);
			$round->set('hole6girposition', $_POST['hole6girposition']);
			$round->set('hole7girposition', $_POST['hole7girposition']);
			$round->set('hole8girposition', $_POST['hole8girposition']);
			$round->set('hole9girposition', $_POST['hole9girposition']);
			$round->set('hole10girposition', $_POST['hole10girposition']);
			$round->set('hole11girposition', $_POST['hole11girposition']);
			$round->set('hole12girposition', $_POST['hole12girposition']);
			$round->set('hole13girposition', $_POST['hole13girposition']);
			$round->set('hole14girposition', $_POST['hole14girposition']);
			$round->set('hole15girposition', $_POST['hole15girposition']);
			$round->set('hole16girposition', $_POST['hole16girposition']);
			$round->set('hole17girposition', $_POST['hole17girposition']);
			$round->set('hole18girposition', $_POST['hole18girposition']);					
			$round->set('hole1bunker', $_POST['hole1bunker']);
			$round->set('hole2bunker', $_POST['hole2bunker']);
			$round->set('hole3bunker', $_POST['hole3bunker']);
			$round->set('hole4bunker', $_POST['hole4bunker']);
			$round->set('hole5bunker', $_POST['hole5bunker']);
			$round->set('hole6bunker', $_POST['hole6bunker']);
			$round->set('hole7bunker', $_POST['hole7bunker']);
			$round->set('hole8bunker', $_POST['hole8bunker']);
			$round->set('hole9bunker', $_POST['hole9bunker']);
			$round->set('hole10bunker', $_POST['hole10bunker']);
			$round->set('hole11bunker', $_POST['hole11bunker']);
			$round->set('hole12bunker', $_POST['hole12bunker']);
			$round->set('hole13bunker', $_POST['hole13bunker']);
			$round->set('hole14bunker', $_POST['hole14bunker']);
			$round->set('hole15bunker', $_POST['hole15bunker']);
			$round->set('hole16bunker', $_POST['hole16bunker']);
			$round->set('hole17bunker', $_POST['hole17bunker']);
			$round->set('hole18bunker', $_POST['hole18bunker']);
			$round->set('hole1updown', $_POST['hole1updown']);
			$round->set('hole2updown', $_POST['hole2updown']);
			$round->set('hole3updown', $_POST['hole3updown']);
			$round->set('hole4updown', $_POST['hole4updown']);
			$round->set('hole5updown', $_POST['hole5updown']);
			$round->set('hole6updown', $_POST['hole6updown']);
			$round->set('hole7updown', $_POST['hole7updown']);
			$round->set('hole8updown', $_POST['hole8updown']);
			$round->set('hole9updown', $_POST['hole9updown']);
			$round->set('hole10updown', $_POST['hole10updown']);
			$round->set('hole11updown', $_POST['hole11updown']);
			$round->set('hole12updown', $_POST['hole12updown']);
			$round->set('hole13updown', $_POST['hole13updown']);
			$round->set('hole14updown', $_POST['hole14updown']);
			$round->set('hole15updown', $_POST['hole15updown']);
			$round->set('hole16updown', $_POST['hole16updown']);
			$round->set('hole17updown', $_POST['hole17updown']);
			$round->set('hole18updown', $_POST['hole18updown']);
			$round->set('hole1updownhit', $_POST['hole1updownhit']);
			$round->set('hole2updownhit', $_POST['hole2updownhit']);
			$round->set('hole3updownhit', $_POST['hole3updownhit']);
			$round->set('hole4updownhit', $_POST['hole4updownhit']);
			$round->set('hole5updownhit', $_POST['hole5updownhit']);
			$round->set('hole6updownhit', $_POST['hole6updownhit']);
			$round->set('hole7updownhit', $_POST['hole7updownhit']);
			$round->set('hole8updownhit', $_POST['hole8updownhit']);
			$round->set('hole9updownhit', $_POST['hole9updownhit']);
			$round->set('hole10updownhit', $_POST['hole10updownhit']);
			$round->set('hole11updownhit', $_POST['hole11updownhit']);
			$round->set('hole12updownhit', $_POST['hole12updownhit']);
			$round->set('hole13updownhit', $_POST['hole13updownhit']);
			$round->set('hole14updownhit', $_POST['hole14updownhit']);
			$round->set('hole15updownhit', $_POST['hole15updownhit']);
			$round->set('hole16updownhit', $_POST['hole16updownhit']);
			$round->set('hole17updownhit', $_POST['hole17updownhit']);
			$round->set('hole18updownhit', $_POST['hole18updownhit']);
			$round->set('hole1sandsave', $_POST['hole1sandsave']);
			$round->set('hole2sandsave', $_POST['hole2sandsave']);
			$round->set('hole3sandsave', $_POST['hole3sandsave']);
			$round->set('hole4sandsave', $_POST['hole4sandsave']);
			$round->set('hole5sandsave', $_POST['hole5sandsave']);
			$round->set('hole6sandsave', $_POST['hole6sandsave']);
			$round->set('hole7sandsave', $_POST['hole7sandsave']);
			$round->set('hole8sandsave', $_POST['hole8sandsave']);
			$round->set('hole9sandsave', $_POST['hole9sandsave']);
			$round->set('hole10sandsave', $_POST['hole10sandsave']);
			$round->set('hole11sandsave', $_POST['hole11sandsave']);
			$round->set('hole12sandsave', $_POST['hole12sandsave']);
			$round->set('hole13sandsave', $_POST['hole13sandsave']);
			$round->set('hole14sandsave', $_POST['hole14sandsave']);
			$round->set('hole15sandsave', $_POST['hole15sandsave']);
			$round->set('hole16sandsave', $_POST['hole16sandsave']);
			$round->set('hole17sandsave', $_POST['hole17sandsave']);
			$round->set('hole18sandsave', $_POST['hole18sandsave']);
			$round->set('hole1sandsavehit', $_POST['hole1sandsavehit']);
			$round->set('hole2sandsavehit', $_POST['hole2sandsavehit']);
			$round->set('hole3sandsavehit', $_POST['hole3sandsavehit']);
			$round->set('hole4sandsavehit', $_POST['hole4sandsavehit']);
			$round->set('hole5sandsavehit', $_POST['hole5sandsavehit']);
			$round->set('hole6sandsavehit', $_POST['hole6sandsavehit']);
			$round->set('hole7sandsavehit', $_POST['hole7sandsavehit']);
			$round->set('hole8sandsavehit', $_POST['hole8sandsavehit']);
			$round->set('hole9sandsavehit', $_POST['hole9sandsavehit']);
			$round->set('hole10sandsavehit', $_POST['hole10sandsavehit']);
			$round->set('hole11sandsavehit', $_POST['hole11sandsavehit']);
			$round->set('hole12sandsavehit', $_POST['hole12sandsavehit']);
			$round->set('hole13sandsavehit', $_POST['hole13sandsavehit']);
			$round->set('hole14sandsavehit', $_POST['hole14sandsavehit']);
			$round->set('hole15sandsavehit', $_POST['hole15sandsavehit']);
			$round->set('hole16sandsavehit', $_POST['hole16sandsavehit']);
			$round->set('hole17sandsavehit', $_POST['hole17sandsavehit']);
			$round->set('hole18sandsavehit', $_POST['hole18sandsavehit']);
			$round->set('hole1penalties', $_POST['hole1penalties']);
			$round->set('hole2penalties', $_POST['hole2penalties']);
			$round->set('hole3penalties', $_POST['hole3penalties']);
			$round->set('hole4penalties', $_POST['hole4penalties']);
			$round->set('hole5penalties', $_POST['hole5penalties']);
			$round->set('hole6penalties', $_POST['hole6penalties']);
			$round->set('hole7penalties', $_POST['hole7penalties']);
			$round->set('hole8penalties', $_POST['hole8penalties']);
			$round->set('hole9penalties', $_POST['hole9penalties']);
			$round->set('hole10penalties', $_POST['hole10penalties']);
			$round->set('hole11penalties', $_POST['hole11penalties']);
			$round->set('hole12penalties', $_POST['hole12penalties']);
			$round->set('hole13penalties', $_POST['hole13penalties']);
			$round->set('hole14penalties', $_POST['hole14penalties']);
			$round->set('hole15penalties', $_POST['hole15penalties']);
			$round->set('hole16penalties', $_POST['hole16penalties']);
			$round->set('hole17penalties', $_POST['hole17penalties']);
			$round->set('hole18penalties', $_POST['hole18penalties']);
		}
		
		$round->set('comments', $_POST['comments']);
		$round->calculate();
		$round->update();
	
		$ogt->assign('post', $round->get_details());
		
	} catch (Exception $e) {
		
		$ogt->assign('message', $e->getMessage());	
		
	}
	
	$ogt->assign('success', 1);
	
} else {

//	echo '<pre>';
//	print_r($round->get_details());
	$ogt->assign('post', $round->get_details());

}

$ogt->display('tracking-edit-scorecard.tpl');

?>