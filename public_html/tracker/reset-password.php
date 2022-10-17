<?php

require_once('../../classes/ogt.php');

$ogt = new ogt();

// Check for duplicate users

$user = new user();

try {
	$user->findById($_GET['userid']);
} catch (Exception $e) { }

try {

	if (!$user->getUserid()) {
		throw new Exception('Invalid account code.');
	}
	
	if ($user->getKey() != $_GET['key']) {
		throw new Exception('Invalid password key.');
	}

	$password = $user->generatePassword();
	$user->setPassword($password, $password);
	$user->setKey($user->generatePassword(30));
	$user->update();
			
	// Send activation email
	$emailmessage = new ogt();
	$emailmessage->assign('user', $user->getDetails());
	$emailmessage->assign('password', $password);
	$email = new ogtemail('Love Golf - Your Password', $emailmessage->fetch('emails/password-reset.tpl'), 'noreply@lovegolf.co.uk', $user->getEmail(), true);
	$email->send();

	$ogt->assign('success', true);
	
} catch (Exception $e) {

	$ogt->assign('failure', true);
	$ogt->assign('error', $e->getMessage()); 
	
}

$ogt->assign('pagetitle', 'Reset your password - Love Golf');

$ogt->display('reset-password.tpl');
	

?>