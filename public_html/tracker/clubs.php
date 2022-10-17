<?php

require_once('../../classes/ogt.php');

$ogt = new ogt();

$ogt->assign('current', 'clubs');

$ogt->assign('pagetitle', 'Golf club directory - Love Golf');
$ogt->assign('metakeywords', 'golf club, golf clubs, golf course, golf courses');
$ogt->assign('metadescription', 'Golf club directory - Love Golf');

$bookable = isset($_GET['bookable']);
$wales = isset($_GET['wales']);
$ogt->assign('bookableonly', $bookable);

$club = new club();

$page = (isset($_GET['page']) ? $_GET['page'] : 1);
$length = 50;
$offset = ($page -1) * $length;

if (isset($_REQUEST['query']) && $_REQUEST['query']) {
	$clubs = $club->search($_REQUEST['query']);
} elseif (isset($_REQUEST['letter']) && $_REQUEST['letter']) {
	if ($_REQUEST['letter'] == '-') {
		$letter = '';
	} else {
		$letter = $_REQUEST['letter'];
	}
	if ($bookable) {
		$clubs = $club->list_all_bookable_paginated($letter, $offset, $length);
	} elseif($wales) {
		$clubs = $club->list_all_wales_paginated($letter, $offset, $length);
	} else {
		$clubs = $club->list_all_paginated($letter, $offset, $length);
	}
} else {
	$ogt->assign('featured', true);
	if ($bookable) {
		$clubs = $club->list_random_bookable(20);
	} else {
		$clubs = $club->list_random(20);
	}
}
//echo '<pre>';
//print_r($club->db->getPages());
//echo '</pre>';

$ogt->assign('letter', $club->db->mysql_real_escape_string($_REQUEST['letter']));
$ogt->assign('pages', $club->db->getPages($page));
$ogt->assign('results', $club->db->numrows);
$ogt->assign('clubs', $clubs);

$ogt->display('clubs.tpl');

?>