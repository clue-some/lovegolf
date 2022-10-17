<?php

require_once('../../classes/ogt.php');

$ogt = new ogt();

$ogt->assign('pagetitle', 'Terms & conditions of use - Love Golf');
	
$ogt->display('terms-information.tpl');

?>