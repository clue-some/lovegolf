<?php

require_once('../../classes/ogt.php');

$ogt = new ogt();

$ogt->assign('pagetitle', 'Privacy & Security - Love Golf');
	
$ogt->display('privacy-security.tpl');

?>