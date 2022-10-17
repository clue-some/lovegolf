<?php

require_once('../../classes/ogt.php');

$ogt = new ogt();

$ogt->getCurrentuser()->logout();

// If referer is set, redirect to referer, otherwise redirect to home page
header('Location: ' . ($ogt->getReferer() ? $ogt->getReferer() : '/'));

?>