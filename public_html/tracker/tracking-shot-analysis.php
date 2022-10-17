<?php

require_once('../../classes/ogt.php');

$ogt = new ogt();

$ogt->requireLogin();
	
$ogt->addJavascript('tracking/chart');

$ogt->assign('current', 'tracking');

$useraverage = $ogt->getCurrentUser()->getAverageByCourseid(false, false);
$ogt->assign('useraverage', $useraverage);

$useraverageadvanced = $ogt->getCurrentUser()->getAverageByCourseid(false);
$ogt->assign('useraverageadvanced', $useraverageadvanced);

$userbest = $ogt->getCurrentUser()->getBestRoundByCourseid();
$ogt->assign('userbest', $userbest);

$userworst = $ogt->getCurrentUser()->getWorstRoundByCourseid();
$ogt->assign('userworst', $userworst);

$ogt->assign('pagetitle', 'Shot Analysis - Tracking Centre - Love Golf');

$ogt->display('tracking-shot-analysis.tpl');

?>