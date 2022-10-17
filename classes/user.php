<?php

Class UserExistsException extends Exception {}

/**
 * Manages Users
 * @author Chris Wheeler
 *
 */
class User {

	public $db;

	public $userid;
	public $gcpuser;
	public $gcpuserid;
	public $gcpwelcome;
	
	public $admin;

	public $username;
	public $password;
	public $key;
	public $email;

	public $membershipnumber;
	public $photo;

	public $firstname;
	public $surname;

	public $phonenumber;

	public $address1;
	public $town;
	public $county;
	public $postcode;
	public $country;

	public $handicappending;
	public $handicap;
	public $dob;
	public $sex;

	public $status;

	public $accountcreation;

	public $referral;
	public $refid;
	public $promotion;

	public $enabled;
	public $groupid;
	public $accessed;

	public $privileges;

	// Session Info
	public $loggedin;

	// For debugging
	public $log;

	// Constructor
	function __construct() {
		$this->log[] = array('debug', 'Class: '.get_class($this).' initialised');
		$this->db = new Database;
	}

	/* Generic Get Method */
	
	public function get($column_name) {
		return $this->$column_name;
	}

	/* Generic Set Method */

	public function set($column_name, $value, $friendly_name = 'Input ', $minlength = false, $numeric = false, $format = false) {
		if ($minlength && (strlen($value) < $minlength)) {
			throw new Exception($friendly_name . ' must be at least ' . $minlength . ' characters.');
		}
		if ($numeric && !is_numeric($value)) {
			throw new Exception($friendly_name . ' must be a number.');
		}
		if ($format && !preg_match('/' . $format . '/i', $value)) {
			throw new Exception($friendly_name . ' is not valid.');
		}
		$this->$column_name = $value;
	}		
	
	// Setter Methods

	function setFirstname($input) {
		if (strlen($input) >= 2) {
			$this->firstname = addslashes($input);
		} else {
			throw new Exception('You must enter a first name.');
		}
	}

	function setSurname($input) {
		if (strlen($input) >= 2) {
			$this->surname = addslashes($input);
		} else {
			throw new Exception('You must enter a surname.');
		}
	}

	function setUsername($input) {
		if (strlen($input) >= 2) {
			$this->username = addslashes($input);
		} else {
			throw new Exception('You must enter a username.');
		}
	}
	
	function setEmail($input) {
		if (preg_match('/' . REGEX_EMAIL . '/', $input)) {
			$this->email = addslashes($input);
		} else {
			throw new Exception('The email you entered was not a valid email address.');
		}
	}

	function setPassword($input, $inputcheck) {
		if ($input <> $inputcheck) {
			throw new Exception('The passwords you entered were not the same.');
		}
		if (strlen($input) < 6) {
			throw new Exception('Your password must be at least 6 characters long.');
		}
		$this->password = sha1($input);
	}
	
	function generatePassword($length = 8, $complexity = 3) {
		// start with a blank password
		$password = "";
		// define possible characters
		switch ($complexity) {
			default:
				$possible = "abcdfghjkmnpqrstvwxyz";
				break;
			case 2:
				$possible = "0123456789";
				break;
			case 3:
				$possible = "0123456789abcdfghjkmnpqrstvwxyz";
				break;
			case 4:
				$possible = "0123456789abcdfghjkmnpqrstvwxyz!�$%^&*()~@{}[]=-";
				break;
		}
		// set up a counter
		$i = 0;
		// add random characters to $password until $length is reached
		while ($i < $length) {
			// pick a random character from the possible ones
			$password .= substr($possible, mt_rand(0, strlen($possible)-1), 1);
			$i++;
		}
		return $password;
	}	

	function setKey($input) {
		$this->key = addslashes($input);
	}

	function setHandicappending($state = true) {
		if ($state) {
			$this->handicappending = true;
		} else {
			$this->handicappending = false;
		}
	}
	
	function setHandicap($input) {
		$this->handicap = addslashes($input);
	}
	
	function setDOB($input) {
		$this->dob = addslashes($input);
	}
	
	function setSex($input) {
		$this->sex = addslashes($input);
	}
	
	function setEnabled($state = true) {
		if ($state) {
			$this->enabled = true;
		} else {
			$this->enabled = false;
		}
	}

	function setGroupid($input) {
		if (is_numeric($input)) {
			$this->groupid = $input;
		} else {
			throw new Exception('Group ID must be numeric (system error).');
		}
	}

	/*
	GET METHODS
	*/

	function getUserid() {
		return $this->userid;
	}

	function getKey() {
		return $this->key;
	}

	function getEmail() {
		return $this->email;
	}

	function getHandicappending() {
		return $this->handicappending;
	}

	function getHandicap() {
		return $this->handicap;
	}
	
	function getDOB() {
		return $this->dob;
	}
	
	function getSex() {
		return $this->sex;
	}
	
	/* PJIS Updated for prepared statement */
	function findById($id) {
		$sql = "SELECT  *
                  FROM  `user`
                 WHERE  `userid` = ?";
		if ($result = $this->db->prepared_query($sql, $id)) {
			$this->populate($result);
			return true;
		} else {
			throw new Exception('Unable to find user with id: \'' . $id . '\'');
		}
	}

	/* PJIS Updated for prepared statement */
	function findByUsername($username) {
		$sql = "SELECT  *
                  FROM  `user`
                 WHERE  `username` = ?";
		if ($result = $this->db->prepared_query($sql, $username)) {
			$this->populate($result);
			return true;
		} else {
			throw new Exception('Unable to find user with username: \'' . $username . '\'');
		}
	}

	/* PJIS Updated for prepared statement */
	function findByEmail($email) {
		$sql = "SELECT  *
                  FROM  `user`
                 WHERE  `email` = ?";
		if ($result = $this->db->prepared_query($sql, $email)) {
			$this->populate($result);
			return true;
		} else {
			throw new Exception('Unable to find user with email: \'' . $email . '\'');
		}
	}

