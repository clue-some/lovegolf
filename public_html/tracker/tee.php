<?php

require_once('../../classes/ogt.php');

$ogt = new ogt();

// Admin Editing Featuers

if ($ogt->getCurrentUser()->get('admin')) {
	if(isset($_POST['adminedit'])) {
		if(isset($_POST['adminmode']) && $_POST['adminmode'] == 'teeedit' && isset($_POST['adminid'])) {
			$tee = new tee();
			$tee->find_by_id($_POST['adminid']);
			$tee->set_colour($_POST['colour']);
			$tee->set_courserating($_POST['courserating']);
			$tee->set_slope($_POST['slope']);
			$tee->set_sss($_POST['sss']);

			$tee->set_hole1yards($_POST['hole1yards']);
			$tee->set_hole1si($_POST['hole1si']);
			$tee->set_hole1par($_POST['hole1par']);
			
			$tee->set_hole2yards($_POST['hole2yards']);
			$tee->set_hole2si($_POST['hole2si']);
			$tee->set_hole2par($_POST['hole2par']);
			
			$tee->set_hole3yards($_POST['hole3yards']);
			$tee->set_hole3si($_POST['hole3si']);
			$tee->set_hole3par($_POST['hole3par']);
			
			$tee->set_hole4yards($_POST['hole4yards']);
			$tee->set_hole4si($_POST['hole4si']);
			$tee->set_hole4par($_POST['hole4par']);
			
			$tee->set_hole5yards($_POST['hole5yards']);
			$tee->set_hole5si($_POST['hole5si']);
			$tee->set_hole5par($_POST['hole5par']);
			
			$tee->set_hole6yards($_POST['hole6yards']);
			$tee->set_hole6si($_POST['hole6si']);
			$tee->set_hole6par($_POST['hole6par']);
			
			$tee->set_hole7yards($_POST['hole7yards']);
			$tee->set_hole7si($_POST['hole7si']);
			$tee->set_hole7par($_POST['hole7par']);
			
			$tee->set_hole8yards($_POST['hole8yards']);
			$tee->set_hole8si($_POST['hole8si']);
			$tee->set_hole8par($_POST['hole8par']);
			
			$tee->set_hole9yards($_POST['hole9yards']);
			$tee->set_hole9si($_POST['hole9si']);
			$tee->set_hole9par($_POST['hole9par']);
			
			$tee->set_hole10yards($_POST['hole10yards']);
			$tee->set_hole10si($_POST['hole10si']);
			$tee->set_hole10par($_POST['hole10par']);
			
			$tee->set_hole11yards($_POST['hole11yards']);
			$tee->set_hole11si($_POST['hole11si']);
			$tee->set_hole11par($_POST['hole11par']);
			
			$tee->set_hole12yards($_POST['hole12yards']);
			$tee->set_hole12si($_POST['hole12si']);
			$tee->set_hole12par($_POST['hole12par']);
			
			$tee->set_hole13yards($_POST['hole13yards']);
			$tee->set_hole13si($_POST['hole13si']);
			$tee->set_hole13par($_POST['hole13par']);
			
			$tee->set_hole14yards($_POST['hole14yards']);
			$tee->set_hole14si($_POST['hole14si']);
			$tee->set_hole14par($_POST['hole14par']);
			
			$tee->set_hole15yards($_POST['hole15yards']);
			$tee->set_hole15si($_POST['hole15si']);
			$tee->set_hole15par($_POST['hole15par']);
			
			$tee->set_hole16yards($_POST['hole16yards']);
			$tee->set_hole16si($_POST['hole16si']);
			$tee->set_hole16par($_POST['hole16par']);
			
			$tee->set_hole17yards($_POST['hole17yards']);
			$tee->set_hole17si($_POST['hole17si']);
			$tee->set_hole17par($_POST['hole17par']);
			
			$tee->set_hole18yards($_POST['hole18yards']);
			$tee->set_hole18si($_POST['hole18si']);
			$tee->set_hole18par($_POST['hole18par']);
			
			$tee->calculate();
			
			$tee->update();
			$course = new course();
			$course->find_by_id($tee->get_courseid());
			$club = new club();
			$club->find_by_id($course->get_clubid());
			header('Location: /club/' . $club->get_urlname() . '/course/' . $course->get_urlname() . '/tee/' . $tee->get_teeid() . '/');
			exit();	
		}
		if(isset($_POST['adminmode']) && $_POST['adminmode'] == 'teemove' && isset($_POST['adminid'])) {
			if (!is_numeric($_POST['courseid']) || $_POST['courseid'] < 1) {
				die('You must select a course.');
			}
			$tee = new tee();
			$tee->find_by_id($_POST['adminid']);
			$tee->set_courseid($_POST['courseid']);
			$tee->update();
			$course = new course();
			$course->find_by_id($tee->get_courseid());
			$club = new club();
			$club->find_by_id($course->get_clubid());
			header('Location: /club/' . $club->get_urlname() . '/course/' . $course->get_urlname() . '/tee/' . $tee->get_teeid() . '/');
			exit();	
		}
		if(isset($_POST['adminmode']) && $_POST['adminmode'] == 'teedelete' && isset($_POST['adminid'])) {
			$tee = new tee();
			$tee->find_by_id($_POST['adminid']);
			$tee->delete();
			$course = new course();
			$course->find_by_id($tee->get_courseid());
			$club = new club();
			$club->find_by_id($course->get_clubid());
			header('Location: /club/' . $club->get_urlname() . '/course/' . $course->get_urlname() . '/' . $course->get_courseid() . '/');
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

$tee = new tee();
$club = new club();
$course = new course();
$country = new country();
$region = new region();


try {
	if (isset($_GET['teeid'])) {
		$tee->find_by_id($_GET['teeid']);	
	}
	$course->find_by_id($tee->get_courseid());	
	$club->find_by_id($course->get_clubid());	
	$courseclass = new course();
	$ogt->assign('courses', $courseclass->list_by_clubid($club->get_clubid()));
	$region->find_by_id($club->get_regionid());
	$country->find_by_id($region->get_countryid());
	$ogt->assign('pagetitle', $club->get_name() . ' - ' . $course->get_name() . ' - ' . $tee->get_colour() . ' Tee');
	$ogt->assign('club', $club->get_details());
	$ogt->assign('course', $course->get_details());
	$ogt->assign('country', $country->get_details());
	$ogt->assign('region', $region->get_details());
	$ogt->assign('tee', $tee->get_details());
	
} catch (Exception $e) {
	
	$ogt->showError('Error', 'The tee was not found or contains invalid or incomplete data.');
	
}

if (!isset($_GET['print'])) {

	$ogt->display('tee.tpl');

} else {
	
	$ogt->display('tee-print.tpl');
	
}

?>