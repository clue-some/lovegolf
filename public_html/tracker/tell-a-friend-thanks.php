<?php

require_once('../../classes/ogt.php');

$ogt = new ogt();

$ogt->assign('pagetitle', 'Thanks for telling your friends about Love Golf');
	
$ogt->display('tell-a-friend-thanks.tpl');

?>