<?php

require_once('../../classes/ogt.php');

$ogt = new ogt();

$club = new club();
$club->find_by_id($_GET['clubid']);
$ogt->assign('club', $club->get_details());

$ogt->display('modules/help-support/verified-club-details.tpl');

?>