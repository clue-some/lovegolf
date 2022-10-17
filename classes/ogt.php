<?php

require_once '../../configs/global.php';

require_once HOME_DIR . '/libs/smarty/SmartyBC.class.php';
require_once HOME_DIR . '/classes/lastrss.php';
require_once HOME_DIR . '/classes/database.php';
require_once HOME_DIR . '/classes/campaignmonitor.php';
require_once HOME_DIR . '/classes/user.php';
require_once HOME_DIR . '/classes/ogtemail.php';
require_once HOME_DIR . '/classes/statistics.php';
require_once HOME_DIR . '/classes/domain.php';
require_once HOME_DIR . '/classes/country.php';
require_once HOME_DIR . '/classes/region.php';
require_once HOME_DIR . '/classes/weather.php';
require_once HOME_DIR . '/classes/club.php';
require_once HOME_DIR . '/classes/course.php';
require_once HOME_DIR . '/classes/tee.php';
require_once HOME_DIR . '/classes/round.php';
require_once HOME_DIR . '/classes/favourite.php';
require_once HOME_DIR . '/classes/handicap.php';
require_once HOME_DIR . '/classes/image.php';

//class wp_login {
//	
//	function login_user($user_login) {
//		chdir('../blog/');
//		require_once('./wp-blog-header.php');
//		$user = get_userdatabylogin($user_login);
//		$user_id = $user->ID;
//		wp_set_current_user($user_id, $user_login);
//		wp_set_auth_cookie($user_id);
//		do_action('wp_login', $user_login);
//		echo "123";
//		chdir('../tracker/');		
//	}
//	
//}

/**
 * Extends Smarty to manage each page.
 * @author Chris Wheeler
 */
class ogt extends SmartyBC {

	private $db;

	private $host;
	private $self;
	private $referer;
	private $current;
	private $keywords;
	private $domain;
	private $javascripts = array();
	private $stylesheets = array();
	private $currentuser;

	public function __construct() {

		@set_exception_handler(array($this, 'exceptionHandler'));

		session_start();

		//print_r($_SESSION);
		
		parent::__construct();
		
		//PJIS
		$this->force_compile = true;
		
		$this->template_dir = SMARTY_TEMPLATE_DIR;
		$this->compile_dir = SMARTY_COMPILE_DIR;
		$this->config_dir = SMARTY_CONFIG_DIR;
		$this->cache_dir = SMARTY_CACHE_DIR;
		$this->compile_check = SMARTY_COMPILE_CHECK;
		$this->debugging = SMARTY_DEBUGGING;
		$this->plugins_dir[] = SMARTY_PLUGINS_DIR;

		$this->db = new Database;

		// environment
		$this->host = $_SERVER["HTTP_HOST"];
		$this->self = $_SERVER['REQUEST_URI'];
		$this->setDomain($this->host);
		$this->referer = (isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '');
		$this->assign('self', str_replace(array('<','>',',','(',')'), "", $this->self));
		$this->assign('host', $this->host);
		$this->assign('searchquery', $this->getSearchQuery());
		$this->assign('domain', $this->domain->getDetails());
		// print_r($this->domain->getDetails());
		//$this->addJavascript('adsense');
		$this->addJavascript('jquery');
		$this->addJavascript('jquery-ui');
		$this->addJavascript('swfobject');
		$this->addJavascript('data');
		$this->addJavascript('effects');
		$this->addJavascript('animatedcollapse');
		$this->addJavascript('FusionCharts');
		$this->addJavascript('coursesearch');
		$this->addJavascript('emailHider');
		$this->addJavascript('inputreplace');
		$this->addJavascript('lib~global~ts~100423075600');
		$this->addJavascript('jquery.lightbox-0.5');
		$this->addJavascript('jcarousellite_1.0.1.pack');
		$this->addJavascript('show-hide');
		$this->addJavascript('jquery.colorbox');
		$this->addJavascript('main');
		$this->showTitle();
		$this->initiateUser();
		$this->assignStatistics();
		
/* PJIS
		global $cart;
		$this->assign('basket', array('items' => $cart->count_contents(), 'total' => $cart->show_total()));
*/		
		$this->assign('gcpwelcome', isset($_SESSION['gcpwelcome']));
		
	}

	// Get Methods

	public function getCurrentuser() {
		return $this->currentuser;
	}

	public function getHost() {
		return $this->host;
	}

	public function getDomain() {
		return $this->domain;
	}

	public function getSelf() {
		return $this->self;
	}

	public function getReferer() {
		return $this->referer;
	}

