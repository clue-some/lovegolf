<?php 

require_once('../../classes/ogt.php');

$ogt = new ogt();

$ogt->requireLogin();

header('Content-Type: text/plain');

// Settings

define('DEVLG_MYSQL_USERNAME', 'wwwlove_main');
define('DEVLG_MYSQL_PASSWORD', 'k089uy7ftd');
define('DEVLG_MYSQL_DATABASE', 'wwwlove_main');

define('GCP_MYSQL_USERNAME', 'wwwgolf_tonicbox');
define('GCP_MYSQL_PASSWORD', 'golf123');
define('GCP_MYSQL_DATABASE', 'wwwgolf_scorecard');

define('IMPORT_USERS', false);
define('IMPORT_COURSES', false);
define('IMPORT_TEES', false);
define('IMPORT_ROUNDS', false);

// Connect to both databases

echo "Connecting to " . DEVLG_MYSQL_DATABASE . "...\n";

$lgdb = new mysqli('localhost', DEVLG_MYSQL_USERNAME, DEVLG_MYSQL_PASSWORD, DEVLG_MYSQL_DATABASE);

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

echo "Connecting to " . GCP_MYSQL_DATABASE . "...\n";

$gcpdb = new mysqli('localhost', GCP_MYSQL_USERNAME, GCP_MYSQL_PASSWORD, GCP_MYSQL_DATABASE);

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

if (IMPORT_USERS) {

	// Import GCP Users
	
	echo "Importing GCP users...\n";
	
	$importedusers = 0;
	$skippedusers = 0;
	$faildusers = 0;
	
	$sql = "SELECT * FROM `members`";
	if ($result = $gcpdb->query($sql)) {
		while($row = $result->fetch_assoc()) {
			$checksql = "SELECT `email` FROM `user` WHERE `email` = '" . $lgdb->escape_string($row['Email']) . "'";
			$res = $lgdb->query($checksql);
			if ($res->num_rows) {
				$skippedusers++;
			} else {
				$sql = "
				INSERT INTO `user` (
					`username`,
					`password`,
					`key`,
					`email`,
					`firstname`,
					`surname`,
					`phonenumber`,
					`address1`,
					`town`,
					`county`,
					`postcode`,
					`country`,
					`handicap`,
					`status`,
					`accountcreation`,
					`accountdeadline`,
					`referral`,
					`refid`,
					`promotion`,
					`gcpuser`,
					`gcpuserid`,
					`enabled`,
					`modified`
				) VALUES (
					'" . $lgdb->escape_string($row['Username']) . "',		
					'" . $lgdb->escape_string($row['Password']) . "',		
					'" . $lgdb->escape_string($row['102030']) . "',		
					'" . $lgdb->escape_string(strtolower($row['Email'])) . "',		
					'" . $lgdb->escape_string(ucwords($row['First_Name'])) . "',		
					'" . $lgdb->escape_string(ucwords($row['Surname'])) . "',		
					'" . $lgdb->escape_string($row['Phone_Number']) . "',		
					'" . $lgdb->escape_string(ucwords($row['Street_Address'])) . "',		
					'" . $lgdb->escape_string(ucfirst($row['Town'])) . "',		
					'" . $lgdb->escape_string(ucfirst($row['County'])) . "',		
					'" . $lgdb->escape_string(strtoupper($row['Postcode'])) . "',		
					'" . $lgdb->escape_string(ucfirst($row['Country'])) . "',
					28,
					'" . $lgdb->escape_string($row['User_Status']) . "',
					'" . $lgdb->escape_string($row['Account_Creation']) . "',	
					'" . $lgdb->escape_string($row['Account_Deadline']) . "',		
					'" . $lgdb->escape_string($row['Referral']) . "',		
					'" . $lgdb->escape_string($row['RefID']) . "',
					'" . $lgdb->escape_string($row['Promotion']) . "',		
					1,
					'" . $lgdb->escape_string($row['MemberID']) . "',		
					1,
					NOW()		
				)
				";
				$lgdb->query($sql);
				if ($lgdb->error) {
					echo "Query failed: " . $sql . "\nError: " . $lgdb->error . "\n";
					$faildusers++;
				} else {
					$importedusers++;
				}
			}
		}
	} else {
		die("Query failed: " . $sql . "\nError: " . $gcpdb->error . "\n");
	}
	
	echo $importedusers . " users imported. (" . $faildusers . " failed / " . $skippedusers . " skipped)\n";

}

