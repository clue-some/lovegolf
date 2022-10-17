<?php

Class tee {

	public $db;

	private $teeid;
	private $verified;
	private $courseid;
	private $colour;
	private $courserating;
	private $slope;
	private $sss;
	
	private $hole1yards;
	private $hole2yards;
	private $hole3yards;
	private $hole4yards;
	private $hole5yards;
	private $hole6yards;
	private $hole7yards;
	private $hole8yards;
	private $hole9yards;
	private $hole10yards;
	private $hole11yards;
	private $hole12yards;
	private $hole13yards;
	private $hole14yards;
	private $hole15yards;
	private $hole16yards;
	private $hole17yards;
	private $hole18yards;
	
	private $totalyardsfront9;
	private $totalyardsback9;
	private $totalyards;
	
	private $hole1metres;
	private $hole2metres;
	private $hole3metres;
	private $hole4metres;
	private $hole5metres;
	private $hole6metres;
	private $hole7metres;
	private $hole8metres;
	private $hole9metres;
	private $hole10metres;
	private $hole11metres;
	private $hole12metres;
	private $hole13metres;
	private $hole14metres;
	private $hole15metres;
	private $hole16metres;
	private $hole17metres;
	private $hole18metres;
	
	private $totalmetresfront9;
	private $totalmetresback9;
	private $totalmetres;	
	
	private $hole1par;
	private $hole2par;
	private $hole3par;
	private $hole4par;
	private $hole5par;
	private $hole6par;
	private $hole7par;
	private $hole8par;
	private $hole9par;
	private $hole10par;
	private $hole11par;
	private $hole12par;
	private $hole13par;
	private $hole14par;
	private $hole15par;
	private $hole16par;
	private $hole17par;
	private $hole18par;
	
	private $totalparfront9;
	private $totalparback9;
	private $totalpar;	
	
	private $hole1si;
	private $hole2si;
	private $hole3si;
	private $hole4si;
	private $hole5si;
	private $hole6si;
	private $hole7si;
	private $hole8si;
	private $hole9si;
	private $hole10si;
	private $hole11si;
	private $hole12si;
	private $hole13si;
	private $hole14si;
	private $hole15si;
	private $hole16si;
	private $hole17si;
	private $hole18si;
	
	private $enabled;
	private $modified;

	function __construct() {
		$this->db = new Database();
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
		if ($format && !ereg($format, $value)) {
			throw new Exception($friendly_name . ' is not valid.');
		}
		$this->$column_name = $value;
	}	
	
	/* Get Methods */
	
	public function get_teeid() {
		return $this->teeid;
	}
	
	public function get_verified() {
		return $this->verified;
	}

	public function get_courseid() {
		return $this->courseid;
	}

	public function get_colour() {
		return $this->colour;
	}

	public function get_courserating() {
		return $this->courserating;
	}

	public function get_slope() {
		return $this->slope;
	}

	public function get_sss() {
		return $this->sss;
	}

	public function get_enabled() {
		return $this->modified;
	}

	public function get_modified() {
		return $this->modified;
	}

	/* Set Methods */
	
	public function set_courseid($input) {
		if (is_numeric($input)) {
			$this->courseid = $input;
		} else {
			throw new Exception('System Error. Invalid Course ID.');
		}
	}
	
	public function set_verified($state) {
		if ($state) {
			$this->verified = true;
		} else {
			$this->verified = false;
		}
	}
	
	public function set_colour($input) {
		if (strlen($input) >= 1) {
			$this->colour = $input;
		} else {
			throw new Exception('Colour must be at least 1 character in length.');
		}
	}
	
	public function set_courserating($input) {
		$this->courserating = $input;
	}
	
	public function set_slope($input) {
		$this->slope = $input;
	}
	
	public function set_sss($input) {
		$this->sss = $input;
	}
	
	public function set_hole1yards($input) {
		$this->hole1yards = trim($input);
	}
	
	public function set_hole2yards($input) {
		$this->hole2yards = trim($input);
	}
	
	public function set_hole3yards($input) {
		$this->hole3yards = trim($input);
	}
	
	public function set_hole4yards($input) {
		$this->hole4yards = trim($input);
	}
	
	public function set_hole5yards($input) {
		$this->hole5yards = trim($input);
	}
	
	public function set_hole6yards($input) {
		$this->hole6yards = trim($input);
	}
	
	public function set_hole7yards($input) {
		$this->hole7yards = trim($input);
	}
	
	public function set_hole8yards($input) {
		$this->hole8yards = trim($input);
	}
	
	public function set_hole9yards($input) {
		$this->hole9yards = trim($input);
	}
	
	public function set_hole10yards($input) {
		$this->hole10yards = trim($input);
	}
	
	public function set_hole11yards($input) {
		$this->hole11yards = trim($input);
	}
	
	public function set_hole12yards($input) {
		$this->hole12yards = trim($input);
	}
	
	public function set_hole13yards($input) {
		$this->hole13yards = trim($input);
	}
	
	public function set_hole14yards($input) {
		$this->hole14yards = trim($input);
	}
	
	public function set_hole15yards($input) {
		$this->hole15yards = trim($input);
	}
	
	public function set_hole16yards($input) {
		$this->hole16yards = trim($input);
	}
	
	public function set_hole17yards($input) {
		$this->hole17yards = trim($input);
	}
	
	public function set_hole18yards($input) {
		$this->hole18yards = trim($input);
	}
	
	public function set_totalyardsfront9($input) {
		$this->totalyardsfront9 = trim($input);
	}
	
	public function set_totalyardsback9($input) {
		$this->totalyardsback9 = trim($input);
	}
	
	public function set_totalyards($input) {
		$this->totalyards = trim($input);
	}
	
	public function set_hole1metres($input) {
		$this->hole1metres = trim($input);
	}
	
	public function set_hole2metres($input) {
		$this->hole2metres = trim($input);
	}
	
	public function set_hole3metres($input) {
		$this->hole3metres = trim($input);
	}
	
	public function set_hole4metres($input) {
		$this->hole4metres = trim($input);
	}
	
	public function set_hole5metres($input) {
		$this->hole5metres = trim($input);
	}
	
	public function set_hole6metres($input) {
		$this->hole6metres = trim($input);
	}
	
	public function set_hole7metres($input) {
		$this->hole7metres = trim($input);
	}
	
	public function set_hole8metres($input) {
		$this->hole8metres = trim($input);
	}
	
	public function set_hole9metres($input) {
		$this->hole9metres = trim($input);
	}
	
	public function set_hole10metres($input) {
		$this->hole10metres = trim($input);
	}
	
	public function set_hole11metres($input) {
		$this->hole11metres = trim($input);
	}
	
	public function set_hole12metres($input) {
		$this->hole12metres = trim($input);
	}
	
	public function set_hole13metres($input) {
		$this->hole13metres = trim($input);
	}
	
	public function set_hole14metres($input) {
		$this->hole14metres = trim($input);
	}
	
	public function set_hole15metres($input) {
		$this->hole15metres = trim($input);
	}
	
	public function set_hole16metres($input) {
		$this->hole16metres = trim($input);
	}
	
	public function set_hole17metres($input) {
		$this->hole17metres = trim($input);
	}
	
	public function set_hole18metres($input) {
		$this->hole18metres = trim($input);
	}
	
	public function set_totalmetresfront9($input) {
		$this->totalmetresfront9 = trim($input);
	}
	
	public function set_totalmetresback9($input) {
		$this->totalmetresback9 = trim($input);
	}
	
	public function set_totalmetres($input) {
		$this->totalmetres = trim($input);
	}
	
	public function set_hole1par($input) {
		$this->hole1par = trim($input);
	}
	
	public function set_hole2par($input) {
		$this->hole2par = trim($input);
	}
	
	public function set_hole3par($input) {
		$this->hole3par = trim($input);
	}
	
	public function set_hole4par($input) {
		$this->hole4par = trim($input);
	}
	
	public function set_hole5par($input) {
		$this->hole5par = trim($input);
	}
	
	public function set_hole6par($input) {
		$this->hole6par = trim($input);
	}
	
	public function set_hole7par($input) {
		$this->hole7par = trim($input);
	}
	
	public function set_hole8par($input) {
		$this->hole8par = trim($input);
	}
	
	public function set_hole9par($input) {
		$this->hole9par = trim($input);
	}
	
	public function set_hole10par($input) {
		$this->hole10par = trim($input);
	}
	
	public function set_hole11par($input) {
		$this->hole11par = trim($input);
	}
	
	public function set_hole12par($input) {
		$this->hole12par = trim($input);
	}
	
	public function set_hole13par($input) {
		$this->hole13par = trim($input);
	}
	
	public function set_hole14par($input) {
		$this->hole14par = trim($input);
	}
	
	public function set_hole15par($input) {
		$this->hole15par = trim($input);
	}
	
	public function set_hole16par($input) {
		$this->hole16par = trim($input);
	}
	
	public function set_hole17par($input) {
		$this->hole17par = trim($input);
	}
	
	public function set_hole18par($input) {
		$this->hole18par = trim($input);
	}
	
	public function set_totalparfront9($input) {
		$this->totalparfront9 = trim($input);
	}
	
	public function set_totalparback9($input) {
		$this->totalparback9 = trim($input);
	}
	
	public function set_totalpar($input) {
		$this->totalpar = trim($input);
	}
	
	public function set_hole1si($input) {
		$this->hole1si = trim($input);
	}
	
	public function set_hole2si($input) {
		$this->hole2si = trim($input);
	}
	
	public function set_hole3si($input) {
		$this->hole3si = trim($input);
	}
	
	public function set_hole4si($input) {
		$this->hole4si = trim($input);
	}
	
	public function set_hole5si($input) {
		$this->hole5si = trim($input);
	}
	
	public function set_hole6si($input) {
		$this->hole6si = trim($input);
	}
	
	public function set_hole7si($input) {
		$this->hole7si = trim($input);
	}
	
	public function set_hole8si($input) {
		$this->hole8si = trim($input);
	}
	
	public function set_hole9si($input) {
		$this->hole9si = trim($input);
	}
	
	public function set_hole10si($input) {
		$this->hole10si = trim($input);
	}
	
	public function set_hole11si($input) {
		$this->hole11si = trim($input);
	}
	
	public function set_hole12si($input) {
		$this->hole12si = trim($input);
	}
	
	public function set_hole13si($input) {
		$this->hole13si = trim($input);
	}
	
	public function set_hole14si($input) {
		$this->hole14si = trim($input);
	}
	
	public function set_hole15si($input) {
		$this->hole15si = trim($input);
	}
	
	public function set_hole16si($input) {
		$this->hole16si = trim($input);
	}
	
	public function set_hole17si($input) {
		$this->hole17si = trim($input);
	}
	
	public function set_hole18si($input) {
		$this->hole18si = trim($input);
	}
	
	public function set_enabled($state = true) {
		if ($state) {
			$this->enabled = true;
		} else {
			$this->enabled = false;
		}
	}
	
	public function set_modified($input) {
		$this->modified = $input;
	}
	
	/* Main Methods */
	
	public function find_by_id($id) {
		$sql = "SELECT
             *
            FROM
             `tee`
            WHERE
             `teeid` = '".$id."'
            ";
		if ($result = $this->db->query($sql)) {
			$this->populate($result);
			return true;
		} else {
			throw new Exception('Unable to find \'' . addslashes($id) . '\'');
		}
	}

	private function populate($result) {
		$this->teeid = stripslashes($result[0]['teeid']);
		$this->courseid = stripslashes($result[0]['courseid']);
		$this->verified = stripslashes($result[0]['verified']);
		$this->colour = stripslashes($result[0]['colour']);
		$this->courserating = stripslashes($result[0]['courserating']);
		$this->slope = stripslashes($result[0]['slope']);
		$this->sss = stripslashes($result[0]['sss']);
		$this->hole1yards = stripslashes($result[0]['hole1yards']);
		$this->hole2yards = stripslashes($result[0]['hole2yards']);
		$this->hole3yards = stripslashes($result[0]['hole3yards']);
		$this->hole4yards = stripslashes($result[0]['hole4yards']);
		$this->hole5yards = stripslashes($result[0]['hole5yards']);
		$this->hole6yards = stripslashes($result[0]['hole6yards']);
		$this->hole7yards = stripslashes($result[0]['hole7yards']);
		$this->hole8yards = stripslashes($result[0]['hole8yards']);
		$this->hole9yards = stripslashes($result[0]['hole9yards']);
		$this->hole10yards = stripslashes($result[0]['hole10yards']);
		$this->hole11yards = stripslashes($result[0]['hole11yards']);
		$this->hole12yards = stripslashes($result[0]['hole12yards']);
		$this->hole13yards = stripslashes($result[0]['hole13yards']);
		$this->hole14yards = stripslashes($result[0]['hole14yards']);
		$this->hole15yards = stripslashes($result[0]['hole15yards']);
		$this->hole16yards = stripslashes($result[0]['hole16yards']);
		$this->hole17yards = stripslashes($result[0]['hole17yards']);
		$this->hole18yards = stripslashes($result[0]['hole18yards']);
		$this->totalyardsfront9 = stripslashes($result[0]['totalyardsfront9']);
		$this->totalyardsback9 = stripslashes($result[0]['totalyardsback9']);
		$this->totalyards = stripslashes($result[0]['totalyards']);
		$this->hole1metres = stripslashes($result[0]['hole1metres']);
		$this->hole2metres = stripslashes($result[0]['hole2metres']);
		$this->hole3metres = stripslashes($result[0]['hole3metres']);
		$this->hole4metres = stripslashes($result[0]['hole4metres']);
		$this->hole5metres = stripslashes($result[0]['hole5metres']);
		$this->hole6metres = stripslashes($result[0]['hole6metres']);
		$this->hole7metres = stripslashes($result[0]['hole7metres']);
		$this->hole8metres = stripslashes($result[0]['hole8metres']);
		$this->hole9metres = stripslashes($result[0]['hole9metres']);
		$this->hole10metres = stripslashes($result[0]['hole10metres']);
		$this->hole11metres = stripslashes($result[0]['hole11metres']);
		$this->hole12metres = stripslashes($result[0]['hole12metres']);
		$this->hole13metres = stripslashes($result[0]['hole13metres']);
		$this->hole14metres = stripslashes($result[0]['hole14metres']);
		$this->hole15metres = stripslashes($result[0]['hole15metres']);
		$this->hole16metres = stripslashes($result[0]['hole16metres']);
		$this->hole17metres = stripslashes($result[0]['hole17metres']);
		$this->hole18metres = stripslashes($result[0]['hole18metres']);
		$this->totalmetresfront9 = stripslashes($result[0]['totalmetresfront9']);
		$this->totalmetresback9 = stripslashes($result[0]['totalmetresback9']);
		$this->totalmetres = stripslashes($result[0]['totalmetres']);
		$this->hole1par = stripslashes($result[0]['hole1par']);
		$this->hole2par = stripslashes($result[0]['hole2par']);
		$this->hole3par = stripslashes($result[0]['hole3par']);
		$this->hole4par = stripslashes($result[0]['hole4par']);
		$this->hole5par = stripslashes($result[0]['hole5par']);
		$this->hole6par = stripslashes($result[0]['hole6par']);
		$this->hole7par = stripslashes($result[0]['hole7par']);
		$this->hole8par = stripslashes($result[0]['hole8par']);
		$this->hole9par = stripslashes($result[0]['hole9par']);
		$this->hole10par = stripslashes($result[0]['hole10par']);
		$this->hole11par = stripslashes($result[0]['hole11par']);
		$this->hole12par = stripslashes($result[0]['hole12par']);
		$this->hole13par = stripslashes($result[0]['hole13par']);
		$this->hole14par = stripslashes($result[0]['hole14par']);
		$this->hole15par = stripslashes($result[0]['hole15par']);
		$this->hole16par = stripslashes($result[0]['hole16par']);
		$this->hole17par = stripslashes($result[0]['hole17par']);
		$this->hole18par = stripslashes($result[0]['hole18par']);
		$this->totalparfront9 = stripslashes($result[0]['totalparfront9']);
		$this->totalparback9 = stripslashes($result[0]['totalparback9']);
		$this->totalpar = stripslashes($result[0]['totalpar']);
		$this->hole1si = stripslashes($result[0]['hole1si']);
		$this->hole2si = stripslashes($result[0]['hole2si']);
		$this->hole3si = stripslashes($result[0]['hole3si']);
		$this->hole4si = stripslashes($result[0]['hole4si']);
		$this->hole5si = stripslashes($result[0]['hole5si']);
		$this->hole6si = stripslashes($result[0]['hole6si']);
		$this->hole7si = stripslashes($result[0]['hole7si']);
		$this->hole8si = stripslashes($result[0]['hole8si']);
		$this->hole9si = stripslashes($result[0]['hole9si']);
		$this->hole10si = stripslashes($result[0]['hole10si']);
		$this->hole11si = stripslashes($result[0]['hole11si']);
		$this->hole12si = stripslashes($result[0]['hole12si']);
		$this->hole13si = stripslashes($result[0]['hole13si']);
		$this->hole14si = stripslashes($result[0]['hole14si']);
		$this->hole15si = stripslashes($result[0]['hole15si']);
		$this->hole16si = stripslashes($result[0]['hole16si']);
		$this->hole17si = stripslashes($result[0]['hole17si']);
		$this->hole18si = stripslashes($result[0]['hole18si']);
		$this->enabled = stripslashes($result[0]['enabled']);
		$this->modified = stripslashes($result[0]['modified']);
	}

	public function get_details() {
		return array(
		'teeid' => $this->teeid,
		'courseid' => $this->courseid,
		'verified' => $this->verified,
		'colour' => $this->colour,
		'courserating' => $this->courserating,
		'slope' => $this->slope,
		'sss' => $this->sss,
		'hole1yards' => $this->hole1yards,
		'hole2yards' => $this->hole2yards,
		'hole3yards' => $this->hole3yards,
		'hole4yards' => $this->hole4yards,
		'hole5yards' => $this->hole5yards,
		'hole6yards' => $this->hole6yards,
		'hole7yards' => $this->hole7yards,
		'hole8yards' => $this->hole8yards,
		'hole9yards' => $this->hole9yards,
		'hole10yards' => $this->hole10yards,
		'hole11yards' => $this->hole11yards,
		'hole12yards' => $this->hole12yards,
		'hole13yards' => $this->hole13yards,
		'hole14yards' => $this->hole14yards,
		'hole15yards' => $this->hole15yards,
		'hole16yards' => $this->hole16yards,
		'hole17yards' => $this->hole17yards,
		'hole18yards' => $this->hole18yards,
		'totalyardsfront9' => $this->totalyardsfront9,
		'totalyardsback9' => $this->totalyardsback9,
		'totalyards' => $this->totalyards,		
		'hole1metres' => $this->hole1metres,
		'hole2metres' => $this->hole2metres,
		'hole3metres' => $this->hole3metres,
		'hole4metres' => $this->hole4metres,
		'hole5metres' => $this->hole5metres,
		'hole6metres' => $this->hole6metres,
		'hole7metres' => $this->hole7metres,
		'hole8metres' => $this->hole8metres,
		'hole9metres' => $this->hole9metres,
		'hole10metres' => $this->hole10metres,
		'hole11metres' => $this->hole11metres,
		'hole12metres' => $this->hole12metres,
		'hole13metres' => $this->hole13metres,
		'hole14metres' => $this->hole14metres,
		'hole15metres' => $this->hole15metres,
		'hole16metres' => $this->hole16metres,
		'hole17metres' => $this->hole17metres,
		'hole18metres' => $this->hole18metres,
		'totalmetresfront9' => $this->totalmetresfront9,
		'totalmetresback9' => $this->totalmetresback9,
		'totalmetres' => $this->totalmetres,		
		'hole1par' => $this->hole1par,
		'hole2par' => $this->hole2par,
		'hole3par' => $this->hole3par,
		'hole4par' => $this->hole4par,
		'hole5par' => $this->hole5par,
		'hole6par' => $this->hole6par,
		'hole7par' => $this->hole7par,
		'hole8par' => $this->hole8par,
		'hole9par' => $this->hole9par,
		'hole10par' => $this->hole10par,
		'hole11par' => $this->hole11par,
		'hole12par' => $this->hole12par,
		'hole13par' => $this->hole13par,
		'hole14par' => $this->hole14par,
		'hole15par' => $this->hole15par,
		'hole16par' => $this->hole16par,
		'hole17par' => $this->hole17par,
		'hole18par' => $this->hole18par,
		'totalparfront9' => $this->totalparfront9,
		'totalparback9' => $this->totalparback9,
		'totalpar' => $this->totalpar,		
		'hole1si' => $this->hole1si,
		'hole2si' => $this->hole2si,
		'hole3si' => $this->hole3si,
		'hole4si' => $this->hole4si,
		'hole5si' => $this->hole5si,
		'hole6si' => $this->hole6si,
		'hole7si' => $this->hole7si,
		'hole8si' => $this->hole8si,
		'hole9si' => $this->hole9si,
		'hole10si' => $this->hole10si,
		'hole11si' => $this->hole11si,
		'hole12si' => $this->hole12si,
		'hole13si' => $this->hole13si,
		'hole14si' => $this->hole14si,
		'hole15si' => $this->hole15si,
		'hole16si' => $this->hole16si,
		'hole17si' => $this->hole17si,
		'hole18si' => $this->hole18si,
		'enabled' => $this->enabled,
		'modified' => $this->modified
		);
	}

	public function list_tees() {
		$sql = "SELECT
				* 
				FROM 
				`tee` 
				ORDER BY 
				`teeid`
				";
		return $this->db->query($sql);
	}	
	
	public function calculate() {
		$this->totalyardsfront9 
			= $this->hole1yards 
			+ $this->hole2yards
			+ $this->hole3yards
			+ $this->hole4yards
			+ $this->hole5yards
			+ $this->hole6yards
			+ $this->hole7yards
			+ $this->hole8yards
			+ $this->hole9yards;
		$this->totalyardsback9 
			= $this->hole10yards 
			+ $this->hole11yards
			+ $this->hole12yards
			+ $this->hole13yards
			+ $this->hole14yards
			+ $this->hole15yards
			+ $this->hole16yards
			+ $this->hole17yards
			+ $this->hole18yards;
		$this->totalyards 
			= $this->totalyardsfront9 
			+ $this->totalyardsback9;			
		$this->totalmetresfront9 
			= $this->hole1metres 
			+ $this->hole2metres
			+ $this->hole3metres
			+ $this->hole4metres
			+ $this->hole5metres
			+ $this->hole6metres
			+ $this->hole7metres
			+ $this->hole8metres
			+ $this->hole9metres;
		$this->totalmetresback9 
			= $this->hole10metres 
			+ $this->hole11metres
			+ $this->hole12metres
			+ $this->hole13metres
			+ $this->hole14metres
			+ $this->hole15metres
			+ $this->hole16metres
			+ $this->hole17metres
			+ $this->hole18metres;
		$this->totalmetres 
			= $this->totalmetresfront9 
			+ $this->totalmetresback9;			
		$this->totalparfront9 
			= $this->hole1par 
			+ $this->hole2par
			+ $this->hole3par
			+ $this->hole4par
			+ $this->hole5par
			+ $this->hole6par
			+ $this->hole7par
			+ $this->hole8par
			+ $this->hole9par;
		$this->totalparback9 
			= $this->hole10par 
			+ $this->hole11par
			+ $this->hole12par
			+ $this->hole13par
			+ $this->hole14par
			+ $this->hole15par
			+ $this->hole16par
			+ $this->hole17par
			+ $this->hole18par;
		$this->totalpar 
			= $this->totalparfront9 
			+ $this->totalparback9;				
	}
	
	public function insert() {
		$sql = "INSERT
				INTO
				`tee` 
				(
				`courseid`,
				`verified`,
				`colour`,
				`courserating`,
				`slope`,
				`sss`,
				`hole1yards`,
				`hole2yards`,
				`hole3yards`,
				`hole4yards`,
				`hole5yards`,
				`hole6yards`,
				`hole7yards`,
				`hole8yards`,
				`hole9yards`,
				`hole10yards`,
				`hole11yards`,
				`hole12yards`,
				`hole13yards`,
				`hole14yards`,
				`hole15yards`,
				`hole16yards`,
				`hole17yards`,
				`hole18yards`,
				`totalyardsfront9`,
				`totalyardsback9`,
				`totalyards`,		
				`hole1metres`,
				`hole2metres`,
				`hole3metres`,
				`hole4metres`,
				`hole5metres`,
				`hole6metres`,
				`hole7metres`,
				`hole8metres`,
				`hole9metres`,
				`hole10metres`,
				`hole11metres`,
				`hole12metres`,
				`hole13metres`,
				`hole14metres`,
				`hole15metres`,
				`hole16metres`,
				`hole17metres`,
				`hole18metres`,
				`totalmetresfront9`,
				`totalmetresback9`,
				`totalmetres`,		
				`hole1par`,
				`hole2par`,
				`hole3par`,
				`hole4par`,
				`hole5par`,
				`hole6par`,
				`hole7par`,
				`hole8par`,
				`hole9par`,
				`hole10par`,
				`hole11par`,
				`hole12par`,
				`hole13par`,
				`hole14par`,
				`hole15par`,
				`hole16par`,
				`hole17par`,
				`hole18par`,
				`totalparfront9`,
				`totalparback9`,
				`totalpar`,		
				`hole1si`,
				`hole2si`,
				`hole3si`,
				`hole4si`,
				`hole5si`,
				`hole6si`,
				`hole7si`,
				`hole8si`,
				`hole9si`,
				`hole10si`,
				`hole11si`,
				`hole12si`,
				`hole13si`,
				`hole14si`,
				`hole15si`,
				`hole16si`,
				`hole17si`,
				`hole18si`,
				`enabled`,
				`modified`
				)
				VALUES
				(
				'".mysql_real_escape_string($this->courseid)."',
				'".mysql_real_escape_string($this->verified)."',
				'".mysql_real_escape_string($this->colour)."',
				'".mysql_real_escape_string($this->courserating)."',
				'".mysql_real_escape_string($this->slope)."',
				'".mysql_real_escape_string($this->sss)."',
				'".mysql_real_escape_string($this->hole1yards)."',
				'".mysql_real_escape_string($this->hole2yards)."',
				'".mysql_real_escape_string($this->hole3yards)."',
				'".mysql_real_escape_string($this->hole4yards)."',
				'".mysql_real_escape_string($this->hole5yards)."',
				'".mysql_real_escape_string($this->hole6yards)."',
				'".mysql_real_escape_string($this->hole7yards)."',
				'".mysql_real_escape_string($this->hole8yards)."',
				'".mysql_real_escape_string($this->hole9yards)."',
				'".mysql_real_escape_string($this->hole10yards)."',
				'".mysql_real_escape_string($this->hole11yards)."',
				'".mysql_real_escape_string($this->hole12yards)."',
				'".mysql_real_escape_string($this->hole13yards)."',
				'".mysql_real_escape_string($this->hole14yards)."',
				'".mysql_real_escape_string($this->hole15yards)."',
				'".mysql_real_escape_string($this->hole16yards)."',
				'".mysql_real_escape_string($this->hole17yards)."',
				'".mysql_real_escape_string($this->hole18yards)."',
				'".mysql_real_escape_string($this->totalyardsfront9)."',
				'".mysql_real_escape_string($this->totalyardsback9)."',
				'".mysql_real_escape_string($this->totalyards)."',		
				'".mysql_real_escape_string($this->hole1metres)."',
				'".mysql_real_escape_string($this->hole2metres)."',
				'".mysql_real_escape_string($this->hole3metres)."',
				'".mysql_real_escape_string($this->hole4metres)."',
				'".mysql_real_escape_string($this->hole5metres)."',
				'".mysql_real_escape_string($this->hole6metres)."',
				'".mysql_real_escape_string($this->hole7metres)."',
				'".mysql_real_escape_string($this->hole8metres)."',
				'".mysql_real_escape_string($this->hole9metres)."',
				'".mysql_real_escape_string($this->hole10metres)."',
				'".mysql_real_escape_string($this->hole11metres)."',
				'".mysql_real_escape_string($this->hole12metres)."',
				'".mysql_real_escape_string($this->hole13metres)."',
				'".mysql_real_escape_string($this->hole14metres)."',
				'".mysql_real_escape_string($this->hole15metres)."',
				'".mysql_real_escape_string($this->hole16metres)."',
				'".mysql_real_escape_string($this->hole17metres)."',
				'".mysql_real_escape_string($this->hole18metres)."',
				'".mysql_real_escape_string($this->totalmetresfront9)."',
				'".mysql_real_escape_string($this->totalmetresback9)."',
				'".mysql_real_escape_string($this->totalmetres)."',		
				'".mysql_real_escape_string($this->hole1par)."',
				'".mysql_real_escape_string($this->hole2par)."',
				'".mysql_real_escape_string($this->hole3par)."',
				'".mysql_real_escape_string($this->hole4par)."',
				'".mysql_real_escape_string($this->hole5par)."',
				'".mysql_real_escape_string($this->hole6par)."',
				'".mysql_real_escape_string($this->hole7par)."',
				'".mysql_real_escape_string($this->hole8par)."',
				'".mysql_real_escape_string($this->hole9par)."',
				'".mysql_real_escape_string($this->hole10par)."',
				'".mysql_real_escape_string($this->hole11par)."',
				'".mysql_real_escape_string($this->hole12par)."',
				'".mysql_real_escape_string($this->hole13par)."',
				'".mysql_real_escape_string($this->hole14par)."',
				'".mysql_real_escape_string($this->hole15par)."',
				'".mysql_real_escape_string($this->hole16par)."',
				'".mysql_real_escape_string($this->hole17par)."',
				'".mysql_real_escape_string($this->hole18par)."',
				'".mysql_real_escape_string($this->totalparfront9)."',
				'".mysql_real_escape_string($this->totalparback9)."',
				'".mysql_real_escape_string($this->totalpar)."',		
				'".mysql_real_escape_string($this->hole1si)."',
				'".mysql_real_escape_string($this->hole2si)."',
				'".mysql_real_escape_string($this->hole3si)."',
				'".mysql_real_escape_string($this->hole4si)."',
				'".mysql_real_escape_string($this->hole5si)."',
				'".mysql_real_escape_string($this->hole6si)."',
				'".mysql_real_escape_string($this->hole7si)."',
				'".mysql_real_escape_string($this->hole8si)."',
				'".mysql_real_escape_string($this->hole9si)."',
				'".mysql_real_escape_string($this->hole10si)."',
				'".mysql_real_escape_string($this->hole11si)."',
				'".mysql_real_escape_string($this->hole12si)."',
				'".mysql_real_escape_string($this->hole13si)."',
				'".mysql_real_escape_string($this->hole14si)."',
				'".mysql_real_escape_string($this->hole15si)."',
				'".mysql_real_escape_string($this->hole16si)."',
				'".mysql_real_escape_string($this->hole17si)."',
				'".mysql_real_escape_string($this->hole18si)."',
				'".mysql_real_escape_string($this->enabled)."',
				NOW()
				)
				";
		return $this->teeid = $this->db->insert($sql);
	}

	public function update() {
		$sql = "UPDATE
				`tee`
				SET
				`courseid` = '".mysql_real_escape_string($this->courseid)."',
				`verified` = '".mysql_real_escape_string($this->verified)."',
				`colour` = '".mysql_real_escape_string($this->colour)."',
				`courserating` = '".mysql_real_escape_string($this->courserating)."',
				`slope` = '".mysql_real_escape_string($this->slope)."',
				`sss` = '".mysql_real_escape_string($this->sss)."',
				`hole1yards` = '".mysql_real_escape_string($this->hole1yards)."',
				`hole2yards` = '".mysql_real_escape_string($this->hole2yards)."',
				`hole3yards` = '".mysql_real_escape_string($this->hole3yards)."',
				`hole4yards` = '".mysql_real_escape_string($this->hole4yards)."',
				`hole5yards` = '".mysql_real_escape_string($this->hole5yards)."',
				`hole6yards` = '".mysql_real_escape_string($this->hole6yards)."',
				`hole7yards` = '".mysql_real_escape_string($this->hole7yards)."',
				`hole8yards` = '".mysql_real_escape_string($this->hole8yards)."',
				`hole9yards` = '".mysql_real_escape_string($this->hole9yards)."',
				`hole10yards` = '".mysql_real_escape_string($this->hole10yards)."',
				`hole11yards` = '".mysql_real_escape_string($this->hole11yards)."',
				`hole12yards` = '".mysql_real_escape_string($this->hole12yards)."',
				`hole13yards` = '".mysql_real_escape_string($this->hole13yards)."',
				`hole14yards` = '".mysql_real_escape_string($this->hole14yards)."',
				`hole15yards` = '".mysql_real_escape_string($this->hole15yards)."',
				`hole16yards` = '".mysql_real_escape_string($this->hole16yards)."',
				`hole17yards` = '".mysql_real_escape_string($this->hole17yards)."',
				`hole18yards` = '".mysql_real_escape_string($this->hole18yards)."',
				`totalyardsfront9` = '".mysql_real_escape_string($this->totalyardsfront9)."',
				`totalyardsback9` = '".mysql_real_escape_string($this->totalyardsback9)."',
				`totalyards` = '".mysql_real_escape_string($this->totalyards)."',		
				`hole1metres` = '".mysql_real_escape_string($this->hole1metres)."',
				`hole2metres` = '".mysql_real_escape_string($this->hole2metres)."',
				`hole3metres` = '".mysql_real_escape_string($this->hole3metres)."',
				`hole4metres` = '".mysql_real_escape_string($this->hole4metres)."',
				`hole5metres` = '".mysql_real_escape_string($this->hole5metres)."',
				`hole6metres` = '".mysql_real_escape_string($this->hole6metres)."',
				`hole7metres` = '".mysql_real_escape_string($this->hole7metres)."',
				`hole8metres` = '".mysql_real_escape_string($this->hole8metres)."',
				`hole9metres` = '".mysql_real_escape_string($this->hole9metres)."',
				`hole10metres` = '".mysql_real_escape_string($this->hole10metres)."',
				`hole11metres` = '".mysql_real_escape_string($this->hole11metres)."',
				`hole12metres` = '".mysql_real_escape_string($this->hole12metres)."',
				`hole13metres` = '".mysql_real_escape_string($this->hole13metres)."',
				`hole14metres` = '".mysql_real_escape_string($this->hole14metres)."',
				`hole15metres` = '".mysql_real_escape_string($this->hole15metres)."',
				`hole16metres` = '".mysql_real_escape_string($this->hole16metres)."',
				`hole17metres` = '".mysql_real_escape_string($this->hole17metres)."',
				`hole18metres` = '".mysql_real_escape_string($this->hole18metres)."',
				`totalmetresfront9` = '".mysql_real_escape_string($this->totalmetresfront9)."',
				`totalmetresback9` = '".mysql_real_escape_string($this->totalmetresback9)."',
				`totalmetres` = '".mysql_real_escape_string($this->totalmetres)."',		
				`hole1par` = '".mysql_real_escape_string($this->hole1par)."',
				`hole2par` = '".mysql_real_escape_string($this->hole2par)."',
				`hole3par` = '".mysql_real_escape_string($this->hole3par)."',
				`hole4par` = '".mysql_real_escape_string($this->hole4par)."',
				`hole5par` = '".mysql_real_escape_string($this->hole5par)."',
				`hole6par` = '".mysql_real_escape_string($this->hole6par)."',
				`hole7par` = '".mysql_real_escape_string($this->hole7par)."',
				`hole8par` = '".mysql_real_escape_string($this->hole8par)."',
				`hole9par` = '".mysql_real_escape_string($this->hole9par)."',
				`hole10par` = '".mysql_real_escape_string($this->hole10par)."',
				`hole11par` = '".mysql_real_escape_string($this->hole11par)."',
				`hole12par` = '".mysql_real_escape_string($this->hole12par)."',
				`hole13par` = '".mysql_real_escape_string($this->hole13par)."',
				`hole14par` = '".mysql_real_escape_string($this->hole14par)."',
				`hole15par` = '".mysql_real_escape_string($this->hole15par)."',
				`hole16par` = '".mysql_real_escape_string($this->hole16par)."',
				`hole17par` = '".mysql_real_escape_string($this->hole17par)."',
				`hole18par` = '".mysql_real_escape_string($this->hole18par)."',
				`totalparfront9` = '".mysql_real_escape_string($this->totalparfront9)."',
				`totalparback9` = '".mysql_real_escape_string($this->totalparback9)."',
				`totalpar` = '".mysql_real_escape_string($this->totalpar)."',		
				`hole1si` = '".mysql_real_escape_string($this->hole1si)."',
				`hole2si` = '".mysql_real_escape_string($this->hole2si)."',
				`hole3si` = '".mysql_real_escape_string($this->hole3si)."',
				`hole4si` = '".mysql_real_escape_string($this->hole4si)."',
				`hole5si` = '".mysql_real_escape_string($this->hole5si)."',
				`hole6si` = '".mysql_real_escape_string($this->hole6si)."',
				`hole7si` = '".mysql_real_escape_string($this->hole7si)."',
				`hole8si` = '".mysql_real_escape_string($this->hole8si)."',
				`hole9si` = '".mysql_real_escape_string($this->hole9si)."',
				`hole10si` = '".mysql_real_escape_string($this->hole10si)."',
				`hole11si` = '".mysql_real_escape_string($this->hole11si)."',
				`hole12si` = '".mysql_real_escape_string($this->hole12si)."',
				`hole13si` = '".mysql_real_escape_string($this->hole13si)."',
				`hole14si` = '".mysql_real_escape_string($this->hole14si)."',
				`hole15si` = '".mysql_real_escape_string($this->hole15si)."',
				`hole16si` = '".mysql_real_escape_string($this->hole16si)."',
				`hole17si` = '".mysql_real_escape_string($this->hole17si)."',
				`hole18si` = '".mysql_real_escape_string($this->hole18si)."',				
				`enabled` = '".mysql_real_escape_string($this->enabled)."',
				`modified` = NOW()
				WHERE
				`teeid` = '".mysql_real_escape_string($this->teeid)."'
				LIMIT 
				1
				";
		return $this->db->update($sql);
	}

	public function delete() {
		$sql = "DELETE FROM
              `tee`
            WHERE
              `teeid` = '" . $this->teeid . "'
            LIMIT 
              1
            ";
		return $this->db->update($sql);
	}

}

?>