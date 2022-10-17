<?php

require_once('../../classes/ogt.php');

$ogt = new ogt();

// Admin Editing Featuers

if ($ogt->getCurrentUser()->get('admin')) {
	if(isset($_POST['adminedit'])) {
		if(isset($_POST['adminmode']) && $_POST['adminmode'] == 'courseedit' && isset($_POST['adminid'])) {
			$course = new course();
			$course->find_by_id($_POST['adminid']);
			$course->set_name($_POST['name']);
			$course->set_holes($_POST['holes']);
			$course->update();
			$club = new club();
			$club->find_by_id($course->get_clubid());
			header('Location: /club/' . $club->get_urlname() . '/course/' . $course->get_urlname() . '/' . $course->get_courseid() . '/');
			exit();	
		}
		if(isset($_POST['adminmode']) && $_POST['adminmode'] == 'coursemove' && isset($_POST['adminid'])) {
			if (!is_numeric($_POST['clubid']) || $_POST['clubid'] < 1) {
				die('You must select a club.');
			}
			$course = new course();
			$course->find_by_id($_POST['adminid']);
			$course->set_clubid($_POST['clubid']);
			$course->update();
			$club = new club();
			$club->find_by_id($course->get_clubid());
			header('Location: /club/' . $club->get_urlname() . '/course/' . $course->get_urlname() . '/' . $course->get_courseid() . '/');
			exit();	
		}
		if(isset($_POST['adminmode']) && $_POST['adminmode'] == 'coursedelete' && isset($_POST['adminid'])) {
			$course = new course();
			$course->find_by_id($_POST['adminid']);
			$course->delete();
			$club = new club();
			$club->find_by_id($course->get_clubid());
			header('Location: /club/' . $club->get_urlname() . '/');
			exit();	
		}
		if(isset($_POST['adminmode']) && $_POST['adminmode'] == 'courseaddtee' && isset($_POST['adminid'])) {
			$course = new course();
			$course->find_by_id($_POST['adminid']);
			$tee = new tee();
			$tee->set_courseid($course->get_courseid());
			$tee->set_colour('New Tee');
			$tee->insert();
		}
	}
}

$ogt->assign('current', 'clubs');

$course = new course();
$country = new country();
$region = new region();

$clubclass = new club();
$ogt->assign('clubs', $clubclass->list_all());

try {
	if (isset($_GET['urlname'])) {
		$course->find_by_urlname($_GET['urlname']);	
	} 
	if (isset($_GET['courseid'])) {
		$course->find_by_id($_GET['courseid']);	
	}
	$club = new club();
	$club->find_by_id($course->get_clubid());
	$ogt->assign('club', $club->get_details());
	$region->find_by_id($club->get_regionid());
	$country->find_by_id($region->get_countryid());
	$ogt->assign('pagetitle', $club->get_name() . ' - ' . $course->get_name());
	$ogt->assign('course', $course->get_details());
	$ogt->assign('country', $country->get_details());
	$ogt->assign('region', $region->get_details());
	$tees = $course->list_tees();
	$ogt->assign('tees', $tees);
	$unverified = 0;
	if ($tees) {
		foreach ($tees as $v) {
			$unverified += !$v['verified'];
		}
	}
	$ogt->assign('verified', !$unverified);
	
} catch (Exception $e) {
	
	$ogt->showError('Error', 'The course was not found or contains invalid or incomplete data. ' . $e->getMessage());
	
}

$ogt->display('course.tpl');

?>