	// Set Methods
	private function setDomain($hostname) {
		$hostname = str_replace('www.', '', $hostname);
		$this->domain = new Domain();
		try {
			$this->domain->findByHostName($hostname);
			//echo "FOUND" . $hostname;
			if ($aliasid = $this->domain->getAliasfor()) {
				//echo "ALIAS";
				$this->domain->findById($aliasid);	
			}
		} catch (Exception $e) {
			//echo "NOT FOUND" . $hostname;
			$this->domain->findById(1);
		}
		$this->setStyle($this->domain->getName());
		$this->assign('domain', $this->domain->getDetails());
	}
	
	public function setStyle($suffix = '', $path = '/tracker/css/', $media = 'screen, projection') {
		if ($suffix) {
			$suffix = '_' . $suffix;
		}
		$this->stylesheets = array();
		$this->stylesheets[] = array(
		'href' => $path . 'style' . $suffix . '.css',
		'media' => $media,
		);
		$this->stylesheets[] = array(
		'href' => $path . 'style' . $suffix . '_ie.css',
		'condition' => 'lte IE 6',
		'media' => $media,
		);
		$this->stylesheets[] = array(
		'href' => $path . 'style' . $suffix . '_ie7.css',
		'condition' => 'gte IE 7',
		'media' => $media,
		);
		$this->stylesheets[] = array(
		'href' => '/tracker/css/style_common.css',
		'media' => $media,
		);
		$this->stylesheets[] = array(
		'href' => '/tracker/css/style_common_ie.css',
		'condition' => 'lte IE 6',
		'media' => $media,
		);
		$this->stylesheets[] = array(
		'href' => '/tracker/css/style_common_ie7.css',
		'condition' => 'gte IE 7',
		'media' => $media,
		);
		$this->assign('stylesheets', $this->stylesheets);
	}

	public function setKeywords($keywords) {
		$this->assign('metakeywords', ', ' . strtolower($keywords));
		$this->assign('metadescription', ', ' . $keywords);
	}

	public function setDescription($description) {
		$this->assign('metadescription', ' ' .$description);
	}

	public function setCurrent($pagename = false) {
		$this->current = $pagename;
		$this->assign('current', $this->current);
	}

	/**
	 * Other Methods
	 *
	 */
	
	public function initiateUser() {

		$this->currentuser = new User();

		if (isset($_POST['dologin'])) {
			try {
				$this->currentuser->login($_POST['loginemail'], $_POST['loginpassword'], $_POST['loginremember'], true);
//				$wp_login = new wp_login();
//				$wp_login->login_user($_POST['loginemail']);
				if ($this->currentuser->get('gcpuser') && !$this->currentuser->get('gcpwelcome')) {
					$this->currentuser->set('gcpwelcome', 1);
					$this->currentuser->update();
					$_SESSION['gcpwelcome'] = 1;
					header('Location: http://' . $this->host . '/my/profile-edit/');
					exit();
				} else {
					header('Location: ' . ($this->referer ? $this->referer : 'http://' . $this->host . '/tracking/'));
					exit();
				}
			} catch (DatabaseException $e) {
				$this->exceptionHandler($e);
			} catch (Exception $e) {
				$this->assign('loginerror', $e->getMessage());
				$this->assign('post', $_POST);
			}
		}
		if (isset($_SESSION['loggedin'])) {
			try {
				$this->currentuser->authenticate($_SESSION['email'], $_SESSION['password']);
				$this->assign('currentuser', get_object_vars($this->currentuser));
			} catch (DatabaseException $e) {
				$this->exceptionHandler($e);
			} catch (Exception $e) {
				$this->currentuser->logout();
				$this->showError('Authentication Error', $e->getMessage());
			}
		} elseif (isset($_COOKIE['email']) && isset($_COOKIE['password'])) {
			try {
				$this->currentuser->authenticate($_COOKIE['email'], $_COOKIE['password']);
				$this->assign('currentuser', get_object_vars($this->currentuser));
			} catch (DatabaseException $e) {
				$this->exceptionHandler($e);
			} catch (Exception $e) {
				$this->currentuser->logout();
			}
		}
		
		$handicap = new handicap();
		$this->assign('currentuserhandicapcategory', $handicap->get_categoryname($this->currentuser->get('handicap')));
		
	}
	