if (IMPORT_COURSES) {
	
	// Import CGP Courses (Clubs & Courses in LG)
	
	echo "Importing GCP courses...\n";
	
	$matchedcourses = 0;
	$skippedcourses = 0;
	$matchedstring = '';
	$notmatchedstring = '';
	
	$sql = "
		SELECT 
			`courses`.`Course_Name`, 
			`courses`.`CourseID` 
		FROM 
			`courses`
		INNER JOIN
			`scorecard`
		ON
			(`scorecard`.`CourseID` = `courses`.`CourseID`) 
		WHERE 
			`courses`.`countyid` < 112
		GROUP BY
			`courses`.`CourseID`
		ORDER BY
			`courses`.`Course_Name`
			";
	if ($result = $gcpdb->query($sql)) {
		while($row = $result->fetch_assoc()) {
			$originalname = $row['Course_Name']; 
			$row['Course_Name'] = preg_replace('/glf/i', '', $row['Course_Name']);
			//$row['Course_Name'] = preg_replace('/golf/i', '', $row['Course_Name']);
			//$row['Course_Name'] = preg_replace('/club/i', '', $row['Course_Name']);
			$row['Course_Name'] = preg_replace('/crse/i', '', $row['Course_Name']);
			//$row['Course_Name'] = preg_replace('/course/i', '', $row['Course_Name']);
			//$row['Course_Name'] = preg_replace('/park/i', '', $row['Course_Name']);
			//$row['Course_Name'] = preg_replace('/place/i', '', $row['Course_Name']);
			$row['Course_Name'] = preg_replace('/par\sthree/i', '', $row['Course_Name']);
			$row['Course_Name'] = preg_replace('/par\s3/i', '', $row['Course_Name']);
			//$row['Course_Name'] = preg_replace('/9\shole/i', '', $row['Course_Name']);
			$row['Course_Name'] = preg_replace('/nine\shole/i', '', $row['Course_Name']);
			$row['Course_Name'] = preg_replace('/front\s9/i', '', $row['Course_Name']);
			$row['Course_Name'] = preg_replace('/back\s9/i', '', $row['Course_Name']);
			$row['Course_Name'] = preg_replace('/front\snine/i', '', $row['Course_Name']);
			$row['Course_Name'] = preg_replace('/back\snine/i', '', $row['Course_Name']);
			//$row['Course_Name'] = preg_replace('/course/i', '', $row['Course_Name']);
			$row['Course_Name'] = preg_replace('/\,/i', '', $row['Course_Name']);
			$row['Course_Name'] = preg_replace('/\:/i', '', $row['Course_Name']);
			$row['Course_Name'] = preg_replace('/\(/i', '', $row['Course_Name']);
			$row['Course_Name'] = preg_replace('/\)/i', '', $row['Course_Name']);
			$row['Course_Name'] = preg_replace('/\-/i', '', $row['Course_Name']);
			$row['Course_Name'] = preg_replace('/\s\s/i', ' ', $row['Course_Name']);
			$row['Course_Name'] = preg_replace('/\s\s/i', ' ', $row['Course_Name']);
			$row['Course_Name'] = preg_replace('/\s\s/i', ' ', $row['Course_Name']);
			$row['Course_Name'] = trim($row['Course_Name']);
			$matchcourse = "
				SELECT 
					`course`.`courseid` as `courseid`, 
					`course`.`name` as `coursename`, 
					`club`.`name` as `clubname`,
					MATCH(`club`.`name`) AGAINST ('" . $lgdb->escape_string($row['Course_Name']) . "') as `clubrelevance`,
					MATCH(`course`.`name`) AGAINST ('" . $lgdb->escape_string($row['Course_Name']) . "') as `courserelevance`
				FROM 
					`course`
				INNER JOIN
					`club`
				ON
					(`course`.`clubid` = `club`.`clubid`)
				WHERE 
					MATCH(`club`.`name`) AGAINST ('" . $lgdb->escape_string($row['Course_Name']) . "')
				OR
					MATCH(`course`.`name`) AGAINST ('" . $lgdb->escape_string($row['Course_Name']) . "')
				ORDER BY
					`clubrelevance` DESC,
					`courserelevance` DESC
				";
			$res = $lgdb->query($matchcourse);
			if ($res->num_rows) {
				$matchedrow = $res->fetch_assoc();
				$matchedcourses++;
				$matchedstring .= $originalname . " (" . $row['Course_Name'] . ") matched with " . $matchedrow['clubname'] . " / " . $matchedrow['coursename'] . "\n";
				$updatecoursesql = "
					UPDATE 
					`course` 
					SET 
					`gcpcourseid` = '" . $row['CourseID'] . "'
					WHERE
					`courseid` = '" . $matchedrow['courseid'] . "'
					LIMIT 1
				";
				$lgdb->query($updatecoursesql);
			} else {
				$skippedcourses++;
				$notmatchedstring .= $originalname . " (" . $row['Course_Name'] . ") not matched." . "\n";
			}
		}
	} else {
		die("Query failed: " . $sql . "\nError: " . $gcpdb->error . "\n");
	}
	
	echo $matchedcourses . " courses matched. (" . $skippedcourses . " skipped)\n";

}

