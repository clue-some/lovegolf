<?php

class DatabaseException extends Exception {

	private $mysql_error;
	private $sql;

	function __construct($message, $mysql_error = false, $sql = false) {

		$this->mysql_error = $mysql_error;
		$this->sql = $sql;

		parent::__construct($message, '1');
	}

	function getMysqlError() {
		return $this->mysql_error;
	}

	function getSQL() {
		return $this->sql;
	}

}

/**
 * Generic Database Class for PHP/MySQL Database Connectivity
 * @author Chris Wheeler
 * @author PJIS - updated to use the mysqli API procedural style
 * @throws DatabaseException
 *
 */
class Database {

	private $link; // Database connection

	public $message;
	public $insertid;
	public $sql;
	public $mysql_error;
	public $affectedrows;

	public $numrows;
	//public $rows;      // PJIS

	/* For Pagination */
	public $numpages;
	public $pagelength;
	public $currentpage = 1;

	/**
    * Establishes connection to the database
    *
    * @return null
    */
	function __construct() {
	    $this->link = @mysqli_connect(MYSQL_HOSTNAME, MYSQL_USERNAME, MYSQL_PASSWORD, MYSQL_DATABASE);
	    /* check connection */
	    if (mysqli_connect_errno()) {
	        throw new DatabaseException('Unable to connect to the database server.', '(' . mysqli_connect_errno() . ') '
	                                                                                     . mysqli_connect_error());
	    }
	    //PJIS set the character set so that mysqli_real_escape_string works
	    if (!$this->link->set_charset("utf8"))
	        throw new DatabaseException("Unable to set the charset", '(' . mysqli_connect_errno() . ') '
	            . mysqli_connect_error());
	}

	/**
	 * Executes SQL queries
	 * PJIS: no SQL Injection protection
	 *
	 * @param string $sql
	 * @return array
	 */
	function query($sql) {
	    $rows = [];
	    $this->sql = $sql;
	    if ($dbresult = @mysqli_query($this->link, $sql)) {
	        $this->numrows = @mysqli_num_rows($dbresult);
	        while ($row = @mysqli_fetch_assoc($dbresult)) {
	            foreach($row as $k => $v) {
	                $row[$k] = stripslashes($v);
	            }
	            $rows[] = $row;
	        }
	        mysqli_free_result($dbresult);
	        if ($rows) {
	            return $this->stripslashes_r($rows);
	        }
	        return false;
	    } else {
	        throw new DatabaseException('Database Error. (Query) ' . mysqli_error($this->link) . ' : ' . $sql,
	            mysqli_error($this->link), $sql);
	    }
	}
	
	/**
	 * Executes SQL prepared queries
	 * PJIS: with SQL Injection protection
	 *
	 * @param string $sql
	 * @param string $param
	 * @return array
	 */
	function prepared_query($sql, $param) {
	    $rows = [];
	    $this->sql = $sql;
	    if ($stmt = $this->link->prepare($sql)) {
	        $stmt->bind_param("s", mysqli_real_escape_string($this->link, $param));
    	    $stmt->execute();
	        if ($dbresult = $stmt->get_result()) {
	            $this->numrows = $stmt->num_rows;
	            while ($row = $dbresult->fetch_assoc()) {
	                foreach($row as $k => $v) {
	                    $row[$k] = stripslashes($v);
	                }
	                $rows[] = $row;
	            }
	            $stmt->free_result();
	            $stmt->close();
	            if ($rows) {
	                return $this->stripslashes_r($rows);
	            }
	        }
	        return false;
	    } else {
	        throw new DatabaseException('Database Error. (Prepared Query) ' . mysqli_error($this->link) . ' : ' . $sql,
	            mysqli_error($this->link), $sql);
	    }
	}
	
	function paginationQuery($sql, $offset = 0, $pagelength = 20) {
		$this->pagelength = $pagelength;
		$results = $this->query($sql);
		$total = $this->numrows;
		$this->numpages = ceil($this->numrows / $this->pagelength);
		return ($results ? array_slice($results, $offset, $this->pagelength) : 0);
	}

	function getPages($currentpage = 1) {
		$this->currentpage = ($currentpage ? $currentpage : 1);
		$enabled = 0;
		if ($this->currentpage > 1) {
			$enabled = 1;
		}
		$pages[] = array(
		'number' => ($this->currentpage - 1),
		'name' => '<',
		'offset' => ($this->currentpage - 2) * $this->pagelength,
		'enabled' => $enabled
		);
		$i = 1;
		for ($p = 0; $p < $this->numpages; $p++) {
			$enabled = 0;
			if ($this->currentpage <> ($p + 1)) {
				$enabled = 1;
			}
			$pages[] = array(
			'number' => $i,
			'name' => $i,
			'offset' => $p * $this->pagelength,
			'enabled' => $enabled
			);
			$i++;
		}
		$enabled = 0;
		if ($this->currentpage < $this->numpages) {
			$enabled = 1;
		}
		$pages[] = array(
		'number' => ($this->currentpage + 1),
		'name' => '>',
		'offset' => ($this->currentpage) * $this->pagelength,
		'enabled' => $enabled
		);
		return $pages;
	}
	
