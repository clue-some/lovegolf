<?php

require_once('../../classes/ogt.php');

$ogt = new ogt();

$ogt->addJavascript('recaptcha');

require_once('../../libs/recaptcha/recaptchalib.php');

$publickey = "6LfUWQwAAAAAABFbgkmZzWWZBgqoisA_lpL71nhn"; // you got this from the signup page
$ogt->assign('recaptcha', recaptcha_get_html($publickey));

if ($_POST['doregister']) {
	
	try {
	
		// Validate input
		if (!isset($_POST['firstname']) || strlen($_POST['firstname']) < 2 || $_POST['firstname'] == 'First name') {
			throw new Exception('Please enter your first name');
		}
		if (!isset($_POST['lastname']) || strlen($_POST['lastname']) < 2 || $_POST['lastname'] == 'Last name') {
			throw new Exception('Please enter your last name');
		}
		if (!isset($_POST['emailaddress']) || strlen($_POST['emailaddress']) < 2 || $_POST['emailaddress'] == 'Email address') {
			throw new Exception('Please enter your email address');
		}
		if (!isset($_POST['confirmemailaddress']) || strlen($_POST['confirmemailaddress']) < 2 || $_POST['confirmemailaddress'] == 'Confirm email address') {
			throw new Exception('Please confirm your email address');
		}
		if ($_POST['emailaddress'] != $_POST['confirmemailaddress']) {
			throw new Exception('The email addresses you\'ve entered do not match.');
		}
		if (!isset($_POST['password']) || strlen($_POST['password']) < 6 || $_POST['password'] == 'Choose a password') {
			throw new Exception('Please choose a password. Passwords must be at least six characters.');
		}
		// Check for duplicate users
		$user = new user();
		try {
			$user->findByEmail($_POST['emailaddress']);
		} catch (Exception $e) {}
		
		if ($user->getUserid()) {
			throw new Exception('The email address ' . mysql_escape_string($_POST['emailaddress']) . " is already in use");
		}

		// Check Captcha
//		$privatekey = "6LfUWQwAAAAAAFyBZW2thSmyHNLIRq80VkJh-bdW ";
//		$response = recaptcha_check_answer($privatekey,$_SERVER["REMOTE_ADDR"],$_POST["recaptcha_challenge_field"],$_POST["recaptcha_response_field"]);
//		if (!$response->is_valid) {
//		  throw new Exception("The verification code wasn't entered correctly. Please try again");
//		}		
		
		// Create User
		$user = new user();
		$user->setFirstname($_POST['firstname']);
		$user->setSurname($_POST['lastname']);
		$user->setUsername($_POST['firstname'] . $_POST['lastname'] . rand(100, 999));
		$user->setEmail($_POST['emailaddress']);
		$key = $user->generatePassword(16);
		$user->setKey($key);
		$user->setEnabled(0);
		$password = $user->generatePassword();
		$user->setPassword($_POST['password'], $_POST['password']);
		$user->insert();
/* PJIS don't need this
		try {
			// Add to campaign monitor 'Registered users' list
			$campaign_id = false;
			$list_id = '7da73c0c18becebb61bf725362123243';
			$cm = new CampaignMonitor(CM_APIKEY, CM_CLIENTID, $campaign_id, $list_id);
			$cm->subscriberAdd($_POST['emailaddress'], $_POST['firstname'] . ' ' . $_POST['lastname']);
		} catch (Exception $e) {
			// echo $e->getMessage();
		}
		
		if (isset($_POST['newsletteroptin'])) {
			try {
				// Add to campaign monitor 'Registered users (newsletter)' list
				$campaign_id = false;
				$list_id = '3ec7ed239e2117a20862b531b3ffd947';
				$cm = new CampaignMonitor(CM_APIKEY, CM_CLIENTID, $campaign_id, $list_id);
				$cm->subscriberAdd($_POST['emailaddress'], $_POST['firstname'] . ' ' . $_POST['lastname']);
			} catch (Exception $e) {
				// echo $e->getMessage();
			}
		}
*/		
		// Send activation email
		$emailmessage = new ogt();
		$emailmessage->assign('user', $user->getDetails());
		$email = new ogtemail('Love Golf Registration', $emailmessage->fetch('emails/activation.tpl'), 'noreply@lovegolf.co.uk', $_POST['emailaddress'], true);
		$email->send();
		$email = new ogtemail('Love Golf - New User', $emailmessage->fetch('emails/new-user.tpl'), $_POST['emailaddress'], 'info@lovegolf.co.uk', true);
		$email->send();
		
		
		$ogt->assign('success', true);
		
	} catch (Exception $e) {
		
		$ogt->assign('post', $_POST);
		$ogt->assign('registrationerror', $e->getMessage());
		
	}
	
}

$ogt->assign('pagetitle', 'Register for your free Love Golf account');

$ogt->display('register.tpl');

?>