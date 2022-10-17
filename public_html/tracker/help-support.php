<?php

require_once('../../classes/ogt.php');

$ogt = new ogt();

$ogt->assign('pagetitle', 'Help & Support - Love Golf');

$lastrss = new lastrss();
$lastrss->cache_dir = '../rsscache';
$lastrss->cache_time = 300; // Seconds
$ogt->assign('blogfeed', $lastrss->get('http://www.lovegolf.co.uk/blog/category/using-love-golf/feed'));
	
$ogt->display('help-support.tpl');

?>