<?php

require_once('../../classes/ogt.php');

$ogt = new ogt();

$ogt->assign('pagetitle', 'Love Golf Clubhouse');
$ogt->assign('metakeywords', 'online tee booking, golf holidays, golf blog');
$ogt->assign('metadescription', 'Love Golf Clubhouse');

$ogt->assign('current', 'clubhouse');
	
$ogt->display('clubhouse.tpl');

?>