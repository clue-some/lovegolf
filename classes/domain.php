<?php

Class Domain {

	public $db;

	private $domainid;
	private $hostname;
	private $name;
	private $pagetitle;
	private $metakeywords;
	private $metadescription;
	private $contactemail;
	private $aliasfor;

	function __construct() {
		$this->db = new Database();
	}

	public function getDomainid() {
		return $this->domainid;
	}

	public function getHostname() {
		return $this->hostname;
	}

	public function getName() {
		return $this->name;
	}

	public function getPagetitle() {
		return $this->pagetitle;
	}

	public function getMetakeywords() {
		return $this->metakeywords;
	}

	public function getMetadescription() {
		return $this->metadescription;
	}

	public function getContactemail() {
		return $this->contactemail;
	}

	public function getAliasfor() {
		return $this->aliasfor;
	}

	function setPagetitle($input) {
		if (strlen($input) >= 2) {
			$this->pagetitle = $input;
		} else {
			throw new Exception('You must enter a page title.');
		}
	}

	function setMetakeywords($input) {
		$this->metakeywords = $input;
	}

	function setMetadescription($input) {
		$this->metadescription = $input;
	}

	function setContactemail($input) {
		if (ereg(REGEX_EMAIL, $input)) {
			$this->contactemail = addslashes($input);
		} else {
			throw new Exception('The email you entered was not a valid email address.');
		}
	}

	public function findById($id) {
		$sql = "SELECT
             *
            FROM
             `domain`
            WHERE
             `domainid` = '".$id."'
            ";
		if ($result = $this->db->query($sql)) {
			$this->populate($result);
			return true;
		} else {
			throw new Exception('Unable to find \'' . addslashes($id) . '\'');
		}
	}

	public function findByHostName($hostname) {
		$sql = "SELECT
             *
            FROM
             `domain`
            WHERE
             `hostname` = '".$hostname."'
            ";
		if ($result = $this->db->query($sql)) {
			$this->populate($result);
			return true;
		} else {
			throw new Exception('Unable to find \'' . addslashes($hostname) . '\'');
		}
	}

	private function populate($result) {
		$this->domainid = stripslashes($result[0]['domainid']);
		$this->hostname = stripslashes($result[0]['hostname']);
		$this->name = stripslashes($result[0]['name']);
		$this->pagetitle = stripslashes($result[0]['pagetitle']);
		$this->metakeywords = stripslashes($result[0]['metakeywords']);
		$this->metadescription = stripslashes($result[0]['metadescription']);
		$this->contactemail = stripslashes($result[0]['contactemail']);
		$this->aliasfor = stripslashes($result[0]['aliasfor']);
	}

	public function getDetails() {
		return array(
		'domainid' => $this->domainid,
		'hostname' => $this->hostname,
		'name' => $this->name,
		'pagetitle' => $this->pagetitle,
		'metakeywords' => $this->metakeywords,
		'metadescription' => $this->metadescription,
		'contactemail' => $this->contactemail,
		'aliasfor' => $this->aliasfor
		);
	}

	public function listDomains() {
		$sql = "SELECT
				`domain`.*, COUNT(`domain`.`domainid`) -1 AS `activepages` 
				FROM 
				`domain` 
				LEFT JOIN 
				`domainpage` 
				ON 
				`domain`.`domainid` = `domainpage`.`domainid` 
				LEFT JOIN 
				`page` 
				ON 
				`page`.`pageid` = `domainpage`.`pageid` 
				WHERE
				`domain`.`aliasfor` = 0
				GROUP BY 
				`domain`.`domainid` 
				ORDER BY 
				`domain`.`aliasfor`, `domain`.`hostname`
				";
		return $this->db->query($sql);
	}

	public function listDomainsPaginated($offset, $length = 20) {
		$sql = "SELECT
				`domain`.*, COUNT(`domain`.`domainid`) -1 AS `activepages` 
				FROM 
				`domain` 
				LEFT JOIN 
				`domainpage` 
				ON 
				`domain`.`domainid` = `domainpage`.`domainid` 
				LEFT JOIN 
				`page` 
				ON 
				`page`.`pageid` = `domainpage`.`pageid` 
				GROUP BY 
				`domain`.`domainid` 
				ORDER BY 
				`domain`.`aliasfor`, `domain`.`hostname`
				";
		return $this->db->paginationQuery($sql, $offset, $length);
	}

	function update() {
		$sql = "UPDATE
              `domain`
            SET
              `pagetitle` = '". mysql_real_escape_string($this->pagetitle) ."',
              `metakeywords` = '". mysql_real_escape_string($this->metakeywords) ."',
              `metadescription` = '". mysql_real_escape_string($this->metadescription) ."',
              `contactemail` = '". mysql_real_escape_string($this->contactemail) ."',
              `modified` = NOW()
            WHERE
              `domainid` = '". $this->domainid ."'
            LIMIT 
              1   
            ";
		$this->log[] = array('debug', 'About to update user');
		$this->db->update($sql);
		return true;
	}

}

?>