<?php

require_once('../../classes/ogt.php');

$ogt = new ogt();

$ogt->requireLogin();

$ogt->assign('current', 'tracking');

$ogt->display('tracking-friends.tpl');

?>