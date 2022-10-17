<?php

require_once('../../classes/ogt.php');

$ogt = new ogt();

$ogt->requireLogin();

$ogt->addJavascript('tracking/chart');

$ogt->assign('pagetitle', 'Tracking Centre - Love Golf');

$ogt->assign('current', 'tracking');

$ogt->display('tracking-centre.tpl');

?>