<?php

require_once('../../classes/ogt.php');

$ogt = new ogt();
	
$ogt->showError('Access Forbidden - Error Code 403', 'Sorry, access to this page is forbidden!', '403 Forbidden');

?>