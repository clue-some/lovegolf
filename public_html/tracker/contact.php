<?php

require_once('../../classes/ogt.php');

$ogt = new ogt();
	
$ogt->addJavascript('recaptcha');

$ogt->assign('mode', $_REQUEST['mode']);

require_once('../../libs/recaptcha/recaptchalib.php');
$publickey = "6LfUWQwAAAAAABFbgkmZzWWZBgqoisA_lpL71nhn"; // you got this from the signup page
$ogt->assign('recaptcha', recaptcha_get_html($publickey));

if ($_POST['docontact']) {
	
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
		if (!isset($_POST['department']) || strlen($_POST['department']) < 1) {
			throw new Exception('Please choose a department');
		}
		if (!isset($_POST['comments']) || strlen($_POST['comments']) < 2 || $_POST['comments'] == "Tell us what you\'re thinking...") {
			throw new Exception('Please enter some comments');
		}
		// Check Captcha
		$privatekey = "6LfUWQwAAAAAAFyBZW2thSmyHNLIRq80VkJh-bdW ";
		$response = recaptcha_check_answer($privatekey,$_SERVER["REMOTE_ADDR"],$_POST["recaptcha_challenge_field"],$_POST["recaptcha_response_field"]);
		if (!$response->is_valid) {
		  throw new Exception("The verification code wasn't entered correctly. Please try again");
		}		
		
		// Send email
		$emailmessage = new ogt();
		$emailmessage->assign('post', $_POST);
		$emailmessage->assign('browser', $_SERVER['HTTP_USER_AGENT']);
		$emailmessage->assign('ip', $_SERVER['REMOTE_ADDR']);
		// Email admin
		$email = new ogtemail('Love Golf Contact Form', $emailmessage->fetch('emails/contact.tpl'), $_POST['emailaddress'], 'info@lovegolf.co.uk', true);
		$email->send();
		// Send copy to user
		$email = new ogtemail('Thank you for contacting Love Golf', $emailmessage->fetch('emails/contact-confirm.tpl'), 'info@lovegolf.co.uk', $_POST['emailaddress'], true);
		$email->send();
		
		
		
		$ogt->assign('success', true);
		
	} catch (Exception $e) {
		
		$ogt->assign('post', $_POST);
		$ogt->assign('contacterror', $e->getMessage());
		
	}
	
}

$ogt->display('contact.tpl');

?>