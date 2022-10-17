<?php

require_once('../../classes/ogt.php');

$ogt = new ogt();

$ogt->requireLogin();
	
$ogt->addJavascript('tracking/scorecard');

$ogt->assign('current', 'tracking');

$ogt->assign('usercourses', $ogt->getCurrentUser()->listCourses());

$_SESSION['selectedcourseid'] = (isset($_POST['courseid']) ? $_POST['courseid'] : $_SESSION['selectedcourseid']);
$ogt->assign('selectedcourseid', $_SESSION['selectedcourseid']);

if(!isset($_SESSION['resultsperpage'])) { $_SESSION['resultsperpage'] = 10; }
$_SESSION['resultsperpage'] = (isset($_POST['resultsperpage']) ? $_POST['resultsperpage'] : $_SESSION['resultsperpage']);
$ogt->assign('resultsperpage', $_SESSION['resultsperpage']);

$page = (isset($_GET['page']) ? $_GET['page'] : 1);
$length = $_SESSION['resultsperpage'];
$offset = ($page -1) * $length;

$roundresults = $ogt->getCurrentUser()->listRoundsByCourseidPaginated($_SESSION['selectedcourseid'], $offset, $length);
$ogt->assign('roundresults', $roundresults);
$ogt->assign('resultsdisplayed', count($roundresults));

$ogt->assign('pages', $ogt->getCurrentUser()->db->getPages($page));
$ogt->assign('results', $ogt->getCurrentUser()->db->numrows);

$ogt->assign('pagetitle', 'View scorecards - Tracking Centre - Love Golf');

$ogt->display('tracking-view-scorecards.tpl');

?>