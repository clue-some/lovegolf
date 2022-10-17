<?php 

require_once('../../classes/ogt.php');

$ogt = new ogt();

header('content-type: text/plain');

try {
	$rpconn = new mysqli('localhost', 'wwwlove_main', 'k089uy7ftd', 'wwwlove_wordpress');
	$result = $rpconn->query("SELECT * FROM `wp_posts` WHERE `post_type` = 'post' AND `post_status` = 'publish' AND LENGTH(`post_content`) > 50 ORDER BY RAND() LIMIT 3");
	$rposts = array();
	while ($row = $result->fetch_assoc()) {	$rposts[] = $row; }
	$rpconn->close();
} catch (Exception $e) {
	// Do Nothing
}

?>