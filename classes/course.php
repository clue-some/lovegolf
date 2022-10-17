<?php

Class course {

	public $db;

	private $courseid;
	private $clubid;
	private $holes;
	private $name;
	private $verified;
	private $bookingurl;
	private $urlname;
	private $regionid;
	private $address;
	private $postcode;
	private $telephone;
	private $email;
	private $website;
	private $enabled;
	private $modified;

	function __construct() {
		$this->db = new Database();
	}

	public function get_courseid() {
		return $this->courseid;
	}

	public function get_clubid() {
		return $this->clubid;
	}

	public function get_name() {
		return $this->name;
	}

	public function get_verified() {
		return $this->verified;
	}

	public function get_bookingurl() {
		return $this->bookingurl;
	}

	public function get_urlname() {
		return $this->urlname;
	}

	public function get_regionid() {
		return $this->regionid;
	}

	public function get_enabled() {
		return $this->modified;
	}

	public function get_modified() {
		return $this->modified;
	}

	public function set_clubid($input) {
		if (is_numeric($input)) {
			$this->clubid = $input;
		} else {
			throw new Exception('System Error: Club ID not numeric.');
		}
	}

	public function set_name($input) {
		if (strlen($input) >= 2) {
			$this->name = ucwords($input);
			$this->urlname = strtolower(str_replace(' ', '-', preg_replace('/[^a-zA-Z0-9\s-]/', '', $input)));
		} else {
			throw new Exception('You must enter a name.');
		}
	}

	public function set_holes($input) {
		if (is_numeric($input)) {
			$this->holes = $input;
		} else {
			throw new Exception('System Error: Holes not numeric.');
		}
	}
	
	public function set_regionid($input) {
		if (is_numeric($input)) {
			$this->regionid = $input;
		} else {
			throw new Exception('System Error: Region ID not numeric.');
		}
	}

	public function set_verified($state = true) {
		if ($state) {
			$this->verified = true;
		} else {
			$this->verified = false;
		}
	}
	
	public function set_bookingurl($input) {
		$this->bookingurl = strtolower($input);
	}

	public function set_address($input) {
		$this->address = ucwords($input);
	}

	public function set_postcode($input) {
		$this->postcode = strtoupper($input);
	}

	public function set_telephone($input) {
		$this->telephone = $input;
	}

	public function set_email($input) {
		$this->email = $input;
	}

	public function set_website($input) {
		$this->website = $input;
	}

	public function set_enabled($state = true) {
		if ($state) {
			$this->enabled = true;
		} else {
			$this->enabled = false;
		}
	}

	public function find_by_id($id) {
		$sql = "SELECT
             *
            FROM
             `course`
            WHERE
             `courseid` = '".mysql_real_escape_string($id)."'
            ";
		if ($result = $this->db->query($sql)) {
			$this->populate($result);
			return true;
		} else {
			throw new Exception('Unable to find course \'' . addslashes($id) . '\'');
		}
	}

	public function find_by_name($name) {
		$sql = "SELECT
             *
            FROM
             `course`
            WHERE
             `name` = '".mysql_real_escape_string($name)."'
            ";
		if ($result = $this->db->query($sql)) {
			$this->populate($result);
			return true;
		} else {
			throw new Exception('Unable to find \'' . addslashes($name) . '\'');
		}
	}
	
	public function find_by_urlname($urlname) {
		$sql = "SELECT
             *
            FROM
             `course`
            WHERE
             `urlname` = '".mysql_real_escape_string($urlname)."'
            ";
		if ($result = $this->db->query($sql)) {
			$this->populate($result);
			return true;
		} else {
			throw new Exception('Unable to find \'' . addslashes($urlname) . '\'');
		}
	}
	
	public function exists_by_name($name) {
		$sql = "SELECT
             *
            FROM
             `course`
            WHERE
             `name` = '".mysql_real_escape_string($name)."'
            ";
		if ($result = $this->db->query($sql)) {
			return true;
		}
		return false;		
	}
	
	public function exists_by_name_clubid($name, $clubid) {
		$sql = "SELECT
             *
            FROM
             `course`
            WHERE
             `name` = '".mysql_real_escape_string($name)."'
            AND
             `clubid` = '".mysql_real_escape_string($clubid)."'
            ";
		if ($result = $this->db->query($sql)) {
			return $result[0]['courseid'];
		}
		return false;	
	}

	private function populate($result) {
		$this->courseid = stripslashes($result[0]['courseid']);
		$this->clubid = stripslashes($result[0]['clubid']);
		$this->holes = stripslashes($result[0]['holes']);
		$this->name = stripslashes($result[0]['name']);
		$this->verified = stripslashes($result[0]['verified']);
		$this->bookingurl = stripslashes($result[0]['bookingurl']);
		$this->urlname = stripslashes($result[0]['urlname']);
		$this->address = stripslashes($result[0]['address']);
		$this->postcode = stripslashes($result[0]['postcode']);
		$this->telephone = stripslashes($result[0]['telephone']);
		$this->email = stripslashes($result[0]['email']);
		$this->website = stripslashes($result[0]['website']);
		$this->regionid = stripslashes($result[0]['regionid']);
		$this->enabled = stripslashes($result[0]['enabled']);
		$this->modified = stripslashes($result[0]['modified']);
	}

	public function get_details() {
		return array(
		'courseid' => $this->courseid,
		'clubid' => $this->clubid,
		'holes' => $this->holes,
		'name' => $this->name,
		'verified' => $this->verified,
		'bookingurl' => $this->bookingurl,
		'urlname' => $this->urlname,
		'address' => $this->address,
		'postcode' => $this->postcode,
		'telephone' => $this->telephone,
		'email' => $this->email,
		'website' => $this->website,
		'regionid' => $this->regionid,
		'enabled' => $this->enabled,
		'modified' => $this->modified
		);
	}

	public function list_recent($limit = 20) {
		$sql = "SELECT
				`course`.*,
				`region`.`name` as `regionname`, 
				`country`.`name` as `countryname`
				FROM 
				`round` 
				LEFT JOIN
				`course` 
				ON
				(`course`.`courseid` = `round`.`courseid`)
				LEFT JOIN
				`club`
				ON
				(`course`.`clubid` = `club`.`clubid`) 
				LEFT JOIN
				`region` 
				ON
				(`club`.`regionid` = `region`.`regionid`)
				LEFT JOIN
				`country` 
				ON
				(`region`.`countryid` = `country`.`countryid`)
				GROUP BY
				`course`.`courseid`
				ORDER BY 
				`round`.`date` DESC
				LIMIT " . $limit . "
				";
		return $this->db->query($sql);
	}

	public function list_random($limit) {
		$sql = "SELECT
				`course`.*,
				`region`.`name` as `regionname`, 
				`country`.`name` as `countryname`
				FROM 
				`course` 
				LEFT JOIN
				`club`
				ON
				(`course`.`clubid` = `club`.`clubid`) 
				LEFT JOIN
				`region` 
				ON
				(`club`.`regionid` = `region`.`regionid`)
				LEFT JOIN
				`country` 
				ON
				(`region`.`countryid` = `country`.`countryid`)
				GROUP BY
				`course`.`courseid`
				ORDER BY 
				RAND()
				LIMIT " . $limit . "
				";
		return $this->db->query($sql);
	}

	public function list_all($letter = false) {
		$sql = "SELECT
				`course`.*,
				`region`.`name` as `regionname`, 
				`country`.`name` as `countryname`
				FROM 
				`course` 
				LEFT JOIN
				`club`
				ON
				(`course`.`clubid` = `club`.`clubid`) 
				LEFT JOIN
				`region` 
				ON
				(`club`.`regionid` = `region`.`regionid`)
				LEFT JOIN
				`country` 
				ON
				(`region`.`countryid` = `country`.`countryid`)
				";
		if ($letter) {
			$sql .="
				WHERE
				`course`.`name` LIKE '" . strtoupper($letter) . "%'
			";
		}
		$sql .= "
				GROUP BY
				`course`.`courseid`
				ORDER BY 
				`course`.`name`
				LIMIT 200
				";
		return $this->db->query($sql);
	}

	public function list_by_clubid($clubid) {
		$sql = "SELECT
				`course`.*,
				`region`.`name` as `regionname`, 
				`country`.`name` as `countryname`
				FROM 
				`course`
				LEFT JOIN
				`club`
				ON
				(`course`.`clubid` = `club`.`clubid`) 
				LEFT JOIN
				`region` 
				ON
				(`club`.`regionid` = `region`.`regionid`)
				LEFT JOIN
				`country` 
				ON
				(`region`.`countryid` = `country`.`countryid`)
				WHERE
				`course`.`clubid` = '" .$clubid . "'
				GROUP BY
				`course`.`courseid`
				ORDER BY 
				`course`.`name`
				LIMIT 50
				";
		return $this->db->query($sql);
	}

	public function list_all_paginated($letter = false, $offset = 0, $length = 50) {
		$sql = "SELECT
				`course`.*,
				`region`.`name` as `regionname`, 
				`country`.`name` as `countryname`
				FROM 
				`course` 
				LEFT JOIN
				`region` 
				ON
				(`course`.`regionid` = `region`.`regionid`)
				LEFT JOIN
				`country` 
				ON
				(`region`.`countryid` = `country`.`countryid`)
				";
		if ($letter) {
			$sql .="
				WHERE
				`course`.`name` LIKE '" . strtoupper($letter) . "%'
			";
		}
		$sql .= "
				GROUP BY
				`course`.`courseid`
				ORDER BY 
				`course`.`name`
				LIMIT 999
				";
		return $this->db->paginationQuery($sql, $offset, $length);
	}

	public function list_all_by_regionid($regionid = false) {
		$sql = "SELECT
				`course`.* 
				FROM 
				`course` 
				INNER JOIN 
				`domaincourse` 
				ON 
				`course`.`courseid` = `domaincourse`.`courseid` 
				";
		if ($domainid) {
			$sql .="
				WHERE
				`domaincourse`.`domainid` = '". $domainid ."'
				";
		}
		$sql .= "
				ORDER BY 
				`domaincourse`.`order`, `course`.`name`
				LIMIT 200
				";
		if ($result = $this->db->query($sql)) {
			foreach($result as $k => $v) {
				$result[$k]['image'] = $this->getImageUrl($v['courseid']);
			}
		}
		return $result;
	}

	public function list_all_by_regionid_paginated($offset, $length = 20, $regionid = false) {
		$sql = "SELECT
				`course`.*, 
				COUNT(`domain`.`domainid`) AS `activedomains`,
				`domain`.`pagetitle` AS `domainpagetitle`
				FROM 
				`course` 
				LEFT JOIN 
				`domaincourse` 
				ON 
				`course`.`courseid` = `domaincourse`.`courseid` 
				LEFT JOIN 
				`domain` 
				ON 
				`domain`.`domainid` = `domaincourse`.`domainid` 

				";
		if ($domainid) {
			$sql .="
				WHERE
				`domaincourse`.`domainid` = '". $domainid ."'
				";
		}
		$sql .= "
				GROUP BY
				`course`.`courseid` 
				ORDER BY 
				`domaincourse`.`order`, `course`.`name`
				LIMIT 200
				";
		return $this->db->paginationQuery($sql, $offset, $length);
	}

	public function search($query) {
		$sql = "SELECT
				`course`.*,
				`club`.`name` as `clubname`, 
				`club`.`urlname` as `cluburlname`, 
				`region`.`name` as `regionname`, 
				`country`.`name` as `countryname`
				FROM 
				`course` 
				LEFT JOIN
				`club` 
				ON
				(`club`.`clubid` = `course`.`clubid`)
				LEFT JOIN
				`region` 
				ON
				(`club`.`regionid` = `region`.`regionid`)
				LEFT JOIN
				`country` 
				ON
				(`region`.`countryid` = `country`.`countryid`)
				WHERE
				(
				`course`.`name` LIKE '%" . $query . "%'
				OR
				`club`.`name` LIKE '%" . $query . "%'
				OR
				`club`.`address` LIKE '%" . $query . "%'
				OR
				`club`.`postcode` LIKE '%" . $query . "%'
				OR
				`region`.`name` LIKE '%" . $query . "%'
				OR
				`country`.`name` LIKE '%" . $query . "%'
				)
				GROUP BY
				`course`.`courseid`
				ORDER BY 
				`club`.`name`, `course`.`name`
				LIMIT 99
				";
		return $this->db->query($sql);
	}	
	
	public function list_tees() {
		$sql = "SELECT
				* 
				FROM 
				`tee`
				WHERE
				`courseid` = '" . $this->courseid . "' 
				ORDER BY 
				`colour`
				";
		return $this->db->query($sql);
	}

	public function insert() {
		$sql = "INSERT
				INTO
				`course` 
				(
				`clubid`,
				`name`,
				`holes`,
				`verified`,
				`urlname`,
				`enabled`,
				`modified`
				)
				VALUES
				(
				'".mysql_real_escape_string($this->clubid)."',
				'".mysql_real_escape_string($this->name)."',
				'".mysql_real_escape_string($this->holes)."',
				'".mysql_real_escape_string($this->verified)."',
				'".mysql_real_escape_string($this->urlname)."',
				'".mysql_real_escape_string($this->enabled)."',
				NOW()
				)
				";

		return $this->courseid = $this->db->insert($sql);
	}

	public function update() {
		$sql = "UPDATE
				`course`
				SET
				`clubid` = '".mysql_real_escape_string($this->clubid)."',
				`name` = '".mysql_real_escape_string($this->name)."',
				`holes` = '".mysql_real_escape_string($this->holes)."',
				`verified` = '".mysql_real_escape_string($this->verified)."',
				`urlname` = '".mysql_real_escape_string($this->urlname)."',
				`enabled` = '".mysql_real_escape_string($this->enabled)."',
				`modified` = NOW()
				WHERE
				`courseid` = '".mysql_real_escape_string($this->courseid)."'
				LIMIT 
				1
				";
		return $this->db->update($sql);
	}

	public function delete() {
		$sql = "DELETE FROM
              `course`
            WHERE
              `courseid` = '" . $this->courseid . "'
            LIMIT 
              1
            ";
		return $this->db->update($sql);
	}

}

?>