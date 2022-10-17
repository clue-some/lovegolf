<?php

require_once('../../classes/ogt.php');

$ogt = new ogt();

$ogt->requireLogin();
	
$ogt->addJavascript('tracking/chart');

$ogt->assign('current', 'tracking');

$useraverage = $ogt->getCurrentUser()->getAverageByCourseid();
$ogt->assign('useraverage', $useraverage);

$ogt->assign('useraverageall', $ogt->getCurrentUser()->getAverageByCourseid(false, false));

$ogt->assign('products', get_products_by_category(44));

$ogt->assign('pagetitle', 'Tee shots (FIR) - Shot Analysis - Tracking Centre - Love Golf');

$ogt->display('tracking-shot-analysis-fir.tpl');

?>