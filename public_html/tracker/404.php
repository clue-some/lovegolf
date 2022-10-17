<?php

header('HTTP/1.0 404 Not Found');
exit();

require_once('../../classes/ogt.php');

$ogt = new ogt();

$ogt->assign('pagetitle', 'Page cannot be found - error code 404 - Love Golf');
$ogt->assign('metakeywords', '');
$ogt->assign('metadescription', 'Page cannot be found - error code 404 - Love Golf');
	
$ogt->display('404.tpl');

?>