	/**
    * Inserts a record 
    *
    * @param string $sql
    * @return boolean
    */
	function insert($sql) {
		$this->sql = $sql;
		if (@mysqli_query($sql)) {
			$this->insertid = @mysqli_insert_id();
			return $this->insertid;
		} else {
			throw new DatabaseException('Database Error. (Insert) ' . mysqli_error() . ' : ' . $sql, mysqli_error(), 
			    $sql);
		}
	}

	/**
	 * Inserts a record with a prepared statement
	 * SQL Injection protected
	 *
	 * @param string $sql
	 * @param string $paramn, n from 1 to 10.
	 * @return boolean
	 */
	function prepared_insert($sql, $param1=0,    $param2=null, $param3=null, $param4=null,
	                               $param5=null, $param6=null, $param7=null, $param8=null) {
	    $this->sql = $sql;
	    if ($stmt = $this->link->prepare($sql)) {
    	    $stmt->bind_param("issssssi",
    	        mysqli_real_escape_string($this->link, $param1),
    	        mysqli_real_escape_string($this->link, $param2),
    	        mysqli_real_escape_string($this->link, $param3),
    	        mysqli_real_escape_string($this->link, $param4),
    	        mysqli_real_escape_string($this->link, $param5),
    	        mysqli_real_escape_string($this->link, $param6),
    	        mysqli_real_escape_string($this->link, $param7),
    	        mysqli_real_escape_string($this->link, $param8));
    	    $stmt->execute();
    	    $this->insertid = $stmt->insert_id;
    	    $stmt->free_result();
    	    if ($stmt->close())
    	        return $this->insertid;
    	    else
    	        return false;
    	        
	    } else {
	        throw new DatabaseException('Database Error. (Prepared Insert) ' . mysqli_error() . ' : ' .
	            $sql, mysqli_error(), $sql);
	    }
	}
	
	/**
	 * Updates a record or multiple records
	 *
	 * @param string $sql
	 * @return boolean
	 */
	function update($sql) {
	    $this->sql = $sql;
	    if (@mysqli_query($sql) && !mysqli_error()) {
	        return 1;
	    } else {
	        throw new DatabaseException('Database Error. (Update) ' . mysqli_error() . ' : ' . $sql, 
	            mysqli_error(), $sql);
	    }
	}
	
    /**
    * Prepared Updates to a record
    *
    * @param string $sql
    * @param string $pn, n from 1 to 29
    * @return boolean
    */
	function prepared_update($sql, $p1=null,  $p2=null,  $p3=null,  $p4=null,  $p5=null,  $p6=null,  $p7=null,
	                               $p8=null,  $p9=null,  $p10=null, $p11=null, $p12=null, $p13=null, $p14=null,
	                               $p15=null, $p16=null, $p17=null, $p18=null, $p19=null, $p20=null, $p21=null,
	                               $p22=null, $p23=null, $p24=null, $p25=null, $p26=null, $p27=null, $p28=null,
	                               $p29=null)
	{
        $this->sql = $sql;
		if ($stmt = $this->link->prepare($sql)) {
		    $stmt->bind_param("sssssssssssssssssssssssssssss", 
		        mysqli_real_escape_string($this->link, $p1),
		        mysqli_real_escape_string($this->link, $p2),
		        mysqli_real_escape_string($this->link, $p3),
		        mysqli_real_escape_string($this->link, $p4),
		        mysqli_real_escape_string($this->link, $p5),
		        mysqli_real_escape_string($this->link, $p6),
		        mysqli_real_escape_string($this->link, $p7),
		        mysqli_real_escape_string($this->link, $p8),
		        mysqli_real_escape_string($this->link, $p9),
		        mysqli_real_escape_string($this->link, $p10),
		        mysqli_real_escape_string($this->link, $p11),
		        mysqli_real_escape_string($this->link, $p12),
		        mysqli_real_escape_string($this->link, $p13),
		        mysqli_real_escape_string($this->link, $p14),
		        mysqli_real_escape_string($this->link, $p15),
		        mysqli_real_escape_string($this->link, $p16),
		        mysqli_real_escape_string($this->link, $p17),
		        mysqli_real_escape_string($this->link, $p18),
		        mysqli_real_escape_string($this->link, $p19),
		        mysqli_real_escape_string($this->link, $p20),
		        mysqli_real_escape_string($this->link, $p21),
		        mysqli_real_escape_string($this->link, $p22),
		        mysqli_real_escape_string($this->link, $p23),
		        mysqli_real_escape_string($this->link, $p24),
		        mysqli_real_escape_string($this->link, $p25),
		        mysqli_real_escape_string($this->link, $p26),
		        mysqli_real_escape_string($this->link, $p27),
		        mysqli_real_escape_string($this->link, $p28),
		        mysqli_real_escape_string($this->link, $p29));
		    $stmt->execute();
		    $stmt->free_result();
		    $stmt->close();
			return 1;
		} else {
			throw new DatabaseException('Database Error. (Prepared Update) ' . mysqli_error() . ' : ' . $sql, mysqli_error(), $sql);
		}
	}
	
	function stripslashes_r($array) {
		$array = is_array($array) ? array_map(array(&$this, 'stripslashes_r'), $array) : stripslashes($array);
		return $array;
	}

	function getSQL() {
		return $this->sql;
	}

	function __destruct() {
	    $this->mysql_error = mysqli_error($this->link);
	    $this->link->close();
	}

}