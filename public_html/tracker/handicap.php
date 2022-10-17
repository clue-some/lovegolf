<?php

require_once('../../classes/ogt.php');

$ogt = new ogt();

$ogt->assign('current', 'tracking');
	
$ogt->display('handicap.tpl');

?>