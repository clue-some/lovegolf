<?php

require_once('../../classes/ogt.php');

$ogt = new ogt();
	
$ogt->assign('current', 'clubs');

$ogt->display('course-list.tpl');

?>