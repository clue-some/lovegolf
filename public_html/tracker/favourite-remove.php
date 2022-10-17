<?php

require_once('../../classes/ogt.php');

$ogt = new ogt();

$ogt->requireLogin();

try {

	$favourite = new favourite();
	$favourite->find_by_id($_GET['id']);
	$favourite->delete();
	header('Location: /my/profile/');

} catch (Exception $e) {

	$ogt->showError('Error', 'Unable to remove course from favourites. ' . $e->getMessage());
}

?>