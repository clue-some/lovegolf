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
	case 'get-scorecard':
		$round = new round();
		$round->find_by_id($_REQUEST['roundid']);
		$rounddetails = $round->get_details();
		
		if ($rounddetails['userid'] != $ogt->getCurrentUser()->getUserid()) {
			die('Access Denied');
		}
		
		try {
			$course = new course();
			$course->find_by_id($round->get_courseid());
			$coursedetails = $course->get_details();
		} catch (Exception $e) {}
		
		// Differences - Move to round() class?
		$rounddetails['hole1diff'] = $rounddetails['hole1score'] - $rounddetails['hole1par'];  
		$rounddetails['hole2diff'] = $rounddetails['hole2score'] - $rounddetails['hole2par']; 
		$rounddetails['hole3diff'] = $rounddetails['hole3score'] - $rounddetails['hole3par'];
		$rounddetails['hole4diff'] = $rounddetails['hole4score'] - $rounddetails['hole4par']; 
		$rounddetails['hole5diff'] = $rounddetails['hole5score'] - $rounddetails['hole5par'];
		$rounddetails['hole6diff'] = $rounddetails['hole6score'] - $rounddetails['hole6par'];
		$rounddetails['hole7diff'] = $rounddetails['hole7score'] - $rounddetails['hole7par'];
		$rounddetails['hole8diff'] = $rounddetails['hole8score'] - $rounddetails['hole8par'];
		$rounddetails['hole9diff'] = $rounddetails['hole9score'] - $rounddetails['hole9par'];
		$rounddetails['hole10diff'] = $rounddetails['hole10score'] - $rounddetails['hole10par'];  
		$rounddetails['hole11diff'] = $rounddetails['hole11score'] - $rounddetails['hole11par'];  
		$rounddetails['hole12diff'] = $rounddetails['hole12score'] - $rounddetails['hole12par']; 
		$rounddetails['hole13diff'] = $rounddetails['hole13score'] - $rounddetails['hole13par'];
		$rounddetails['hole14diff'] = $rounddetails['hole14score'] - $rounddetails['hole14par']; 
		$rounddetails['hole15diff'] = $rounddetails['hole15score'] - $rounddetails['hole15par'];
		$rounddetails['hole16diff'] = $rounddetails['hole16score'] - $rounddetails['hole16par'];
		$rounddetails['hole17diff'] = $rounddetails['hole17score'] - $rounddetails['hole17par'];
		$rounddetails['hole18diff'] = $rounddetails['hole18score'] - $rounddetails['hole18par'];
		$rounddetails['totaldifffront9'] = $rounddetails['totalscorefront9'] - $rounddetails['totalparfront9'];
		$rounddetails['totaldiffback9'] = $rounddetails['totalscoreback9'] - $rounddetails['totalparback9'];
		$rounddetails['totaldiff'] = $rounddetails['totalscore'] - $rounddetails['totalpar'];
		
		// Allowances
		$rounddetails['totalallowancefront9'] = 
		$rounddetails['hole1allowance'] +  
		$rounddetails['hole2allowance'] +  
		$rounddetails['hole3allowance'] +  
		$rounddetails['hole4allowance'] +  
		$rounddetails['hole5allowance'] +  
		$rounddetails['hole6allowance'] +  
		$rounddetails['hole7allowance'] +  
		$rounddetails['hole8allowance'] +  
		$rounddetails['hole9allowance'];

		$rounddetails['totalallowanceback9'] =
		$rounddetails['hole10allowance'] +  
		$rounddetails['hole11allowance'] +  
		$rounddetails['hole12allowance'] +  
		$rounddetails['hole13allowance'] +  
		$rounddetails['hole14allowance'] +  
		$rounddetails['hole15allowance'] +  
		$rounddetails['hole16allowance'] +  
		$rounddetails['hole17allowance'] +  
		$rounddetails['hole18allowance'];
		  
		$rounddetails['totalallowance'] = $rounddetails['totalallowancefront9'] + $rounddetails['totalallowanceback9'];
		
		$ogt->assign('course', $coursedetails);
		$ogt->assign('round', $rounddetails);
		
		if ($round->get('primaryweatherid')) {
			$primaryweather = new weather();
			$primaryweather->find_by_id($round->get('primaryweatherid'));
			$ogt->assign('primaryweather', $primaryweather->get_details());
		}
		if ($round->get('secondaryweatherid')) {
			$secondaryweather = new weather();
			$secondaryweather->find_by_id($round->get('secondaryweatherid'));
			$ogt->assign('secondaryweather', $secondaryweather->get_details());
		}		
		
		$template = 'modules/includes/tracking-view-scorecard.tpl';
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