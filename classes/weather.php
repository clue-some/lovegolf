<?php

Class weather {

	public $db;

	private $weatherid;
	private $name;
	private $enabled;
	private $modified;

	function __construct() {
		$this->db = new Database();
	}

	public function get_weatherid() {
		return $this->weatherid;
	}

	public function get_name() {
		return $this->name;
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
             `weather`
            WHERE
             `weatherid` = '".$id."'
            ";
		if ($result = $this->db->query($sql)) {
			$this->populate($result);
			return true;
		} else {
			throw new Exception('Unable to find \'' . addslashes($id) . '\'');
		}
	}

	public function find_by_name($name) {
		$sql = "SELECT
             *
            FROM
             `weather`
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

	private function populate($result) {
		$this->weatherid = stripslashes($result[0]['weatherid']);
		$this->name = stripslashes($result[0]['name']);
		$this->enabled = stripslashes($result[0]['enabled']);
		$this->modified = stripslashes($result[0]['modified']);
	}

	public function get_details() {
		return array(
		'weatherid' => $this->weatherid,
		'name' => $this->name,
		'enabled' => $this->enabled,
		'modified' => $this->modified
		);
	}

	public function list_all() {
		$sql = "SELECT
				* 
				FROM 
				`weather` 
				ORDER BY 
				`name`
				";
		return $this->db->query($sql);
	}

	public function list_all_paginated($offset, $length = 20) {
		$sql = "SELECT
				* 
				FROM 
				`weather` 
				ORDER BY 
				`name`
				";
		return $this->db->paginationQuery($sql, $offset, $length);
	}

	public function insert() {
		$sql = "INSERT
				INTO
				`weather` 
				(
				`name`,
				`enabled`,
				`modified`
				)
				VALUES
				(
				'".mysql_real_escape_string($this->name)."',
				'".mysql_real_escape_string($this->enabled)."',
				NOW()
				)
				";

		return $this->weatherid = $this->db->insert($sql);
	}

	public function update() {
		$sql = "UPDATE
				`weather`
				SET
				`name` = '".mysql_real_escape_string($this->name)."',
				`enabled` = '".mysql_real_escape_string($this->enabled)."',
				`modified` = NOW()
				WHERE
				`weatherid` = '".mysql_real_escape_string($this->weatherid)."'
				LIMIT 
				1
				";
		return $this->db->update($sql);
	}

	public function delete() {
		$sql = "DELETE FROM
              `weather`
            WHERE
              `weatherid` = '" . $this->weatherid . "'
            LIMIT 
              1
            ";
		return $this->db->update($sql);
	}

}

?>