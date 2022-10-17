<?php

Class round {

	public $db;

	private $roundid;
	private $userid;
	private $courseid;
	private $teeid;
	private $colour;
	private $name;
	private $date;
	private $added;	
	private $courserating;
	private $slope;
	private $sss;
	private $primaryweatherid;
	private $secondaryweatherid;
	private $comments;

	private $trackhandicap;
	private $handicapbefore;
	private $handicapafter;

	private $albatrosses;
	private $holeinones;
	private $eagles;
	private $birdies;
	private $pars;
	private $bogeys;
	private $doubles;
	private $other;
	
	private $par3average;
	private $par4average;
	private $par5average;
	
	private $holesplayed;
	private $stats;

	private $hole1score;
	private $hole2score;
	private $hole3score;
	private $hole4score;
	private $hole5score;
	private $hole6score;
	private $hole7score;
	private $hole8score;
	private $hole9score;
	private $hole10score;
	private $hole11score;
	private $hole12score;
	private $hole13score;
	private $hole14score;
	private $hole15score;
	private $hole16score;
	private $hole17score;
	private $hole18score;

	private $totalscore;
	private $totalscorefront9;
	private $totalscoreback9;
	
	private $hole1allowance;
	private $hole2allowance;
	private $hole3allowance;
	private $hole4allowance;
	private $hole5allowance;
	private $hole6allowance;
	private $hole7allowance;
	private $hole8allowance;
	private $hole9allowance;
	private $hole10allowance;
	private $hole11allowance;
	private $hole12allowance;
	private $hole13allowance;
	private $hole14allowance;
	private $hole15allowance;
	private $hole16allowance;
	private $hole17allowance;
	private $hole18allowance;

	private $hole1scorenet;
	private $hole2scorenet;
	private $hole3scorenet;
	private $hole4scorenet;
	private $hole5scorenet;
	private $hole6scorenet;
	private $hole7scorenet;
	private $hole8scorenet;
	private $hole9scorenet;
	private $hole10scorenet;
	private $hole11scorenet;
	private $hole12scorenet;
	private $hole13scorenet;
	private $hole14scorenet;
	private $hole15scorenet;
	private $hole16scorenet;
	private $hole17scorenet;
	private $hole18scorenet;

	private $totalscorenet;
	private $totalscorenetfront9;
	private $totalscorenetback9;

	private $hole1points;
	private $hole2points;
	private $hole3points;
	private $hole4points;
	private $hole5points;
	private $hole6points;
	private $hole7points;
	private $hole8points;
	private $hole9points;
	private $hole10points;
	private $hole11points;
	private $hole12points;
	private $hole13points;
	private $hole14points;
	private $hole15points;
	private $hole16points;
	private $hole17points;
	private $hole18points;
	
	private $totalpoints;
	private $totalpointsfront9;
	private $totalpointsback9;
	
	private $hole1putts;
	private $hole2putts;
	private $hole3putts;
	private $hole4putts;
	private $hole5putts;
	private $hole6putts;
	private $hole7putts;
	private $hole8putts;
	private $hole9putts;
	private $hole10putts;
	private $hole11putts;
	private $hole12putts;
	private $hole13putts;
	private $hole14putts;
	private $hole15putts;
	private $hole16putts;
	private $hole17putts;
	private $hole18putts;
	
	private $totalputts;
	private $totalputtsfront9;
	private $totalputtsback9;
	private $averageputts;
	private $averageputtsfront9;
	private $averageputtsback9;
	
	private $total0putts;
	private $total1putts;
	private $total2putts;
	private $total3putts;
	private $total4putts; // 4+
	
	// FIR
	private $hole1fir;
	private $hole2fir;
	private $hole3fir;
	private $hole4fir;
	private $hole5fir;
	private $hole6fir;
	private $hole7fir;
	private $hole8fir;
	private $hole9fir;
	private $hole10fir;
	private $hole11fir;
	private $hole12fir;
	private $hole13fir;
	private $hole14fir;
	private $hole15fir;
	private $hole16fir;
	private $hole17fir;
	private $hole18fir;
	
	private $hole1firposition;
	private $hole2firposition;
	private $hole3firposition;
	private $hole4firposition;
	private $hole5firposition;
	private $hole6firposition;
	private $hole7firposition;
	private $hole8firposition;
	private $hole9firposition;
	private $hole10firposition;
	private $hole11firposition;
	private $hole12firposition;
	private $hole13firposition;
	private $hole14firposition;
	private $hole15firposition;
	private $hole16firposition;
	private $hole17firposition;
	private $hole18firposition;

	private $totalfir;
	private $totalfirhitcentre;
	private $totalfirhitleft;
	private $totalfirhitright;
	private $totalfirhitshort;
	private $totalfirmissleft;
	private $totalfirmissright;
	private $totalfirmissshort;

	private $totalfirfront9;
	private $totalfirhitcentrefront9;
	private $totalfirhitleftfront9;
	private $totalfirhitrightfront9;
	private $totalfirhitshortfront9;
	private $totalfirmissleftfront9;
	private $totalfirmissrightfront9;
	private $totalfirmissshortfront9;
	
	private $totalfirback9;
	private $totalfirhitcentreback9;
	private $totalfirhitleftback9;
	private $totalfirhitrightback9;
	private $totalfirhitshortback9;
	private $totalfirmissleftback9;
	private $totalfirmissrightback9;
	private $totalfirmissshortback9;
	
	private $possiblefir;
	private $possiblefirfront9;
	private $possiblefirback9;

	// GIR
	private $hole1gir;
	private $hole2gir;
	private $hole3gir;
	private $hole4gir;
	private $hole5gir;
	private $hole6gir;
	private $hole7gir;
	private $hole8gir;
	private $hole9gir;
	private $hole10gir;
	private $hole11gir;
	private $hole12gir;
	private $hole13gir;
	private $hole14gir;
	private $hole15gir;
	private $hole16gir;
	private $hole17gir;
	private $hole18gir;
	
	private $hole1girposition;
	private $hole2girposition;
	private $hole3girposition;
	private $hole4girposition;
	private $hole5girposition;
	private $hole6girposition;
	private $hole7girposition;
	private $hole8girposition;
	private $hole9girposition;
	private $hole10girposition;
	private $hole11girposition;
	private $hole12girposition;
	private $hole13girposition;
	private $hole14girposition;
	private $hole15girposition;
	private $hole16girposition;
	private $hole17girposition;
	private $hole18girposition;

	private $totalgir;
	private $totalgirhitpin;
	private $totalgirhitleft;
	private $totalgirhitright;
	private $totalgirhitlong;
	private $totalgirhitshort;
	private $totalgirmissleft;
	private $totalgirmissright;
	private $totalgirmisslong;
	private $totalgirmissshort;
	
	private $totalgirfront9;
	private $totalgirhitpinfront9;
	private $totalgirhitleftfront9;
	private $totalgirhitrightfront9;
	private $totalgirhitlongfront9;
	private $totalgirhitshortfront9;
	private $totalgirmissleftfront9;
	private $totalgirmissrightfront9;
	private $totalgirmisslongfront9;
	private $totalgirmissshortfront9;
	
	private $totalgirback9;
	private $totalgirhitpinback9;
	private $totalgirhitleftback9;
	private $totalgirhitrightback9;
	private $totalgirhitlongback9;
	private $totalgirhitshortback9;
	private $totalgirmissleftback9;
	private $totalgirmissrightback9;
	private $totalgirmisslongback9;
	private $totalgirmissshortback9;
	
	private $totalpar3;
	private $totalpar3greenhit;
	private $totalpar3greenmiss;
	
	// Up/Down	
	private $hole1updown;
	private $hole2updown;
	private $hole3updown;
	private $hole4updown;
	private $hole5updown;
	private $hole6updown;
	private $hole7updown;
	private $hole8updown;
	private $hole9updown;
	private $hole10updown;
	private $hole11updown;
	private $hole12updown;
	private $hole13updown;
	private $hole14updown;
	private $hole15updown;
	private $hole16updown;
	private $hole17updown;
	private $hole18updown;
	
	private $hole1updownhit;
	private $hole2updownhit;
	private $hole3updownhit;
	private $hole4updownhit;
	private $hole5updownhit;
	private $hole6updownhit;
	private $hole7updownhit;
	private $hole8updownhit;
	private $hole9updownhit;
	private $hole10updownhit;
	private $hole11updownhit;
	private $hole12updownhit;
	private $hole13updownhit;
	private $hole14updownhit;
	private $hole15updownhit;
	private $hole16updownhit;
	private $hole17updownhit;
	private $hole18updownhit;

	private $totalupdown;
	private $totalupdownhit;
	private $totalupdownfront9;
	private $totalupdownhitfront9;
	private $totalupdownback9;	
	private $totalupdownhitback9;	
	
	private $hole1bunker;
	private $hole2bunker;
	private $hole3bunker;
	private $hole4bunker;
	private $hole5bunker;
	private $hole6bunker;
	private $hole7bunker;
	private $hole8bunker;
	private $hole9bunker;
	private $hole10bunker;
	private $hole11bunker;
	private $hole12bunker;
	private $hole13bunker;
	private $hole14bunker;
	private $hole15bunker;
	private $hole16bunker;
	private $hole17bunker;
	private $hole18bunker;

	private $hole1sandsave;
	private $hole2sandsave;
	private $hole3sandsave;
	private $hole4sandsave;
	private $hole5sandsave;
	private $hole6sandsave;
	private $hole7sandsave;
	private $hole8sandsave;
	private $hole9sandsave;
	private $hole10sandsave;
	private $hole11sandsave;
	private $hole12sandsave;
	private $hole13sandsave;
	private $hole14sandsave;
	private $hole15sandsave;
	private $hole16sandsave;
	private $hole17sandsave;
	private $hole18sandsave;

	private $totalsandsave;
	private $totalsandsavefront9;
	private $totalsandsaveback9;		
	
	private $hole1sandsavehit;
	private $hole2sandsavehit;
	private $hole3sandsavehit;
	private $hole4sandsavehit;
	private $hole5sandsavehit;
	private $hole6sandsavehit;
	private $hole7sandsavehit;
	private $hole8sandsavehit;
	private $hole9sandsavehit;
	private $hole10sandsavehit;
	private $hole11sandsavehit;
	private $hole12sandsavehit;
	private $hole13sandsavehit;
	private $hole14sandsavehit;
	private $hole15sandsavehit;
	private $hole16sandsavehit;
	private $hole17sandsavehit;
	private $hole18sandsavehit;

	private $totalsandsavehit;
	private $totalsandsavehitfront9;
	private $totalsandsavehitback9;	
	
	private $hole1penalties;
	private $hole2penalties;
	private $hole3penalties;
	private $hole4penalties;
	private $hole5penalties;
	private $hole6penalties;
	private $hole7penalties;
	private $hole8penalties;
	private $hole9penalties;
	private $hole10penalties;
	private $hole11penalties;
	private $hole12penalties;
	private $hole13penalties;
	private $hole14penalties;
	private $hole15penalties;
	private $hole16penalties;
	private $hole17penalties;
	private $hole18penalties;

	private $totalpenalties;
	private $totalpenaltiesfront9;
	private $totalpenaltiesback9;

	private $distanceunit;
	
	private $hole1distance;
	private $hole2distance;
	private $hole3distance;
	private $hole4distance;
	private $hole5distance;
	private $hole6distance;
	private $hole7distance;
	private $hole8distance;
	private $hole9distance;
	private $hole10distance;
	private $hole11distance;
	private $hole12distance;
	private $hole13distance;
	private $hole14distance;
	private $hole15distance;
	private $hole16distance;
	private $hole17distance;
	private $hole18distance;

	private $totaldistance;
	private $totaldistancefront9;
	private $totaldistanceback9;	
	
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

	private $totalpar;
	private $totalparfront9;
	private $totalparback9;	
	
	private $enabled;
	private $modified;

	function __construct() {
		$this->db = new Database();
	}

	/* Get Methods */

	public function get_roundid() {
		return $this->roundid;
	}

	public function get_userid() {
		return $this->userid;
	}

	public function get_courseid() {
		return $this->courseid;
	}

	public function get_teeid() {
		return $this->teeid;
	}

	public function get($column_name) {
		return $this->$column_name;
	}

	/* Set Method */

	public function set($column_name, $value, $friendly_name = 'Input ', $minlength = false, $numeric = false, $format = false) {
		if ($minlength && (strlen($value) < $minlength)) {
			throw new Exception($friendly_name . ' must be at least ' . $minlength . ' characters.');
		}
		if ($numeric && !is_numeric($value)) {
			throw new Exception($friendly_name . ' must be a number.');
		}
		if ($format && !preg_match("/" . $format . "/", $value)) {
			throw new Exception($friendly_name . ' is not valid.');
		}
		$this->$column_name = $value;
	}

	/* Main Methods */

	public function find_by_id($id) {
		$sql = "SELECT
             *
            FROM
             `round`
            WHERE
             `roundid` = '".$id."'
            ";
		if ($result = $this->db->query($sql)) {
			$this->populate($result);
			return true;
		} else {
			throw new Exception('Unable to find \'' . addslashes($id) . '\'');
		}
	}

	private function populate($result) {
		foreach ($result[0] as $k => $v) {
			$this->$k = stripslashes($v);
		}
	}

	public function get_details() {
		return get_object_vars($this);
	}

	public function calculate() {

		// Scores
		$this->totalscorefront9
		= $this->hole1score
		+ $this->hole2score
		+ $this->hole3score
		+ $this->hole4score
		+ $this->hole5score
		+ $this->hole6score
		+ $this->hole7score
		+ $this->hole8score
		+ $this->hole9score;

		$this->totalscoreback9
		= $this->hole10score
		+ $this->hole11score
		+ $this->hole12score
		+ $this->hole13score
		+ $this->hole14score
		+ $this->hole15score
		+ $this->hole16score
		+ $this->hole17score
		+ $this->hole18score;

		$this->totalscore = $this->totalscorefront9	+ $this->totalscoreback9;

		// Specials
		
		$this->albatrosses = 0;
		$this->eagles = 0;
		$this->birdies = 0;
		$this->pars = 0;
		$this->bogeys = 0;
		$this->doubles = 0;
		$this->other = 0;
		$this->holeinones = 0;
		
		for ($i = 1; $i <= 18; $i++) {
			$holescore = 'hole' . $i . 'score';
			$holepar = 'hole' . $i . 'par';
			$diff = $this->$holescore - $this->$holepar;
			if ($diff === -3) {
				$this->albatrosses++;
			} elseif ($diff === -2) {
				$this->eagles++;
			} elseif ($diff === -1) {
				$this->birdies++;
			} elseif ($diff === 0) {
				$this->pars++;
			} elseif ($diff === 1) {					 
				$this->bogeys++;
			} elseif ($diff === 2) {
				$this->doubles++;
			} else {
				$this->other++;
			}
			if ($this->holescore === 1) {
				$this->holeinones++;
			}
		}
		
		// Putts
		$this->totalputtsfront9
		= $this->hole1putts
		+ $this->hole2putts
		+ $this->hole3putts
		+ $this->hole4putts
		+ $this->hole5putts
		+ $this->hole6putts
		+ $this->hole7putts
		+ $this->hole8putts
		+ $this->hole9putts;

		$this->totalputtsback9
		= $this->hole10putts
		+ $this->hole11putts
		+ $this->hole12putts
		+ $this->hole13putts
		+ $this->hole14putts
		+ $this->hole15putts
		+ $this->hole16putts
		+ $this->hole17putts
		+ $this->hole18putts;

		$this->totalputts = $this->totalputtsfront9	+ $this->totalputtsback9;

		$this->total0putts = 0;
		$this->total1putts = 0;
		$this->total2putts = 0;
		$this->total3putts = 0;
		$this->total4putts = 0; // 4+
		
		for ($i = 1; $i <= 18; $i++) {
			$holeputts = 'hole' . $i . 'putts';
			switch ($this->$holeputts) {
				case 0:
					$this->total0putts++;
					break;					 
				case 1:
					$this->total1putts++;
					break;					 
				case 2:
					$this->total2putts++;
					break;
				case 3:
					$this->total3putts++;
					break;					 
				default:
					$this->total4putts++;
					break;					 
			}
		}				
		
		// Allowances
		$handicap = round($this->handicapbefore);
		
		// Reset allowances!
		$this->hole1allowance = 
		$this->hole2allowance = 
		$this->hole3allowance = 
		$this->hole4allowance = 
		$this->hole5allowance = 
		$this->hole6allowance = 
		$this->hole7allowance = 
		$this->hole8allowance = 
		$this->hole9allowance = 
		$this->hole10allowance = 
		$this->hole11allowance = 
		$this->hole12allowance = 
		$this->hole13allowance = 
		$this->hole14allowance = 
		$this->hole15allowance = 
		$this->hole16allowance = 
		$this->hole17allowance = 
		$this->hole18allowance = 0;
		
		while($handicap > 0) {
			for ($i = 1; $i <= 18; $i++) {
				$holeallowance = 'hole' . $i . 'allowance';
				$holesi = 'hole' . $i . 'si';
				if ($this->$holesi <= $handicap) { $this->$holeallowance++; }
			}
			$handicap = $handicap - 18;
		}

		// Net Scores
		$this->hole1scorenet = $this->hole1score - $this->hole1allowance;
		$this->hole2scorenet = $this->hole2score - $this->hole2allowance;
		$this->hole3scorenet = $this->hole3score - $this->hole3allowance;
		$this->hole4scorenet = $this->hole4score - $this->hole4allowance;
		$this->hole5scorenet = $this->hole5score - $this->hole5allowance;
		$this->hole6scorenet = $this->hole6score - $this->hole6allowance;
		$this->hole7scorenet = $this->hole7score - $this->hole7allowance;
		$this->hole8scorenet = $this->hole8score - $this->hole8allowance;
		$this->hole9scorenet = $this->hole9score - $this->hole9allowance;
		$this->hole10scorenet = $this->hole10score - $this->hole10allowance;
		$this->hole11scorenet = $this->hole11score - $this->hole11allowance;
		$this->hole12scorenet = $this->hole12score - $this->hole12allowance;
		$this->hole13scorenet = $this->hole13score - $this->hole13allowance;
		$this->hole14scorenet = $this->hole14score - $this->hole14allowance;
		$this->hole15scorenet = $this->hole15score - $this->hole15allowance;
		$this->hole16scorenet = $this->hole16score - $this->hole16allowance;
		$this->hole17scorenet = $this->hole17score - $this->hole17allowance;
		$this->hole18scorenet = $this->hole18score - $this->hole18allowance;

		$this->totalscorenetfront9
		= $this->hole1scorenet
		+ $this->hole2scorenet
		+ $this->hole3scorenet
		+ $this->hole4scorenet
		+ $this->hole5scorenet
		+ $this->hole6scorenet
		+ $this->hole7scorenet
		+ $this->hole8scorenet
		+ $this->hole9scorenet;

		$this->totalscorenetback9
		= $this->hole10scorenet
		+ $this->hole11scorenet
		+ $this->hole12scorenet
		+ $this->hole13scorenet
		+ $this->hole14scorenet
		+ $this->hole15scorenet
		+ $this->hole16scorenet
		+ $this->hole17scorenet
		+ $this->hole18scorenet;

		$this->totalscorenet = $this->totalscorenetfront9 + $this->totalscorenetback9;		
		
		for ($i = 1; $i <= 18; $i++) {
			$holescorenet = 'hole' . $i . 'scorenet';
			$holepar = 'hole' . $i . 'par';
			$holepoints = 'hole' . $i . 'points';
			if ($this->$holescorenet - ($this->$holepar) <= 2) { $this->$holepoints = 0; }
			if ($this->$holescorenet - ($this->$holepar) == 1) { $this->$holepoints = 1; }
			if ($this->$holescorenet - ($this->$holepar) == 0) { $this->$holepoints = 2; }
			if ($this->$holescorenet - ($this->$holepar) == -1) { $this->$holepoints = 3; }
			if ($this->$holescorenet - ($this->$holepar) == -2) { $this->$holepoints = 4; }
			if ($this->$holescorenet - ($this->$holepar) == -3) { $this->$holepoints = 5; }
			if ($this->$holescorenet - ($this->$holepar) == -4) { $this->$holepoints = 6; }
		}

		$this->totalpointsfront9
		= $this->hole1points
		+ $this->hole2points
		+ $this->hole3points
		+ $this->hole4points
		+ $this->hole5points
		+ $this->hole6points
		+ $this->hole7points
		+ $this->hole8points
		+ $this->hole9points;

		$this->totalpointsback9
		= $this->hole10points
		+ $this->hole11points
		+ $this->hole12points
		+ $this->hole13points
		+ $this->hole14points
		+ $this->hole15points
		+ $this->hole16points
		+ $this->hole17points
		+ $this->hole18points;

		$this->totalpoints = $this->totalpointsfront9 + $this->totalpointsback9;			
		
		// Penalties
		
		$this->totalpenaltiesfront9
		= $this->hole1penalties
		+ $this->hole2penalties
		+ $this->hole3penalties
		+ $this->hole4penalties
		+ $this->hole5penalties
		+ $this->hole6penalties
		+ $this->hole7penalties
		+ $this->hole8penalties
		+ $this->hole9penalties;

		$this->totalpenaltiesback9
		= $this->hole10penalties
		+ $this->hole11penalties
		+ $this->hole12penalties
		+ $this->hole13penalties
		+ $this->hole14penalties
		+ $this->hole15penalties
		+ $this->hole16penalties
		+ $this->hole17penalties
		+ $this->hole18penalties;

		$this->totalpenalties = $this->totalpenaltiesfront9 + $this->totalpenaltiesback9;  		
		
		// Distances
		
		$this->totaldistancefront9
		= $this->hole1distance
		+ $this->hole2distance
		+ $this->hole3distance
		+ $this->hole4distance
		+ $this->hole5distance
		+ $this->hole6distance
		+ $this->hole7distance
		+ $this->hole8distance
		+ $this->hole9distance;

		$this->totaldistanceback9
		= $this->hole10distance
		+ $this->hole11distance
		+ $this->hole12distance
		+ $this->hole13distance
		+ $this->hole14distance
		+ $this->hole15distance
		+ $this->hole16distance
		+ $this->hole17distance
		+ $this->hole18distance;

		$this->totaldistance = $this->totaldistancefront9 + $this->totaldistanceback9;  		
		
		// Pars
		
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

		$this->totalpar = $this->totalparfront9 + $this->totalparback9;  		
		
		// FIR
		$this->totalfirfront9
		= $this->hole1fir
		+ $this->hole2fir
		+ $this->hole3fir
		+ $this->hole4fir
		+ $this->hole5fir
		+ $this->hole6fir
		+ $this->hole7fir
		+ $this->hole8fir
		+ $this->hole9fir;

		$this->totalfirback9
		= $this->hole10fir
		+ $this->hole11fir
		+ $this->hole12fir
		+ $this->hole13fir
		+ $this->hole14fir
		+ $this->hole15fir
		+ $this->hole16fir
		+ $this->hole17fir
		+ $this->hole18fir;

		$this->totalfir = $this->totalfirfront9 + $this->totalfirback9;  		
		
		$this->possiblefirfront9 = 0;
		if ($this->hole1par > 3) { $this->possiblefirfront9++; }
		if ($this->hole2par > 3) { $this->possiblefirfront9++; }
		if ($this->hole3par > 3) { $this->possiblefirfront9++; }
		if ($this->hole4par > 3) { $this->possiblefirfront9++; }
		if ($this->hole5par > 3) { $this->possiblefirfront9++; }
		if ($this->hole6par > 3) { $this->possiblefirfront9++; }
		if ($this->hole7par > 3) { $this->possiblefirfront9++; }
		if ($this->hole8par > 3) { $this->possiblefirfront9++; }
		if ($this->hole9par > 3) { $this->possiblefirfront9++; }
		
		$this->possiblefirback9 = 0;
		if ($this->hole10par > 3) { $this->possiblefirback9++; }
		if ($this->hole11par > 3) { $this->possiblefirback9++; }
		if ($this->hole12par > 3) { $this->possiblefirback9++; }
		if ($this->hole13par > 3) { $this->possiblefirback9++; }
		if ($this->hole14par > 3) { $this->possiblefirback9++; }
		if ($this->hole15par > 3) { $this->possiblefirback9++; }
		if ($this->hole16par > 3) { $this->possiblefirback9++; }
		if ($this->hole17par > 3) { $this->possiblefirback9++; }
		if ($this->hole18par > 3) { $this->possiblefirback9++; }
		
		$this->possiblefir = $this->possiblefirfront9 + $this->possiblefirback9;  		

		$this->totalfirhitcentre = 0;
		$this->totalfirhitleft = 0;
		$this->totalfirhitright = 0;
		$this->totalfirhitshort = 0;
		$this->totalfirmissleft = 0;
		$this->totalfirmissright = 0;
		$this->totalfirmissshort = 0;
		
		for ($i = 1; $i <= 18; $i++) {
			$holefir = 'hole' . $i . 'fir';
			$holefirposition = 'hole' . $i . 'firposition';
			if ($this->$holefir) {
				switch ($this->$holefirposition) {
					case 'centre':
						if ($i <= 9) {
							$this->totalfirhitcentrefront9++;	
						} else {
							$this->totalfirhitcentreback9++;
						}
						$this->totalfirhitcentre++;
						break;
					case 'left':
						if ($i <= 9) {
							$this->totalfirhitleftfront9++;	
						} else {
							$this->totalfirhitleftback9++;
						}
						$this->totalfirhitleft++;
						break;
					case 'right':
						if ($i <= 9) {
							$this->totalfirhitrightfront9++;	
						} else {
							$this->totalfirhitrightback9++;
						}
						$this->totalfirhitright++;
						break;
					case 'short':
						if ($i <= 9) {
							$this->totalfirhitshortfront9++;	
						} else {
							$this->totalfirhitshortback9++;
						}
						$this->totalfirhitshort++;
						break;
				}
			} else {
				switch ($this->$holefirposition) {
					case 'left':
						if ($i <= 9) {
							$this->totalfirmissleftfront9++;	
						} else {
							$this->totalfirmissleftback9++;
						}
						$this->totalfirmissleft++;
						break;
					case 'right':
						if ($i <= 9) {
							$this->totalfirmissrightfront9++;
						} else {
							$this->totalfirmissrightback9++;
						}
						$this->totalfirmissright++;
						break;
					case 'short':
						if ($i <= 9) {
							$this->totalfirmissshortfront9++;
						} else {
							$this->totalfirmissshortback9++;
						}
						$this->totalfirmissshort++;
						break;
				}
			}
		}		
		
		// GIR
		$this->totalgirfront9
		= $this->hole1gir
		+ $this->hole2gir
		+ $this->hole3gir
		+ $this->hole4gir
		+ $this->hole5gir
		+ $this->hole6gir
		+ $this->hole7gir
		+ $this->hole8gir
		+ $this->hole9gir;

		$this->totalgirback9
		= $this->hole10gir
		+ $this->hole11gir
		+ $this->hole12gir
		+ $this->hole13gir
		+ $this->hole14gir
		+ $this->hole15gir
		+ $this->hole16gir
		+ $this->hole17gir
		+ $this->hole18gir;

		$this->totalgir = $this->totalgirfront9 + $this->totalgirback9;
		
		$this->totalgirhitpin = 0;
		$this->totalgirhitleft = 0;
		$this->totalgirhitright = 0;
		$this->totalgirhitlong = 0;
		$this->totalgirhitshort = 0;
		$this->totalgirmissleft = 0;
		$this->totalgirmissright = 0;
		$this->totalgirmisslong = 0;		
		$this->totalgirmissshort = 0;		
		
		for ($i = 1; $i <= 18; $i++) {
			$holegir = 'hole' . $i . 'gir';
			$holegirposition = 'hole' . $i . 'girposition';
			if ($this->$holegir) {
				switch ($this->$holegirposition) {
					case 'pin':
						if ($i <= 9) {
							$this->totalgirhitpinfront9++;	
						} else {
							$this->totalgirhitpinback9++;
						}
						$this->totalgirhitpin++;
						break;
					case 'left':
						if ($i <= 9) {
							$this->totalgirhitleftfront9++;	
						} else {
							$this->totalgirhitleftback9++;
						}
						$this->totalgirhitleft++;
						break;
					case 'right':
						if ($i <= 9) {
							$this->totalgirhitrightfront9++;	
						} else {
							$this->totalgirhitrightback9++;
						}
						$this->totalgirhitright++;
						break;
					case 'long':
						if ($i <= 9) {
							$this->totalgirhitlongfront9++;	
						} else {
							$this->totalgirhitlongback9++;
						}
						$this->totalgirhitlong++;
						break;
					case 'short':
						if ($i <= 9) {
							$this->totalgirhitshortfront9++;	
						} else {
							$this->totalgirhitshortback9++;
						}
						$this->totalgirhitshort++;
						break;
				}
			} else {
				switch ($this->$holegirposition) {
					case 'left':
						if ($i <= 9) {
							$this->totalgirmissleftfront9++;	
						} else {
							$this->totalgirmissleftback9++;
						}
						$this->totalgirmissleft++;
						break;
					case 'right':
						if ($i <= 9) {
							$this->totalgirmissrightfront9++;
						} else {
							$this->totalgirmissrightback9++;
						}
						$this->totalgirmissright++;
						break;
					case 'long':
						if ($i <= 9) {
							$this->totalgirmisslongfront9++;
						} else {
							$this->totalgirmisslongback9++;
						}
						$this->totalgirmisslong++;
						break;
					case 'short':
						if ($i <= 9) {
							$this->totalgirmissshortfront9++;
						} else {
							$this->totalgirmissshortback9++;
						}
						$this->totalgirmissshort++;
						break;
				}
			}
		}				
		
		$this->totalpar3 = 0;
		$this->totalpar3greenhit = 0;
		$this->totalpar3greenmiss = 0;
		
		for ($i = 1; $i <= 18; $i++) {
			$holepar = 'hole' . $i . 'par';
			$holegir = 'hole' . $i . 'gir';
			if ($this->$holepar == 3) {
				$this->totalpar3++;
				if ($this->$holegir) {
					$this->totalpar3greenhit++;
				} else {
					$this->totalpar3greenmiss++;
				}
			}
		}
		
		// Up/Down

		// Adjust Up/Downs for par
		for ($i = 1; $i <= 18; $i++) {
			$holeupdown = 'hole' . $i . 'updown';
			$holeupdownhit = 'hole' . $i . 'updownhit';
			$holescore = 'hole' . $i . 'score';
			$holeputts = 'hole' . $i . 'putts';
			$holepar = 'hole' . $i . 'par';
			if ($this->$holeupdown && !(($this->$holescore - $this->$holeputts) < $this->$holepar)) { 
				$this->$holeupdownhit = 0;
				$this->$holeupdown = 0;
			}
		}		
		
		$this->totalupdownfront9
		= $this->hole1updown
		+ $this->hole2updown
		+ $this->hole3updown
		+ $this->hole4updown
		+ $this->hole5updown
		+ $this->hole6updown
		+ $this->hole7updown
		+ $this->hole8updown
		+ $this->hole9updown;

		$this->totalupdownback9
		= $this->hole10updown
		+ $this->hole11updown
		+ $this->hole12updown
		+ $this->hole13updown
		+ $this->hole14updown
		+ $this->hole15updown
		+ $this->hole16updown
		+ $this->hole17updown
		+ $this->hole18updown;

		$this->totalupdown = $this->totalupdownfront9 + $this->totalupdownback9;  		
					
		$this->totalupdownhitfront9
		= $this->hole1updownhit
		+ $this->hole2updownhit
		+ $this->hole3updownhit
		+ $this->hole4updownhit
		+ $this->hole5updownhit
		+ $this->hole6updownhit
		+ $this->hole7updownhit
		+ $this->hole8updownhit
		+ $this->hole9updownhit;

		$this->totalupdownhitback9
		= $this->hole10updownhit
		+ $this->hole11updownhit
		+ $this->hole12updownhit
		+ $this->hole13updownhit
		+ $this->hole14updownhit
		+ $this->hole15updownhit
		+ $this->hole16updownhit
		+ $this->hole17updownhit
		+ $this->hole18updownhit;

		$this->totalupdownhit = $this->totalupdownhitfront9 + $this->totalupdownhitback9;  		
		
		// Bunker
		
		$this->totalbunkerfront9
		= $this->hole1bunker
		+ $this->hole2bunker
		+ $this->hole3bunker
		+ $this->hole4bunker
		+ $this->hole5bunker
		+ $this->hole6bunker
		+ $this->hole7bunker
		+ $this->hole8bunker
		+ $this->hole9bunker;

		$this->totalbunkerback9
		= $this->hole10bunker
		+ $this->hole11bunker
		+ $this->hole12bunker
		+ $this->hole13bunker
		+ $this->hole14bunker
		+ $this->hole15bunker
		+ $this->hole16bunker
		+ $this->hole17bunker
		+ $this->hole18bunker;

		$this->totalbunker = $this->totalbunkerfront9 + $this->totalbunkerback9;  		
		
		// Sandsave
		
		$this->totalsandsavefront9
		= $this->hole1sandsave
		+ $this->hole2sandsave
		+ $this->hole3sandsave
		+ $this->hole4sandsave
		+ $this->hole5sandsave
		+ $this->hole6sandsave
		+ $this->hole7sandsave
		+ $this->hole8sandsave
		+ $this->hole9sandsave;

		$this->totalsandsaveback9
		= $this->hole10sandsave
		+ $this->hole11sandsave
		+ $this->hole12sandsave
		+ $this->hole13sandsave
		+ $this->hole14sandsave
		+ $this->hole15sandsave
		+ $this->hole16sandsave
		+ $this->hole17sandsave
		+ $this->hole18sandsave;

		$this->totalsandsave = $this->totalsandsavefront9 + $this->totalsandsaveback9; 

		$this->totalsandsavehitfront9
		= $this->hole1sandsavehit
		+ $this->hole2sandsavehit
		+ $this->hole3sandsavehit
		+ $this->hole4sandsavehit
		+ $this->hole5sandsavehit
		+ $this->hole6sandsavehit
		+ $this->hole7sandsavehit
		+ $this->hole8sandsavehit
		+ $this->hole9sandsavehit;

		$this->totalsandsavehitback9
		= $this->hole10sandsavehit
		+ $this->hole11sandsavehit
		+ $this->hole12sandsavehit
		+ $this->hole13sandsavehit
		+ $this->hole14sandsavehit
		+ $this->hole15sandsavehit
		+ $this->hole16sandsavehit
		+ $this->hole17sandsavehit
		+ $this->hole18sandsavehit;

		$this->totalsandsavehit = $this->totalsandsavehitfront9 + $this->totalsandsavehitback9; 
			
	}

	public function insert() {
		$sql = "INSERT
				INTO
				`round` 
				(
				`userid`,
				`courseid`,
				`teeid`,
				`colour`,
				`name`,
				`date`,
				`added`,
				`courserating`,
				`slope`,
				`sss`,
				`primaryweatherid`,
				`secondaryweatherid`,
				`comments`,
				`trackhandicap`,
				`handicapbefore`,
				`handicapafter`,
				`albatrosses`,
				`holeinones`,
				`eagles`,
				`birdies`,
				`pars`,
				`bogeys`,
				`doubles`,
				`other`,
				`par3average`,
				`par4average`,
				`par5average`,
				`holesplayed`,
				`stats`,
				`hole1score`,
				`hole2score`,
				`hole3score`,
				`hole4score`,
				`hole5score`,
				`hole6score`,
				`hole7score`,
				`hole8score`,
				`hole9score`,
				`hole10score`,
				`hole11score`,
				`hole12score`,
				`hole13score`,
				`hole14score`,
				`hole15score`,
				`hole16score`,
				`hole17score`,
				`hole18score`,
				`totalscore`,
				`totalscorefront9`,
				`totalscoreback9`,
				`hole1allowance`,
				`hole2allowance`,
				`hole3allowance`,
				`hole4allowance`,
				`hole5allowance`,
				`hole6allowance`,
				`hole7allowance`,
				`hole8allowance`,
				`hole9allowance`,
				`hole10allowance`,
				`hole11allowance`,
				`hole12allowance`,
				`hole13allowance`,
				`hole14allowance`,
				`hole15allowance`,
				`hole16allowance`,
				`hole17allowance`,
				`hole18allowance`,
				`hole1scorenet`,
				`hole2scorenet`,
				`hole3scorenet`,
				`hole4scorenet`,
				`hole5scorenet`,
				`hole6scorenet`,
				`hole7scorenet`,
				`hole8scorenet`,
				`hole9scorenet`,
				`hole10scorenet`,
				`hole11scorenet`,
				`hole12scorenet`,
				`hole13scorenet`,
				`hole14scorenet`,
				`hole15scorenet`,
				`hole16scorenet`,
				`hole17scorenet`,
				`hole18scorenet`,
				`totalscorenet`,
				`totalscorenetfront9`,
				`totalscorenetback9`,
				`hole1points`,
				`hole2points`,
				`hole3points`,
				`hole4points`,
				`hole5points`,
				`hole6points`,
				`hole7points`,
				`hole8points`,
				`hole9points`,
				`hole10points`,
				`hole11points`,
				`hole12points`,
				`hole13points`,
				`hole14points`,
				`hole15points`,
				`hole16points`,
				`hole17points`,
				`hole18points`,
				`totalpoints`,
				`totalpointsfront9`,
				`totalpointsback9`,
				`hole1putts`,
				`hole2putts`,
				`hole3putts`,
				`hole4putts`,
				`hole5putts`,
				`hole6putts`,
				`hole7putts`,
				`hole8putts`,
				`hole9putts`,
				`hole10putts`,
				`hole11putts`,
				`hole12putts`,
				`hole13putts`,
				`hole14putts`,
				`hole15putts`,
				`hole16putts`,
				`hole17putts`,
				`hole18putts`,
				`totalputts`,
				`totalputtsfront9`,
				`totalputtsback9`,
				`total0putts`,				
				`total1putts`,				
				`total2putts`,				
				`total3putts`,				
				`total4putts`,				
				`hole1fir`,
				`hole2fir`,
				`hole3fir`,
				`hole4fir`,
				`hole5fir`,
				`hole6fir`,
				`hole7fir`,
				`hole8fir`,
				`hole9fir`,
				`hole10fir`,
				`hole11fir`,
				`hole12fir`,
				`hole13fir`,
				`hole14fir`,
				`hole15fir`,
				`hole16fir`,
				`hole17fir`,
				`hole18fir`,
				`hole1firposition`,
				`hole2firposition`,
				`hole3firposition`,
				`hole4firposition`,
				`hole5firposition`,
				`hole6firposition`,
				`hole7firposition`,
				`hole8firposition`,
				`hole9firposition`,
				`hole10firposition`,
				`hole11firposition`,
				`hole12firposition`,
				`hole13firposition`,
				`hole14firposition`,
				`hole15firposition`,
				`hole16firposition`,
				`hole17firposition`,
				`hole18firposition`,
				`totalfir`,
				`totalfirhitcentre`,
				`totalfirhitleft`,
				`totalfirhitright`,
				`totalfirhitshort`,
				`totalfirmissleft`,
				`totalfirmissright`,
				`totalfirmissshort`,
				`totalfirfront9`,
				`totalfirhitcentrefront9`,
				`totalfirhitleftfront9`,
				`totalfirhitrightfront9`,
				`totalfirhitshortfront9`,
				`totalfirmissleftfront9`,
				`totalfirmissrightfront9`,
				`totalfirmissshortfront9`,
				`totalfirback9`,
				`totalfirhitcentreback9`,
				`totalfirhitleftback9`,
				`totalfirhitrightback9`,
				`totalfirhitshortback9`,
				`totalfirmissleftback9`,
				`totalfirmissrightback9`,
				`totalfirmissshortback9`,
				`possiblefir`,
				`possiblefirfront9`,
				`possiblefirback9`,
				`hole1gir`,
				`hole2gir`,
				`hole3gir`,
				`hole4gir`,
				`hole5gir`,
				`hole6gir`,
				`hole7gir`,
				`hole8gir`,
				`hole9gir`,
				`hole10gir`,
				`hole11gir`,
				`hole12gir`,
				`hole13gir`,
				`hole14gir`,
				`hole15gir`,
				`hole16gir`,
				`hole17gir`,
				`hole18gir`,
				`hole1girposition`,
				`hole2girposition`,
				`hole3girposition`,
				`hole4girposition`,
				`hole5girposition`,
				`hole6girposition`,
				`hole7girposition`,
				`hole8girposition`,
				`hole9girposition`,
				`hole10girposition`,
				`hole11girposition`,
				`hole12girposition`,
				`hole13girposition`,
				`hole14girposition`,
				`hole15girposition`,
				`hole16girposition`,
				`hole17girposition`,
				`hole18girposition`,
				`totalgir`,
				`totalgirhitpin`,
				`totalgirhitleft`,
				`totalgirhitright`,
				`totalgirhitlong`,
				`totalgirhitshort`,
				`totalgirmissleft`,
				`totalgirmissright`,
				`totalgirmisslong`,
				`totalgirmissshort`,
				`totalgirfront9`,
				`totalgirhitpinfront9`,
				`totalgirhitleftfront9`,
				`totalgirhitrightfront9`,
				`totalgirhitlongfront9`,
				`totalgirhitshortfront9`,
				`totalgirmissleftfront9`,
				`totalgirmissrightfront9`,
				`totalgirmisslongfront9`,
				`totalgirmissshortfront9`,
				`totalgirback9`,
				`totalgirhitpinback9`,
				`totalgirhitleftback9`,
				`totalgirhitrightback9`,
				`totalgirhitlongback9`,
				`totalgirhitshortback9`,
				`totalgirmissleftback9`,
				`totalgirmissrightback9`,
				`totalgirmisslongback9`,
				`totalgirmissshortback9`,
				`totalpar3`,
				`totalpar3greenhit`,
				`totalpar3greenmiss`,
				`hole1updown`,
				`hole2updown`,
				`hole3updown`,
				`hole4updown`,
				`hole5updown`,
				`hole6updown`,
				`hole7updown`,
				`hole8updown`,
				`hole9updown`,
				`hole10updown`,
				`hole11updown`,
				`hole12updown`,
				`hole13updown`,
				`hole14updown`,
				`hole15updown`,
				`hole16updown`,
				`hole17updown`,
				`hole18updown`,
				`hole1updownhit`,
				`hole2updownhit`,
				`hole3updownhit`,
				`hole4updownhit`,
				`hole5updownhit`,
				`hole6updownhit`,
				`hole7updownhit`,
				`hole8updownhit`,
				`hole9updownhit`,
				`hole10updownhit`,
				`hole11updownhit`,
				`hole12updownhit`,
				`hole13updownhit`,
				`hole14updownhit`,
				`hole15updownhit`,
				`hole16updownhit`,
				`hole17updownhit`,
				`hole18updownhit`,
				`totalupdown`,
				`totalupdownhit`,
				`totalupdownfront9`,
				`totalupdownhitfront9`,
				`totalupdownback9`,
				`totalupdownhitback9`,
				`hole1bunker`,
				`hole2bunker`,
				`hole3bunker`,
				`hole4bunker`,
				`hole5bunker`,
				`hole6bunker`,
				`hole7bunker`,
				`hole8bunker`,
				`hole9bunker`,
				`hole10bunker`,
				`hole11bunker`,
				`hole12bunker`,
				`hole13bunker`,
				`hole14bunker`,
				`hole15bunker`,
				`hole16bunker`,
				`hole17bunker`,
				`hole18bunker`,
				`hole1sandsave`,
				`hole2sandsave`,
				`hole3sandsave`,
				`hole4sandsave`,
				`hole5sandsave`,
				`hole6sandsave`,
				`hole7sandsave`,
				`hole8sandsave`,
				`hole9sandsave`,
				`hole10sandsave`,
				`hole11sandsave`,
				`hole12sandsave`,
				`hole13sandsave`,
				`hole14sandsave`,
				`hole15sandsave`,
				`hole16sandsave`,
				`hole17sandsave`,
				`hole18sandsave`,
				`totalsandsave`,
				`totalsandsavefront9`,
				`totalsandsaveback9`,
				`hole1sandsavehit`,
				`hole2sandsavehit`,
				`hole3sandsavehit`,
				`hole4sandsavehit`,
				`hole5sandsavehit`,
				`hole6sandsavehit`,
				`hole7sandsavehit`,
				`hole8sandsavehit`,
				`hole9sandsavehit`,
				`hole10sandsavehit`,
				`hole11sandsavehit`,
				`hole12sandsavehit`,
				`hole13sandsavehit`,
				`hole14sandsavehit`,
				`hole15sandsavehit`,
				`hole16sandsavehit`,
				`hole17sandsavehit`,
				`hole18sandsavehit`,
				`totalsandsavehit`,
				`totalsandsavehitfront9`,
				`totalsandsavehitback9`,
				`hole1penalties`,
				`hole2penalties`,
				`hole3penalties`,
				`hole4penalties`,
				`hole5penalties`,
				`hole6penalties`,
				`hole7penalties`,
				`hole8penalties`,
				`hole9penalties`,
				`hole10penalties`,
				`hole11penalties`,
				`hole12penalties`,
				`hole13penalties`,
				`hole14penalties`,
				`hole15penalties`,
				`hole16penalties`,
				`hole17penalties`,
				`hole18penalties`,
				`totalpenalties`,
				`totalpenaltiesfront9`,
				`totalpenaltiesback9`,
				`distanceunit`,
				`hole1distance`,
				`hole2distance`,
				`hole3distance`,
				`hole4distance`,
				`hole5distance`,
				`hole6distance`,
				`hole7distance`,
				`hole8distance`,
				`hole9distance`,
				`hole10distance`,
				`hole11distance`,
				`hole12distance`,
				`hole13distance`,
				`hole14distance`,
				`hole15distance`,
				`hole16distance`,
				`hole17distance`,
				`hole18distance`,
				`totaldistance`,
				`totaldistancefront9`,
				`totaldistanceback9`,
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
				`totalpar`,
				`totalparfront9`,
				`totalparback9`,
				`enabled`,
				`modified`
				)
				VALUES
				(
				'".mysql_real_escape_string($this->userid)."',
				'".mysql_real_escape_string($this->courseid)."',
				'".mysql_real_escape_string($this->teeid)."',
				'".mysql_real_escape_string($this->colour)."',
				'".mysql_real_escape_string($this->name)."',
				'".mysql_real_escape_string($this->date)."',
				NOW(),
				'".mysql_real_escape_string($this->courserating)."',
				'".mysql_real_escape_string($this->slope)."',
				'".mysql_real_escape_string($this->sss)."',
				'".mysql_real_escape_string($this->primaryweatherid)."',
				'".mysql_real_escape_string($this->secondaryweatherid)."',
				'".mysql_real_escape_string($this->comments)."',
				'".mysql_real_escape_string($this->trackhandicap)."',
				'".mysql_real_escape_string($this->handicapbefore)."',
				'".mysql_real_escape_string($this->handicapafter)."',
				'".mysql_real_escape_string($this->albatrosses)."',
				'".mysql_real_escape_string($this->holeinones)."',
				'".mysql_real_escape_string($this->eagles)."',
				'".mysql_real_escape_string($this->birdies)."',
				'".mysql_real_escape_string($this->pars)."',
				'".mysql_real_escape_string($this->bogeys)."',
				'".mysql_real_escape_string($this->doubles)."',
				'".mysql_real_escape_string($this->other)."',
				'".mysql_real_escape_string($this->par3average)."',
				'".mysql_real_escape_string($this->par4average)."',
				'".mysql_real_escape_string($this->par5average)."',
				'".mysql_real_escape_string($this->holesplayed)."',
				'".mysql_real_escape_string($this->stats)."',
				'".mysql_real_escape_string($this->hole1score)."',
				'".mysql_real_escape_string($this->hole2score)."',
				'".mysql_real_escape_string($this->hole3score)."',
				'".mysql_real_escape_string($this->hole4score)."',
				'".mysql_real_escape_string($this->hole5score)."',
				'".mysql_real_escape_string($this->hole6score)."',
				'".mysql_real_escape_string($this->hole7score)."',
				'".mysql_real_escape_string($this->hole8score)."',
				'".mysql_real_escape_string($this->hole9score)."',
				'".mysql_real_escape_string($this->hole10score)."',
				'".mysql_real_escape_string($this->hole11score)."',
				'".mysql_real_escape_string($this->hole12score)."',
				'".mysql_real_escape_string($this->hole13score)."',
				'".mysql_real_escape_string($this->hole14score)."',
				'".mysql_real_escape_string($this->hole15score)."',
				'".mysql_real_escape_string($this->hole16score)."',
				'".mysql_real_escape_string($this->hole17score)."',
				'".mysql_real_escape_string($this->hole18score)."',
				'".mysql_real_escape_string($this->totalscore)."',
				'".mysql_real_escape_string($this->totalscorefront9)."',
				'".mysql_real_escape_string($this->totalscoreback9)."',
				'".mysql_real_escape_string($this->hole1allowance)."',
				'".mysql_real_escape_string($this->hole2allowance)."',
				'".mysql_real_escape_string($this->hole3allowance)."',
				'".mysql_real_escape_string($this->hole4allowance)."',
				'".mysql_real_escape_string($this->hole5allowance)."',
				'".mysql_real_escape_string($this->hole6allowance)."',
				'".mysql_real_escape_string($this->hole7allowance)."',
				'".mysql_real_escape_string($this->hole8allowance)."',
				'".mysql_real_escape_string($this->hole9allowance)."',
				'".mysql_real_escape_string($this->hole10allowance)."',
				'".mysql_real_escape_string($this->hole11allowance)."',
				'".mysql_real_escape_string($this->hole12allowance)."',
				'".mysql_real_escape_string($this->hole13allowance)."',
				'".mysql_real_escape_string($this->hole14allowance)."',
				'".mysql_real_escape_string($this->hole15allowance)."',
				'".mysql_real_escape_string($this->hole16allowance)."',
				'".mysql_real_escape_string($this->hole17allowance)."',
				'".mysql_real_escape_string($this->hole18allowance)."',
				'".mysql_real_escape_string($this->hole1scorenet)."',
				'".mysql_real_escape_string($this->hole2scorenet)."',
				'".mysql_real_escape_string($this->hole3scorenet)."',
				'".mysql_real_escape_string($this->hole4scorenet)."',
				'".mysql_real_escape_string($this->hole5scorenet)."',
				'".mysql_real_escape_string($this->hole6scorenet)."',
				'".mysql_real_escape_string($this->hole7scorenet)."',
				'".mysql_real_escape_string($this->hole8scorenet)."',
				'".mysql_real_escape_string($this->hole9scorenet)."',
				'".mysql_real_escape_string($this->hole10scorenet)."',
				'".mysql_real_escape_string($this->hole11scorenet)."',
				'".mysql_real_escape_string($this->hole12scorenet)."',
				'".mysql_real_escape_string($this->hole13scorenet)."',
				'".mysql_real_escape_string($this->hole14scorenet)."',
				'".mysql_real_escape_string($this->hole15scorenet)."',
				'".mysql_real_escape_string($this->hole16scorenet)."',
				'".mysql_real_escape_string($this->hole17scorenet)."',
				'".mysql_real_escape_string($this->hole18scorenet)."',
				'".mysql_real_escape_string($this->totalscorenet)."',
				'".mysql_real_escape_string($this->totalscorenetfront9)."',
				'".mysql_real_escape_string($this->totalscorenetback9)."',
				'".mysql_real_escape_string($this->hole1points)."',
				'".mysql_real_escape_string($this->hole2points)."',
				'".mysql_real_escape_string($this->hole3points)."',
				'".mysql_real_escape_string($this->hole4points)."',
				'".mysql_real_escape_string($this->hole5points)."',
				'".mysql_real_escape_string($this->hole6points)."',
				'".mysql_real_escape_string($this->hole7points)."',
				'".mysql_real_escape_string($this->hole8points)."',
				'".mysql_real_escape_string($this->hole9points)."',
				'".mysql_real_escape_string($this->hole10points)."',
				'".mysql_real_escape_string($this->hole11points)."',
				'".mysql_real_escape_string($this->hole12points)."',
				'".mysql_real_escape_string($this->hole13points)."',
				'".mysql_real_escape_string($this->hole14points)."',
				'".mysql_real_escape_string($this->hole15points)."',
				'".mysql_real_escape_string($this->hole16points)."',
				'".mysql_real_escape_string($this->hole17points)."',
				'".mysql_real_escape_string($this->hole18points)."',
				'".mysql_real_escape_string($this->totalpoints)."',
				'".mysql_real_escape_string($this->totalpointsfront9)."',
				'".mysql_real_escape_string($this->totalpointsback9)."',
				'".mysql_real_escape_string($this->hole1putts)."',
				'".mysql_real_escape_string($this->hole2putts)."',
				'".mysql_real_escape_string($this->hole3putts)."',
				'".mysql_real_escape_string($this->hole4putts)."',
				'".mysql_real_escape_string($this->hole5putts)."',
				'".mysql_real_escape_string($this->hole6putts)."',
				'".mysql_real_escape_string($this->hole7putts)."',
				'".mysql_real_escape_string($this->hole8putts)."',
				'".mysql_real_escape_string($this->hole9putts)."',
				'".mysql_real_escape_string($this->hole10putts)."',
				'".mysql_real_escape_string($this->hole11putts)."',
				'".mysql_real_escape_string($this->hole12putts)."',
				'".mysql_real_escape_string($this->hole13putts)."',
				'".mysql_real_escape_string($this->hole14putts)."',
				'".mysql_real_escape_string($this->hole15putts)."',
				'".mysql_real_escape_string($this->hole16putts)."',
				'".mysql_real_escape_string($this->hole17putts)."',
				'".mysql_real_escape_string($this->hole18putts)."',
				'".mysql_real_escape_string($this->totalputts)."',
				'".mysql_real_escape_string($this->totalputtsfront9)."',
				'".mysql_real_escape_string($this->totalputtsback9)."',
				'".mysql_real_escape_string($this->total0putts)."',
				'".mysql_real_escape_string($this->total1putts)."',
				'".mysql_real_escape_string($this->total2putts)."',
				'".mysql_real_escape_string($this->total3putts)."',
				'".mysql_real_escape_string($this->total4putts)."',				
				'".mysql_real_escape_string($this->hole1fir)."',
				'".mysql_real_escape_string($this->hole2fir)."',
				'".mysql_real_escape_string($this->hole3fir)."',
				'".mysql_real_escape_string($this->hole4fir)."',
				'".mysql_real_escape_string($this->hole5fir)."',
				'".mysql_real_escape_string($this->hole6fir)."',
				'".mysql_real_escape_string($this->hole7fir)."',
				'".mysql_real_escape_string($this->hole8fir)."',
				'".mysql_real_escape_string($this->hole9fir)."',
				'".mysql_real_escape_string($this->hole10fir)."',
				'".mysql_real_escape_string($this->hole11fir)."',
				'".mysql_real_escape_string($this->hole12fir)."',
				'".mysql_real_escape_string($this->hole13fir)."',
				'".mysql_real_escape_string($this->hole14fir)."',
				'".mysql_real_escape_string($this->hole15fir)."',
				'".mysql_real_escape_string($this->hole16fir)."',
				'".mysql_real_escape_string($this->hole17fir)."',
				'".mysql_real_escape_string($this->hole18fir)."',
				'".mysql_real_escape_string($this->hole1firposition)."',
				'".mysql_real_escape_string($this->hole2firposition)."',
				'".mysql_real_escape_string($this->hole3firposition)."',
				'".mysql_real_escape_string($this->hole4firposition)."',
				'".mysql_real_escape_string($this->hole5firposition)."',
				'".mysql_real_escape_string($this->hole6firposition)."',
				'".mysql_real_escape_string($this->hole7firposition)."',
				'".mysql_real_escape_string($this->hole8firposition)."',
				'".mysql_real_escape_string($this->hole9firposition)."',
				'".mysql_real_escape_string($this->hole10firposition)."',
				'".mysql_real_escape_string($this->hole11firposition)."',
				'".mysql_real_escape_string($this->hole12firposition)."',
				'".mysql_real_escape_string($this->hole13firposition)."',
				'".mysql_real_escape_string($this->hole14firposition)."',
				'".mysql_real_escape_string($this->hole15firposition)."',
				'".mysql_real_escape_string($this->hole16firposition)."',
				'".mysql_real_escape_string($this->hole17firposition)."',
				'".mysql_real_escape_string($this->hole18firposition)."',
				'".mysql_real_escape_string($this->totalfir)."',
				'".mysql_real_escape_string($this->totalfirhitcentre)."',
				'".mysql_real_escape_string($this->totalfirhitleft)."',
				'".mysql_real_escape_string($this->totalfirhitright)."',
				'".mysql_real_escape_string($this->totalfirhitshort)."',
				'".mysql_real_escape_string($this->totalfirmissleft)."',
				'".mysql_real_escape_string($this->totalfirmissright)."',
				'".mysql_real_escape_string($this->totalfirmissshort)."',
				'".mysql_real_escape_string($this->totalfirfront9)."',
				'".mysql_real_escape_string($this->totalfirhitcentrefront9)."',
				'".mysql_real_escape_string($this->totalfirhitleftfront9)."',
				'".mysql_real_escape_string($this->totalfirhitrightfront9)."',
				'".mysql_real_escape_string($this->totalfirhitshortfront9)."',
				'".mysql_real_escape_string($this->totalfirmissleftfront9)."',
				'".mysql_real_escape_string($this->totalfirmissrightfront9)."',
				'".mysql_real_escape_string($this->totalfirmissshortfront9)."',
				'".mysql_real_escape_string($this->totalfirback9)."',
				'".mysql_real_escape_string($this->totalfirhitcentreback9)."',
				'".mysql_real_escape_string($this->totalfirhitleftback9)."',
				'".mysql_real_escape_string($this->totalfirhitrightback9)."',
				'".mysql_real_escape_string($this->totalfirhitshortback9)."',
				'".mysql_real_escape_string($this->totalfirmissleftback9)."',
				'".mysql_real_escape_string($this->totalfirmissrightback9)."',
				'".mysql_real_escape_string($this->totalfirmissshortback9)."',
				'".mysql_real_escape_string($this->possiblefir)."',
				'".mysql_real_escape_string($this->possiblefirfront9)."',
				'".mysql_real_escape_string($this->possiblefirback9)."',
				'".mysql_real_escape_string($this->hole1gir)."',
				'".mysql_real_escape_string($this->hole2gir)."',
				'".mysql_real_escape_string($this->hole3gir)."',
				'".mysql_real_escape_string($this->hole4gir)."',
				'".mysql_real_escape_string($this->hole5gir)."',
				'".mysql_real_escape_string($this->hole6gir)."',
				'".mysql_real_escape_string($this->hole7gir)."',
				'".mysql_real_escape_string($this->hole8gir)."',
				'".mysql_real_escape_string($this->hole9gir)."',
				'".mysql_real_escape_string($this->hole10gir)."',
				'".mysql_real_escape_string($this->hole11gir)."',
				'".mysql_real_escape_string($this->hole12gir)."',
				'".mysql_real_escape_string($this->hole13gir)."',
				'".mysql_real_escape_string($this->hole14gir)."',
				'".mysql_real_escape_string($this->hole15gir)."',
				'".mysql_real_escape_string($this->hole16gir)."',
				'".mysql_real_escape_string($this->hole17gir)."',
				'".mysql_real_escape_string($this->hole18gir)."',
				'".mysql_real_escape_string($this->hole1girposition)."',
				'".mysql_real_escape_string($this->hole2girposition)."',
				'".mysql_real_escape_string($this->hole3girposition)."',
				'".mysql_real_escape_string($this->hole4girposition)."',
				'".mysql_real_escape_string($this->hole5girposition)."',
				'".mysql_real_escape_string($this->hole6girposition)."',
				'".mysql_real_escape_string($this->hole7girposition)."',
				'".mysql_real_escape_string($this->hole8girposition)."',
				'".mysql_real_escape_string($this->hole9girposition)."',
				'".mysql_real_escape_string($this->hole10girposition)."',
				'".mysql_real_escape_string($this->hole11girposition)."',
				'".mysql_real_escape_string($this->hole12girposition)."',
				'".mysql_real_escape_string($this->hole13girposition)."',
				'".mysql_real_escape_string($this->hole14girposition)."',
				'".mysql_real_escape_string($this->hole15girposition)."',
				'".mysql_real_escape_string($this->hole16girposition)."',
				'".mysql_real_escape_string($this->hole17girposition)."',
				'".mysql_real_escape_string($this->hole18girposition)."',
				'".mysql_real_escape_string($this->totalgir)."',
				'".mysql_real_escape_string($this->totalgirhitpin)."',
				'".mysql_real_escape_string($this->totalgirhitleft)."',
				'".mysql_real_escape_string($this->totalgirhitright)."',
				'".mysql_real_escape_string($this->totalgirhitlong)."',
				'".mysql_real_escape_string($this->totalgirhitshort)."',
				'".mysql_real_escape_string($this->totalgirmissleft)."',
				'".mysql_real_escape_string($this->totalgirmissright)."',
				'".mysql_real_escape_string($this->totalgirmisslong)."',
				'".mysql_real_escape_string($this->totalgirmissshort)."',
				'".mysql_real_escape_string($this->totalgirfront9)."',
				'".mysql_real_escape_string($this->totalgirhitpinfront9)."',
				'".mysql_real_escape_string($this->totalgirhitleftfront9)."',
				'".mysql_real_escape_string($this->totalgirhitrightfront9)."',
				'".mysql_real_escape_string($this->totalgirhitlongfront9)."',
				'".mysql_real_escape_string($this->totalgirhitshortfront9)."',
				'".mysql_real_escape_string($this->totalgirmissleftfront9)."',
				'".mysql_real_escape_string($this->totalgirmissrightfront9)."',
				'".mysql_real_escape_string($this->totalgirmisslongfront9)."',
				'".mysql_real_escape_string($this->totalgirmissshortfront9)."',
				'".mysql_real_escape_string($this->totalgirback9)."',
				'".mysql_real_escape_string($this->totalgirhitpinback9)."',
				'".mysql_real_escape_string($this->totalgirhitleftback9)."',
				'".mysql_real_escape_string($this->totalgirhitrightback9)."',
				'".mysql_real_escape_string($this->totalgirhitlongback9)."',
				'".mysql_real_escape_string($this->totalgirhitshortback9)."',
				'".mysql_real_escape_string($this->totalgirmissleftback9)."',
				'".mysql_real_escape_string($this->totalgirmissrightback9)."',
				'".mysql_real_escape_string($this->totalgirmisslongback9)."',
				'".mysql_real_escape_string($this->totalgirmissshortback9)."',
				'".mysql_real_escape_string($this->totalpar3)."',
				'".mysql_real_escape_string($this->totalpar3greenhit)."',
				'".mysql_real_escape_string($this->totalpar3greenmiss)."',
				'".mysql_real_escape_string($this->hole1updown)."',
				'".mysql_real_escape_string($this->hole2updown)."',
				'".mysql_real_escape_string($this->hole3updown)."',
				'".mysql_real_escape_string($this->hole4updown)."',
				'".mysql_real_escape_string($this->hole5updown)."',
				'".mysql_real_escape_string($this->hole6updown)."',
				'".mysql_real_escape_string($this->hole7updown)."',
				'".mysql_real_escape_string($this->hole8updown)."',
				'".mysql_real_escape_string($this->hole9updown)."',
				'".mysql_real_escape_string($this->hole10updown)."',
				'".mysql_real_escape_string($this->hole11updown)."',
				'".mysql_real_escape_string($this->hole12updown)."',
				'".mysql_real_escape_string($this->hole13updown)."',
				'".mysql_real_escape_string($this->hole14updown)."',
				'".mysql_real_escape_string($this->hole15updown)."',
				'".mysql_real_escape_string($this->hole16updown)."',
				'".mysql_real_escape_string($this->hole17updown)."',
				'".mysql_real_escape_string($this->hole18updown)."',
				'".mysql_real_escape_string($this->hole1updownhit)."',
				'".mysql_real_escape_string($this->hole2updownhit)."',
				'".mysql_real_escape_string($this->hole3updownhit)."',
				'".mysql_real_escape_string($this->hole4updownhit)."',
				'".mysql_real_escape_string($this->hole5updownhit)."',
				'".mysql_real_escape_string($this->hole6updownhit)."',
				'".mysql_real_escape_string($this->hole7updownhit)."',
				'".mysql_real_escape_string($this->hole8updownhit)."',
				'".mysql_real_escape_string($this->hole9updownhit)."',
				'".mysql_real_escape_string($this->hole10updownhit)."',
				'".mysql_real_escape_string($this->hole11updownhit)."',
				'".mysql_real_escape_string($this->hole12updownhit)."',
				'".mysql_real_escape_string($this->hole13updownhit)."',
				'".mysql_real_escape_string($this->hole14updownhit)."',
				'".mysql_real_escape_string($this->hole15updownhit)."',
				'".mysql_real_escape_string($this->hole16updownhit)."',
				'".mysql_real_escape_string($this->hole17updownhit)."',
				'".mysql_real_escape_string($this->hole18updownhit)."',
				'".mysql_real_escape_string($this->totalupdown)."',
				'".mysql_real_escape_string($this->totalupdownhit)."',
				'".mysql_real_escape_string($this->totalupdownfront9)."',
				'".mysql_real_escape_string($this->totalupdownhitfront9)."',
				'".mysql_real_escape_string($this->totalupdownback9)."',
				'".mysql_real_escape_string($this->totalupdownhitback9)."',
				'".mysql_real_escape_string($this->hole1bunker)."',
				'".mysql_real_escape_string($this->hole2bunker)."',
				'".mysql_real_escape_string($this->hole3bunker)."',
				'".mysql_real_escape_string($this->hole4bunker)."',
				'".mysql_real_escape_string($this->hole5bunker)."',
				'".mysql_real_escape_string($this->hole6bunker)."',
				'".mysql_real_escape_string($this->hole7bunker)."',
				'".mysql_real_escape_string($this->hole8bunker)."',
				'".mysql_real_escape_string($this->hole9bunker)."',
				'".mysql_real_escape_string($this->hole10bunker)."',
				'".mysql_real_escape_string($this->hole11bunker)."',
				'".mysql_real_escape_string($this->hole12bunker)."',
				'".mysql_real_escape_string($this->hole13bunker)."',
				'".mysql_real_escape_string($this->hole14bunker)."',
				'".mysql_real_escape_string($this->hole15bunker)."',
				'".mysql_real_escape_string($this->hole16bunker)."',
				'".mysql_real_escape_string($this->hole17bunker)."',
				'".mysql_real_escape_string($this->hole18bunker)."',
				'".mysql_real_escape_string($this->hole1sandsave)."',
				'".mysql_real_escape_string($this->hole2sandsave)."',
				'".mysql_real_escape_string($this->hole3sandsave)."',
				'".mysql_real_escape_string($this->hole4sandsave)."',
				'".mysql_real_escape_string($this->hole5sandsave)."',
				'".mysql_real_escape_string($this->hole6sandsave)."',
				'".mysql_real_escape_string($this->hole7sandsave)."',
				'".mysql_real_escape_string($this->hole8sandsave)."',
				'".mysql_real_escape_string($this->hole9sandsave)."',
				'".mysql_real_escape_string($this->hole10sandsave)."',
				'".mysql_real_escape_string($this->hole11sandsave)."',
				'".mysql_real_escape_string($this->hole12sandsave)."',
				'".mysql_real_escape_string($this->hole13sandsave)."',
				'".mysql_real_escape_string($this->hole14sandsave)."',
				'".mysql_real_escape_string($this->hole15sandsave)."',
				'".mysql_real_escape_string($this->hole16sandsave)."',
				'".mysql_real_escape_string($this->hole17sandsave)."',
				'".mysql_real_escape_string($this->hole18sandsave)."',
				'".mysql_real_escape_string($this->totalsandsave)."',
				'".mysql_real_escape_string($this->totalsandsavefront9)."',
				'".mysql_real_escape_string($this->totalsandsaveback9)."',
				'".mysql_real_escape_string($this->hole1sandsavehit)."',
				'".mysql_real_escape_string($this->hole2sandsavehit)."',
				'".mysql_real_escape_string($this->hole3sandsavehit)."',
				'".mysql_real_escape_string($this->hole4sandsavehit)."',
				'".mysql_real_escape_string($this->hole5sandsavehit)."',
				'".mysql_real_escape_string($this->hole6sandsavehit)."',
				'".mysql_real_escape_string($this->hole7sandsavehit)."',
				'".mysql_real_escape_string($this->hole8sandsavehit)."',
				'".mysql_real_escape_string($this->hole9sandsavehit)."',
				'".mysql_real_escape_string($this->hole10sandsavehit)."',
				'".mysql_real_escape_string($this->hole11sandsavehit)."',
				'".mysql_real_escape_string($this->hole12sandsavehit)."',
				'".mysql_real_escape_string($this->hole13sandsavehit)."',
				'".mysql_real_escape_string($this->hole14sandsavehit)."',
				'".mysql_real_escape_string($this->hole15sandsavehit)."',
				'".mysql_real_escape_string($this->hole16sandsavehit)."',
				'".mysql_real_escape_string($this->hole17sandsavehit)."',
				'".mysql_real_escape_string($this->hole18sandsavehit)."',
				'".mysql_real_escape_string($this->totalsandsavehit)."',
				'".mysql_real_escape_string($this->totalsandsavehitfront9)."',
				'".mysql_real_escape_string($this->totalsandsavehitback9)."',
				'".mysql_real_escape_string($this->hole1penalties)."',
				'".mysql_real_escape_string($this->hole2penalties)."',
				'".mysql_real_escape_string($this->hole3penalties)."',
				'".mysql_real_escape_string($this->hole4penalties)."',
				'".mysql_real_escape_string($this->hole5penalties)."',
				'".mysql_real_escape_string($this->hole6penalties)."',
				'".mysql_real_escape_string($this->hole7penalties)."',
				'".mysql_real_escape_string($this->hole8penalties)."',
				'".mysql_real_escape_string($this->hole9penalties)."',
				'".mysql_real_escape_string($this->hole10penalties)."',
				'".mysql_real_escape_string($this->hole11penalties)."',
				'".mysql_real_escape_string($this->hole12penalties)."',
				'".mysql_real_escape_string($this->hole13penalties)."',
				'".mysql_real_escape_string($this->hole14penalties)."',
				'".mysql_real_escape_string($this->hole15penalties)."',
				'".mysql_real_escape_string($this->hole16penalties)."',
				'".mysql_real_escape_string($this->hole17penalties)."',
				'".mysql_real_escape_string($this->hole18penalties)."',
				'".mysql_real_escape_string($this->totalpenalties)."',
				'".mysql_real_escape_string($this->totalpenaltiesfront9)."',
				'".mysql_real_escape_string($this->totalpenaltiesback9)."',
				'".mysql_real_escape_string($this->distanceunit)."',
				'".mysql_real_escape_string($this->hole1distance)."',
				'".mysql_real_escape_string($this->hole2distance)."',
				'".mysql_real_escape_string($this->hole3distance)."',
				'".mysql_real_escape_string($this->hole4distance)."',
				'".mysql_real_escape_string($this->hole5distance)."',
				'".mysql_real_escape_string($this->hole6distance)."',
				'".mysql_real_escape_string($this->hole7distance)."',
				'".mysql_real_escape_string($this->hole8distance)."',
				'".mysql_real_escape_string($this->hole9distance)."',
				'".mysql_real_escape_string($this->hole10distance)."',
				'".mysql_real_escape_string($this->hole11distance)."',
				'".mysql_real_escape_string($this->hole12distance)."',
				'".mysql_real_escape_string($this->hole13distance)."',
				'".mysql_real_escape_string($this->hole14distance)."',
				'".mysql_real_escape_string($this->hole15distance)."',
				'".mysql_real_escape_string($this->hole16distance)."',
				'".mysql_real_escape_string($this->hole17distance)."',
				'".mysql_real_escape_string($this->hole18distance)."',
				'".mysql_real_escape_string($this->totaldistance)."',
				'".mysql_real_escape_string($this->totaldistancefront9)."',
				'".mysql_real_escape_string($this->totaldistanceback9)."',
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
				'".mysql_real_escape_string($this->totalpar)."',
				'".mysql_real_escape_string($this->totalparfront9)."',
				'".mysql_real_escape_string($this->totalparback9)."',
				'".mysql_real_escape_string($this->enabled)."',
				NOW()
				)
				";
		return $this->roundid = $this->db->insert($sql);
	}

	public function update() {
		$sql = "UPDATE
				`round`
				SET
				`courseid` = '".mysql_real_escape_string($this->courseid)."',
				`userid` = '".mysql_real_escape_string($this->userid)."',
				`courseid` = '".mysql_real_escape_string($this->courseid)."',
				`teeid` = '".mysql_real_escape_string($this->teeid)."',
				`colour` = '".mysql_real_escape_string($this->colour)."',
				`name` = '".mysql_real_escape_string($this->name)."',
				`date` = '".mysql_real_escape_string($this->date)."',
				`added` = '".mysql_real_escape_string($this->added)."',
				`courserating` = '".mysql_real_escape_string($this->courserating)."',
				`slope` = '".mysql_real_escape_string($this->slope)."',
				`sss` = '".mysql_real_escape_string($this->sss)."',
				`primaryweatherid` = '".mysql_real_escape_string($this->primaryweatherid)."',
				`secondaryweatherid` = '".mysql_real_escape_string($this->secondaryweatherid)."',
				`comments` = '".mysql_real_escape_string($this->comments)."',
				`trackhandicap` = '".mysql_real_escape_string($this->trackhandicap)."',
				`handicapbefore` = '".mysql_real_escape_string($this->handicapbefore)."',
				`handicapafter` = '".mysql_real_escape_string($this->handicapafter)."',
				`albatrosses` = '".mysql_real_escape_string($this->albatrosses)."',
				`holeinones` = '".mysql_real_escape_string($this->holeinones)."',
				`eagles` = '".mysql_real_escape_string($this->eagles)."',
				`birdies` = '".mysql_real_escape_string($this->birdies)."',
				`pars` = '".mysql_real_escape_string($this->pars)."',
				`bogeys` = '".mysql_real_escape_string($this->bogeys)."',
				`doubles` = '".mysql_real_escape_string($this->doubles)."',
				`other` = '".mysql_real_escape_string($this->other)."',
				`par3average` = '".mysql_real_escape_string($this->par3average)."',
				`par4average` = '".mysql_real_escape_string($this->par4average)."',
				`par5average` = '".mysql_real_escape_string($this->par5average)."',
				`holesplayed` = '".mysql_real_escape_string($this->holesplayed)."',
				`stats` = '".mysql_real_escape_string($this->stats)."',
				`hole1score` = '".mysql_real_escape_string($this->hole1score)."',
				`hole2score` = '".mysql_real_escape_string($this->hole2score)."',
				`hole3score` = '".mysql_real_escape_string($this->hole3score)."',
				`hole4score` = '".mysql_real_escape_string($this->hole4score)."',
				`hole5score` = '".mysql_real_escape_string($this->hole5score)."',
				`hole6score` = '".mysql_real_escape_string($this->hole6score)."',
				`hole7score` = '".mysql_real_escape_string($this->hole7score)."',
				`hole8score` = '".mysql_real_escape_string($this->hole8score)."',
				`hole9score` = '".mysql_real_escape_string($this->hole9score)."',
				`hole10score` = '".mysql_real_escape_string($this->hole10score)."',
				`hole11score` = '".mysql_real_escape_string($this->hole11score)."',
				`hole12score` = '".mysql_real_escape_string($this->hole12score)."',
				`hole13score` = '".mysql_real_escape_string($this->hole13score)."',
				`hole14score` = '".mysql_real_escape_string($this->hole14score)."',
				`hole15score` = '".mysql_real_escape_string($this->hole15score)."',
				`hole16score` = '".mysql_real_escape_string($this->hole16score)."',
				`hole17score` = '".mysql_real_escape_string($this->hole17score)."',
				`hole18score` = '".mysql_real_escape_string($this->hole18score)."',
				`totalscore` = '".mysql_real_escape_string($this->totalscore)."',
				`totalscorefront9` = '".mysql_real_escape_string($this->totalscorefront9)."',
				`totalscoreback9` = '".mysql_real_escape_string($this->totalscoreback9)."',
				`hole1allowance` = '".mysql_real_escape_string($this->hole1allowance)."',
				`hole2allowance` = '".mysql_real_escape_string($this->hole2allowance)."',
				`hole3allowance` = '".mysql_real_escape_string($this->hole3allowance)."',
				`hole4allowance` = '".mysql_real_escape_string($this->hole4allowance)."',
				`hole5allowance` = '".mysql_real_escape_string($this->hole5allowance)."',
				`hole6allowance` = '".mysql_real_escape_string($this->hole6allowance)."',
				`hole7allowance` = '".mysql_real_escape_string($this->hole7allowance)."',
				`hole8allowance` = '".mysql_real_escape_string($this->hole8allowance)."',
				`hole9allowance` = '".mysql_real_escape_string($this->hole9allowance)."',
				`hole10allowance` = '".mysql_real_escape_string($this->hole10allowance)."',
				`hole11allowance` = '".mysql_real_escape_string($this->hole11allowance)."',
				`hole12allowance` = '".mysql_real_escape_string($this->hole12allowance)."',
				`hole13allowance` = '".mysql_real_escape_string($this->hole13allowance)."',
				`hole14allowance` = '".mysql_real_escape_string($this->hole14allowance)."',
				`hole15allowance` = '".mysql_real_escape_string($this->hole15allowance)."',
				`hole16allowance` = '".mysql_real_escape_string($this->hole16allowance)."',
				`hole17allowance` = '".mysql_real_escape_string($this->hole17allowance)."',
				`hole18allowance` = '".mysql_real_escape_string($this->hole18allowance)."',
				`hole1scorenet` = '".mysql_real_escape_string($this->hole1scorenet)."',
				`hole2scorenet` = '".mysql_real_escape_string($this->hole2scorenet)."',
				`hole3scorenet` = '".mysql_real_escape_string($this->hole3scorenet)."',
				`hole4scorenet` = '".mysql_real_escape_string($this->hole4scorenet)."',
				`hole5scorenet` = '".mysql_real_escape_string($this->hole5scorenet)."',
				`hole6scorenet` = '".mysql_real_escape_string($this->hole6scorenet)."',
				`hole7scorenet` = '".mysql_real_escape_string($this->hole7scorenet)."',
				`hole8scorenet` = '".mysql_real_escape_string($this->hole8scorenet)."',
				`hole9scorenet` = '".mysql_real_escape_string($this->hole9scorenet)."',
				`hole10scorenet` = '".mysql_real_escape_string($this->hole10scorenet)."',
				`hole11scorenet` = '".mysql_real_escape_string($this->hole11scorenet)."',
				`hole12scorenet` = '".mysql_real_escape_string($this->hole12scorenet)."',
				`hole13scorenet` = '".mysql_real_escape_string($this->hole13scorenet)."',
				`hole14scorenet` = '".mysql_real_escape_string($this->hole14scorenet)."',
				`hole15scorenet` = '".mysql_real_escape_string($this->hole15scorenet)."',
				`hole16scorenet` = '".mysql_real_escape_string($this->hole16scorenet)."',
				`hole17scorenet` = '".mysql_real_escape_string($this->hole17scorenet)."',
				`hole18scorenet` = '".mysql_real_escape_string($this->hole18scorenet)."',
				`totalscorenet` = '".mysql_real_escape_string($this->totalscorenet)."',
				`totalscorenetfront9` = '".mysql_real_escape_string($this->totalscorenetfront9)."',
				`totalscorenetback9` = '".mysql_real_escape_string($this->totalscorenetback9)."',
				`hole1points` = '".mysql_real_escape_string($this->hole1points)."',
				`hole2points` = '".mysql_real_escape_string($this->hole2points)."',
				`hole3points` = '".mysql_real_escape_string($this->hole3points)."',
				`hole4points` = '".mysql_real_escape_string($this->hole4points)."',
				`hole5points` = '".mysql_real_escape_string($this->hole5points)."',
				`hole6points` = '".mysql_real_escape_string($this->hole6points)."',
				`hole7points` = '".mysql_real_escape_string($this->hole7points)."',
				`hole8points` = '".mysql_real_escape_string($this->hole8points)."',
				`hole9points` = '".mysql_real_escape_string($this->hole9points)."',
				`hole10points` = '".mysql_real_escape_string($this->hole10points)."',
				`hole11points` = '".mysql_real_escape_string($this->hole11points)."',
				`hole12points` = '".mysql_real_escape_string($this->hole12points)."',
				`hole13points` = '".mysql_real_escape_string($this->hole13points)."',
				`hole14points` = '".mysql_real_escape_string($this->hole14points)."',
				`hole15points` = '".mysql_real_escape_string($this->hole15points)."',
				`hole16points` = '".mysql_real_escape_string($this->hole16points)."',
				`hole17points` = '".mysql_real_escape_string($this->hole17points)."',
				`hole18points` = '".mysql_real_escape_string($this->hole18points)."',
				`totalpoints` = '".mysql_real_escape_string($this->totalpoints)."',
				`totalpointsfront9` = '".mysql_real_escape_string($this->totalpointsfront9)."',
				`totalpointsback9` = '".mysql_real_escape_string($this->totalpointsback9)."',
				`hole1putts` = '".mysql_real_escape_string($this->hole1putts)."',
				`hole2putts` = '".mysql_real_escape_string($this->hole2putts)."',
				`hole3putts` = '".mysql_real_escape_string($this->hole3putts)."',
				`hole4putts` = '".mysql_real_escape_string($this->hole4putts)."',
				`hole5putts` = '".mysql_real_escape_string($this->hole5putts)."',
				`hole6putts` = '".mysql_real_escape_string($this->hole6putts)."',
				`hole7putts` = '".mysql_real_escape_string($this->hole7putts)."',
				`hole8putts` = '".mysql_real_escape_string($this->hole8putts)."',
				`hole9putts` = '".mysql_real_escape_string($this->hole9putts)."',
				`hole10putts` = '".mysql_real_escape_string($this->hole10putts)."',
				`hole11putts` = '".mysql_real_escape_string($this->hole11putts)."',
				`hole12putts` = '".mysql_real_escape_string($this->hole12putts)."',
				`hole13putts` = '".mysql_real_escape_string($this->hole13putts)."',
				`hole14putts` = '".mysql_real_escape_string($this->hole14putts)."',
				`hole15putts` = '".mysql_real_escape_string($this->hole15putts)."',
				`hole16putts` = '".mysql_real_escape_string($this->hole16putts)."',
				`hole17putts` = '".mysql_real_escape_string($this->hole17putts)."',
				`hole18putts` = '".mysql_real_escape_string($this->hole18putts)."',
				`totalputts` = '".mysql_real_escape_string($this->totalputts)."',
				`totalputtsfront9` = '".mysql_real_escape_string($this->totalputtsfront9)."',
				`totalputtsback9` = '".mysql_real_escape_string($this->totalputtsback9)."',				
				`averageputts` = '".mysql_real_escape_string($this->averageputts)."',
				`averageputtsfront9` = '".mysql_real_escape_string($this->averageputtsfront9)."',
				`averageputtsback9` = '".mysql_real_escape_string($this->averageputtsback9)."',
				`total0putts` = '".mysql_real_escape_string($this->total0putts)."',
				`total1putts` = '".mysql_real_escape_string($this->total1putts)."',
				`total2putts` = '".mysql_real_escape_string($this->total2putts)."',
				`total3putts` = '".mysql_real_escape_string($this->total3putts)."',
				`total4putts` = '".mysql_real_escape_string($this->total4putts)."',				
				`hole1fir` = '".mysql_real_escape_string($this->hole1fir)."',
				`hole2fir` = '".mysql_real_escape_string($this->hole2fir)."',
				`hole3fir` = '".mysql_real_escape_string($this->hole3fir)."',
				`hole4fir` = '".mysql_real_escape_string($this->hole4fir)."',
				`hole5fir` = '".mysql_real_escape_string($this->hole5fir)."',
				`hole6fir` = '".mysql_real_escape_string($this->hole6fir)."',
				`hole7fir` = '".mysql_real_escape_string($this->hole7fir)."',
				`hole8fir` = '".mysql_real_escape_string($this->hole8fir)."',
				`hole9fir` = '".mysql_real_escape_string($this->hole9fir)."',
				`hole10fir` = '".mysql_real_escape_string($this->hole10fir)."',
				`hole11fir` = '".mysql_real_escape_string($this->hole11fir)."',
				`hole12fir` = '".mysql_real_escape_string($this->hole12fir)."',
				`hole13fir` = '".mysql_real_escape_string($this->hole13fir)."',
				`hole14fir` = '".mysql_real_escape_string($this->hole14fir)."',
				`hole15fir` = '".mysql_real_escape_string($this->hole15fir)."',
				`hole16fir` = '".mysql_real_escape_string($this->hole16fir)."',
				`hole17fir` = '".mysql_real_escape_string($this->hole17fir)."',
				`hole18fir` = '".mysql_real_escape_string($this->hole18fir)."',
				`hole1firposition` = '".mysql_real_escape_string($this->hole1firposition)."',
				`hole2firposition` = '".mysql_real_escape_string($this->hole2firposition)."',
				`hole3firposition` = '".mysql_real_escape_string($this->hole3firposition)."',
				`hole4firposition` = '".mysql_real_escape_string($this->hole4firposition)."',
				`hole5firposition` = '".mysql_real_escape_string($this->hole5firposition)."',
				`hole6firposition` = '".mysql_real_escape_string($this->hole6firposition)."',
				`hole7firposition` = '".mysql_real_escape_string($this->hole7firposition)."',
				`hole8firposition` = '".mysql_real_escape_string($this->hole8firposition)."',
				`hole9firposition` = '".mysql_real_escape_string($this->hole9firposition)."',
				`hole10firposition` = '".mysql_real_escape_string($this->hole10firposition)."',
				`hole11firposition` = '".mysql_real_escape_string($this->hole11firposition)."',
				`hole12firposition` = '".mysql_real_escape_string($this->hole12firposition)."',
				`hole13firposition` = '".mysql_real_escape_string($this->hole13firposition)."',
				`hole14firposition` = '".mysql_real_escape_string($this->hole14firposition)."',
				`hole15firposition` = '".mysql_real_escape_string($this->hole15firposition)."',
				`hole16firposition` = '".mysql_real_escape_string($this->hole16firposition)."',
				`hole17firposition` = '".mysql_real_escape_string($this->hole17firposition)."',
				`hole18firposition` = '".mysql_real_escape_string($this->hole18firposition)."',
				`totalfir` = '".mysql_real_escape_string($this->totalfir)."',
				`totalfirhitcentre` = '".mysql_real_escape_string($this->totalfirhitcentre)."',
				`totalfirhitleft` = '".mysql_real_escape_string($this->totalfirhitleft)."',
				`totalfirhitright` = '".mysql_real_escape_string($this->totalfirhitright)."',
				`totalfirhitshort` = '".mysql_real_escape_string($this->totalfirhitshort)."',
				`totalfirmissleft` = '".mysql_real_escape_string($this->totalfirmissleft)."',
				`totalfirmissright` = '".mysql_real_escape_string($this->totalfirmissright)."',
				`totalfirmissshort` = '".mysql_real_escape_string($this->totalfirmissshort)."',
				`totalfirfront9` = '".mysql_real_escape_string($this->totalfirfront9)."',
				`totalfirhitcentrefront9` = '".mysql_real_escape_string($this->totalfirhitcentrefront9)."',
				`totalfirhitleftfront9` = '".mysql_real_escape_string($this->totalfirhitleftfront9)."',
				`totalfirhitrightfront9` = '".mysql_real_escape_string($this->totalfirhitrightfront9)."',
				`totalfirhitshortfront9` = '".mysql_real_escape_string($this->totalfirhitshortfront9)."',
				`totalfirmissleftfront9` = '".mysql_real_escape_string($this->totalfirmissleftfront9)."',
				`totalfirmissrightfront9` = '".mysql_real_escape_string($this->totalfirmissrightfront9)."',
				`totalfirmissshortfront9` = '".mysql_real_escape_string($this->totalfirmissshortfront9)."',
				`totalfirback9` = '".mysql_real_escape_string($this->totalfirback9)."',					
				`totalfirhitcentreback9` = '".mysql_real_escape_string($this->totalfirhitcentreback9)."',
				`totalfirhitleftback9` = '".mysql_real_escape_string($this->totalfirhitleftback9)."',
				`totalfirhitrightback9` = '".mysql_real_escape_string($this->totalfirhitrightback9)."',
				`totalfirhitshortback9` = '".mysql_real_escape_string($this->totalfirhitshortback9)."',
				`totalfirmissleftback9` = '".mysql_real_escape_string($this->totalfirmissleftback9)."',
				`totalfirmissrightback9` = '".mysql_real_escape_string($this->totalfirmissrightback9)."',
				`totalfirmissshortback9` = '".mysql_real_escape_string($this->totalfirmissshortback9)."',
				`possiblefir` = '".mysql_real_escape_string($this->possiblefir)."',
				`possiblefirfront9` = '".mysql_real_escape_string($this->possiblefirfront9)."',
				`possiblefirback9` = '".mysql_real_escape_string($this->possiblefirback9)."',					
				`hole1gir` = '".mysql_real_escape_string($this->hole1gir)."',
				`hole2gir` = '".mysql_real_escape_string($this->hole2gir)."',
				`hole3gir` = '".mysql_real_escape_string($this->hole3gir)."',
				`hole4gir` = '".mysql_real_escape_string($this->hole4gir)."',
				`hole5gir` = '".mysql_real_escape_string($this->hole5gir)."',
				`hole6gir` = '".mysql_real_escape_string($this->hole6gir)."',
				`hole7gir` = '".mysql_real_escape_string($this->hole7gir)."',
				`hole8gir` = '".mysql_real_escape_string($this->hole8gir)."',
				`hole9gir` = '".mysql_real_escape_string($this->hole9gir)."',
				`hole10gir` = '".mysql_real_escape_string($this->hole10gir)."',
				`hole11gir` = '".mysql_real_escape_string($this->hole11gir)."',
				`hole12gir` = '".mysql_real_escape_string($this->hole12gir)."',
				`hole13gir` = '".mysql_real_escape_string($this->hole13gir)."',
				`hole14gir` = '".mysql_real_escape_string($this->hole14gir)."',
				`hole15gir` = '".mysql_real_escape_string($this->hole15gir)."',
				`hole16gir` = '".mysql_real_escape_string($this->hole16gir)."',
				`hole17gir` = '".mysql_real_escape_string($this->hole17gir)."',
				`hole18gir` = '".mysql_real_escape_string($this->hole18gir)."',
				`hole1girposition` = '".mysql_real_escape_string($this->hole1girposition)."',
				`hole2girposition` = '".mysql_real_escape_string($this->hole2girposition)."',
				`hole3girposition` = '".mysql_real_escape_string($this->hole3girposition)."',
				`hole4girposition` = '".mysql_real_escape_string($this->hole4girposition)."',
				`hole5girposition` = '".mysql_real_escape_string($this->hole5girposition)."',
				`hole6girposition` = '".mysql_real_escape_string($this->hole6girposition)."',
				`hole7girposition` = '".mysql_real_escape_string($this->hole7girposition)."',
				`hole8girposition` = '".mysql_real_escape_string($this->hole8girposition)."',
				`hole9girposition` = '".mysql_real_escape_string($this->hole9girposition)."',
				`hole10girposition` = '".mysql_real_escape_string($this->hole10girposition)."',
				`hole11girposition` = '".mysql_real_escape_string($this->hole11girposition)."',
				`hole12girposition` = '".mysql_real_escape_string($this->hole12girposition)."',
				`hole13girposition` = '".mysql_real_escape_string($this->hole13girposition)."',
				`hole14girposition` = '".mysql_real_escape_string($this->hole14girposition)."',
				`hole15girposition` = '".mysql_real_escape_string($this->hole15girposition)."',
				`hole16girposition` = '".mysql_real_escape_string($this->hole16girposition)."',
				`hole17girposition` = '".mysql_real_escape_string($this->hole17girposition)."',
				`hole18girposition` = '".mysql_real_escape_string($this->hole18girposition)."',
				`totalgir` = '".mysql_real_escape_string($this->totalgir)."',
				`totalgirhitpin` = '".mysql_real_escape_string($this->totalgirhitpin)."',
				`totalgirhitleft` = '".mysql_real_escape_string($this->totalgirhitleft)."',
				`totalgirhitright` = '".mysql_real_escape_string($this->totalgirhitright)."',
				`totalgirhitlong` = '".mysql_real_escape_string($this->totalgirhitlong)."',
				`totalgirhitshort` = '".mysql_real_escape_string($this->totalgirhitshort)."',
				`totalgirmissleft` = '".mysql_real_escape_string($this->totalgirmissleft)."',
				`totalgirmissright` = '".mysql_real_escape_string($this->totalgirmissright)."',
				`totalgirmisslong` = '".mysql_real_escape_string($this->totalgirmisslong)."',
				`totalgirmissshort` = '".mysql_real_escape_string($this->totalgirmissshort)."',
				`totalgirfront9` = '".mysql_real_escape_string($this->totalgirfront9)."',
				`totalgirhitpinfront9` = '".mysql_real_escape_string($this->totalgirhitpinfront9)."',
				`totalgirhitleftfront9` = '".mysql_real_escape_string($this->totalgirhitleftfront9)."',
				`totalgirhitrightfront9` = '".mysql_real_escape_string($this->totalgirhitrightfront9)."',
				`totalgirhitlongfront9` = '".mysql_real_escape_string($this->totalgirhitlongfront9)."',
				`totalgirhitshortfront9` = '".mysql_real_escape_string($this->totalgirhitshortfront9)."',
				`totalgirmissleftfront9` = '".mysql_real_escape_string($this->totalgirmissleftfront9)."',
				`totalgirmissrightfront9` = '".mysql_real_escape_string($this->totalgirmissrightfront9)."',
				`totalgirmisslongfront9` = '".mysql_real_escape_string($this->totalgirmisslongfront9)."',
				`totalgirmissshortfront9` = '".mysql_real_escape_string($this->totalgirmissshortfront9)."',
				`totalgirback9` = '".mysql_real_escape_string($this->totalgirback9)."',	
				`totalgirhitpinback9` = '".mysql_real_escape_string($this->totalgirhitpinback9)."',
				`totalgirhitleftback9` = '".mysql_real_escape_string($this->totalgirhitleftback9)."',
				`totalgirhitrightback9` = '".mysql_real_escape_string($this->totalgirhitrightback9)."',
				`totalgirhitlongback9` = '".mysql_real_escape_string($this->totalgirhitlongback9)."',
				`totalgirhitshortback9` = '".mysql_real_escape_string($this->totalgirhitshortback9)."',
				`totalgirmissleftback9` = '".mysql_real_escape_string($this->totalgirmissleftback9)."',
				`totalgirmissrightback9` = '".mysql_real_escape_string($this->totalgirmissrightback9)."',
				`totalgirmisslongback9` = '".mysql_real_escape_string($this->totalgirmisslongback9)."',
				`totalgirmissshortback9` = '".mysql_real_escape_string($this->totalgirmissshortback9)."',
				`totalpar3` = '".mysql_real_escape_string($this->totalpar3)."',
				`totalpar3greenhit` = '".mysql_real_escape_string($this->totalpar3greenhit)."',
				`totalpar3greenmiss` = '".mysql_real_escape_string($this->totalpar3greenmiss)."',
				`hole1updown` = '".mysql_real_escape_string($this->hole1updown)."',
				`hole2updown` = '".mysql_real_escape_string($this->hole2updown)."',
				`hole3updown` = '".mysql_real_escape_string($this->hole3updown)."',
				`hole4updown` = '".mysql_real_escape_string($this->hole4updown)."',
				`hole5updown` = '".mysql_real_escape_string($this->hole5updown)."',
				`hole6updown` = '".mysql_real_escape_string($this->hole6updown)."',
				`hole7updown` = '".mysql_real_escape_string($this->hole7updown)."',
				`hole8updown` = '".mysql_real_escape_string($this->hole8updown)."',
				`hole9updown` = '".mysql_real_escape_string($this->hole9updown)."',
				`hole10updown` = '".mysql_real_escape_string($this->hole10updown)."',
				`hole11updown` = '".mysql_real_escape_string($this->hole11updown)."',
				`hole12updown` = '".mysql_real_escape_string($this->hole12updown)."',
				`hole13updown` = '".mysql_real_escape_string($this->hole13updown)."',
				`hole14updown` = '".mysql_real_escape_string($this->hole14updown)."',
				`hole15updown` = '".mysql_real_escape_string($this->hole15updown)."',
				`hole16updown` = '".mysql_real_escape_string($this->hole16updown)."',
				`hole17updown` = '".mysql_real_escape_string($this->hole17updown)."',
				`hole18updown` = '".mysql_real_escape_string($this->hole18updown)."',
				`hole1updownhit` = '".mysql_real_escape_string($this->hole1updownhit)."',
				`hole2updownhit` = '".mysql_real_escape_string($this->hole2updownhit)."',
				`hole3updownhit` = '".mysql_real_escape_string($this->hole3updownhit)."',
				`hole4updownhit` = '".mysql_real_escape_string($this->hole4updownhit)."',
				`hole5updownhit` = '".mysql_real_escape_string($this->hole5updownhit)."',
				`hole6updownhit` = '".mysql_real_escape_string($this->hole6updownhit)."',
				`hole7updownhit` = '".mysql_real_escape_string($this->hole7updownhit)."',
				`hole8updownhit` = '".mysql_real_escape_string($this->hole8updownhit)."',
				`hole9updownhit` = '".mysql_real_escape_string($this->hole9updownhit)."',
				`hole10updownhit` = '".mysql_real_escape_string($this->hole10updownhit)."',
				`hole11updownhit` = '".mysql_real_escape_string($this->hole11updownhit)."',
				`hole12updownhit` = '".mysql_real_escape_string($this->hole12updownhit)."',
				`hole13updownhit` = '".mysql_real_escape_string($this->hole13updownhit)."',
				`hole14updownhit` = '".mysql_real_escape_string($this->hole14updownhit)."',
				`hole15updownhit` = '".mysql_real_escape_string($this->hole15updownhit)."',
				`hole16updownhit` = '".mysql_real_escape_string($this->hole16updownhit)."',
				`hole17updownhit` = '".mysql_real_escape_string($this->hole17updownhit)."',
				`hole18updownhit` = '".mysql_real_escape_string($this->hole18updownhit)."',
				`totalupdown` = '".mysql_real_escape_string($this->totalupdown)."',
				`totalupdownhit` = '".mysql_real_escape_string($this->totalupdownhit)."',
				`totalupdownfront9` = '".mysql_real_escape_string($this->totalupdownfront9)."',
				`totalupdownhitfront9` = '".mysql_real_escape_string($this->totalupdownhitfront9)."',
				`totalupdownback9` = '".mysql_real_escape_string($this->totalupdownback9)."',					
				`totalupdownhitback9` = '".mysql_real_escape_string($this->totalupdownhitback9)."',					
				`hole1bunker` = '".mysql_real_escape_string($this->hole1bunker)."',
				`hole2bunker` = '".mysql_real_escape_string($this->hole2bunker)."',
				`hole3bunker` = '".mysql_real_escape_string($this->hole3bunker)."',
				`hole4bunker` = '".mysql_real_escape_string($this->hole4bunker)."',
				`hole5bunker` = '".mysql_real_escape_string($this->hole5bunker)."',
				`hole6bunker` = '".mysql_real_escape_string($this->hole6bunker)."',
				`hole7bunker` = '".mysql_real_escape_string($this->hole7bunker)."',
				`hole8bunker` = '".mysql_real_escape_string($this->hole8bunker)."',
				`hole9bunker` = '".mysql_real_escape_string($this->hole9bunker)."',
				`hole10bunker` = '".mysql_real_escape_string($this->hole10bunker)."',
				`hole11bunker` = '".mysql_real_escape_string($this->hole11bunker)."',
				`hole12bunker` = '".mysql_real_escape_string($this->hole12bunker)."',
				`hole13bunker` = '".mysql_real_escape_string($this->hole13bunker)."',
				`hole14bunker` = '".mysql_real_escape_string($this->hole14bunker)."',
				`hole15bunker` = '".mysql_real_escape_string($this->hole15bunker)."',
				`hole16bunker` = '".mysql_real_escape_string($this->hole16bunker)."',
				`hole17bunker` = '".mysql_real_escape_string($this->hole17bunker)."',
				`hole18bunker` = '".mysql_real_escape_string($this->hole18bunker)."',
				`hole1sandsave` = '".mysql_real_escape_string($this->hole1sandsave)."',
				`hole2sandsave` = '".mysql_real_escape_string($this->hole2sandsave)."',
				`hole3sandsave` = '".mysql_real_escape_string($this->hole3sandsave)."',
				`hole4sandsave` = '".mysql_real_escape_string($this->hole4sandsave)."',
				`hole5sandsave` = '".mysql_real_escape_string($this->hole5sandsave)."',
				`hole6sandsave` = '".mysql_real_escape_string($this->hole6sandsave)."',
				`hole7sandsave` = '".mysql_real_escape_string($this->hole7sandsave)."',
				`hole8sandsave` = '".mysql_real_escape_string($this->hole8sandsave)."',
				`hole9sandsave` = '".mysql_real_escape_string($this->hole9sandsave)."',
				`hole10sandsave` = '".mysql_real_escape_string($this->hole10sandsave)."',
				`hole11sandsave` = '".mysql_real_escape_string($this->hole11sandsave)."',
				`hole12sandsave` = '".mysql_real_escape_string($this->hole12sandsave)."',
				`hole13sandsave` = '".mysql_real_escape_string($this->hole13sandsave)."',
				`hole14sandsave` = '".mysql_real_escape_string($this->hole14sandsave)."',
				`hole15sandsave` = '".mysql_real_escape_string($this->hole15sandsave)."',
				`hole16sandsave` = '".mysql_real_escape_string($this->hole16sandsave)."',
				`hole17sandsave` = '".mysql_real_escape_string($this->hole17sandsave)."',
				`hole18sandsave` = '".mysql_real_escape_string($this->hole18sandsave)."',
				`totalsandsave` = '".mysql_real_escape_string($this->totalsandsave)."',
				`totalsandsavefront9` = '".mysql_real_escape_string($this->totalsandsavefront9)."',
				`totalsandsaveback9` = '".mysql_real_escape_string($this->totalsandsaveback9)."',
				`hole1sandsavehit` = '".mysql_real_escape_string($this->hole1sandsavehit)."',
				`hole2sandsavehit` = '".mysql_real_escape_string($this->hole2sandsavehit)."',
				`hole3sandsavehit` = '".mysql_real_escape_string($this->hole3sandsavehit)."',
				`hole4sandsavehit` = '".mysql_real_escape_string($this->hole4sandsavehit)."',
				`hole5sandsavehit` = '".mysql_real_escape_string($this->hole5sandsavehit)."',
				`hole6sandsavehit` = '".mysql_real_escape_string($this->hole6sandsavehit)."',
				`hole7sandsavehit` = '".mysql_real_escape_string($this->hole7sandsavehit)."',
				`hole8sandsavehit` = '".mysql_real_escape_string($this->hole8sandsavehit)."',
				`hole9sandsavehit` = '".mysql_real_escape_string($this->hole9sandsavehit)."',
				`hole10sandsavehit` = '".mysql_real_escape_string($this->hole10sandsavehit)."',
				`hole11sandsavehit` = '".mysql_real_escape_string($this->hole11sandsavehit)."',
				`hole12sandsavehit` = '".mysql_real_escape_string($this->hole12sandsavehit)."',
				`hole13sandsavehit` = '".mysql_real_escape_string($this->hole13sandsavehit)."',
				`hole14sandsavehit` = '".mysql_real_escape_string($this->hole14sandsavehit)."',
				`hole15sandsavehit` = '".mysql_real_escape_string($this->hole15sandsavehit)."',
				`hole16sandsavehit` = '".mysql_real_escape_string($this->hole16sandsavehit)."',
				`hole17sandsavehit` = '".mysql_real_escape_string($this->hole17sandsavehit)."',
				`hole18sandsavehit` = '".mysql_real_escape_string($this->hole18sandsavehit)."',
				`totalsandsavehit` = '".mysql_real_escape_string($this->totalsandsavehit)."',
				`totalsandsavehitfront9` = '".mysql_real_escape_string($this->totalsandsavehitfront9)."',
				`totalsandsavehitback9` = '".mysql_real_escape_string($this->totalsandsavehitback9)."',						
				`hole1penalties` = '".mysql_real_escape_string($this->hole1penalties)."',
				`hole2penalties` = '".mysql_real_escape_string($this->hole2penalties)."',
				`hole3penalties` = '".mysql_real_escape_string($this->hole3penalties)."',
				`hole4penalties` = '".mysql_real_escape_string($this->hole4penalties)."',
				`hole5penalties` = '".mysql_real_escape_string($this->hole5penalties)."',
				`hole6penalties` = '".mysql_real_escape_string($this->hole6penalties)."',
				`hole7penalties` = '".mysql_real_escape_string($this->hole7penalties)."',
				`hole8penalties` = '".mysql_real_escape_string($this->hole8penalties)."',
				`hole9penalties` = '".mysql_real_escape_string($this->hole9penalties)."',
				`hole10penalties` = '".mysql_real_escape_string($this->hole10penalties)."',
				`hole11penalties` = '".mysql_real_escape_string($this->hole11penalties)."',
				`hole12penalties` = '".mysql_real_escape_string($this->hole12penalties)."',
				`hole13penalties` = '".mysql_real_escape_string($this->hole13penalties)."',
				`hole14penalties` = '".mysql_real_escape_string($this->hole14penalties)."',
				`hole15penalties` = '".mysql_real_escape_string($this->hole15penalties)."',
				`hole16penalties` = '".mysql_real_escape_string($this->hole16penalties)."',
				`hole17penalties` = '".mysql_real_escape_string($this->hole17penalties)."',
				`hole18penalties` = '".mysql_real_escape_string($this->hole18penalties)."',
				`totalpenalties` = '".mysql_real_escape_string($this->totalpenalties)."',
				`totalpenaltiesfront9` = '".mysql_real_escape_string($this->totalpenaltiesfront9)."',
				`totalpenaltiesback9` = '".mysql_real_escape_string($this->totalpenaltiesback9)."',
				`distanceunit` = '".mysql_real_escape_string($this->distanceunit)."',
				`hole1distance` = '".mysql_real_escape_string($this->hole1distance)."',
				`hole2distance` = '".mysql_real_escape_string($this->hole2distance)."',
				`hole3distance` = '".mysql_real_escape_string($this->hole3distance)."',
				`hole4distance` = '".mysql_real_escape_string($this->hole4distance)."',
				`hole5distance` = '".mysql_real_escape_string($this->hole5distance)."',
				`hole6distance` = '".mysql_real_escape_string($this->hole6distance)."',
				`hole7distance` = '".mysql_real_escape_string($this->hole7distance)."',
				`hole8distance` = '".mysql_real_escape_string($this->hole8distance)."',
				`hole9distance` = '".mysql_real_escape_string($this->hole9distance)."',
				`hole10distance` = '".mysql_real_escape_string($this->hole10distance)."',
				`hole11distance` = '".mysql_real_escape_string($this->hole11distance)."',
				`hole12distance` = '".mysql_real_escape_string($this->hole12distance)."',
				`hole13distance` = '".mysql_real_escape_string($this->hole13distance)."',
				`hole14distance` = '".mysql_real_escape_string($this->hole14distance)."',
				`hole15distance` = '".mysql_real_escape_string($this->hole15distance)."',
				`hole16distance` = '".mysql_real_escape_string($this->hole16distance)."',
				`hole17distance` = '".mysql_real_escape_string($this->hole17distance)."',
				`hole18distance` = '".mysql_real_escape_string($this->hole18distance)."',
				`totaldistance` = '".mysql_real_escape_string($this->totaldistance)."',
				`totaldistancefront9` = '".mysql_real_escape_string($this->totaldistancefront9)."',
				`totaldistanceback9` = '".mysql_real_escape_string($this->totaldistanceback9)."',
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
				`totalpar` = '".mysql_real_escape_string($this->totalpar)."',
				`totalparfront9` = '".mysql_real_escape_string($this->totalparfront9)."',
				`totalparback9` = '".mysql_real_escape_string($this->totalparback9)."',
				`enabled` = '".mysql_real_escape_string($this->enabled)."',
				`modified` = NOW()
				WHERE
				`roundid` = '".mysql_real_escape_string($this->roundid)."'
				LIMIT 
				1
				";
		return $this->db->update($sql);
	}

	function getAverageByCourseid($courseid) {
		$sql = "SELECT
             `round`.*,
             COUNT(`round`.`courseid`) as `numcourses`,
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
             AVG(`round`.`totalgirmissleft`) as `totalgirmissleft`,
             AVG(`round`.`totalgirmissright`) as `totalgirmissright`,
             AVG(`round`.`totalgirmissshort`) as `totalgirmissshort`,
             AVG(`round`.`totalgirmisslong`) as `totalgirmisslong`,
             AVG(`round`.`totalgirfront9`) as `totalgirfront9`,
             AVG(`round`.`totalgirhitpinfront9`) as `totalgirhitpinfront9`,
             AVG(`round`.`totalgirhitleftfront9`) as `totalgirhitleftfront9`,
             AVG(`round`.`totalgirhitrightfront9`) as `totalgirhitrightfront9`,
             AVG(`round`.`totalgirhitshortfront9`) as `totalgirhitshortfront9`,
             AVG(`round`.`totalgirmissleftfront9`) as `totalgirmissleftfront9`,
             AVG(`round`.`totalgirmissrightfront9`) as `totalgirmissrightfront9`,
             AVG(`round`.`totalgirmissshortfront9`) as `totalgirmissshortfront9`,
             AVG(`round`.`totalgirmisslongfront9`) as `totalgirmisslongfront9`,
             AVG(`round`.`totalgirback9`) as `totalgirback9`,
             AVG(`round`.`totalgirhitpinback9`) as `totalgirhitpinback9`,
             AVG(`round`.`totalgirhitleftback9`) as `totalgirhitleftback9`,
             AVG(`round`.`totalgirhitrightback9`) as `totalgirhitrightback9`,
             AVG(`round`.`totalgirhitshortback9`) as `totalgirhitshortback9`,
             AVG(`round`.`totalgirmissleftback9`) as `totalgirmissleftback9`,
             AVG(`round`.`totalgirmissrightback9`) as `totalgirmissrightback9`,
             AVG(`round`.`totalgirmissshortback9`) as `totalgirmissshortback9`,
             AVG(`round`.`totalgirmisslongback9`) as `totalgirmisslongback9`
             FROM
             `round`
            WHERE 
     		 `round`.`courseid` = '" . $courseid . "'
			GROUP BY
			`round`.`courseid`
		";
		$result = $this->db->query($sql);
		return $result[0];
	}	
	
	public function list_all() {
		$sql = "SELECT *
            FROM  
			`round`
            ORDER BY
              `roundid`
            ";
		return $this->db->query($sql);
	}
	
	public function delete() {
		$sql = "DELETE FROM
              `round`
            WHERE
              `roundid` = '" . $this->roundid . "'
            LIMIT 
              1
            ";
		return $this->db->update($sql);
	}

}

?>