<?php

require_once('../../classes/ogt.php');


if (isset($_POST['doprofileedit'])) {

	$ogt = new ogt();

	$ogt->assign('firstyear', date('Y')-110);
	$ogt->assign('thisyear', date('Y')-5);
	
	$ogt->requireLogin();
	
	try {
		$user = $ogt->getCurrentUser();
		$user->set('firstname', $_POST['firstname'], 'First name', 2);
		$user->set('surname', $_POST['surname'], 'Surname', 2);
		$user->set('email', $_POST['email'], 'Email address', false, false, REGEX_EMAIL);
		$user->set('phonenumber', $_POST['phonenumber']);
		$user->set('address1', $_POST['address1']);
		$user->set('town', $_POST['town']);
		$user->set('county', $_POST['county']);
		$user->set('postcode', $_POST['postcode']);
		$user->set('country', $_POST['country']);
		$user->set('handicap', $_POST['handicap'], 'Handicap', false, true);
		$user->setDOB($_POST['dobyear'] . '-' . str_pad($_POST['dobmonth'], 2, "0", STR_PAD_LEFT) . '-' . str_pad($_POST['dobday'], 2, "0", STR_PAD_LEFT));
		$user->set('age', $_POST['age']);
		$user->set('sex', $_POST['sex']);
		$user->update();
		$success = true;
	} catch (Exception $e) {
		$profilemessage = $e->getMessage();		
	}
	
}

if (isset($_POST['dopasswordedit'])) {

	$ogt = new ogt();

	$ogt->requireLogin();
	
	try {
		$user = $ogt->getCurrentUser();
		$user->changePassword($_POST['oldpassword'], $_POST['newpassword'], $_POST['newpassword2']);
		$success = true;
	} catch (Exception $e) {
		$passwordmessage = $e->getMessage();		
	}
	
}

if (isset($_POST['dophotoupload'])) {

	$ogt = new ogt();

	$ogt->requireLogin();
	
	
	try {

		$user = $ogt->getCurrentUser();

		// Upload image
		if (!isset($_FILES['image'])) throw new Exception('Please choose a file.');
		if ($_FILES['image']['error'] > 0) throw new Exception('File upload error. Code ' . $_FILES['image']['error'] . '.');
		$filesystem_temp_path = $_FILES['image']['tmp_name'];
		$filename = $user->get('userid') . '_' . sha1(time()) . '.jpg';
		$filesystem_path = '/home/wwwlove/public_html/tracker/profileimage/' . $filename;
		$filesystem_path_thumb = '/home/wwwlove/public_html/tracker/profileimage/thumb_' . $filename;
		if (!@move_uploaded_file($filesystem_temp_path, $filesystem_path)) {
			$image->delete();
			throw new Exception('Unable write to file ' . $filesystem_path . '.');
		}
		$image = new image();
		$image->set_source($filesystem_path);
		$sizes = $image->get_sizes();
		$image->set_destination($filesystem_path);
		$image->resize(false, 240);
		$image->crop(180, false);
		$image->set_destination($filesystem_path_thumb);
		$image->resize(100, 133);
		$user->set('photo', $filename);
		$user->update();
		$success = true;

	} catch (Exception $e) {
		
		if ($filesystem_path) {
		@unlink($filesystem_path);
		}
		$photomessage = $e->getMessage();		
		
	}	
	
}

$ogt = new ogt();

$ogt->assign('pagetitle', 'Edit my profile - Love Golf');

$ogt->assign('firstyear', date('Y')-110);
$ogt->assign('thisyear', date('Y')-5);

$ogt->assign('success', $success);
$ogt->assign('profilemessage', $profilemessage);
$ogt->assign('passwordmessage', $passwordmessage);
$ogt->assign('photomessage', $photomessage);

$ogt->assign('current', 'my');

$ogt->requireLogin();

$ogt->display('my-profile-edit.tpl');

?>