if (IMPORT_TEES) {
	
	// Import and match Tee data (match by gcpcourseid, but assign to LG courseid), with gcpteeid
	
	echo "Importing GCP Tee Data...\n";
	
	$matchedtees = 0;
	$skippedtees = 0;
	$matchedstring = '';
	$notmatchedstring = '';
	
	$sql = "
		SELECT 
			`holes`.*,
			`tees`.`Tee` as `teecolour`
		FROM
			`scorecard`
		INNER JOIN
			`courses`
		ON
			(`courses`.`CourseID` = `scorecard`.`CourseID`)
		INNER JOIN
			`holes`
		ON
			(`holes`.`CourseID` = `courses`.`CourseID`)
		INNER JOIN
			`tees`
		ON	
			(`holes`.`TeeID` = `tees`.`TeeID`)
		GROUP BY
			`holes`.`Holes_ID`
			";
	if ($result = $gcpdb->query($sql)) {
		while($row = $result->fetch_assoc()) {
			$row['teecolour'] = trim($row['teecolour']);
			$matchtee = "
				SELECT 
					`tee`.`teeid`,
					`tee`.`totalyards`,
					`tee`.`colour`
				FROM 
					`tee`
				INNER JOIN
					`course` 
				ON
					(`tee`.`courseid` = `course`.`courseid`) 
				WHERE
					`course`.`gcpcourseid` = '" . $row['CourseID'] . "'
				ORDER BY 
				ABS(`tee`.`totalyards` - '" . (int)$row['Total_Distance'] . "')
				";
			$res = $lgdb->query($matchtee);
			if ($res->num_rows) {
				$matchedrow = $res->fetch_assoc();
				$matchedtees++;
				$matchedstring .= "C:" . $row['CourseID'] . " / H:" . $row['Holes_ID'] . " / T:" . $row['teecolour'] . " matched with " . $matchedrow['teeid'] . " / " . $matchedrow['colour'] . "\n";
				$updateteesql = "
					UPDATE 
					`tee` 
					SET 
					`gcpteeid` = '" . $row['Holes_ID'] . "',
					`gcpteecolour` = '" . $row['teecolour'] . "'
					WHERE
					`teeid` = '" . $matchedrow['teeid'] . "'
					LIMIT 1
				";
				$lgdb->query($updateteesql);
			} else {
				$skippedtees++;
				$notmatchedstring .= "C:" . $row['CourseID'] . " / H:" . $row['Holes_ID'] . " / T:" . $row['teecolour'] . " not matched." . "\n";
			}
		}
	} else {
		die("Query failed: " . $sql . "\nError: " . $gcpdb->error . "\n");
	}
	
	//echo "*** MATCHED TEES ***\n";
	//
	//echo $matchedstring;
	//
	//echo "*** UN-MATCHED TEES ***\n";
	//
	//echo $notmatchedstring;
	
	echo $matchedtees . " tees matched. (" . $skippedtees . " skipped)\n";

}

