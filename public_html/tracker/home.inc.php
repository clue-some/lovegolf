<?php

require_once('../../classes/ogt.php');

$ogt = new ogt();

$ogt->assign('pagetitle', 'Love Golf - Golf tracking & analysis, golf game improvement, online shop & golf club directory');
$ogt->assign('metakeywords', 'golf, tracking, golf game improvement, scorecard analysis, golf analysis, club directory, shop, buy, online, scoring, statistics');
$ogt->assign('metadescription', 'Love Golf - Golf tracking & analysis, golf game improvement, online shop & golf club directory');

$ogt->assign('current', 'welcome');

if ($ogt->getCurrentuser()->loggedin) {
	
	$ogt->display('index-logged-in.tpl');
	
} else {
	
	$ogt->display('index.tpl');
	
}

?>