	public function assignStatistics() {

		$statistics = new statistics();

		$ogtstatistics['scorecardsadded']['today'] = $statistics->get_count_scorecards_today();
		$ogtstatistics['scorecardsadded']['alltime'] = $statistics->get_count_scorecards();		
		$ogtstatistics['averagescore']['today'] = $statistics->get_average_score_today();
		$ogtstatistics['averagescore']['alltime'] = $statistics->get_average_score();

		if (!$bestroundstoday = $statistics->get_best_rounds_today(1)) {
		    $ogtstatistics['bestscore']['today']['score'] = 0;
		    $ogtstatistics['bestscore']['today']['username'] =
		    $ogtstatistics['bestscore']['today']['firstname'] =
		    $ogtstatistics['bestscore']['today']['surname'] = '';
		} else {
		    $ogtstatistics['bestscore']['today']['score'] = $bestroundstoday['0']['totalscore'];
		    $ogtstatistics['bestscore']['today']['username'] = $bestroundstoday['0']['username'];
		    $ogtstatistics['bestscore']['today']['firstname'] = $bestroundstoday['0']['firstname'];
		    $ogtstatistics['bestscore']['today']['surname'] = $bestroundstoday['0']['surname'];
		}

		$bestrounds = $statistics->get_best_rounds(1);
		$ogtstatistics['bestscore']['alltime']['score'] = $bestrounds['0']['totalscore'];
		$ogtstatistics['bestscore']['alltime']['username'] = $bestrounds['0']['username'];
		$ogtstatistics['bestscore']['alltime']['firstname'] = $bestrounds['0']['firstname'];
		$ogtstatistics['bestscore']['alltime']['surname'] = $bestrounds['0']['surname'];

		$popularcourseid = $statistics->get_popular_course_today();
		if ($popularcourseid) {
			try {
				$course = new course();
				$course->find_by_id($popularcourseid);
				$club = new club();
				$club->find_by_id($course->get_clubid());
				$ogtstatistics['popularcourses']['today']['courseid'] = $course->get_courseid();
				$ogtstatistics['popularcourses']['today']['name'] = $course->get_name();
				$ogtstatistics['popularcourses']['today']['county'] = $club->get_county();
				$ogtstatistics['popularcourses']['today']['clubname'] = $club->get_name();
				$ogtstatistics['popularcourses']['today']['cluburlname'] = $club->get_urlname();
				$ogtstatistics['popularcourses']['today']['courseurlname'] = $course->get_urlname();
			} catch (Exception $e) {
				//echo $e->getMessage();
			}
		}
		else {
		    $ogtstatistics['popularcourses']['today']['courseid'] = NULL;
		    $ogtstatistics['popularcourses']['today']['name'] = 
		    $ogtstatistics['popularcourses']['today']['county'] = 
		    $ogtstatistics['popularcourses']['today']['clubname'] = 
		    $ogtstatistics['popularcourses']['today']['cluburlname'] = 
		    $ogtstatistics['popularcourses']['today']['courseurlname'] = '';
		}
		
		$userstats = new user();
		$ogtstatistics['users']['total'] = $userstats->count();
		$ogtstatistics['users']['online'] = $userstats->countActiveUsers();
		
		$this->assign('ogtstatistics', $ogtstatistics);

		if ($userid = $this->getCurrentuser()->getUserid()) {

			$lastround = $statistics->get_user_lastround($userid);
			$userstatistics['lastround']['score'] = (int)$lastround[0]['totalscore'];
			$userstatistics['lastround']['date'] = $lastround[0]['date'];
			$userstatistics['lastround']['roundid'] = (int)$lastround[0]['roundid'];

			$bestround = $statistics->get_user_bestround($userid);
			$userstatistics['bestround']['score'] = (int)$bestround[0]['totalscore'];
			$userstatistics['bestround']['date'] = $bestround[0]['date'];
			$userstatistics['bestround']['roundid'] = (int)$bestround[0]['roundid'];

			$averageround = $statistics->get_user_averageround($userid);			
			$userstatistics['averageround']['score'] = (float)$averageround[0]['averagescore'];
			$userstatistics['averageround']['rounds'] = (int)$averageround[0]['numrounds'];

			$this->assign('userstatistics', $userstatistics);
		}

	}

	public function exceptionHandler($e) {
	    $description = '';
		$message = $e->getMessage();
		if (DEBUG_MODE) {
			$trace = $e->getTrace();
			if (isset($trace[0])) {
				foreach($trace[0] as $k => $v) {
					$description .= '<p>' . $k . ': ' . serialize($v) . '</p>';
				}
			}
			//$description .= 'Mysql Said: <pre>' . $e->getMysqlError() . '</pre>';
			//$description .= '<br />SQL Was: <pre>' . $e->getSQL() . '</pre>';
			$description .= '<br />Message: <pre>' . $e->getMessage() . '</pre>';
		} else {
			$description = 'Please try again later.';
		}
		$this->showError('System Error', $description);
	}

