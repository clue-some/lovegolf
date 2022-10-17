<?php

exit();

require_once('../../classes/ogt.php');

$ogt = new ogt();

$ogt->requireLogin();

$file = "../../postcodedata/postcodedata.txt";
$filehandle = fopen($file, 'r');

while ($row = fgets($filehandle)) {
	$data[trim(substr($row, 7, 9))] = trim(substr($row, 53, 18));
}

fclose($filehandle);

echo "<pre>";
//print_r($data);

$club = new club();
$clubs = $club->list_all_unlimited_new();

echo count($clubs) . "\n";

foreach ($clubs as $k => $v) {
	
	$postcodeparts = explode(' ', $v['postcode']); 
	echo $v['name'] . "\n";
	echo $postcodeparts[0] . " = " . $data[$postcodeparts[0]] . "\n";
	$club = new club();
	$club->find_by_id($v['clubid']);
	$club->set_county($data[$postcodeparts[0]]);
	$club->update();
	
} 

echo "</pre>";

?>