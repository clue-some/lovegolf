<?php

// MySQL Connection Settings
define('MYSQL_HOSTNAME','localhost');
define('MYSQL_DATABASE','wwwlove_main');
define('MYSQL_USERNAME','wwwlove_main');
define('MYSQL_PASSWORD','k089uy7ftd');

// Directories
define('HOME_DIR','c:/vhosts/lovegolf');

// Common Regular Expressions
define('REGEX_EMAIL', '[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,6}');
define('REGEX_DATE', '[0-9]{4}-[0-9]{1,2}-[0-9]{1,2}');
define('REGEX_DATE_DDMMYYYY', '[0-9]{1,2}-[0-9]{1,2}-[0-9]{4}');
define('REGEX_DATE_YYYYMMDD', '[0-9]{4}-[0-9]{1,2}-[0-9]{1,2}');
define('REGEX_TIME', '[0-9]{2}:[0-9]{2}');

// Smarty Settings
define('SMARTY_DIR', HOME_DIR . '/libs/smarty/');
define('PLUGINS_DIR', SMARTY_DIR . 'plugins/');

define('SMARTY_TEMPLATE_DIR', HOME_DIR . '/templates/');
define('SMARTY_COMPILE_DIR', HOME_DIR . '/templates_c/');
define('SMARTY_CONFIG_DIR', HOME_DIR . '/configs/');
define('SMARTY_CACHE_DIR', HOME_DIR . '/cache/');
//PJIS define('SMARTY_PLUGINS_DIR', HOME_DIR . '/plugins/');
define('SMARTY_COMPILE_CHECK', true);
define('SMARTY_DEBUGGING', false);
 
// CampaignMonitor Connection Settings
define('CM_APIKEY','ccacdd3dba1d963d08c75b78ad2d324e');
define('CM_CLIENTID','9a8e28d94c1b134fe36d0f142169689d');

define('DEBUG_MODE', true);

/**
 * DO NOT EDIT BELOW THIS LINE
 */

// if (DEBUG_MODE) { error_reporting(E_ALL); } else { error_reporting(E_ALL ^ E_NOTICE); }

?>
