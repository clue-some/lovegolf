<?php

require_once('../../classes/ogt.php');

$ogt = new ogt();

$ogt->assign('pagetitle', 'Invite your friends to Love Golf');

$ogt->display('tell-a-friend.tpl');

?>