<?php

require_once('../../classes/ogt.php');

$ogt = new ogt();

$ogt->requireLogin();

$ogt->assign('pagetitle', 'Enter your round details - Love Golf');

$ogt->assign('current', 'tracking');

$ogt->addJavascript('round/add');

$country = new country();
$region = new region();

$ogt->assign('countries', $country->list_all());
$ogt->assign('regions', $region->list_all());

$ogt->assign('lasttrackedround', $ogt->getCurrentuser()->getLastTrackedRound());

$stage = $_GET['stage'];

$round = (isset($_SESSION['round']) && $_SESSION['round'] ? @unserialize($_SESSION['round']) : new round());

if (!$round) $round = new round();

switch($stage) {
	case '2':
		$tee = new tee();
		if ($_POST['addround']) {
			try {
				$tee->find_by_id($_POST['teeid']);
							
				$round = new round();
				$round->set('courseid', $_POST['courseid'], 'Course ID', false, true);
				$round->set('userid', $ogt->getCurrentuser()->getUserId(), 'User ID', false, 1);
						
				$round->set('teeid', $_POST['teeid'], 'Tee ID', false, true);
				// Copy over tee info
				$tee = new tee();
				$tee->find_by_id($_POST['teeid']);
				$round->set('colour', $tee->get('colour'));
				$round->set('sss', $_POST['sss']);
				$round->set('courserating', $tee->get('courserating'));
				$round->set('slope', $tee->get('slope'));
				$round->set('hole1par', $tee->get('hole1par'));
				$round->set('hole2par', $tee->get('hole2par'));
				$round->set('hole3par', $tee->get('hole3par'));
				$round->set('hole4par', $tee->get('hole4par'));
				$round->set('hole5par', $tee->get('hole5par'));
				$round->set('hole6par', $tee->get('hole6par'));
				$round->set('hole7par', $tee->get('hole7par'));
				$round->set('hole8par', $tee->get('hole8par'));
				$round->set('hole9par', $tee->get('hole9par'));
				$round->set('hole10par', $tee->get('hole10par'));
				$round->set('hole11par', $tee->get('hole11par'));
				$round->set('hole12par', $tee->get('hole12par'));
				$round->set('hole13par', $tee->get('hole13par'));
				$round->set('hole14par', $tee->get('hole14par'));
				$round->set('hole15par', $tee->get('hole15par'));
				$round->set('hole16par', $tee->get('hole16par'));
				$round->set('hole17par', $tee->get('hole17par'));
				$round->set('hole18par', $tee->get('hole18par'));
				$round->set('hole1distance', $tee->get('hole1yards'));
				$round->set('hole2distance', $tee->get('hole2yards'));
				$round->set('hole3distance', $tee->get('hole3yards'));
				$round->set('hole4distance', $tee->get('hole4yards'));
				$round->set('hole5distance', $tee->get('hole5yards'));
				$round->set('hole6distance', $tee->get('hole6yards'));
				$round->set('hole7distance', $tee->get('hole7yards'));
				$round->set('hole8distance', $tee->get('hole8yards'));
				$round->set('hole9distance', $tee->get('hole9yards'));
				$round->set('hole10distance', $tee->get('hole10yards'));
				$round->set('hole11distance', $tee->get('hole11yards'));
				$round->set('hole12distance', $tee->get('hole12yards'));
				$round->set('hole13distance', $tee->get('hole13yards'));
				$round->set('hole14distance', $tee->get('hole14yards'));
				$round->set('hole15distance', $tee->get('hole15yards'));
				$round->set('hole16distance', $tee->get('hole16yards'));
				$round->set('hole17distance', $tee->get('hole17yards'));
				$round->set('hole18distance', $tee->get('hole18yards'));
				$round->set('hole1si', $tee->get('hole1si'));
				$round->set('hole2si', $tee->get('hole2si'));
				$round->set('hole3si', $tee->get('hole3si'));
				$round->set('hole4si', $tee->get('hole4si'));
				$round->set('hole5si', $tee->get('hole5si'));
				$round->set('hole6si', $tee->get('hole6si'));
				$round->set('hole7si', $tee->get('hole7si'));
				$round->set('hole8si', $tee->get('hole8si'));
				$round->set('hole9si', $tee->get('hole9si'));
				$round->set('hole10si', $tee->get('hole10si'));
				$round->set('hole11si', $tee->get('hole11si'));
				$round->set('hole12si', $tee->get('hole12si'));
				$round->set('hole13si', $tee->get('hole13si'));
				$round->set('hole14si', $tee->get('hole14si'));
				$round->set('hole15si', $tee->get('hole15si'));
				$round->set('hole16si', $tee->get('hole16si'));
				$round->set('hole17si', $tee->get('hole17si'));
				$round->set('hole18si', $tee->get('hole18si'));
				if ($_POST['name'] == "Type a name for this round") {
					throw new Exception('Please enter a name for your round.');
				}
				if ($_POST['comments'] == "Add comments for your round (Optional)") {
					$_POST['comments'] = '';
				}
				$round->set('name', $_POST['name'], 'Round name', 5);
				$round->set('holesplayed', $_POST['holesplayed']);
				$round->set('stats', $_POST['stats']);
				$round->set('trackhandicap', $_POST['handicap']);
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
				if (isset($_POST['stats']) && $_POST['stats']) {
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

				if (!$ogt->getCurrentuser()->getHandicappending() && isset($_POST['handicap']) && $_POST['handicap'] && ($_POST['holesplayed'] == "all")) {
					
					// Calculate Handicap
					$handicap = new handicap();
					$handicap->set_sss($tee->get('sss'));
					$handicap->set_current_handicap($ogt->getCurrentuser()->getHandicap());
					$handicap->set_hole(1, $round->get('hole1par'), $_POST['hole1score']);
					$handicap->set_hole(2, $round->get('hole2par'), $_POST['hole2score']);
					$handicap->set_hole(3, $round->get('hole3par'), $_POST['hole3score']);
					$handicap->set_hole(4, $round->get('hole4par'), $_POST['hole4score']);
					$handicap->set_hole(5, $round->get('hole5par'), $_POST['hole5score']);
					$handicap->set_hole(6, $round->get('hole6par'), $_POST['hole6score']);
					$handicap->set_hole(7, $round->get('hole7par'), $_POST['hole7score']);
					$handicap->set_hole(8, $round->get('hole8par'), $_POST['hole8score']);
					$handicap->set_hole(9, $round->get('hole9par'), $_POST['hole9score']);
					$handicap->set_hole(10, $round->get('hole10par'), $_POST['hole10score']);
					$handicap->set_hole(11, $round->get('hole11par'), $_POST['hole11score']);
					$handicap->set_hole(12, $round->get('hole12par'), $_POST['hole12score']);
					$handicap->set_hole(13, $round->get('hole13par'), $_POST['hole13score']);
					$handicap->set_hole(14, $round->get('hole14par'), $_POST['hole14score']);
					$handicap->set_hole(15, $round->get('hole15par'), $_POST['hole15score']);
					$handicap->set_hole(16, $round->get('hole16par'), $_POST['hole16score']);
					$handicap->set_hole(17, $round->get('hole17par'), $_POST['hole17score']);
					$handicap->set_hole(18, $round->get('hole18par'), $_POST['hole18score']);
					$handicap->calculate();
					
					$round->set('handicapbefore', $handicap->get_current_handicap());
					$round->set('handicapafter', $handicap->get_new_handicap());
					
					$currentuser = $ogt->getCurrentuser();
					$currentuser->set('handicap', $handicap->get_new_handicap());
					$currentuser->update();
				
				} else {

					$round->set('handicapbefore', $ogt->getCurrentuser()->getHandicap());
					$round->set('handicapafter', $ogt->getCurrentuser()->getHandicap());
					
				}
				
				$round->set('comments', $_POST['comments']);
				$round->calculate();
				$roundid = $round->insert();
				$round->find_by_id($roundid);
				
				// Check if 3rd round, and if so clear handicap pending flag
				// round is inserted later!
				$currentuser = $ogt->getCurrentuser();
				if ($currentuser->getHandicappending() && $currentuser->getNumHandicapRounds() >= 3) {
					$currentuser->setHandicappending(0);
					
					// Calculatie Initial Handicap
					
					$rounds = $currentuser->getHandicapRounds();
					$total_adjusted_score_minus_sss = 0;
					$r = 1;
					foreach($rounds as $roundv) {
						// Calculate Handicap
						$handicap = new handicap();
						$handicap->set_sss($roundv['sss']);
						$handicap->set_current_handicap(28);
						$handicap->set_hole(1, $roundv['hole1par'], $roundv['hole1score']);
						$handicap->set_hole(2, $roundv['hole2par'], $roundv['hole2score']);
						$handicap->set_hole(3, $roundv['hole3par'], $roundv['hole3score']);
						$handicap->set_hole(4, $roundv['hole4par'], $roundv['hole4score']);
						$handicap->set_hole(5, $roundv['hole5par'], $roundv['hole5score']);
						$handicap->set_hole(6, $roundv['hole6par'], $roundv['hole6score']);
						$handicap->set_hole(7, $roundv['hole7par'], $roundv['hole7score']);
						$handicap->set_hole(8, $roundv['hole8par'], $roundv['hole8score']);
						$handicap->set_hole(9, $roundv['hole9par'], $roundv['hole9score']);
						$handicap->set_hole(10, $roundv['hole10par'], $roundv['hole10score']);
						$handicap->set_hole(11, $roundv['hole11par'], $roundv['hole11score']);
						$handicap->set_hole(12, $roundv['hole12par'], $roundv['hole12score']);
						$handicap->set_hole(13, $roundv['hole13par'], $roundv['hole13score']);
						$handicap->set_hole(14, $roundv['hole14par'], $roundv['hole14score']);
						$handicap->set_hole(15, $roundv['hole15par'], $roundv['hole15score']);
						$handicap->set_hole(16, $roundv['hole16par'], $roundv['hole16score']);
						$handicap->set_hole(17, $roundv['hole17par'], $roundv['hole17score']);
						$handicap->set_hole(18, $roundv['hole18par'], $roundv['hole18score']);
						$handicap->calculate();		
						$holes = $handicap->get_holes();
						$adjusted_strokes = 0;
						foreach($holes as $hole) {
							$adjusted_strokes += $hole['adjusted_strokes'];	
						}
						$total_adjusted_score_minus_sss += $adjusted_strokes - $roundv['sss'];
						$r++;
					}
					$average_handicap = $total_adjusted_score_minus_sss / 3;
					
					$maxhandicap = 100;
				    $iDiffYear  = date('Y') - date('Y', strtotime($currentuser->getDOB()));
				    $iDiffMonth = date('n') - date('n', strtotime($currentuser->getDOB()));
				    $iDiffDay   = date('j') - date('j', strtotime($currentuser->getDOB()));
				    if ($iDiffMonth < 0 || ($iDiffMonth == 0 && $iDiffDay < 0))
				    {
				        $iDiffYear--;
				    }
				    $age = $iDiffYear; 
					if ($currentuser->getSex() == "Male" && $age > 18) {
						$maxhandicap = 28;
					} 
					if ($currentuser->getSex() == "Female" && $age > 18) {
						$maxhandicap = 36;
					} 
					if ($age < 18) {
						$maxhandicap = 54;
					} 
					if ($average_handicap > $maxhandicap) {
						$average_handicap = $maxhandicap;
					}
					$currentuser->setHandicap($average_handicap);
					$round->set('handicapafter', $average_handicap);
					$currentuser->update();
				}
				
				$round->update();

				$_SESSION['round'] = serialize($round);
				
				header('Location: /tracker/round/add/3/');
				exit();
			} catch (Exception $e) {
				$ogt->assign('error', $e->getMessage());
				$ogt->assign('post', $_POST);
				$ogt->assign('round', $round->get_details());
				$ogt->assign('tee', $tee->get_details());				
			}
		}
		if (isset($_REQUEST['teeid'])) {
			$tee = new tee();
			$tee->find_by_id($_REQUEST['teeid']);
			$course = new course();
			$course->find_by_id($tee->get_courseid());
		}
		if (isset($_POST['teeid'])) {
			$tee = new tee();
			$tee->find_by_id($_POST['teeid']);
			$course = new course();
			$course->find_by_id($tee->get_courseid());
		}
		if (isset($_REQUEST['courseid'])) {
			$course = new course();
			$course->find_by_id($_REQUEST['courseid']);
		}
		if (!isset($_REQUEST['courseid']) && !isset($_REQUEST['teeid'])) {
			header('Location: /tracker/round/add/');
			exit();
		}
		$weather = new weather();
		$ogt->assign('weathers', $weather->list_all());
		$ogt->assign('round', $round->get_details());
		$ogt->assign('tee', $tee->get_details());
		$ogt->assign('course', $course->get_details());
		$ogt->assign('tees', $course->list_tees());
		$ogt->display('round/add/2.tpl');
		break;
	case '3':
		$ogt->assign('round', $round->get_details());
		$tee = new tee();
		//echo $round->get('teeid');
		$tee->find_by_id($round->get_teeid());
		$ogt->assign('tee', $tee->get_details());
		$course = new course();
		$course->find_by_id($round->get_courseid());
		$ogt->assign('course', $course->get_details());
		if ($round->get('primaryweatherid')) {
			$primaryweather = new weather();
			$primaryweather->find_by_id($round->get('primaryweatherid'));
			$ogt->assign('primaryweather', $primaryweather->get_details());
		}
		if ($round->get('secondaryweatherid')) {
			$secondaryweather = new weather();
			$secondaryweather->find_by_id($round->get('secondaryweatherid'));
			$ogt->assign('secondaryweather', $secondaryweather->get_details());
		}
		$ogt->assign('pagetitle', 'Your round has been added - Love Golf');
		$ogt->display('round/add/3.tpl');
		break;
	default:
		$ogt->assign('round', $round->get_details());
		$favourite = new favourite();
		$ogt->assign('favouritecourses', $favourite->list_by_userid($ogt->getCurrentuser()->getUserid()));
		$ogt->assign('recentcourses', $ogt->getCurrentUser()->listRecentCourses());
		$ogt->display('round/add/1.tpl');
		break;
}

$_SESSION['round'] = serialize($round);

?>