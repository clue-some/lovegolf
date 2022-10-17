<?php

require_once('../../classes/ogt.php');

$ogt = new ogt();

$ogt->assign('pagetitle', 'Shipping information - Love Golf');
	
$ogt->display('shipping-information.tpl');

?>