	public function listSalutations() {
		return array('Mr', 'Mrs', 'Miss', 'Ms', 'Dr');
	}

	public function requireLogin() {
		if (!$this->currentuser->loggedin) {
			$this->assign("pagetitle", "Login");
			$this->display('login.tpl');
			exit();
		}
	}

	public function requireAdmin() {
		if (!$this->currentuser->privileges['admin']) {
			$this->showError('Access Denied', 'You must be logged in as an administrator to view this page!');
		}
	}

	public function addJavascript($prefix = 'effects') {
		$directory = '/tracker/javascript/';
		$path = $directory . $prefix . '.js';
		$this->javascripts[] = array(
			'path' => $path
		);
		$this->assign('javascripts', $this->javascripts);
	}

	public function addStyle($path = '/tracker/css/', $filename = 'style.css', $media = 'screen, projection') {
		$this->stylesheets[] = array(
		'href' => $path . $filename,
		'media' => $media,
		);
		$this->assign('stylesheets', $this->stylesheets);
	}

	public function showError($message, $description, $httpstatus = '200 OK') {
		header('HTTP/1.1 ' . $httpstatus);
		$this->assign("pagetitle", $message);
		$this->assign("message", $message);
		$this->assign("description", $description);
		if ($httpstatus == '404 Not Found') {
			$this->display('404.tpl');
		} else {
			$this->display('error.tpl');
		}
		exit();
	}

	public function showAccessDenied() {
		$this->showError('Access Denied', 'You do not have permission to view this page', '401 Access Denied');
	}

	public function showTitle($showtitle = true) {
		$this->assign('showtitle', $showtitle);
	}
	
	public function getSearchQuery($url = false) {
	    if(!$url && !$url = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : false) {
	        return '';
	    }
	    $parts_url = parse_url($url);
	    $query = isset($parts_url['query']) ? $parts_url['query'] : (isset($parts_url['fragment']) ? $parts_url['fragment'] : '');
	    if(!$query) {
	        return '';
	    }
	    parse_str($query, $parts_query);
	    return isset($parts_query['q']) ? $parts_query['q'] : (isset($parts_query['p']) ? $parts_query['p'] : '');
	}

	function __destruct() {

	}

}

function get_product_info($productid) {
	$sql = "
		select 
			*
		from 
			`products` 
		inner join 
			`products_description` 
		on 
			`products_description`.`products_id` = `products`.`products_id`
		where
			`products`.`products_id` = " . $productid . "
		limit 1
		";
	$products_query = tep_db_query($sql);
	while ($product = tep_db_fetch_array($products_query)) {
		  $products[] = $product;
	}
	return $products[0];	
}

function get_products_by_category($categoryid = false, $categoryname = array(false, false, false, false, false), $limit = 5) {
	if (!is_array($categoryname)) {
		$categoryname = array($categoryname);
	}
	$products = array();
	$sql = "
		select 
			*
		from 
			`products` 
		inner join 
			`products_to_categories` 
		on 
			`products`.`products_id` = `products_to_categories`.`products_id`
		inner join 
			`categories_description` 
		on 
			`categories_description`.`categories_id` = `products_to_categories`.`categories_id`
		inner join 
			`products_description` 
		on 
			`products_description`.`products_id` = `products`.`products_id`
		where
			`products_status` = 1
		";
	if ($categoryid) {
		$sql .= "
		and
			`categories_description`.`categories_id` = '" . $categoryid . "'		
			";
	}
	if ($categoryname[0]) {
		$sql .= "
		and
			(
			`categories_description`.`categories_name` LIKE '%" . $categoryname[0] . "%'		
		";
	}
	if ($categoryname[1]) {
		$sql .= "
			or
				`categories_description`.`categories_name` LIKE '%" . $categoryname[1] . "%'		
		";
	}
	if ($categoryname[2]) {
		$sql .= "
			or
				`categories_description`.`categories_name` LIKE '%" . $categoryname[2] . "%'		
		";
	}
	if ($categoryname[3]) {
		$sql .= "
			or
				`categories_description`.`categories_name` LIKE '%" . $categoryname[3] . "%'		
		";
	}
	if ($categoryname[4]) {
		$sql .= "
			or
				`categories_description`.`categories_name` LIKE '%" . $categoryname[4] . "%'		
		";
	}
	if ($categoryname[0]) {
		$sql .= "
			)
		";
	}
	$sql .= "order by rand()";
	if ($limit) {
		$sql .= "
		limit
			" . $limit . "		
			";
	}
	$products_query = tep_db_query($sql);
	while ($product = tep_db_fetch_array($products_query)) {
		  $products[] = $product;
	}
	return $products;
}
?>