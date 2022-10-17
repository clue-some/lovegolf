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
	case 'get-holes':
		$tee = new tee();
		$tee->find_by_id($_REQUEST['teeid']);
		$course = new course();
		$course->find_by_id($tee->get_courseid());
		$ogt->assign('tee', $tee->get_details());
		$ogt->assign('course', $course->get_details());
		$type = ($_REQUEST['stats'] ? 'stats' : 'simple');
		$template = 'modules/round/includes/holes/' . $type . '/' . $_REQUEST['holes'] . '.tpl';
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