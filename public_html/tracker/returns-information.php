<?php

require_once('../../classes/ogt.php');

$ogt = new ogt();

$ogt->assign('pagetitle', 'Returns information - Love Golf');
	
$ogt->display('returns-information.tpl');

?>