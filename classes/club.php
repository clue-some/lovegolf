<?php

Class club {

	public $db;

	private $clubid;
	private $name;
	private $verified;
	private $bookingurl;
	private $urlname;
	private $regionid;
	private $address;
	private $county;
	private $postcode;
	private $telephone;
	private $email;
	private $website;
	private $enabled;
	private $modified;

	function __construct() {
		$this->db = new Database();
	}

	public function get_clubid() {
		return $this->clubid;
	}

	public function get_name() {
		return $this->name;
	}

	public function get_county() {
		return $this->county;
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

	public function set_name($input) {
		if (strlen($input) >= 2) {
			$this->name = ucwords($input);
			$this->urlname = strtolower(str_replace(' ', '-', preg_replace('/[^a-zA-Z0-9\s-]/', '', $input)));
		} else {
			throw new Exception('You must enter a name.');
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

	public function set_county($input) {
		$this->county = ucwords($input);
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
             `club`
            WHERE
             `clubid` = '".mysql_real_escape_string($id)."'
            ";
		if ($result = $this->db->query($sql)) {
			$this->populate($result);
			return true;
		} else {
			throw new Exception('Unable to find club \'' . addslashes($id) . '\'');
		}
	}

	public function find_by_name($name) {
		$sql = "SELECT
             *
            FROM
             `club`
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
             `club`
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
             `club`
            WHERE
             `name` = '".mysql_real_escape_string($name)."'
            ";
		if ($result = $this->db->query($sql)) {
			return true;
		}
		return false;		
	}

	private function populate($result) {
		$this->clubid = stripslashes($result[0]['clubid']);
		$this->name = stripslashes($result[0]['name']);
		$this->verified = stripslashes($result[0]['verified']);
		$this->bookingurl = stripslashes($result[0]['bookingurl']);
		$this->urlname = stripslashes($result[0]['urlname']);
		$this->address = stripslashes($result[0]['address']);
		$this->county = stripslashes($result[0]['county']);
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
		'clubid' => $this->clubid,
		'name' => $this->name,
		'verified' => $this->verified,
		'bookingurl' => $this->bookingurl,
		'urlname' => $this->urlname,
		'address' => $this->address,
		'county' => $this->county,
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
				`club`.*,
				`region`.`name` as `regionname`, 
				`country`.`name` as `countryname`
				FROM 
				`round` 
				LEFT JOIN
				`club` 
				ON
				(`club`.`clubid` = `round`.`clubid`)
				LEFT JOIN
				`region` 
				ON
				(`club`.`regionid` = `region`.`regionid`)
				LEFT JOIN
				`country` 
				ON
				(`region`.`countryid` = `country`.`countryid`)
				GROUP BY
				`club`.`clubid`
				ORDER BY 
				`round`.`date` DESC
				LIMIT " . $limit . "
				";
		return $this->db->query($sql);
	}

	public function list_random($limit) {
		$sql = "SELECT	`club`.*,
                        `region`.`name` 	as `regionname`, 
                		`country`.`name` 	as `countryname`
                  FROM	`club` 
                  LEFT
                  JOIN	`region` 
                	ON (`club`.`regionid` = `region`.`regionid`)
                  LEFT
                  JOIN	`country` 
                	ON (`region`.`countryid` = `country`.`countryid`)
                 GROUP 	BY `club`.`clubid`
                 ORDER	BY RAND()
                 LIMIT	" . $limit;
		return $this->db->query($sql);
	}

	public function list_random_bookable($limit) {
		$sql = "SELECT
				`club`.*,
				`region`.`name` as `regionname`, 
				`country`.`name` as `countryname`
				FROM 
				`club` 
				LEFT JOIN
				`region` 
				ON
				(`club`.`regionid` = `region`.`regionid`)
				LEFT JOIN
				`country` 
				ON
				(`region`.`countryid` = `country`.`countryid`)
				WHERE
				LENGTH(`club`.`bookingurl`) > 1
				GROUP BY
				`club`.`clubid`
				ORDER BY 
				RAND()
				LIMIT " . $limit . "
				";
		return $this->db->query($sql);
	}

	public function list_all($letter = false) {
		$sql = "SELECT
				`club`.*,
				`region`.`name` as `regionname`, 
				`country`.`name` as `countryname`
				FROM 
				`club` 
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
				`club`.`name` LIKE '" . strtoupper($letter) . "%'
			";
		}
		$sql .= "
				GROUP BY
				`club`.`clubid`
				ORDER BY 
				`club`.`name`
				LIMIT 200
				";
		return $this->db->query($sql);
	}

	public function list_all_unlimited($letter = false) {
		$sql = "SELECT
				`club`.*,
				`region`.`name` as `regionname`, 
				`country`.`name` as `countryname`
				FROM 
				`club` 
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
				`club`.`name` LIKE '" . strtoupper($letter) . "%'
			";
		}
		$sql .= "
				GROUP BY
				`club`.`clubid`
				ORDER BY 
				`club`.`name`
				";
		return $this->db->query($sql);
	}

	public function list_all_unlimited_new($letter = false) {
		$sql = "SELECT
				`club`.*,
				`region`.`name` as `regionname`, 
				`country`.`name` as `countryname`
				FROM 
				`club` 
				LEFT JOIN
				`region` 
				ON
				(`club`.`regionid` = `region`.`regionid`)
				LEFT JOIN
				`country` 
				ON
				(`region`.`countryid` = `country`.`countryid`)
				WHERE
				`club`.`clubid` > 5194
				GROUP BY
				`club`.`clubid`
				ORDER BY 
				`club`.`name`
				";
		return $this->db->query($sql);
	}

	public function list_all_paginated($letter = false, $offset = 0, $length = 50) {
		$sql = "SELECT
				`club`.*,
				`region`.`name` as `regionname`, 
				`country`.`name` as `countryname`
				FROM 
				`club` 
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
				`club`.`name` LIKE '" . strtoupper($letter) . "%'
			";
		}
		$sql .= "
				GROUP BY
				`club`.`clubid`
				ORDER BY 
				`club`.`name`
				LIMIT 999
				";
		return $this->db->paginationQuery($sql, $offset, $length);
	}

	public function list_all_bookable_paginated($letter = false, $offset = 0, $length = 50) {
		$sql = "SELECT
				`club`.*,
				`region`.`name` as `regionname`, 
				`country`.`name` as `countryname`
				FROM 
				`club` 
				LEFT JOIN
				`region` 
				ON
				(`club`.`regionid` = `region`.`regionid`)
				LEFT JOIN
				`country` 
				ON
				(`region`.`countryid` = `country`.`countryid`)
				WHERE
				LENGTH(`club`.`bookingurl`) > 1				
				";
		if ($letter) {
			$sql .="
				AND
				`club`.`name` LIKE '" . strtoupper($letter) . "%'
			";
		}
		$sql .= "
				GROUP BY
				`club`.`clubid`
				ORDER BY 
				`club`.`name`
				LIMIT 999
				";
		return $this->db->paginationQuery($sql, $offset, $length);
	}

	public function list_all_wales_paginated($letter = false, $offset = 0, $length = 50) {
		$sql = "SELECT
				`club`.*,
				`region`.`name` as `regionname`, 
				`country`.`name` as `countryname`
				FROM 
				`club` 
				LEFT JOIN
				`region` 
				ON
				(`club`.`regionid` = `region`.`regionid`)
				LEFT JOIN
				`country` 
				ON
				(`region`.`countryid` = `country`.`countryid`)
				WHERE
				`club`.`clubid` > 5194 
				";
		if ($letter) {
			$sql .="
				AND
				`club`.`name` LIKE '" . strtoupper($letter) . "%'
			";
		}
		$sql .= "
				GROUP BY
				`club`.`clubid`
				ORDER BY 
				`club`.`name`
				LIMIT 999
				";
		return $this->db->paginationQuery($sql, $offset, $length);
	}

	public function list_all_by_regionid($regionid = false) {
		$sql = "SELECT
				`club`.* 
				FROM 
				`club` 
				INNER JOIN 
				`domainclub` 
				ON 
				`club`.`clubid` = `domainclub`.`clubid` 
				";
		if ($domainid) {
			$sql .="
				WHERE
				`domainclub`.`domainid` = '". $domainid ."'
				";
		}
		$sql .= "
				ORDER BY 
				`domainclub`.`order`, `club`.`name`
				LIMIT 200
				";
		if ($result = $this->db->query($sql)) {
			foreach($result as $k => $v) {
				$result[$k]['image'] = $this->getImageUrl($v['clubid']);
			}
		}
		return $result;
	}

	public function list_all_by_regionid_paginated($offset, $length = 20, $regionid = false) {
		$sql = "SELECT
				`club`.*, 
				COUNT(`domain`.`domainid`) AS `activedomains`,
				`domain`.`pagetitle` AS `domainpagetitle`
				FROM 
				`club` 
				LEFT JOIN 
				`domainclub` 
				ON 
				`club`.`clubid` = `domainclub`.`clubid` 
				LEFT JOIN 
				`domain` 
				ON 
				`domain`.`domainid` = `domainclub`.`domainid` 

				";
		if ($domainid) {
			$sql .="
				WHERE
				`domainclub`.`domainid` = '". $domainid ."'
				";
		}
		$sql .= "
				GROUP BY
				`club`.`clubid` 
				ORDER BY 
				`domainclub`.`order`, `club`.`name`
				LIMIT 200
				";
		return $this->db->paginationQuery($sql, $offset, $length);
	}

	public function search($query) {
		$sql = "SELECT
				`club`.*,
				`region`.`name` as `regionname`, 
				`country`.`name` as `countryname`
				FROM 
				`club` 
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
				`club`.`clubid`
				ORDER BY 
				`club`.`name`
				LIMIT 99
				";
		return $this->db->query($sql);
	}	

	public function search_bookable($query) {
		$sql = "SELECT
				`club`.*,
				`region`.`name` as `regionname`, 
				`country`.`name` as `countryname`
				FROM 
				`club` 
				LEFT JOIN
				`region` 
				ON
				(`club`.`regionid` = `region`.`regionid`)
				LEFT JOIN
				`country` 
				ON
				(`region`.`countryid` = `country`.`countryid`)
				WHERE
				LENGTH(`club`.`bookingurl`) > 1				
				AND
				(
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
				`club`.`clubid`
				ORDER BY 
				`club`.`name`
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
				`clubid` = '" . $this->clubid . "' 
				ORDER BY 
				`colour`
				";
		return $this->db->query($sql);
	}

	public function insert() {
		$sql = "INSERT
				INTO
				`club` 
				(
				`name`,
				`verified`,
				`bookingurl`,
				`urlname`,
				`address`,
				`county`,
				`postcode`,
				`telephone`,
				`email`,
				`website`,
				`regionid`,
				`enabled`,
				`modified`
				)
				VALUES
				(
				'".mysql_real_escape_string($this->name)."',
				'".mysql_real_escape_string($this->verified)."',
				'".mysql_real_escape_string($this->bookingurl)."',
				'".mysql_real_escape_string($this->urlname)."',
				'".mysql_real_escape_string($this->address)."',
				'".mysql_real_escape_string($this->county)."',
				'".mysql_real_escape_string($this->postcode)."',
				'".mysql_real_escape_string($this->telephone)."',
				'".mysql_real_escape_string($this->email)."',
				'".mysql_real_escape_string($this->website)."',
				'".mysql_real_escape_string($this->regionid)."',
				'".mysql_real_escape_string($this->enabled)."',
				NOW()
				)
				";

		return $this->clubid = $this->db->insert($sql);
	}

	public function update() {
		$sql = "UPDATE
				`club`
				SET
				`name` = '".mysql_real_escape_string($this->name)."',
				`verified` = '".mysql_real_escape_string($this->verified)."',
				`bookingurl` = '".mysql_real_escape_string($this->bookingurl)."',
				`urlname` = '".mysql_real_escape_string($this->urlname)."',
				`address` = '".mysql_real_escape_string($this->address)."',
				`county` = '".mysql_real_escape_string($this->county)."',
				`postcode` = '".mysql_real_escape_string($this->postcode)."',
				`telephone` = '".mysql_real_escape_string($this->telephone)."',
				`email` = '".mysql_real_escape_string($this->email)."',
				`website` = '".mysql_real_escape_string($this->website)."',
				`regionid` = '".mysql_real_escape_string($this->regionid)."',
				`enabled` = '".mysql_real_escape_string($this->enabled)."',
				`modified` = NOW()
				WHERE
				`clubid` = '".mysql_real_escape_string($this->clubid)."'
				LIMIT 
				1
				";
		return $this->db->update($sql);
	}

	public function delete() {
		$sql = "DELETE FROM
              `club`
            WHERE
              `clubid` = '" . $this->clubid . "'
            LIMIT 
              1
            ";
		return $this->db->update($sql);
	}

}

?>