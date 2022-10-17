<?php

require_once('../../classes/ogt.php');

$ogt = new ogt();

$ogt->requireLogin();
	
$ogt->addJavascript('tracking/chart');

$ogt->assign('current', 'tracking');

$useraverage = $ogt->getCurrentUser()->getAverageByCourseid();
$ogt->assign('useraverage', $useraverage);

$ogt->assign('useraverageall', $ogt->getCurrentUser()->getAverageByCourseid(false, false));

$ogt->assign('products', get_products_by_category(false, array('wedges', 'putters')));

$ogt->assign('pagetitle', 'Up & Downs - Shot Analysis - Tracking Centre - Love Golf');

$ogt->display('tracking-shot-analysis-up-down.tpl');

?>