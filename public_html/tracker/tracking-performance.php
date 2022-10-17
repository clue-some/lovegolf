<?php

require_once('../../classes/ogt.php');

$ogt = new ogt();

$ogt->requireLogin();

$ogt->addJavascript('tracking/chart');

$ogt->assign('current', 'tracking');
	
$ogt->display('tracking-performance.tpl');

?>