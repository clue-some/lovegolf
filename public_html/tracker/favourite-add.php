<?php

require_once('../../classes/ogt.php');

$ogt = new ogt();

$ogt->requireLogin();

try {

	$favourite = new favourite();
	$favourite->set_courseid($_GET['id']);
	$favourite->set_userid($ogt->getCurrentuser()->getUserid());
	$favourite->insert();
	$ogt->assign('message', 'Course added to favourites.');
	header('Location: /my/profile/');

} catch (Exception $e) {

	$ogt->showError('Error', 'Unable to add course to favourites. ' . $e->getMessage());
}

?>