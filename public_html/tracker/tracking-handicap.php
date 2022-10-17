<?php

require_once('../../classes/ogt.php');

$ogt = new ogt();

$ogt->assign('pagetitle', 'Handicap - Tracking Centre - Love Golf');

$ogt->requireLogin();
	
$ogt->addJavascript('tracking/chart');

$ogt->assign('current', 'tracking');

$handicap = $ogt->getCurrentUser()->getHandicapDetails();
$ogt->assign('handicap', $handicap);

$numhandicaptracked = $ogt->getCurrentUser()->getNumHandicapRounds();
$ogt->assign('numhandicaptracked', $numhandicaptracked);

$ogt->display('tracking-handicap.tpl');

?>