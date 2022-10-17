<?php

require_once('../classes/ogt.php');

$ogt = new ogt();

$ogt->requireLogin();

echo "<pre>";

$tee = new tee();

$tees = $tee->list_tees();

if ($tees) {

	echo count($tees) . " tees found... processing...\n";
	
foreach ($tees as $v) {
	
	try {
		$tee->find_by_id($v['teeid']);
		$tee->calculate();
		$tee->update();
		echo "Tee " . $tee->get_teeid() . " updated.\n";
	} catch (Exception $e) {
		echo "Error: " . $e->getMessage() . "\n;";
	}
}

} else {
	
	echo "No tees found.\n";
	
}

echo "</pre>";

?>