	function populate($result) {
		$this->userid = stripslashes($result[0]['userid']);
		$this->gcpuser = stripslashes($result[0]['gcpuser']);
		$this->gcpuserid = stripslashes($result[0]['gcpuserid']);
		$this->gcpwelcome = stripslashes($result[0]['gcpwelcome']);
		$this->admin = stripslashes($result[0]['admin']);
		$this->username = stripslashes($result[0]['username']);
		$this->photo = stripslashes($result[0]['photo']);
		$this->email = stripslashes($result[0]['email']);
		$this->password = stripslashes($result[0]['password']);
		$this->key = stripslashes($result[0]['key']);
		$this->firstname = stripslashes($result[0]['firstname']);
		$this->surname = stripslashes($result[0]['surname']);
		$this->phonenumber = stripslashes($result[0]['phonenumber']);
		$this->address1 = stripslashes($result[0]['address1']);
		$this->town = stripslashes($result[0]['town']);
		$this->county = stripslashes($result[0]['county']);
		$this->postcode = stripslashes($result[0]['postcode']);
		$this->country = stripslashes($result[0]['country']);
		$this->handicappending = stripslashes($result[0]['handicappending']);
		$this->handicap = stripslashes($result[0]['handicap']);
		$this->dob = stripslashes($result[0]['dob']);
		$this->sex = stripslashes($result[0]['sex']);
		$this->status = stripslashes($result[0]['status']);
		$this->accountcreation = stripslashes($result[0]['accountcreation']);
		$this->accountdeadline = stripslashes($result[0]['accountdeadline']);
		$this->referral = stripslashes($result[0]['referral']);
		$this->refid = stripslashes($result[0]['refid']);
		$this->promotion = stripslashes($result[0]['promotion']);
		$this->enabled = stripslashes($result[0]['enabled']);
		$this->gcpuser = stripslashes($result[0]['gcpuser']);
		$this->accessed = stripslashes($result[0]['accessed']);
		// $this->loadPrivileges();
	}

	/* PJIS Updated for prepared statement */
	function checkDuplicates($email) {
		$sql = "SELECT  `userid`
                  FROM  `user`
                 WHERE  `email` = ?";
		if ($result = $this->db->prepared_query($sql, $email)) {
			if ($result[0]['userid'] != $this->userid) {
				throw new Exception('Username ' . $email . ' already exists.');
			}
		}
		return true;
	}

	function login($email, $password, $remember = false) {
		$this->authenticate($email, SHA1($password), $remember);
		$sql = "INSERT INTO `login`
                (`userid`, `date`, `ip`, `browser`)
                VALUES
                (?, ?, ?, ?)";
		$this->db->prepared_insert($sql, $this->userid, "NOW()", $_SERVER['REMOTE_ADDR'],
		    $_SERVER['HTTP_USER_AGENT']);
	}

	function logout() {
		$this->destroySession();
		$this->destroyCookie();
	}

	function destroySession() {
		unset($_SESSION['userid']);
		unset($_SESSION['email']);
		unset($_SESSION['password']);
		unset($_SESSION['loggedin']);
		unset($_SESSION['gcpwelcome']);
	}

	function createSession() {
		$_SESSION['userid'] = $this->userid;
		$_SESSION['email'] = $this->email;
		$_SESSION['password'] = $this->password;
		$_SESSION['loggedin'] = true;
	}

	function createCookie() {
		// Set Cookie
		setcookie("email", $this->email, time()+60*60*24*30, "/");
	}

	function updateCookie() {
		// updates cookie if it exists
		if ($_COOKIE['email'] && $_COOKIE['password']) {
			$this->destroyCookie();
			$this->createCookie();
		}
	}

	function destroyCookie() {
		// Kill Cookie
		setcookie("email", "", time()-3600, "/");
	}

	// Re-Write this to remove nesting
	function authenticate($email, $password, $remember = false) {
		$sql = "SELECT  `userid`,
                        `password`,
                        `enabled`
                  FROM  `user`
                 WHERE  `email` = ?";
		if ($result = $this->db->prepared_query($sql, $email)) {
			if ($password == $result[0]['password']) {
				if ($result[0]['enabled']) {
					$this->log[] = array('debug', 'User: '. $email .' authenticated');
					$this->findByEmail($email);
					$this->loggedin = 1;
					$this->updateAccessed();
					$this->createSession();
					if ($remember) {
						$this->createCookie();
					}
					return true;
				} else {
					throw new Exception('Sorry, this user has been disabled.');
				}
			} else {
				throw new Exception('Invalid password for: ' . $email);
			}
		} elseif ($this->db->numrows == 0) {
			throw new Exception('User not found.');
		}
		throw new Exception('Database error.');
	}
	
	function updateAccessed() {
		$sql = "UPDATE `user` SET `accessed` = NOW() WHERE `userid` = '" . $this->userid . "'";
		$this->db->query($sql);
	}

	function getLastLogin() {
		$sql = "SELECT  `date`,
                        `ip`
                  FROM  `login`
                 WHERE  `userid` = ?
                 ORDER  BY `date` DESC";
		if ($result = $this->db->prepared_query($sql, $this->userid)) {
			// Return second result
			return $result[1];
		}
		return false;
	}

	function getDetails() {
		return array(
		'userid' => $this->userid,
		'gcpuser' => $this->userid,
		'gcpuserid' => $this->gcpuserid,
		'gcpwelcome' => $this->gcpwelcome,
		'admin' => $this->admin,
		'username' => $this->username,
		'photo' => $this->photo,
		'email' => $this->email,
		'password' => $this->password,
		'key' => $this->key,
		'firstname' => $this->firstname,
		'surname' => $this->surname,
		'phonenumber' => $this->phonenumber,
		'address1' => $this->address1,
		'town' => $this->town,
		'county' => $this->county,
		'postcode' => $this->postcode,
		'country' => $this->country,
		'handicappending' => $this->handicappending,
		'handicap' => $this->handicap,
		'dob' => $this->dob,
		'sex' => $this->sex,
		'status' => $this->status,
		'accountcreation' => $this->accountcreation,
		'referral' => $this->referral,
		'refid' => $this->refid,
		'promotion' => $this->promotion,
		'gcpuser' => $this->gcpuser,
		'enabled' => $this->enabled
		);
	}

