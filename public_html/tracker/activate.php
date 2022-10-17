<?php

require_once('../../classes/ogt.php');

$ogt = new ogt();

$ogt->assign('pagetitle', 'Please activate your account - Love Golf');
$ogt->assign('metakeywords', '');
$ogt->assign('metadescription', 'Please activate your account - Love Golf');

// Check for duplicate users

$user = new user();

$ogt->assign('firstyear', date('Y')-110);
$ogt->assign('thisyear', date('Y')-5);

if (!isset($_GET['preview'])) {

	try {
		$user->findById($_GET['userid']);
	} catch (Exception $e) { }
	
	try {
	
		if (!$user->getUserid()) {
			throw new Exception('Invalid activation code.');
		}
		
		if ($user->getKey() != $_GET['key']) {
			throw new Exception('Invalid activation key.');
		}
	
	} catch (Exception $e) {
	
		$ogt->assign('failure', true);
		$ogt->assign('error', $e->getMessage()); 
		
		$ogt->display('activate.tpl');
	
		exit();
		
	}

}

if ($_POST['doactivate']) {

	if (isset($_POST['dobday'])) { $user->setDOB($_POST['dobyear'] . '-' . str_pad($_POST['dobmonth'], 2, "0", STR_PAD_LEFT) . '-' . str_pad($_POST['dobday'], 2, "0", STR_PAD_LEFT)); }
	if (isset($_POST['sex'])) { $user->setSex($_POST['sex']); }

	if ($_POST['handicap'] == "") {
		$user->setHandicappending(1);
		$maxhandicap = 100;
	    $iDiffYear  = date('Y') - date('Y', strtotime($user->getDOB()));
	    $iDiffMonth = date('n') - date('n', strtotime($user->getDOB()));
	    $iDiffDay   = date('j') - date('j', strtotime($user->getDOB()));
	    if ($iDiffMonth < 0 || ($iDiffMonth == 0 && $iDiffDay < 0))
	    {
	        $iDiffYear--;
	    }
	    $age = $iDiffYear; 
		if ($user->getSex() == "Male" && $age > 18) {
			$maxhandicap = 28;
		} 
		if ($user->getSex() == "Female" && $age > 18) {
			$maxhandicap = 36;
		} 
		if ($age < 18) {
			$maxhandicap = 54;
		} 
		$user->setHandicap($maxhandicap);
	} else {
		$user->setHandicap($_POST['handicap']);
	}
	
	$user->setEnabled(1);
	$user->setKey($user->generatePassword(16));
	$user->update();
			
	// Send activation email
	$emailmessage = new ogt();
	$emailmessage->assign('user', $user->getDetails());
	$emailmessage->assign('password', $password);
	$email = new ogtemail('Welcome to Love Golf', $emailmessage->fetch('emails/welcome.tpl'), 'noreply@lovegolf.co.uk', $user->getEmail(), true);
	$email->send();
//	$email = new ogtemail('Love Golf - New User', $emailmessage->fetch('emails/welcome.tpl'), $user->getEmail(), 'info@lovegolf.co.uk', true);
//	$email->send();

	$ogt->assign('success', true);
	
	$ogt->assign('post', array('loginemail' => $user->getEmail()));
	
}

$ogt->display('activate.tpl');

?>