if (IMPORT_ROUNDS) {
	
	// Import GCP Round data
		
	echo "Importing GCP Round Data...\n";
	
	$matchedrounds = 0;
	$skippedrounds = 0;
	$matchedstring = '';
	$notmatchedstring = '';
	
	$sql = "
		SELECT 
			`scorecard`.*,
			`tees`.`Tee` as `teecolour`
		FROM
			`scorecard`
		INNER JOIN
			`tees`
		ON
			(`tees`.`TeeID` = `scorecard`.`TeeID`)
		ORDER BY RAND()
		";
	if ($result = $gcpdb->query($sql)) {
		while($row = $result->fetch_assoc()) {
			try {
				
				// Match to the new LG User
				$matchuser = "
					SELECT 
						`user`.`userid`
					FROM 
						`user`
					WHERE
						`user`.`gcpuserid` = '" . $row['MemberID'] . "'
					";
				$res = $lgdb->query($matchuser);
				if (!$res->num_rows) {
					throw new Exception('No user match.');
				}
				$matchedrow = $res->fetch_assoc();
				$userid = $matchedrow['userid'];
	
				// Match to the new LG Course
				$matchcourse = "
					SELECT 
						`course`.`courseid`
					FROM 
						`course`
					WHERE
						`course`.`gcpcourseid` = '" . $row['CourseID'] . "'
					";
				$res = $lgdb->query($matchcourse);
				if (!$res->num_rows) {
					throw new Exception('No course match.');
				}
				$matchedrow = $res->fetch_assoc();
				$courseid = $matchedrow['courseid'];
				
				// Match to the LG Tee (TODO)
				
				// Match to the new LG Course
				$matchtee = "
					SELECT 
						`tee`.`teeid`
					FROM 
						`tee`
					WHERE
						`tee`.`courseid` = '" . $courseid . "'
					AND
						`tee`.`gcpteecolour` = '" . $row['teecolour'] . "'
					";
				$res = $lgdb->query($matchtee);
				if (!$res->num_rows) {
					throw new Exception('No tee match.');
				}
				$matchedrow = $res->fetch_assoc();
				$teeid = $matchedrow['teeid'];
				
				$matchedstring .= "Matched Scorecard:" . $row['ScorecardID'] . " with User:" . $userid . " Course:" . $courseid . " Tee:" . $teeid . "\n";
	
				// Insert (TODO)
				$tee = new tee();
				$tee->find_by_id($teeid);
							
				$round = new round();
				$round->set('courseid', $courseid);
				$round->set('userid', $userid);
				$round->set('teeid', $teeid);
				$round->set('enabled', 1);

				// Copy over tee info
				$round->set('colour', $tee->get('colour'));
				$round->set('sss', $tee->get('sss'));
				$round->set('courserating', $tee->get('courserating'));
				$round->set('slope', $tee->get('slope'));
				$round->set('hole1par', $tee->get('hole1par'));
				$round->set('hole2par', $tee->get('hole2par'));
				$round->set('hole3par', $tee->get('hole3par'));
				$round->set('hole4par', $tee->get('hole4par'));
				$round->set('hole5par', $tee->get('hole5par'));
				$round->set('hole6par', $tee->get('hole6par'));
				$round->set('hole7par', $tee->get('hole7par'));
				$round->set('hole8par', $tee->get('hole8par'));
				$round->set('hole9par', $tee->get('hole9par'));
				$round->set('hole10par', $tee->get('hole10par'));
				$round->set('hole11par', $tee->get('hole11par'));
				$round->set('hole12par', $tee->get('hole12par'));
				$round->set('hole13par', $tee->get('hole13par'));
				$round->set('hole14par', $tee->get('hole14par'));
				$round->set('hole15par', $tee->get('hole15par'));
				$round->set('hole16par', $tee->get('hole16par'));
				$round->set('hole17par', $tee->get('hole17par'));
				$round->set('hole18par', $tee->get('hole18par'));
				$round->set('hole1distance', $tee->get('hole1yards'));
				$round->set('hole2distance', $tee->get('hole2yards'));
				$round->set('hole3distance', $tee->get('hole3yards'));
				$round->set('hole4distance', $tee->get('hole4yards'));
				$round->set('hole5distance', $tee->get('hole5yards'));
				$round->set('hole6distance', $tee->get('hole6yards'));
				$round->set('hole7distance', $tee->get('hole7yards'));
				$round->set('hole8distance', $tee->get('hole8yards'));
				$round->set('hole9distance', $tee->get('hole9yards'));
				$round->set('hole10distance', $tee->get('hole10yards'));
				$round->set('hole11distance', $tee->get('hole11yards'));
				$round->set('hole12distance', $tee->get('hole12yards'));
				$round->set('hole13distance', $tee->get('hole13yards'));
				$round->set('hole14distance', $tee->get('hole14yards'));
				$round->set('hole15distance', $tee->get('hole15yards'));
				$round->set('hole16distance', $tee->get('hole16yards'));
				$round->set('hole17distance', $tee->get('hole17yards'));
				$round->set('hole18distance', $tee->get('hole18yards'));
				$round->set('hole1si', $tee->get('hole1si'));
				$round->set('hole2si', $tee->get('hole2si'));
				$round->set('hole3si', $tee->get('hole3si'));
				$round->set('hole4si', $tee->get('hole4si'));
				$round->set('hole5si', $tee->get('hole5si'));
				$round->set('hole6si', $tee->get('hole6si'));
				$round->set('hole7si', $tee->get('hole7si'));
				$round->set('hole8si', $tee->get('hole8si'));
				$round->set('hole9si', $tee->get('hole9si'));
				$round->set('hole10si', $tee->get('hole10si'));
				$round->set('hole11si', $tee->get('hole11si'));
				$round->set('hole12si', $tee->get('hole12si'));
				$round->set('hole13si', $tee->get('hole13si'));
				$round->set('hole14si', $tee->get('hole14si'));
				$round->set('hole15si', $tee->get('hole15si'));
				$round->set('hole16si', $tee->get('hole16si'));
				$round->set('hole17si', $tee->get('hole17si'));
				$round->set('hole18si', $tee->get('hole18si'));
				$round->set('name', $row['Round_Name']);
				$round->set('holesplayed', 18);
				$round->set('stats', 1);
				$round->set('trackhandicap', 0);
				$dateTime = new DateTime();
				$dateTime->setTimestamp((int)$row['Round_Date']);
				$round->set('date', date_format($dateTime, 'Y-m-d'));
				$dateTime = new DateTime($row['Added_Date']);
				$round->set('added', date_format($dateTime, 'Y-m-d'));

				//$round->set('primaryweatherid', $_POST['primaryweatherid']);
				
				for ($i = 1; $i <= 18; $i++) {
					$round->set('hole' . $i . 'score', $row['Hole_Score_' . $i]);	
					$round->set('hole' . $i . 'putts', $row['Hole_Putts_' . $i]);
					// FIR (Bool)
					switch ($row['Hole_FW_' . $i]) {
						case '':
						case 'No':
						case 'Rough(l)':
						case 'Rough(r)':
							$fir = 0;
							break;
						default: 
							$fir = 1;
					}
					// FIR (Position)
					$round->set('hole' . $i . 'fir', $fir);
					switch ($row['Hole_FW_' . $i]) {
						case 'Yes':
						case 'Centre':
							$firposition = 'centre';
							break;
						case 'Left':
						case 'Rough(l)':
							$firposition = 'left';
							break;
						case 'Right':
						case 'Rough(r)':
							$firposition = 'right';
							break;
						case 'Short':
							$firposition = 'short';
							break;
						default:
							$firposition = '';
					}
					$round->set('hole' . $i . 'firposition', $firposition);
					// GIR (Bool)
					switch ($row['Hole_GIR_' . $i]) {
						case '':
						case 'No':
							$gir = 0;
							break;
						default: 
							$gir = 1;
					}
					// GIR (Position)
					$round->set('hole' . $i . 'gir', $gir);
					switch ($row['Hole_GIR_' . $i]) {
						case 'Pin':
							$girposition = 'pin';
							break;
						case 'Left':
							$girposition = 'left';
							break;
						case 'Right':
							$girposition = 'right';
							break;
						case 'Yes':
						case 'Short':
							$girposition = 'short';
							break;
						case 'Long':
							$girposition = 'long';
							break;
						default:
							$girposition = '';
					}
					$round->set('hole' . $i . 'girposition', $girposition);
					// UP & DOWN
					switch ($row['Up_Down_' . $i]) {
						case 'Yes':
							$updown = '1';
							$updownhit = '1';
							break;
						default:
							$updown = '0';
							$updownhit = '0';

					}
					$round->set('hole' . $i . 'updown', $updown);					
					$round->set('hole' . $i . 'updownhit', $updownhit);					
					// SAND SAVE
					switch ($row['Sand_Save_' . $i]) {
						case 'Yes':
							$sandsave = '1';
							$sandsavehit = '1';
							break;
						case 'Failed':
							$sandsave = '1';
							$sandsavehit = '0';
							break;
						default:
							$sandsave = '0';
							$sandsavehit = '0';

					}
					$round->set('hole' . $i . 'sandsave', $sandsave);					
					$round->set('hole' . $i . 'sandsavehit', $sandsavehit);					
				}
				
				$round->set('comments', $row['Comments']);
				
				$round->calculate();
				
//				print_r($round->get_details());
				
				$roundid = $round->insert();
				
				$matchedrounds++;
			} catch (Exception $e) {
				$skippedrounds++;
				$notmatchedstring .= $e->getMessage() . "\n";
			}
		}
	} else {
		die("Query failed: " . $sql . "\nError: " . $gcpdb->error . "\n");
	}
	
//	echo "*** MATCHED ROUNDS ***\n";
//	
//	echo $matchedstring;
//	
//	echo "*** UN-MATCHED ROUNDS ***\n";
//	
//	echo $notmatchedstring;
	
	echo $matchedrounds . " rounds matched. (" . $skippedrounds . " skipped)\n";
	
}

echo "EOF";

?>