	//PJIS updated for prepared statements
	function insert() {
		$this->checkDuplicates($this->email);
		$sql = "INSERT INTO `user`
                (`admin`, `username`, `email`, `password`, `key`, `firstname`, `surname`,
                 `accountcreation`, `enabled`, `modified`)
                VALUES
                (?, ?, ?, ?, ?, ?, ?, NOW(), ?, NOW())";

		// Insert the new user
		$this->userid = $this->db->prepared_insert($sql, $this->admin ? $this->admin : 0,
		    $this->username, $this->email, $this->password, $this->key, $this->firstname,
		    $this->surname, $this->enabled ? 1 : 0);
	}

	// update the users details
	function update() {
		// Check for duplicate emails
		$this->checkDuplicates($this->email);
		$sql = "UPDATE `user`
                SET `gcpuser` = ?, `gcpuserid` = ?, `gcpwelcome` = ?, `admin` = ?, `username` = ?,
                    `photo` = ?, `email` = ?, `password` = ?, `key` = ?, `firstname` = ?, `surname` = ?,
                    `phonenumber` = ?, `address1` = ?, `town` = ?, `county` = ?, `postcode` = ?,
                    `country` = ?, `handicappending` = ?, `handicap` = ?, `dob` = ?, `sex` = ?,
                    `status` = ?, `accountdeadline` = ?, `referral` = ?, `refid` = ?, `promotion` = ?,
                    `enabled` = ?, `modified` = ?
                WHERE `userid` = ?
                LIMIT 1";
    		
		$this->log[] = array('debug', 'About to update user');
		$this->db->prepared_update($sql, $this->gcpuser, $this->gcpuserid, $this->gcpwelcome, $this->admin,
		    $this->username, $this->photo, $this->email, $this->password, $this->key, $this->firstname,
		    $this->surname, $this->phonenumber, $this->address1, $this->town, $this->county, $this->postcode,
		    $this->country, $this->handicappending, $this->handicap, $this->dob, $this->sex, $this->status, 
		    $this->accountdeadline, $this->referral, $this->refid, $this->promotion,$this->enabled, "NOW()", 
		    $this->userid);
		return true;
	}

	// delete the selected user
	function delete() {
		$sql = "DELETE FROM
              `user`
            WHERE
              `userid` = '" . $this->userid . "'
            LIMIT 
              1
            ";
		// Update the user
		$this->log[] = array('debug', 'About to delete user');
		if ($this->db->update($sql)) {
			return true;
		}
		throw new Exception('Unable to delete user.');
	}

	function changePassword($oldpassword, $password, $password2) {
		if ($this->password == sha1($oldpassword)) {
			// Current Password OK
			if ($password == $password2) {
				// New passwords match, make change
				$this->updatePassword($password);
				$this->password = sha1($password);
				$this->createSession();
				$this->updateCookie();
			} else {
				// New passwords do not match
				throw new Exception('New passwords do not match.');
			}
		} else {
			throw new Exception('Current password was invalid.');
		}
	}

	function updatePassword($password, $remember = TRUE) {
		$sql = "UPDATE `user`
		    SET `password` = '" . sha1($password) . "' 
		    WHERE `userid` = '" . $this->userid . "' LIMIT 1";
		if ($this->db->update($sql)) {
			return true;
		}
		throw new Exception('Database Error.');
	}

	function loadPrivileges() {
		$sql = "SELECT  *
                  FROM  `group` 
                 WHERE  `groupid` = ?
                 LIMIT  1";
		if ($result = $this->db->prepared_query($sql, $this->groupid)) {
			$this->privileges = $result[0];
			return true;
		}
		throw new Exception('Unable to load privileges.');
	}

	function listGroups() {
		$sql = "SELECT  *
                  FROM  `group`
                 ORDER  BY `name`";
		return $this->db->query($sql);
	}

	function listUsers() {
		$sql = "SELECT  *
                  FROM  `user`";
//PJIS           ORDER  BY `email`";
		return $this->db->query($sql);
	}
	
	function listGCPUsers() {
		$sql = "SELECT  *
                  FROM  `user`
                 WHERE  `gcpuser` = 1";
		return $this->db->query($sql);
	}
	
	function listActiveUsers() {
		$sql = "SELECT	`userid`
                  FROM	`user`
                 WHERE	UNIX_TIMESTAMP() - UNIX_TIMESTAMP(`accessed`) < 1800";
		return $this->db->query($sql);
	}
	
	function countActiveUsers() {
	    $activeusers = $this->listActiveUsers();
	    return ($activeusers ? count($activeusers) : 0);
	}

	function listByEmail($email) {
		$sql = "SELECT  *
                  FROM  `user`
                 WHERE  `email` = ?
                 ORDER  BY `email`";
		return $this->db->prepared_query($sql, $email);
	}

	function listUsersPaginated($offset, $length = 20) {
		$sql = "SELECT  *
                  FROM  `user`
                 ORDER  BY `email`";
		return $this->db->paginationQuery($sql, $offset, $length);
	}

	function listCourses() {
		$sql = "SELECT  `course`.*,
                        `club`.`name`       as `clubname`, 
                        `club`.`urlname`    as `cluburlname`
                  FROM  `round`
                 INNER
                  JOIN  `course`
                    ON (`course`.`courseid` = `round`.`courseid`)
                  LEFT
                  JOIN  `club`
                    ON (`club`.`clubid` = `course`.`clubid`)
                 WHERE  `round`.`userid` = '" . $this->userid . "'
                 GROUP  BY `course`.`courseid`
                 ORDER  BY `course`.`name`";
		return $this->db->query($sql);
	}
		
