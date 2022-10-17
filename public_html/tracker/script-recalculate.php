<?php

require_once('../../classes/ogt.php');

$ogt = new ogt();

echo "<pre>";

$round = new round();
$rounds = $round->list_all();
foreach ($rounds as $rk => $rv) {
	echo "roundid: " . $rv['roundid'] . "\n";
	$round = new round();
	$round->find_by_id($rv['roundid']);
//	try {
//		$tee = new tee();
//		$tee->find_by_id($rv['teeid']);
//		echo "teeid: " . $tee->get('teeid') . "\n";
//		$round->set('colour', $tee->get('colour'));
//		$round->set('sss', $tee->get('sss'));
//		$round->set('courserating', $tee->get('courserating'));
//		$round->set('slope', $tee->get('slope'));
//		$round->set('hole1par', $tee->get('hole1par'));
//		$round->set('hole2par', $tee->get('hole2par'));
//		$round->set('hole3par', $tee->get('hole3par'));
//		$round->set('hole4par', $tee->get('hole4par'));
//		$round->set('hole5par', $tee->get('hole5par'));
//		$round->set('hole6par', $tee->get('hole6par'));
//		$round->set('hole7par', $tee->get('hole7par'));
//		$round->set('hole8par', $tee->get('hole8par'));
//		$round->set('hole9par', $tee->get('hole9par'));
//		$round->set('hole10par', $tee->get('hole10par'));
//		$round->set('hole11par', $tee->get('hole11par'));
//		$round->set('hole12par', $tee->get('hole12par'));
//		$round->set('hole13par', $tee->get('hole13par'));
//		$round->set('hole14par', $tee->get('hole14par'));
//		$round->set('hole15par', $tee->get('hole15par'));
//		$round->set('hole16par', $tee->get('hole16par'));
//		$round->set('hole17par', $tee->get('hole17par'));
//		$round->set('hole18par', $tee->get('hole18par'));
//		$round->set('hole1distance', $tee->get('hole1yards'));
//		$round->set('hole2distance', $tee->get('hole2yards'));
//		$round->set('hole3distance', $tee->get('hole3yards'));
//		$round->set('hole4distance', $tee->get('hole4yards'));
//		$round->set('hole5distance', $tee->get('hole5yards'));
//		$round->set('hole6distance', $tee->get('hole6yards'));
//		$round->set('hole7distance', $tee->get('hole7yards'));
//		$round->set('hole8distance', $tee->get('hole8yards'));
//		$round->set('hole9distance', $tee->get('hole9yards'));
//		$round->set('hole10distance', $tee->get('hole10yards'));
//		$round->set('hole11distance', $tee->get('hole11yards'));
//		$round->set('hole12distance', $tee->get('hole12yards'));
//		$round->set('hole13distance', $tee->get('hole13yards'));
//		$round->set('hole14distance', $tee->get('hole14yards'));
//		$round->set('hole15distance', $tee->get('hole15yards'));
//		$round->set('hole16distance', $tee->get('hole16yards'));
//		$round->set('hole17distance', $tee->get('hole17yards'));
//		$round->set('hole18distance', $tee->get('hole18yards'));
//		$round->set('hole1si', $tee->get('hole1si'));
//		$round->set('hole2si', $tee->get('hole2si'));
//		$round->set('hole3si', $tee->get('hole3si'));
//		$round->set('hole4si', $tee->get('hole4si'));
//		$round->set('hole5si', $tee->get('hole5si'));
//		$round->set('hole6si', $tee->get('hole6si'));
//		$round->set('hole7si', $tee->get('hole7si'));
//		$round->set('hole8si', $tee->get('hole8si'));
//		$round->set('hole9si', $tee->get('hole9si'));
//		$round->set('hole10si', $tee->get('hole10si'));
//		$round->set('hole11si', $tee->get('hole11si'));
//		$round->set('hole12si', $tee->get('hole12si'));
//		$round->set('hole13si', $tee->get('hole13si'));
//		$round->set('hole14si', $tee->get('hole14si'));
//		$round->set('hole15si', $tee->get('hole15si'));
//		$round->set('hole16si', $tee->get('hole16si'));
//		$round->set('hole17si', $tee->get('hole17si'));
//		$round->set('hole18si', $tee->get('hole18si'));		
//	} catch (Exception $e) {
//		echo "Error: " . $e->getMessage() . "\n";
//	} 
	$round->calculate();
	$round->update();
}

echo "</pre>";

?>