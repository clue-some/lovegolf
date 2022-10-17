<?php

$currentdir = getcwd();
chdir('tracker/');
$currentdir = getcwd();
require_once('../../classes/ogt.php');

$ogt = new ogt();   // extends SmartyBC

// PJIS for brevity
$ogt->error_reporting = E_ALL & ~E_NOTICE;

$ogt->assign('pagetitle', 'Love Golf - Golf tracking & analysis, golf game improvement, online golf club directory');
$ogt->assign('metakeywords', 'golf, tracking, golf game improvement, scorecard analysis, golf analysis, club directory, online, scoring, statistics');
$ogt->assign('metadescription', 'Love Golf - Golf tracking & analysis, golf game improvement & golf club directory');

$ogt->assign('current', 'welcome');

if ($ogt->getCurrentuser()->loggedin) {
	
	$ogt->display('index-logged-in.tpl');
	
} else {
	
	$ogt->display('index.tpl');
	
}

?>