	function listCoursesPaginated($offset, $length = 10) {
		$sql = "SELECT
             `course`.*,
             `club`.`name` as `clubname`, 
			 `club`.`urlname` as `cluburlname`
            FROM
             `round`
            INNER JOIN 
             `course`
            ON (
             `course`.`courseid` = `round`.`courseid`
            )
            LEFT JOIN 
             `club`
            ON (
             `club`.`clubid` = `course`.`clubid`
            )            
            WHERE 
             `round`.`userid` = '" . $this->userid . "'
            GROUP BY 
             `course`.`courseid`
            ORDER BY 
             `course`.`name`
            ";
		return $this->db->paginationQuery($sql, $offset, $length);
	}	
	
	function listRecentCourses() {
		$sql = "SELECT
             `course`.*,
             `club`.`name` as `clubname`, 
             `club`.`county` as `county`,              
             `club`.`county` as `county`        
            FROM
             `round`
            INNER JOIN 
             `course`
            ON (
             `course`.`courseid` = `round`.`courseid`
            )
            LEFT JOIN 
             `club`
            ON (
             `club`.`clubid` = `course`.`clubid`
            )                 
            WHERE 
             `round`.`userid` = '" . $this->userid . "'
            GROUP BY 
             `course`.`courseid`
            ORDER BY 
             `round`.`date` DESC
            LIMIT 10
            ";
		return $this->db->query($sql);
	}
	
	function listRoundsByCourseid($courseid = false) {
		$sql = "SELECT
             `round`.*,
             `course`.`name` as `coursename`,
             `club`.`name` as `clubname`, 
			 `club`.`urlname` as `cluburlname`
            FROM
             `round`
            LEFT JOIN 
             `course`
            ON (
             `course`.`courseid` = `round`.`courseid`
            )
            LEFT JOIN 
             `club`
            ON (
             `club`.`clubid` = `course`.`clubid`
            )               
            WHERE 
             `round`.`userid` = '" . $this->userid . "'
            ";
		if ($courseid) {
			$sql .= "
			AND 
			 `course`.`courseid` = '" . $courseid . "'
			";
		}
		$sql .= "
            ORDER BY 
             `round`.`date` DESC
            ";
		return $this->db->query($sql);
	}
	
	function getBestRoundByCourseid($courseid = false) {
		$sql = "SELECT
             `round`.*
             FROM
             `round`
            WHERE 
             `round`.`userid` = '" . $this->userid . "'
			";
			if ($courseid) {
            	$sql .= "
				AND 
				`round`.`courseid` = '" . $courseid . "'
				";
			}
			$sql .= "
			ORDER BY `round`.`totalscore`
		";
		$result = $this->db->query($sql);
		$diffs = array('totalscorediff', 'totalscorefront9diff', 'totalscoreback9diff');
		foreach ($diffs as $v) {
			if (round($result[0][$v]) > 0.49) {
				$result[0][$v] = round($result[0][$v]) . ' over par';
			} elseif(round($result[0][$v]) < -0.49) {
				$result[0][$v] = (round($result[0][$v]) / -1) . ' under par';
			} else {
				$result[0][$v] = 'even par';
			} 
		}
		return $result[0];		
	}
	
	function getWorstRoundByCourseid($courseid = false) {
		$sql = "SELECT
             `round`.*
             FROM
             `round`
            WHERE 
             `round`.`userid` = '" . $this->userid . "'
			";
			if ($courseid) {
            	$sql .= "
				AND 
				`round`.`courseid` = '" . $courseid . "'
				";
			}
			$sql .= "
			ORDER BY `round`.`totalscore` DESC
		";
		$result = $this->db->query($sql);
		$diffs = array('totalscorediff', 'totalscorefront9diff', 'totalscoreback9diff');
		foreach ($diffs as $v) {
			if (round($result[0][$v]) > 0.49) {
				$result[0][$v] = round($result[0][$v]) . ' over par';
			} elseif(round($result[0][$v]) < -0.49) {
				$result[0][$v] = (round($result[0][$v]) / -1) . ' under par';
			} else {
				$result[0][$v] = 'even par';
			} 
		}
		return $result[0];		
	}
		
	function listRoundsByCourseidPaginated($courseid, $offset, $length = 20) {
		$sql = "SELECT
             `round`.*,
             `course`.`name` as `coursename`,
             `club`.`name` as `clubname`, 
			 `club`.`urlname` as `cluburlname`
            FROM
             `round`
            LEFT JOIN 
             `course`
            ON (
             `course`.`courseid` = `round`.`courseid`
            )
            LEFT JOIN 
             `club`
            ON (
             `club`.`clubid` = `course`.`clubid`
            )               
            WHERE 
             `round`.`userid` = '" . $this->userid . "'
            ";
		if ($courseid) {
			$sql .= "
			AND 
			 `course`.`courseid` = '" . $courseid . "'
			";
		}
		$sql .= "
            ORDER BY 
             `round`.`date` DESC
            ";
		return $this->db->paginationQuery($sql, $offset, $length);
	}

