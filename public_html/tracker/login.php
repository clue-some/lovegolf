<?php

require_once('../../classes/ogt.php');

$ogt = new ogt();

$ogt->assign('pagetitle', 'Log-in to your account - Love Golf');
$ogt->assign('metakeywords', '');
$ogt->assign('metadescription', 'Log-in to your account - Love Golf');

if (isset($_GET['forward']) && $_GET['forward'] == "/shop/checkout.php") {
	$ogt->assign('skiploginoption', true);	
}

if ($ogt->getCurrentUser()->getUserid()) {
	if (isset($_GET['forward'])) {
		header('Location: ' . preg_replace('/:/', '', $_GET['forward']));
		exit();
	} else {
		header('Location: /tracking/');
		exit();
	}
}
	
$ogt->display('login.tpl');

?>