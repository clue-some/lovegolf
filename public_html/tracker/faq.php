<?php

require_once('../../classes/ogt.php');

$ogt = new ogt();

$ogt->assign('pagetitle', 'Frequently asked questions - Help & support - Love Golf');
$ogt->assign('metakeywords', '');
$ogt->assign('metadescription', 'Frequently asked questions - Help & support - Love Golf');

$ogt->display('faq.tpl');

?>