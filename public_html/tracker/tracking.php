<?php

require_once('../../classes/ogt.php');

$ogt = new ogt();

$ogt->assign('current', 'tracking');

$ogt->addJavascript('tracking/chart');

$lastrss = new lastrss();
$lastrss->cache_dir = '../rsscache';
$lastrss->cache_time = 300; // Seconds
$ogt->assign('blogfeed', $lastrss->get('http://www.lovegolf.co.uk/blog/feed'));

$useraverage = $ogt->getCurrentUser()->getAverageByCourseid(false, false);
$ogt->assign('useraverage', $useraverage);

$userbest = $ogt->getCurrentUser()->getBestRoundByCourseid();
$ogt->assign('userbest', $userbest);

$userworst = $ogt->getCurrentUser()->getWorstRoundByCourseid();
$ogt->assign('userworst', $userworst);

$handicap = $ogt->getCurrentUser()->getHandicapDetails();

$ogt->assign('handicap', $handicap);

$ogt->assign('pagetitle', 'Track my performance - Love Golf');

$ogt->display('tracking.tpl');

?>