	function getAverageByCourseid($courseid = false, $statsonly = true) {
		$sql = "SELECT
             `round`.*,
             COUNT(`round`.`roundid`) as `numrounds`,
             SUM(`round`.`stats`) as `numroundswithstats`,
             AVG(`round`.`hole1par`) as `hole1par`,
             AVG(`round`.`hole2par`) as `hole2par`,
             AVG(`round`.`hole3par`) as `hole3par`,
             AVG(`round`.`hole4par`) as `hole4par`,
             AVG(`round`.`hole5par`) as `hole5par`,
             AVG(`round`.`hole6par`) as `hole6par`,
             AVG(`round`.`hole7par`) as `hole7par`,
             AVG(`round`.`hole8par`) as `hole8par`,
             AVG(`round`.`hole9par`) as `hole9par`,
             AVG(`round`.`hole10par`) as `hole10par`,
             AVG(`round`.`hole11par`) as `hole11par`,
             AVG(`round`.`hole12par`) as `hole12par`,
             AVG(`round`.`hole13par`) as `hole13par`,
             AVG(`round`.`hole14par`) as `hole14par`,
             AVG(`round`.`hole15par`) as `hole15par`,
             AVG(`round`.`hole16par`) as `hole16par`,
             AVG(`round`.`hole17par`) as `hole17par`,
             AVG(`round`.`hole18par`) as `hole18par`,             
             AVG(`round`.`totalpar`) as `totalpar`,
             AVG(`round`.`totalparfront9`) as `totalparfront9`,
             AVG(`round`.`totalparback9`) as `totalparback9`,
             AVG(`round`.`hole1score`) as `hole1score`,
             AVG(`round`.`hole2score`) as `hole2score`,
             AVG(`round`.`hole3score`) as `hole3score`,
             AVG(`round`.`hole4score`) as `hole4score`,
             AVG(`round`.`hole5score`) as `hole5score`,
             AVG(`round`.`hole6score`) as `hole6score`,
             AVG(`round`.`hole7score`) as `hole7score`,
             AVG(`round`.`hole8score`) as `hole8score`,
             AVG(`round`.`hole9score`) as `hole9score`,
             AVG(`round`.`hole10score`) as `hole10score`,
             AVG(`round`.`hole11score`) as `hole11score`,
             AVG(`round`.`hole12score`) as `hole12score`,
             AVG(`round`.`hole13score`) as `hole13score`,
             AVG(`round`.`hole14score`) as `hole14score`,
             AVG(`round`.`hole15score`) as `hole15score`,
             AVG(`round`.`hole16score`) as `hole16score`,
             AVG(`round`.`hole17score`) as `hole17score`,
             AVG(`round`.`hole18score`) as `hole18score`,
             AVG(`round`.`totalscore`) as `totalscore`,
             AVG(`round`.`totalscorefront9`) as `totalscorefront9`,
             AVG(`round`.`totalscoreback9`) as `totalscoreback9`,
             AVG(`round`.`totalscore`) - AVG(`round`.`totalpar`) as `totalscorediff`,
             AVG(`round`.`totalscorefront9`) - AVG(`round`.`totalparfront9`) as `totalscorefront9diff`,
             AVG(`round`.`totalscoreback9`) - AVG(`round`.`totalparback9`) as `totalscoreback9diff`,
             AVG(`round`.`albatrosses`) as `albatrosses`,
             AVG(`round`.`eagles`) as `eagles`,
             AVG(`round`.`holeinones`) as `holeinones`,
             AVG(`round`.`eagles`) as `eagles`,
             AVG(`round`.`birdies`) as `birdies`,
             AVG(`round`.`pars`) as `pars`,
             AVG(`round`.`bogeys`) as `doubles`,
             AVG(`round`.`other`) as `other`,
             AVG(`round`.`hole1putts`) as `hole1putts`,
             AVG(`round`.`hole2putts`) as `hole2putts`,
             AVG(`round`.`hole3putts`) as `hole3putts`,
             AVG(`round`.`hole4putts`) as `hole4putts`,
             AVG(`round`.`hole5putts`) as `hole5putts`,
             AVG(`round`.`hole6putts`) as `hole6putts`,
             AVG(`round`.`hole7putts`) as `hole7putts`,
             AVG(`round`.`hole8putts`) as `hole8putts`,
             AVG(`round`.`hole9putts`) as `hole9putts`,
             AVG(`round`.`hole10putts`) as `hole10putts`,
             AVG(`round`.`hole11putts`) as `hole11putts`,
             AVG(`round`.`hole12putts`) as `hole12putts`,
             AVG(`round`.`hole13putts`) as `hole13putts`,
             AVG(`round`.`hole14putts`) as `hole14putts`,
             AVG(`round`.`hole15putts`) as `hole15putts`,
             AVG(`round`.`hole16putts`) as `hole16putts`,
             AVG(`round`.`hole17putts`) as `hole17putts`,
             AVG(`round`.`hole18putts`) as `hole18putts`,
             AVG(`round`.`totalputts`) as `totalputts`,
             AVG(`round`.`totalputtsfront9`) as `totalputtsfront9`,
             AVG(`round`.`totalputtsback9`) as `totalputtsback9`,
             AVG(`round`.`total0putts`) as `total0putts`,
             AVG(`round`.`total1putts`) as `total1putts`,
             AVG(`round`.`total2putts`) as `total2putts`,
             AVG(`round`.`total3putts`) as `total3putts`,
             AVG(`round`.`total4putts`) as `total4putts`,
             AVG(`round`.`hole1fir`) as `hole1fir`,
             AVG(`round`.`hole2fir`) as `hole2fir`,
             AVG(`round`.`hole3fir`) as `hole3fir`,
             AVG(`round`.`hole4fir`) as `hole4fir`,
             AVG(`round`.`hole5fir`) as `hole5fir`,
             AVG(`round`.`hole6fir`) as `hole6fir`,
             AVG(`round`.`hole7fir`) as `hole7fir`,
             AVG(`round`.`hole8fir`) as `hole8fir`,
             AVG(`round`.`hole9fir`) as `hole9fir`,
             AVG(`round`.`hole10fir`) as `hole10fir`,
             AVG(`round`.`hole11fir`) as `hole11fir`,
             AVG(`round`.`hole12fir`) as `hole12fir`,
             AVG(`round`.`hole13fir`) as `hole13fir`,
             AVG(`round`.`hole14fir`) as `hole14fir`,
             AVG(`round`.`hole15fir`) as `hole15fir`,
             AVG(`round`.`hole16fir`) as `hole16fir`,
             AVG(`round`.`hole17fir`) as `hole17fir`,
             AVG(`round`.`hole18fir`) as `hole18fir`,
             AVG(`round`.`totalfir`) as `totalfir`,
             AVG(`round`.`totalfirhitcentre`) as `totalfirhitcentre`,
             AVG(`round`.`totalfirhitleft`) as `totalfirhitleft`,
             AVG(`round`.`totalfirhitright`) as `totalfirhitright`,
             AVG(`round`.`totalfirhitshort`) as `totalfirhitshort`,
             AVG(`round`.`totalfirmissleft`) as `totalfirmissleft`,
             AVG(`round`.`totalfirmissright`) as `totalfirmissright`,
             AVG(`round`.`totalfirmissshort`) as `totalfirmissshort`,
             AVG(`round`.`totalfirfront9`) as `totalfirfront9`,
             AVG(`round`.`totalfirhitcentrefront9`) as `totalfirhitcentrefront9`,
             AVG(`round`.`totalfirhitleftfront9`) as `totalfirhitleftfront9`,
             AVG(`round`.`totalfirhitrightfront9`) as `totalfirhitrightfront9`,
             AVG(`round`.`totalfirhitshortfront9`) as `totalfirhitshortfront9`,
             AVG(`round`.`totalfirmissleftfront9`) as `totalfirmissleftfront9`,
             AVG(`round`.`totalfirmissrightfront9`) as `totalfirmissrightfront9`,
             AVG(`round`.`totalfirmissshortfront9`) as `totalfirmissshortfront9`,
             AVG(`round`.`totalfirback9`) as `totalfirback9`,
             AVG(`round`.`totalfirhitcentreback9`) as `totalfirhitcentreback9`,
             AVG(`round`.`totalfirhitleftback9`) as `totalfirhitleftback9`,
             AVG(`round`.`totalfirhitrightback9`) as `totalfirhitrightback9`,
             AVG(`round`.`totalfirhitshortback9`) as `totalfirhitshortback9`,
             AVG(`round`.`totalfirmissleftback9`) as `totalfirmissleftback9`,
             AVG(`round`.`totalfirmissrightback9`) as `totalfirmissrightback9`,
             AVG(`round`.`totalfirmissshortback9`) as `totalfirmissshortback9`,
             AVG(`round`.`possiblefir`) as `possiblefir`,
             AVG(`round`.`possiblefirfront9`) as `possiblefirfront9`,
             AVG(`round`.`possiblefirback9`) as `possiblefirback9`,
             SUM(`round`.`totalscore`) as `sumtotalscore`,
             SUM(`round`.`totalscorefront9`) as `sumtotalscorefront9`,
             SUM(`round`.`totalscoreback9`) as `sumtotalscoreback9`,
             SUM(`round`.`albatrosses`) as `sumalbatrosses`,
             SUM(`round`.`eagles`) as `sumeagles`,
             SUM(`round`.`holeinones`) as `sumholeinones`,
             SUM(`round`.`birdies`) as `sumbirdies`,
             SUM(`round`.`pars`) as `sumpars`,
             SUM(`round`.`bogeys`) as `sumbogeys`,
             SUM(`round`.`doubles`) as `sumdoubles`,
             SUM(`round`.`other`) as `sumother`,
             SUM(`round`.`totalputts`) as `sumtotalputts`,
             SUM(`round`.`totalputtsfront9`) as `sumtotalputtsfront9`,
             SUM(`round`.`totalputtsback9`) as `sumtotalputtsback9`,
             SUM(`round`.`total0putts`) as `sumtotal0putts`,
             SUM(`round`.`total1putts`) as `sumtotal1putts`,
             SUM(`round`.`total2putts`) as `sumtotal2putts`,
             SUM(`round`.`total3putts`) as `sumtotal3putts`,
             SUM(`round`.`total4putts`) as `sumtotal4putts`,
             SUM(`round`.`totalpenalties`) as `sumtotalpenalties`,
             SUM(`round`.`totalpenaltiesfront9`) as `sumtotalpenaltiesfront9`,
             SUM(`round`.`totalpenaltiesback9`) as `sumtotalpenaltiesback9`,
             SUM(`round`.`totalfir`) as `sumtotalfir`,
             SUM(`round`.`totalfirhitcentre`) as `sumtotalfirhitcentre`,
             SUM(`round`.`totalfirhitleft`) as `sumtotalfirhitleft`,
             SUM(`round`.`totalfirhitright`) as `sumtotalfirhitright`,
             SUM(`round`.`totalfirhitshort`) as `sumtotalfirhitshort`,
             SUM(`round`.`totalfirmissleft`) as `sumtotalfirmissleft`,
             SUM(`round`.`totalfirmissright`) as `sumtotalfirmissright`,
             SUM(`round`.`totalfirmissshort`) as `sumtotalfirmissshort`,
             SUM(`round`.`totalfirfront9`) as `sumtotalfirfront9`,
             SUM(`round`.`totalfirhitcentrefront9`) as `sumtotalfirhitcentrefront9`,
             SUM(`round`.`totalfirhitleftfront9`) as `sumtotalfirhitleftfront9`,
             SUM(`round`.`totalfirhitrightfront9`) as `sumtotalfirhitrightfront9`,
             SUM(`round`.`totalfirhitshortfront9`) as `sumtotalfirhitshortfront9`,
             SUM(`round`.`totalfirmissleftfront9`) as `sumtotalfirmissleftfront9`,
             SUM(`round`.`totalfirmissrightfront9`) as `sumtotalfirmissrightfront9`,
             SUM(`round`.`totalfirmissshortfront9`) as `sumtotalfirmissshortfront9`,
             SUM(`round`.`totalfirback9`) as `sumtotalfirback9`,
             SUM(`round`.`totalfirhitcentreback9`) as `sumtotalfirhitcentreback9`,
             SUM(`round`.`totalfirhitleftback9`) as `sumtotalfirhitleftback9`,
             SUM(`round`.`totalfirhitrightback9`) as `sumtotalfirhitrightback9`,
             SUM(`round`.`totalfirhitshortback9`) as `sumtotalfirhitshortback9`,
             SUM(`round`.`totalfirmissleftback9`) as `sumtotalfirmissleftback9`,
             SUM(`round`.`totalfirmissrightback9`) as `sumtotalfirmissrightback9`,
             SUM(`round`.`totalfirmissshortback9`) as `sumtotalfirmissshortback9`,
             SUM(`round`.`possiblefir`) as `sumpossiblefir`,
             SUM(`round`.`possiblefirfront9`) as `sumpossiblefirfront9`,
             SUM(`round`.`possiblefirback9`) as `sumpossiblefirback9`,
             AVG(`round`.`hole1gir`) as `hole1gir`,
             AVG(`round`.`hole2gir`) as `hole2gir`,
             AVG(`round`.`hole3gir`) as `hole3gir`,
             AVG(`round`.`hole4gir`) as `hole4gir`,
             AVG(`round`.`hole5gir`) as `hole5gir`,
             AVG(`round`.`hole6gir`) as `hole6gir`,
             AVG(`round`.`hole7gir`) as `hole7gir`,
             AVG(`round`.`hole8gir`) as `hole8gir`,
             AVG(`round`.`hole9gir`) as `hole9gir`,
             AVG(`round`.`hole10gir`) as `hole10gir`,
             AVG(`round`.`hole11gir`) as `hole11gir`,
             AVG(`round`.`hole12gir`) as `hole12gir`,
             AVG(`round`.`hole13gir`) as `hole13gir`,
             AVG(`round`.`hole14gir`) as `hole14gir`,
             AVG(`round`.`hole15gir`) as `hole15gir`,
             AVG(`round`.`hole16gir`) as `hole16gir`,
             AVG(`round`.`hole17gir`) as `hole17gir`,
             AVG(`round`.`hole18gir`) as `hole18gir`,
             AVG(`round`.`totalgir`) as `totalgir`,
             AVG(`round`.`totalgirhitpin`) as `totalgirhitpin`,
             AVG(`round`.`totalgirhitleft`) as `totalgirhitleft`,
             AVG(`round`.`totalgirhitright`) as `totalgirhitright`,
             AVG(`round`.`totalgirhitshort`) as `totalgirhitshort`,
             AVG(`round`.`totalgirhitlong`) as `totalgirhitlong`,
             AVG(`round`.`totalgirmissleft`) as `totalgirmissleft`,
             AVG(`round`.`totalgirmissright`) as `totalgirmissright`,
             AVG(`round`.`totalgirmissshort`) as `totalgirmissshort`,
             AVG(`round`.`totalgirmisslong`) as `totalgirmisslong`,
             AVG(`round`.`totalgirfront9`) as `totalgirfront9`,
             AVG(`round`.`totalgirhitpinfront9`) as `totalgirhitpinfront9`,
             AVG(`round`.`totalgirhitleftfront9`) as `totalgirhitleftfront9`,
             AVG(`round`.`totalgirhitrightfront9`) as `totalgirhitrightfront9`,
             AVG(`round`.`totalgirhitshortfront9`) as `totalgirhitshortfront9`,
             AVG(`round`.`totalgirhitlongfront9`) as `totalgirhitlongfront9`,
             AVG(`round`.`totalgirmissleftfront9`) as `totalgirmissleftfront9`,
             AVG(`round`.`totalgirmissrightfront9`) as `totalgirmissrightfront9`,
             AVG(`round`.`totalgirmissshortfront9`) as `totalgirmissshortfront9`,
             AVG(`round`.`totalgirmisslongfront9`) as `totalgirmisslongfront9`,
             AVG(`round`.`totalgirback9`) as `totalgirback9`,
             AVG(`round`.`totalgirhitpinback9`) as `totalgirhitpinback9`,
             AVG(`round`.`totalgirhitleftback9`) as `totalgirhitleftback9`,
             AVG(`round`.`totalgirhitrightback9`) as `totalgirhitrightback9`,
             AVG(`round`.`totalgirhitshortback9`) as `totalgirhitshortback9`,
             AVG(`round`.`totalgirhitlongback9`) as `totalgirhitlongback9`,
             AVG(`round`.`totalgirmissleftback9`) as `totalgirmissleftback9`,
             AVG(`round`.`totalgirmissrightback9`) as `totalgirmissrightback9`,
             AVG(`round`.`totalgirmissshortback9`) as `totalgirmissshortback9`,
             AVG(`round`.`totalgirmisslongback9`) as `totalgirmisslongback9`,
             AVG(`round`.`totalpar3`) as `totalpar3`,
             AVG(`round`.`totalpar3greenhit`) as `totalpar3greenhit`,
             AVG(`round`.`totalpar3greenmiss`) as `totalpar3greenmiss`,
             SUM(`round`.`totalgir`) as `sumtotalgir`,
             SUM(`round`.`totalgirhitpin`) as `sumtotalgirhitpin`,
             SUM(`round`.`totalgirhitleft`) as `sumtotalgirhitleft`,
             SUM(`round`.`totalgirhitright`) as `sumtotalgirhitright`,
             SUM(`round`.`totalgirhitshort`) as `sumtotalgirhitshort`,
             SUM(`round`.`totalgirhitlong`) as `sumtotalgirhitlong`,
             SUM(`round`.`totalgirmissleft`) as `sumtotalgirmissleft`,
             SUM(`round`.`totalgirmissright`) as `sumtotalgirmissright`,
             SUM(`round`.`totalgirmissshort`) as `sumtotalgirmissshort`,
             SUM(`round`.`totalgirmisslong`) as `sumtotalgirmisslong`,
             SUM(`round`.`totalgirfront9`) as `sumtotalgirfront9`,
             SUM(`round`.`totalgirhitpinfront9`) as `sumtotalgirhitpinfront9`,
             SUM(`round`.`totalgirhitleftfront9`) as `sumtotalgirhitleftfront9`,
             SUM(`round`.`totalgirhitrightfront9`) as `sumtotalgirhitrightfront9`,
             SUM(`round`.`totalgirhitshortfront9`) as `sumtotalgirhitshortfront9`,
             SUM(`round`.`totalgirhitlongfront9`) as `sumtotalgirhitlongfront9`,
             SUM(`round`.`totalgirmissleftfront9`) as `sumtotalgirmissleftfront9`,
             SUM(`round`.`totalgirmissrightfront9`) as `sumtotalgirmissrightfront9`,
             SUM(`round`.`totalgirmissshortfront9`) as `sumtotalgirmissshortfront9`,
             SUM(`round`.`totalgirmisslongfront9`) as `sumtotalgirmisslongfront9`,
             SUM(`round`.`totalgirback9`) as `sumtotalgirback9`,
             SUM(`round`.`totalgirhitpinback9`) as `sumtotalgirhitpinback9`,
             SUM(`round`.`totalgirhitleftback9`) as `sumtotalgirhitleftback9`,
             SUM(`round`.`totalgirhitrightback9`) as `sumtotalgirhitrightback9`,
             SUM(`round`.`totalgirhitshortback9`) as `sumtotalgirhitshortback9`,
             SUM(`round`.`totalgirhitlongback9`) as `sumtotalgirhitlongback9`,
             SUM(`round`.`totalgirmissleftback9`) as `sumtotalgirmissleftback9`,
             SUM(`round`.`totalgirmissrightback9`) as `sumtotalgirmissrightback9`,
             SUM(`round`.`totalgirmissshortback9`) as `sumtotalgirmissshortback9`,
             SUM(`round`.`totalpar3`) as `sumtotalpar3`,
             SUM(`round`.`totalpar3greenhit`) as `sumtotalpar3greenhit`,
             SUM(`round`.`totalpar3greenmiss`) as `sumtotalpar3greenmiss`,
             SUM(`round`.`totalgirmisslongback9`) as `sumtotalgirmisslongback9`,
             AVG(`round`.`totalsandsave`) as `totalsandsave`,
             AVG(`round`.`totalsandsavehit`) as `totalsandsavehit`,
             SUM(`round`.`totalsandsave`) as `sumtotalsandsave`,
             SUM(`round`.`totalsandsavehit`) as `sumtotalsandsavehit`,
             AVG(`round`.`totalupdown`) as `totalupdown`,
             AVG(`round`.`totalupdownhit`) as `totalupdownhit`,
             SUM(`round`.`totalupdown`) as `sumtotalupdown`,
             SUM(`round`.`totalupdownhit`) as `sumtotalupdownhit`
             FROM
             `round`
            WHERE 
             `round`.`userid` = '" . $this->userid . "'
            ";
            if ($statsonly) {
            	$sql .= "
	            AND 
	             `round`.`stats` = 1
				";
            }
			if ($courseid) {
            	$sql .= "
				AND 
				`round`.`courseid` = '" . $courseid . "'
				";
			}
//			$sql .= "
//			GROUP BY
//			`round`.`courseid`
//		";
		$result = $this->db->query($sql);
		$diffs = array('totalscorediff', 'totalscorefront9diff', 'totalscoreback9diff');
		foreach ($diffs as $v) {
			if (round($result[0][$v]) > 0.49) {
				$result[0][$v] = round($result[0][$v]) . ' over par';
			} elseif(round($result[0][$v]) < -0.49) {
				$result[0][$v] = (round($result[0][$v]) / -1) . ' under par';
			} else {
				$result[0][$v] = 'even par';
			} 
		}
		return $result[0];
	}
	
