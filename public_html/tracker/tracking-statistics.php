<?php

require_once('../../classes/ogt.php');

$ogt = new ogt();

$ogt->requireLogin();
	
$ogt->addJavascript('tracking/statistics');
$ogt->addJavascript('tracking/chart');

$ogt->assign('current', 'tracking');

if(!isset($_SESSION['resultsperpage'])) { $_SESSION['resultsperpage'] = 10; }
$_SESSION['resultsperpage'] = (isset($_POST['resultsperpage']) ? $_POST['resultsperpage'] : $_SESSION['resultsperpage']);
$ogt->assign('resultsperpage', $_SESSION['resultsperpage']);

$page = (isset($_GET['page']) ? $_GET['page'] : 1);
$length = $_SESSION['resultsperpage'];
$offset = ($page -1) * $length;

$usercourses = $ogt->getCurrentUser()->listCoursesPaginated($offset, $length);
foreach ($usercourses as $k => $v) {
	try {
	$rounds = $ogt->getCurrentUser()->listRoundsByCourseid($v['courseid']);
	if ($roundsplayed = count($rounds)) {
		$round = new round();
		$round->find_by_id($rounds[0]['roundid']);
		$usercourses[$k]['lastround'] = $round->get_details();
		$usercourses[$k]['roundsplayed'] = $roundsplayed;
	}
	$usercourses[$k]['useraverage'] = $ogt->getCurrentUser()->getAverageByCourseid($v['courseid'], false);
	$usercourses[$k]['useraverageadvanced'] = $ogt->getCurrentUser()->getAverageByCourseid($v['courseid']);
	$round = new round();
	$usercourses[$k]['courseaverage'] = $round->getAverageByCourseid($v['courseid']);
	} catch (Exception $e) {}
}

$ogt->assign('usercourses', $usercourses);
$ogt->assign('resultsdisplayed', count($usercourses));

$ogt->assign('pages', $ogt->getCurrentUser()->db->getPages($page));
$ogt->assign('results', $ogt->getCurrentUser()->db->numrows);

$ogt->assign('pagetitle', 'Course statistics - Tracking Centre - Love Golf');

$ogt->display('tracking-statistics.tpl');

?>