<?php

Class favourite {

	public $db;

	private $favouriteid;
	private $userid;
	private $courseid;

	function __construct() {
		$this->db = new Database();
	}

	public function get_favouriteid() {
		return $this->favouriteid;
	}

	public function get_userid() {
		return $this->userid;
	}

	public function get_courseid() {
		return $this->courseid;
	}

	public function set_userid($input) {
		if (is_numeric($input)) {
			$this->userid = $input;
		} else {
			throw new Exception('System Error: User ID not numeric.');
		}
	}

	public function set_courseid($input) {
		if (is_numeric($input)) {
			$this->courseid = $input;
		} else {
			throw new Exception('System Error: Course ID not numeric.');
		}
	}

	public function find_by_id($id) {
		$sql = "SELECT
             *
            FROM
             `favourite`
            WHERE
             `favouriteid` = '".$id."'
            ";
		if ($result = $this->db->query($sql)) {
			$this->populate($result);
			return true;
		} else {
			throw new Exception('Unable to find \'' . addslashes($id) . '\'');
		}
	}

	private function populate($result) {
		$this->favouriteid = stripslashes($result[0]['favouriteid']);
		$this->userid = stripslashes($result[0]['userid']);
		$this->courseid = stripslashes($result[0]['courseid']);
	}

	public function get_details() {
		return array(
		'favouriteid' => $this->favouriteid,
		'userid' => $this->userid,
		'courseid' => $this->courseid
		);
	}

	public function list_all() {
		$sql = "SELECT
				* 
				FROM 
				`favourite`
				INNER JOIN
				`course`
				ON (`course`.`courseid` = `favourite`.`courseid`)
				ORDER BY 
				`course`.`name`
				";
		return $this->db->query($sql);
	}

	public function list_all_paginated($offset, $length = 20) {
		$sql = "SELECT
				* 
				FROM 
				`favourite`
				INNER JOIN
				`course`
				ON (`course`.`courseid` = `favourite`.`courseid`)
				ORDER BY 
				`course`.`name`
				";
		return $this->db->paginationQuery($sql, $offset, $length);
	}

	public function list_by_userid($userid = false) {
		$sql = "SELECT
				`course`.*,
				`favourite`.`favouriteid`,
				`club`.`name` as `clubname`, 
				`club`.`county` as `county`, 
				`club`.`urlname` as `cluburlname`, 
				`region`.`name` as `regionname`, 
				`country`.`name` as `countryname`,
				COUNT(`tee`.`teeid`) as `teecount`
				FROM 
				`course` 
				INNER JOIN 
				`favourite` 
				ON 
				`course`.`courseid` = `favourite`.`courseid`
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
				LEFT JOIN
				`tee` 
				ON
				(`tee`.`courseid` = `course`.`courseid`)
				WHERE
				`userid` = " . $userid . " 
				GROUP BY
				`course`.`courseid`
				ORDER BY 
				`course`.`name`
				";
		return $this->db->query($sql);
	}

	public function insert() {
		$sql = "INSERT
				INTO
				`favourite` 
				(
				`userid`,
				`courseid`
				)
				VALUES
				(
				'".mysql_real_escape_string($this->userid)."',
				'".mysql_real_escape_string($this->courseid)."'
				)
				";

		return $this->regionid = $this->db->insert($sql);
	}

	public function update() {
		$sql = "UPDATE
				`favourite`
				SET
				`userid` = '".mysql_real_escape_string($this->userid)."',
				`courseid` = '".mysql_real_escape_string($this->courseid)."'
				WHERE
				`regionid` = '".mysql_real_escape_string($this->regionid)."'
				LIMIT 
				1
				";
		return $this->db->update($sql);
	}

	public function delete() {
		$sql = "DELETE FROM
              `favourite`
            WHERE
              `favouriteid` = '" . $this->favouriteid . "'
            LIMIT 
              1
            ";
		return $this->db->update($sql);
	}

}

?>