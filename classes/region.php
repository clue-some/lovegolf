<?php

Class region {

	public $db;

	private $regionid;
	private $name;
	private $countryid;
	private $enabled;
	private $modified;

	function __construct() {
		$this->db = new Database();
	}

	public function get_regionid() {
		return $this->regionid;
	}

	public function get_name() {
		return $this->name;
	}

	public function get_countryid() {
		return $this->countryid;
	}

	public function get_enabled() {
		return $this->modified;
	}

	public function get_modified() {
		return $this->modified;
	}

	public function set_name($input) {
		if (strlen($input) >= 2) {
			$this->name = $input;
		} else {
			throw new Exception('You must enter a name.');
		}
	}

	public function set_countryid($input) {
		if (is_numeric($input)) {
			$this->countryid = $input;
		} else {
			throw new Exception('System Error: Country ID not numeric.');
		}
	}

	public function set_enabled($state = true) {
		if ($state) {
			$this->enabled = true;
		} else {
			$this->enabled = false;
		}
	}

	public function set_modified($input) {
		$this->Modified = $input;
	}

	public function find_by_id($id) {
		$sql = "SELECT
             *
            FROM
             `region`
            WHERE
             `regionid` = '".$id."'
            ";
		if ($result = $this->db->query($sql)) {
			$this->populate($result);
			return true;
		} else {
			throw new Exception('Unable to find region \'' . addslashes($id) . '\'');
		}
	}

	public function find_by_name($name) {
		$sql = "SELECT
             *
            FROM
             `region`
            WHERE
             `name` = '".$name."'
            ";
		if ($result = $this->db->query($sql)) {
			$this->populate($result);
			return true;
		} else {
			throw new Exception('Unable to find \'' . addslashes($id) . '\'');
		}
	}

	public function exists_by_name($name) {
		$sql = "SELECT
             *
            FROM
             `region`
            WHERE
             `name` = '".$name."'
            ";
		if ($result = $this->db->query($sql)) {
			return true;
		}
		return false;		
	}

	private function populate($result) {
		$this->regionid = stripslashes($result[0]['regionid']);
		$this->name = stripslashes($result[0]['name']);
		$this->countryid = stripslashes($result[0]['countryid']);
		$this->enabled = stripslashes($result[0]['enabled']);
		$this->modified = stripslashes($result[0]['modified']);
	}

	public function get_details() {
		return array(
		'regionid' => $this->regionid,
		'name' => $this->name,
		'countryid' => $this->countryid,
		'enabled' => $this->enabled,
		'modified' => $this->modified
		);
	}

	public function list_all() {
		$sql = "SELECT
				* 
				FROM 
				`region` 
				ORDER BY 
				`name`
				";
		return $this->db->query($sql);
	}

	public function list_all_paginated($offset, $length = 20) {
		$sql = "SELECT
				* 
				FROM 
				`region` 
				ORDER BY 
				`name`
				";
		return $this->db->paginationQuery($sql, $offset, $length);
	}

	public function list_all_by_countryid($countryid = false) {
		$sql = "SELECT
				`region`.* 
				FROM 
				`region` 
				INNER JOIN 
				`domainregion` 
				ON 
				`region`.`regionid` = `domainregion`.`regionid` 
				";
		if ($domainid) {
			$sql .="
				WHERE
				`domainregion`.`domainid` = '". $domainid ."'
				";
		}
		$sql .= "
				ORDER BY 
				`domainregion`.`order`, `region`.`name`
				";
		if ($result = $this->db->query($sql)) {
			foreach($result as $k => $v) {
				$result[$k]['image'] = $this->getImageUrl($v['regionid']);
			}
		}
		return $result;
	}

	public function list_all_by_countryid_paginated($offset, $length = 20, $countryid = false) {
		$sql = "SELECT
				`region`.*, 
				COUNT(`domain`.`domainid`) AS `activedomains`,
				`domain`.`pagetitle` AS `domainpagetitle`
				FROM 
				`region` 
				LEFT JOIN 
				`domainregion` 
				ON 
				`region`.`regionid` = `domainregion`.`regionid` 
				LEFT JOIN 
				`domain` 
				ON 
				`domain`.`domainid` = `domainregion`.`domainid` 

				";
		if ($domainid) {
			$sql .="
				WHERE
				`domainregion`.`domainid` = '". $domainid ."'
				";
		}
		$sql .= "
				GROUP BY
				`region`.`regionid` 
				ORDER BY 
				`domainregion`.`order`, `region`.`name`
				";
		return $this->db->paginationQuery($sql, $offset, $length);
	}

	public function insert() {
		$sql = "INSERT
				INTO
				`region` 
				(
				`name`,
				`countryid`,
				`enabled`,
				`modified`
				)
				VALUES
				(
				'".mysql_real_escape_string($this->name)."',
				'".mysql_real_escape_string($this->countryid)."',
				'".mysql_real_escape_string($this->enabled)."',
				NOW()
				)
				";

		return $this->regionid = $this->db->insert($sql);
	}

	public function update() {
		$sql = "UPDATE
				`region`
				SET
				`name` = '".mysql_real_escape_string($this->name)."',
				`countryid` = '".mysql_real_escape_string($this->countryid)."',
				`enabled` = '".mysql_real_escape_string($this->enabled)."',
				`modified` = NOW()
				WHERE
				`regionid` = '".mysql_real_escape_string($this->regionid)."'
				LIMIT 
				1
				";
		return $this->db->update($sql);
	}

	public function delete() {
		$sql = "DELETE FROM
              `region`
            WHERE
              `regionid` = '" . $this->regionid . "'
            LIMIT 
              1
            ";
		return $this->db->update($sql);
	}

}

?>