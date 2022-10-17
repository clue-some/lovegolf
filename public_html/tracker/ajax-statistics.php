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
	case 'get-statistics':
		$course = new course();
		$course->find_by_id($_REQUEST['courseid']);
		$coursedetails = $course->get_details();
		$ogt->assign('course', $coursedetails);
		$rounds = $ogt->getCurrentUser()->listRoundsByCourseid($course->get_courseid());
		if ($roundsplayed = count($rounds)) {
			$round = new round();
			$round->find_by_id($rounds[0]['roundid']);
			$ogt->assign('lastround', $round->get_details());
			$ogt->assign('roundsplayed', $roundsplayed);
		}
		$useraverage = $ogt->getCurrentUser()->getAverageByCourseid($course->get_courseid(), false);
		$ogt->assign('useraverage', $useraverage);		
		$round = new round();
		$courseaverage = $round->getAverageByCourseid($course->get_courseid());
		$ogt->assign('courseaverage', $courseaverage);
		$template = 'modules/includes/tracking-statistics.tpl';
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