<?php

require_once('../../classes/ogt.php');

$ogt = new ogt();

$ogt->requireLogin();
	
$ogt->addJavascript('tracking/chart');

$ogt->assign('current', 'tracking');

$useraverage = $ogt->getCurrentUser()->getAverageByCourseid();
$ogt->assign('useraverage', $useraverage);

$userbest = $ogt->getCurrentUser()->getBestRoundByCourseid();
$ogt->assign('userbest', $userbest);

$userworst = $ogt->getCurrentUser()->getWorstRoundByCourseid();
$ogt->assign('userworst', $userworst);

$ogt->assign('useraverageall', $ogt->getCurrentUser()->getAverageByCourseid(false, false));

$ogt->assign('products', get_products_by_category(46));

$ogt->assign('pagetitle', 'Putts - Shot Analysis - Tracking Centre - Love Golf');

$ogt->display('tracking-shot-analysis-putts.tpl');

?>