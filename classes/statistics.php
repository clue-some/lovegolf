<?php

Class statistics {

	public $db;
	public $advancedonly;

	function __construct($advancedonly = false) {
		$this->db = new Database();
		$this->advancedonly = $advancedonly;
	}
	
	function set_advancedonly() {
		$this->advancedonly = true;
	}

	public function get_user_lastround($userid) {
		$sql = "SELECT
				* 
				FROM 
				`round`
				WHERE
				`userid` = '" . $userid . "' 
				";
				if ($this->advancedonly) {
					$sql .= "
					AND
					`stats` = 1
					";
				}
				$sql .= "
				ORDER BY 
				`date` DESC
				LIMIT 1
				";
		return $this->db->query($sql);
	}

	public function get_user_bestround($userid) {
		$sql = "SELECT
				* 
				FROM 
				`round`
				WHERE
				`userid` = '" . $userid . "' 
				ORDER BY 
				`totalscore`
				LIMIT 1
				";
		return $this->db->query($sql);
	}

	public function get_user_averageround($userid) {
		$sql = "SELECT
				AVG(`totalscore`) as `averagescore`,
				COUNT(*) as `numrounds`
				FROM 
				`round`
				WHERE
				`userid` = '" . $userid . "' 
				LIMIT 1
				";
		return $this->db->query($sql);
	}
	
	public function get_count_scorecards() {
		$sql = "SELECT
				COUNT(*) as `count`
				FROM 
				`round`
				";
		$results = $this->db->query($sql);
		return $results[0]['count'];
	}

	public function get_count_scorecards_today() {
		$sql = "SELECT
				COUNT(*) as `count`
				FROM 
				`round`
				WHERE
				DATE(`added`) = DATE(NOW())
				";
		$results = $this->db->query($sql);
		return $results[0]['count'];
	}

	public function get_average_score() {
		$sql = "SELECT
				AVG(`totalscore`) as `average`
				FROM 
				`round`
				WHERE
				`totalscore` > 0
				";
		$results = $this->db->query($sql);
		return $results[0]['average'];
	}

	public function get_average_score_today() {
		$sql = "SELECT
				ifnull(AVG(`totalscore`), 0)  as `average`
				FROM 
				`round`
				WHERE
				`totalscore` > 0
				AND
				DATE(`added`) = DATE(NOW())
				";
		$results = $this->db->query($sql);
		return $results[0]['average'];
	}
	
	public function get_popular_course_today() {
		$sql = "SELECT	`courseid`,
                        COUNT(*)	as frequency
                  FROM	`round`
                 WHERE	`totalscore` > 0
                   AND	DATE(`added`) = DATE(NOW())
                 GROUP BY courseid
                 ORDER BY frequency desc
                 LIMIT 1";
		$results = $this->db->query($sql);
		if ($results)
		    return $results[0]['courseid'];
		else
		    return false;
	}

	public function get_best_rounds_today($limit = 10) {
		$sql = "SELECT    `round`.`totalscore`	as totalscore,
		                  `user`.`username`		as username,
		                  `user`.`firstname`	as firstname,
                          `user`.`surname`		as surname
                  FROM    `round`
                 INNER
                  JOIN    `user` 
                    ON   (`user`.`userid` = `round`.`userid`)
                 WHERE    `totalscore` > 0
                   AND    DATE(`added`) = DATE(NOW())
                 ORDER BY `totalscore`
                 LIMIT " . $limit;
		return $this->db->query($sql);
	}

	public function get_best_rounds($limit = 10) {
		$sql = "SELECT	`round`.`totalscore`	as totalscore,
                		`user`.`username`		as username,
                        `user`.`firstname`		as firstname,
                        `user`.`surname`		as surname
                  FROM	`round`
                 INNER
                  JOIN	`user` 
                	ON (`user`.`userid` = `round`.`userid`)
                 WHERE	`totalscore` > 0
                 ORDER	BY `totalscore`
                 LIMIT	" . $limit;
		return $this->db->query($sql);
	}
	
	public function get_user_last_rounds($userid, $limit = 10) {
		$sql = "SELECT
				*
				FROM
				`round`
				WHERE
				`userid` = '" . $userid . "'
				";
				if ($this->advancedonly) {
					$sql .= "
					AND
					`stats` = 1
					";
				}
				$sql .= "				
				ORDER BY
				`date` DESC
				LIMIT " . $limit . "
				";
		return $this->db->query($sql);
	}
		
	public function get_round($roundid) {
		$sql = "SELECT
				*
				FROM
				`round`
				WHERE
				`roundid` = '" . $roundid . "'
				LIMIT 1
				";
		return $this->db->query($sql);
	}	

	public function get_user_last_rounds_handicap($userid, $limit = 10) {
		$sql = "SELECT
				*,
				`handicapafter` - `handicapbefore` as `handicapchange` 
				FROM
				`round`
				WHERE
				`userid` = '" . $userid . "'
				AND
				`handicapafter` > 0
				ORDER BY
				`date` DESC
				LIMIT " . $limit . "
				";
		return $this->db->query($sql);
	}	
	
	public function get_user_last_rounds_strokes_frequency($userid, $limit = 10) {
		$strokes[1] = 0;
		$strokes[2] = 0;
		$strokes[3] = 0;
		$strokes[4] = 0;
		$strokes[5] = 0;
		$strokes[6] = 0;
		$strokes[7] = 0;
		$strokes[8] = 0;
		$strokes[9] = 0;
		$strokes[10] = 0;
		$strokes[11] = 0;
		$strokes[12] = 0;
		$rounds = $this->get_user_last_rounds($userid, $limit);
		if ($rounds) {
			foreach ($rounds as $k => $v) {
				for ($i = 0; $i < 18; $i++) {
					$holestrokes = $v['hole' . ($i + 1) . 'score'];
					$strokes[$holestrokes] = array(
						'strokes' => $holestrokes, 
						'frequency' => $strokes[$holestrokes]['frequency'] + 1,
					);
				}
			}
		}
		return $strokes;
	}
	
	public function get_round_stroke_frequency($roundid) {
		$strokes[1] = 0;
		$strokes[2] = 0;
		$strokes[3] = 0;
		$strokes[4] = 0;
		$strokes[5] = 0;
		$strokes[6] = 0;
		$strokes[7] = 0;
		$strokes[8] = 0;
		$strokes[9] = 0;
		$strokes[10] = 0;
		$strokes[11] = 0;
		$strokes[12] = 0;
		$rounds = $this->get_round($roundid);
		if ($rounds) {
			foreach ($rounds as $k => $v) {
				// Each Round
				for ($i = 0; $i < 18; $i++) {
					// Each Hole
					$holestrokes = $v['hole' . ($i + 1) . 'score'];
					$strokes[$holestrokes] = array(
						'strokes' => $holestrokes, 
						'frequency' => $strokes[$holestrokes]['frequency'] + 1
					);
				}
			}
		}
		return $strokes;
	}

}

?>