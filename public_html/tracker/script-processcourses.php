<?php

exit();

require_once('../../classes/ogt.php');

$ogt = new ogt();

$ogt->requireLogin();

echo "<pre>";

$course = new course();

//$file = "../../coursedata/courses-england-1.csv";
//$file = "../../coursedata/courses-england-2.csv";
//$file = "../../coursedata/courses-ireland.csv";
//$file = "../../coursedata/courses-northern-ireland.csv";
//$file = "../../coursedata/courses-scotland.csv";
//$file = "../../coursedata/courses-wales.csv";

$filehandle = fopen($file, 'r');

while($row = fgets($filehandle)) {

	$tempdata = preg_split('/\,/', $row);

	$data[] = array(
	'club.name' => str_replace('!',',',$tempdata[0]),
	'club.country' => $tempdata[1],
	'club.region' => $tempdata[2],
	'club.address' => str_replace('!',',',$tempdata[3]),
	'club.postcode' => $tempdata[4],
	'club.telephone' => $tempdata[5],
	'club.email' => $tempdata[6],
	'club.website' => $tempdata[7],
	'course.name' => str_replace('!',',',$tempdata[8]),
	'tee.colour' => $tempdata[9],
	'tee.courserating' => $tempdata[10],
	'tee.slope' => $tempdata[11],
	'tee.sss' => $tempdata[12],
	'hole.number' => $tempdata[13],
	'hole.distancemetres' => $tempdata[14],
	'hole.distanceyards' => $tempdata[15],
	'hole.si' => $tempdata[16],
	'hole.handicap' => $tempdata[17],
	'hole.par' => $tempdata[18]
	);

}

fclose($filehandle);

foreach ($data as $v) {

	$countryid = 0;
	$regionid = 0;

	if ($v['club.country']) {

		echo "Inserting Country: " . $v['club.country'] . '... ';

		try {

			$country = new country();
				
			if ($country->exists_by_name($v['club.country'])) {
				$country->find_by_name($v['club.country']);
				$countryid = $country->get_countryid();
				throw new Exception('Country already exists in database.');
			}
				
			$country->set_name($v['club.country']);

			if ($countryid = $country->insert()) {
					
				echo "OK (ID: " . $countryid . ")\n";
					
			}

		} catch (Exception $e) {

			echo "Failed (" . $e->getMessage() . ")\n";

		}

	}

	if ($v['club.region']) {

		echo "Inserting Region: " . $v['club.region'] . '... ';

		try {

			$region = new region();
				
			if ($region->exists_by_name($v['club.region'])) {
				$region->find_by_name($v['club.region']);
				$regionid = $region->get_regionid();
				throw new Exception('Region already exists in database.');
			}
				
			$region->set_name($v['club.region']);
			$region->set_countryid($countryid);

			if ($regionid = $region->insert()) {
					
				echo "OK (ID: " . $regionid . ")\n";
					
			}

		} catch (Exception $e) {

			echo "Failed (" . $e->getMessage() . ")\n";

		}

	}

	if ($v['club.name']) {

		$clubidid = 0;
		
		echo "Inserting Club: " . $v['club.name'] . '... ';

		try {

			$club = new club();
				
			if ($club->exists_by_name($v['course.name'])) {
				$club->find_by_name($v['course.name']);
				$clubid = $club->get_clubid();
				throw new Exception('Club already exists in database.');
			}
				
			$club->set_name($v['club.name']);
			$club->set_regionid($regionid);
			$club->set_address($v['club.address']);
			$club->set_postcode($v['club.postcode']);
			$club->set_telephone($v['club.telephone']);
			$club->set_email($v['club.email']);
			$club->set_website($v['club.website']);
			$course->set_enabled(1);

			if ($clubid = $club->insert()) {
					
				echo "OK (ID: " . $clubid . ")\n";
					
			}

		} catch (Exception $e) {

			echo "Failed (" . $e->getMessage() . ")\n";

		}

	}
	
	if ($v['course.name']) {

		$courseid = 0;
		
		echo "Inserting Course: " . $v['course.name'] . ' (Club: ' . $clubid . ' ) ... ';

		try {

			$course = new course();
				
			if ($currentcourseid = $course->exists_by_name_clubid($v['course.name'], $clubid)) {
				$courseid = $currentcourseid;
				throw new Exception('Course already exists in database. (Course: ' . $courseid . ')');
			}
				
			$course->set_clubid($clubid);
			$course->set_name($v['course.name']);
			$course->set_enabled(1);

			if ($courseid = $course->insert()) {
					
				echo "OK (ID: " . $courseid . ")\n";
					
			}

		} catch (Exception $e) {

			echo "Failed (" . $e->getMessage() . ")\n";

		}

	}

	if ($v['tee.colour']) {

		echo "Inserting Tee: " . $v['tee.colour'] . ' (Course: ' . $courseid . ') ... ';

		try {

			$tee = new tee();
				
			$tee->set_colour($v['tee.colour']);
			$tee->set_courserating($v['tee.courserating']);
			$tee->set_slope($v['tee.slope']);
			$tee->set_sss($v['tee.sss']);
			$tee->set_courseid($courseid);
			$tee->set_enabled();

			if ($teeid = $tee->insert()) {
					
				echo "OK (ID: " . $teeid . ")\n";
					
			}

		} catch (Exception $e) {

			echo "Failed (" . $e->getMessage() . ")\n";

		}

	}

	if ($v['hole.number']) {

		$holenumber = $v['hole.number'];

		echo "Inserting Hole: " . $holenumber . ' (Tee: ' . $teeid . ') ... ';

		try {

			$tee = new tee();
			$tee->find_by_id($teeid);
						
			$method = 'set_hole' . $holenumber . 'yards';
			$tee->$method($v['hole.distanceyards']);
			$method = 'set_hole' . $holenumber . 'metres';
			$tee->$method($v['hole.distancemetres']);
			$method = 'set_hole' . $holenumber . 'par';
			$tee->$method($v['hole.par']);
			$method = 'set_hole' . $holenumber . 'si';
			$tee->$method($v['hole.si']);

			if ($holenumber == '9' || $holenumber == '18') {
				echo "Updating course... ";
				$course = new course();
				$course->find_by_id($courseid);
				$course->set_holes($holenumber);
				$course->update();
				echo "Recalculating scorecard... ";
				$tee->calculate();
			}
			
			if ($tee->update()) {
					
				echo "OK\n";
					
			}

		} catch (Exception $e) {

			 echo "Failed (" . $e->getMessage() . ")\n";
			// echo "Failed (Duplicate Tee?)\n";
		}

	}

}

//foreach($data as $v) {
//
//	$town = trim(ucwords(strtolower($v['posttown'])));
//
//	$townurl = strtolower(str_replace(' ', '-', preg_replace("/[^a-zA-Z0-9]/", "", $town)));
//
//	$county = trim(ucwords(strtolower($v['county'])));
//
//	$countyurl = strtolower(str_replace(' ', '-', preg_replace("/[^a-zA-Z0-9]/", "", $county)));
//
//	if ($county && !in_array($county, $counties)) {
//
//		$counties[] = $county;
//
//	}
//
//	if (!in_array($town, $towns)) {
//
//		$towns[] = $town;
//
//		$county = new County();
//
//		$town = new Town();
//
//		$town->setCountyId($county->getCountyIdByURLName($countyurl));
//
//		$town->setName(trim(ucwords(strtolower($v['posttown']))));
//
//		$town->setUrlname($townurl);
//
//		$town->setPostcode($v['outcode']);
//
//		//$town->insert();
//
//	}
//
//}

echo "</pre>";

?>