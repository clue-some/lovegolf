<?php

require_once('../../classes/ogt.php');

$ogt = new ogt();

// Admin Editing Featuers

if ($ogt->getCurrentUser()->get('admin')) {
	if(isset($_POST['adminedit'])) {
		if(isset($_POST['adminmode']) && $_POST['adminmode'] == 'clubedit' && isset($_POST['adminid'])) {
			$club = new club();
			$club->find_by_id($_POST['adminid']);
			$club->set_name($_POST['name']);
			$club->set_address($_POST['address']);
			$club->set_county($_POST['county']);
			$club->set_postcode($_POST['postcode']);
			$club->set_telephone($_POST['telephone']);
			$club->set_email($_POST['email']);
			$club->set_website($_POST['website']);
			$club->set_bookingurl($_POST['bookingurl']);
			$club->set_verified($_POST['verified']);
			$club->update();
			header('Location: /club/' . $club->get_urlname() . '/');
			exit();	
		}
		if(isset($_POST['adminmode']) && $_POST['adminmode'] == 'clubdelete' && isset($_POST['adminid'])) {
			$club = new club();
			$club->find_by_id($_POST['adminid']);
			$club->delete();
			header('Location: /clubs/');
			exit();	
		}
		if(isset($_POST['adminmode']) && $_POST['adminmode'] == 'clubaddcourse' && isset($_POST['adminid'])) {
			$club = new club();
			$club->find_by_id($_POST['adminid']);
			$course = new course();
			$course->set_clubid($club->get_clubid());
			$course->set_name('New Course');
			$course->insert();
			header('Location: /club/' . $club->get_urlname() . '/');
			exit();	
		}
	}
}


$ogt->assign('current', 'clubs');

$ogt->assign('pagetitle', 'Course Directory');

$course = new course();

$page = (isset($_GET['page']) ? $_GET['page'] : 1);
$length = 50;
$offset = ($page -1) * $length;

if (isset($_REQUEST['query']) && $_REQUEST['query']) {
	$courses = $course->search($_REQUEST['query']);
} elseif (isset($_REQUEST['letter']) && $_REQUEST['letter']) {
	if ($_REQUEST['letter'] == '-') {
		$letter = '';
	} else {
		$letter = $_REQUEST['letter']; 
	}
	$courses = $course->list_all_paginated($letter, $offset, $length);
} elseif (isset($_REQUEST['club']) && $_REQUEST['club']) {
	$club = new club();	
	$club->find_by_urlname($_REQUEST['club']);
	$ogt->assign('club', $club->get_details());
	$ogt->assign('pagetitle', $club->get_name());
	
	$courses = $course->list_by_clubid($club->get_clubid());
} else {
	$ogt->assign('featured', true);
	$courses = $course->list_random(20);
}
//echo '<pre>';
//print_r($course->db->getPages());
//echo '</pre>';

$ogt->assign('letter', mysql_real_escape_string($_REQUEST['letter']));
$ogt->assign('pages', $course->db->getPages($page));
$ogt->assign('results', $course->db->numrows);
$ogt->assign('courses', $courses);

$ogt->display('courses.tpl');

?>