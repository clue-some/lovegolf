<?php

require_once('../../classes/ogt.php');

$ogt = new ogt();

$ogt->requireLogin();
	
// Load scorecard
$round = new round();
$round->find_by_id((int)$_GET['page']);

$course = new course();
$course->find_by_id((int)$round->get('courseid'));

$ogt->assign('tees', $course->list_tees());

$tee = new tee();
$tee->find_by_id($round->get('teeid'));
$ogt->assign('tee', $tee->get_details());

// Check ownership
if ($round->get('userid') != $ogt->getCurrentUser()->getUserid()) {
	throw new Exception("Access Denied");
}

$round->delete();

header('Location: /tracking/view-scorecards/');

?>
