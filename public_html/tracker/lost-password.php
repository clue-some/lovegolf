<?php

require_once('../../classes/ogt.php');

$ogt = new ogt();

$ogt->assign('pagetitle', 'Retrieve your lost password - Love Golf');
$ogt->assign('metakeywords', '');
$ogt->assign('metadescription', 'Retrieve your lost password - Love Golf');
	
if ($_POST['dolostpassword']) {
	
	try {
	
		if (!isset($_POST['lostpasswordemailaddress']) || strlen($_POST['lostpasswordemailaddress']) < 2 || $_POST['lostpasswordemailaddress'] == 'Email address') {
			throw new Exception('Please enter your email address');
		}

		// Check for duplicate users
		$user = new user();
		$users = $user->listByEmail($_POST['lostpasswordemailaddress']);
				
		if (!$users) {
			throw new Exception('No user account was found with the email address you entered');
		}
		
		foreach ($users as $v) {
			// Setup user
			$user = new user();
			$user->findById($v['userid']);
			$key = $user->generatePassword(16);
			$user->setKey($key);
			$user->update();
			// Password reset email email
			$emailmessage = new ogt();
			$emailmessage->assign('user', $user->getDetails());
			$email = new ogtemail('Love Golf - Reset your password', $emailmessage->fetch('emails/lost-password.tpl'), 'noreply@lovegolf.co.uk', $user->get('email'), true);
			$email->send();
		}

		$ogt->assign('success', true);
		
	} catch (Exception $e) {
		
		$ogt->assign('post', $_POST);
		$ogt->assign('lostpassworderror', $e->getMessage());
		
	}
	
}

$ogt->display('lost-password.tpl');

?>