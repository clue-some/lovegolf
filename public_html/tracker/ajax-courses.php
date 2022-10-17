<?php

require_once('../../classes/ogt.php');

$ogt = new ogt();

header('Content-Type: text/xml');

// Setup XMLWriter class
$xml = new XMLWriter();
$xml->openMemory();
$xml->startDocument('1.0', 'UTF-8');
$xml->startElement('response');	// <response>

$method = (isset($_REQUEST['method']) ? $_REQUEST['method'] : false);

$status = 0;
$message = false;

switch($method) {
	case 'get-courses':
		$course = new course();
		$ogt->assign('courses', $course->search($_REQUEST['query']));
		$template = 'modules/round/includes/courses.tpl';
		$status = 1;
		break;
	case 'course-search':
		$club = new club();
		if (isset($_POST['bookable'])) {
			$ogt->assign('clubs', $club->search_bookable($_REQUEST['query']));
			$ogt->assign('bookableonly', true);
		} else {
			$ogt->assign('clubs', $club->search($_REQUEST['query']));
		}
		$ogt->assign('results', $club->db->numrows);
		$template = 'modules/includes/clubs.tpl';
		$status = 1;
		break;
	default:
		$status = 0;
		$message = 'Section not found (' . $method . ')';
		break;	
}

$xml->writeElement('status', $status);
$xml->writeElement('message', $message);
if ($status) $xml->writeElement('body', $ogt->fetch($template));

$xml->endElement(); // </response>
echo $xml->outputMemory();

?>