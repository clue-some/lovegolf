<?php 

require_once('../../classes/ogt.php');

$ogt = new ogt();

$ogt->requireLogin();

echo '<pre>';

$currentuser = new User();
$currentuser->findById(48);
if ($currentuser->getNumHandicapRounds() >= 3) {
	$currentuser->setHandicappending(0);
	
	echo 'Calculating Initial Handicap' . "\n";
	
	$rounds = $currentuser->getHandicapRounds();
	$total_adjusted_score_minus_sss = 0;
	$r = 1;
	foreach($rounds as $round) {
		// Calculate Handicap
		$handicap = new handicap();
		$handicap->set_sss($round['sss']);
		$handicap->set_current_handicap(28);
		$handicap->set_hole(1, $round['hole1par'], $round['hole1score']);
		$handicap->set_hole(2, $round['hole2par'], $round['hole2score']);
		$handicap->set_hole(3, $round['hole3par'], $round['hole3score']);
		$handicap->set_hole(4, $round['hole4par'], $round['hole4score']);
		$handicap->set_hole(5, $round['hole5par'], $round['hole5score']);
		$handicap->set_hole(6, $round['hole6par'], $round['hole6score']);
		$handicap->set_hole(7, $round['hole7par'], $round['hole7score']);
		$handicap->set_hole(8, $round['hole8par'], $round['hole8score']);
		$handicap->set_hole(9, $round['hole9par'], $round['hole9score']);
		$handicap->set_hole(10, $round['hole10par'], $round['hole10score']);
		$handicap->set_hole(11, $round['hole11par'], $round['hole11score']);
		$handicap->set_hole(12, $round['hole12par'], $round['hole12score']);
		$handicap->set_hole(13, $round['hole13par'], $round['hole13score']);
		$handicap->set_hole(14, $round['hole14par'], $round['hole14score']);
		$handicap->set_hole(15, $round['hole15par'], $round['hole15score']);
		$handicap->set_hole(16, $round['hole16par'], $round['hole16score']);
		$handicap->set_hole(17, $round['hole17par'], $round['hole17score']);
		$handicap->set_hole(18, $round['hole18par'], $round['hole18score']);
		$handicap->calculate();		
		$holes = $handicap->get_holes();
		$adjusted_strokes = 0;
		foreach($holes as $hole) {
			$adjusted_strokes += $hole['adjusted_strokes'];	
		}
		echo 'R' . $r . ' Adjusted Strokes: ' . $adjusted_strokes . "\n";
		echo 'R' . $r . ' Adjusted Strokes minus SSS: ' .$total_adjusted_score_minus_sss += $adjusted_strokes - $round['sss'];
		echo "\n";
		$r++;
	}
	$average_handicap = $total_adjusted_score_minus_sss / 3;
	echo 'Handicap: '. $average_handicap . "\n";
	
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
	echo 'Handicap Adjusted for age/gender: '. $average_handicap . "\n";
}
				
?>