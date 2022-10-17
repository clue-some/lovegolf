<?php

require_once('../classes/ogt.php');

$ogt = new ogt();

$ogt->requireLogin();

echo "<pre>";

try {

	$handicap = new handicap();

	$handicap->set_sss(69);
	$handicap->set_current_handicap(20.4);
	$handicap->set_hole(1, 4, 6);
	$handicap->set_hole(2, 4, 5);
	$handicap->set_hole(3, 4, 5);
	$handicap->set_hole(4, 3, 3);
	$handicap->set_hole(5, 4, 4);
	$handicap->set_hole(6, 5, 2);
	$handicap->set_hole(7, 4, 2);
	$handicap->set_hole(8, 3, 2);
	$handicap->set_hole(9, 4, 2);
	$handicap->set_hole(10, 3, 5);
	$handicap->set_hole(11, 5, 5);
	$handicap->set_hole(12, 4, 5);
	$handicap->set_hole(13, 4, 5);
	$handicap->set_hole(14, 4, 5);
	$handicap->set_hole(15, 4, 5);
	$handicap->set_hole(16, 4, 5);
	$handicap->set_hole(17, 4, 10);
	$handicap->set_hole(18, 5, 2);

	$handicap->calculate();

	print_r($handicap->get_score());
	
	echo "Starting handicap: " . $handicap->get_current_handicap() . "\n";
	echo "New handicap: " . $handicap->get_new_handicap() . "\n";
	echo "Handicap change: " . $handicap->get_handicap_change() . "\n";

} catch (Exception $e) {

	echo "Error " . $e->getMessage();

}

echo "</pre>";

?>