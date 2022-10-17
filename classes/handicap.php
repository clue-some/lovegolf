<?php

class handicap {
	
	private $holes = array();
	private $categories = array();
	private $sss;
	private $score = array();
	private $current_handicap;
	private $handicap_change;
	private $new_handicap;
	private $max_strokes_over_par;
	
	public function __construct() {
		$this->categories = array(
			1 => array(
				'rangestart' => 0.1,
				'rangeend' => 5.4,
				'bufferzonestart' => 0,
				'bufferzoneend' => 1,
				'reduction' => -0.1,
				'increase' => 0.1,
			),
			2 => array(
				'rangestart' => 5.5,
				'rangeend' => 12.4,
				'bufferzonestart' => 0,
				'bufferzoneend' => 2,
				'reduction' => -0.2,
				'increase' => 0.1,
			),
			3 => array(
				'rangestart' => 12.5,
				'rangeend' => 20.4,
				'bufferzonestart' => 0,
				'bufferzoneend' => 3,
				'reduction' => -0.3,
				'increase' => 0.1,
			),
			4 => array(
				'rangestart' => 20.5,
				'rangeend' => 28.4,
				'bufferzonestart' => 0,
				'bufferzoneend' => 4,
				'reduction' => -0.4,
				'increase' => 0.1,
			),
			5 => array(
				'rangestart' => 28.5,
				'rangeend' => 999,
				'bufferzonestart' => 0,
				'bufferzoneend' => 5,
				'reduction' => -0.5,
				'increase' => 0.1,
			)
		);
		$this->max_strokes_over_par = 2;
	}
	
	public function set_hole($number, $par, $strokes) {
		if (!is_numeric($par)) {
			throw new Exception('Par must be a whole number.');
		}
		if (!is_numeric($strokes)) {
			throw new Exception('Strokes must be a whole number.');
		}
		$this->holes[$number]['par'] = $par;
		$this->holes[$number]['strokes'] = $strokes;
	}
	
	public function set_sss($sss) {
		$this->sss = $sss;
	}
	
	public function set_max_strokes_over_par($strokes) {
		$this->max_strokes_over_par = $strokes;
	}
	
	public function set_current_handicap($handicap) {
		$this->current_handicap = $handicap;
	}
	
	public function get_holes() {
		return $this->holes;
	}
	
	public function get_score() {
		return $this->score;
	}
	
	public function get_categories() {
		return $this->categories;
	}
	
	public function get_current_handicap() {
		return $this->current_handicap;
	}
	
	public function get_new_handicap() {
		return $this->new_handicap;
	}
	
	public function get_handicap_change() {
		return $this->handicap_change;
	}
	
	private function calculate_adjusted_strokes() {
		if (!$this->holes) {
			throw new Exception('No hole data.');
		}
		foreach ($this->holes as $k => $v) {
			if (!$v['strokes'] || !$v['par']) {
				throw new Exception('Missing data for hole ' . $v['number']);
			}
			if ($v['strokes'] - $v['par'] > $this->max_strokes_over_par) {
				$this->holes[$k]['adjusted_strokes'] = $v['par'] + $this->max_strokes_over_par; 
			} else {
				$this->holes[$k]['adjusted_strokes'] = $v['strokes'];
			}
		}
	}
	
	private function calculate_score() {
		if (!$this->holes) {
			throw new Exception('No hole data.');
		}
		if (!$this->sss) {
			throw new Exception('No SSS set.');
		}
		if (!$this->current_handicap) {
			throw new Exception('No current handicap set.');
		}
		$this->score = array(
			'total' => 0,
			'adjusted' => 0,
			'net' => 0,
			'gross' => 0
		);
		foreach ($this->holes as $k => $v) {
			if (!$v['strokes'] || !$v['par']) {
				throw new Exception('Missing data for hole ' . $v['number']);
			}
			$this->score['total'] += $v['strokes'];
			$this->score['adjusted'] += $v['adjusted_strokes'];
		}
		$this->score['gross'] = $this->score['adjusted'] - $this->sss;
		$this->score['net'] = round($this->score['gross'] - $this->current_handicap); 
	}
	
	public function get_categoryname($handicap) {
		foreach ($this->categories as $k => $v) {
			if ($handicap <= $v['rangeend']) {
				return $k;
			}
		}
	}
	
	private function calculate_handicap() {
		foreach ($this->categories as $v) {
			if ($this->current_handicap <= $v['rangeend']) {
				$category = $v;
				break;
			}
		}
		// print_r($category);
		if ($this->score['net'] > $category['bufferzoneend']) {
			$this->new_handicap = $this->current_handicap + 0.1;
		}
		if ($this->score['net'] <= $category['bufferzoneend'] && $this->score['net'] >= $category['bufferzonestart']) {
			$this->new_handicap = $this->current_handicap;
		}
		if ($this->score['net'] < $category['bufferzonestart']) {
			$this->new_handicap = $this->current_handicap - ($this->score['net'] * $category['reduction']);
		}
		if ($this->new_handicap < 0.1) { 
			$this->new_handicap = 0.1;
		}
		$this->handicap_change = $this->new_handicap - $this->current_handicap;
	}
	
	public function calculate() {
		$this->calculate_adjusted_strokes();
		$this->calculate_score();
		$this->calculate_handicap();
	}
	
}

?>