	function getLastTrackedRound() {
		$sql = "
			SELECT 
				*
			FROM
				`round`
			WHERE
				`round`.`userid` = '" . $this->userid . "'
			AND
				`round`.`trackhandicap` = 1
			ORDER BY 
				`round`.`date` DESC, `round`.`added` DESC
			LIMIT 1
		";
		$result = $this->db->query($sql); 
		return $result[0]['date'];
	}
	
	
	function getHandicapRounds() {
		$sql = "
			SELECT 
				*
			FROM
				`round`
			WHERE
				`round`.`userid` = '" . $this->userid . "'
			AND
				`round`.`trackhandicap` = 1
			ORDER BY 
				`round`.`date` DESC, `round`.`added` DESC
			LIMIT 3
		";
		return $this->db->query($sql);
	}
	
	function getNumHandicapRounds() {
		$sql = "
			SELECT 
				COUNT(*) as `numrounds`
			FROM
				`round`
			WHERE
				`round`.`userid` = '" . $this->userid . "'
			AND
				`round`.`trackhandicap` = 1
		";
		$result = $this->db->query($sql);
		return $result[0]['numrounds'];
	}
	
	function getHandicapDetails() {
		$sql = "
			SELECT 
				MIN(`handicapbefore`) as `min`,
				MAX(`date`) as `date`,
				MAX(`handicapafter`) as `max`,
				MAX(`handicapbefore` - `handicapafter`) as `maxreduction`
			FROM
				`round`
			WHERE
				`round`.`userid` = '" . $this->userid . "'
			AND
				`round`.`handicapbefore` > 0
			AND
				`round`.`handicapafter` > 0
			ORDER BY 
				`round`.`date` DESC
		";
		$result = $this->db->query($sql);
		$min = $result[0]['min'];
		$max = $result[0]['max'];
		$maxreduction = $result[0]['maxreduction'];
		$updated = $result[0]['date'];
		// min date
		$sql = "
			SELECT 
				`date` 
			FROM
				`round`
			WHERE
				`round`.`userid` = '" . $this->userid . "'
			AND
				ROUND(`round`.`handicapbefore`, 1) = '" . round($min, 1) . "'
			ORDER BY 
				`round`.`date` DESC
		";
		$result = $this->db->query($sql);
		$mindate = $result[0]['date'];
		// max date
		$sql = "
			SELECT 
				`date` 
			FROM
				`round`
			WHERE
				`round`.`userid` = '" . $this->userid . "'
			AND
				ROUND(`round`.`handicapafter`, 1) = '" . round($max, 1) . "'
			ORDER BY 
				`round`.`date` DESC
		";
		$result = $this->db->query($sql);
		$maxdate = $result[0]['date'];		
		return array(
			'current' => $this->handicap,
			'updated' => $updated,
			'min' => $min,
			'mindate' => $mindate,
			'max' => $max,
			'maxdate' => $maxdate,
			'maxreduction' => $maxreduction,
		);
	}
	
	function count() {
		return count($this->listUsers());
	}

	function listLogins() {
		$sql = "SELECT
             *
            FROM
             `login`
            WHERE
             `userid` = '" . $this->userid . "'
            ORDER BY 
             `date` DESC
            LIMIT 
             30
            ";
		return $this->db->query($sql);
	}

}