<?php

require_once('../../classes/ogt.php');

$ogt = new ogt();

$ogt->assign('pagetitle', 'My profile - Love Golf');

$ogt->assign('current', 'my');

$ogt->assign('firstyear', date('Y')-110);
$ogt->assign('thisyear', date('Y')-5);

$ogt->requireLogin();

$favourite = new favourite();
$ogt->assign('favouritecourses', $favourite->list_by_userid($ogt->getCurrentuser()->getUserid()));

$ogt->assign('recentcourses', $ogt->getCurrentuser()->listRecentCourses());

$ogt->display('my-profile.tpl');

?>