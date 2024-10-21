<!-- Functions for interacting with the database -->

<?php 

require_once 'dbConfig.php';

function insertnewapplicant($pdo,$first_name, $last_name, $specialization, $experience_years, $known_languages, $portfolio_link, $date_added) {

	$sql = "INSERT INTO comprendio (first_name,last_name,specialization,experience_years,known_languages,portfolio_link,date_added) VALUES (?,?,?,?,?,?,?)";

	$stmt = $pdo->prepare($sql);

	$executeQuery = $stmt->execute([$first_name, $last_name, $specialization, $experience_years, 
		$known_languages, $portfolio_link, $date_added]);

	if ($executeQuery) {
		return true;	
	}
}

function seeAllApplicants($pdo) {
	$sql = "SELECT * FROM comprendio";
	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute();
	if ($executeQuery) {
		return $stmt->fetchAll();
	}
}

function getApplicantByID($pdo, $Applicant_id) {
	$sql = "SELECT * FROM comprendio WHERE Applicant_id = ?";
	$stmt = $pdo->prepare($sql);
	if ($stmt->execute([$Applicant_id])) {
		return $stmt->fetch();
	}
}

function updateApplicant($pdo, $Applicant_id, $first_name, $last_name, 
	$specialization, $experience_years, $known_languages, $portfolio_link, $date_added) {

	$sql = "UPDATE comprendio 
				SET first_name = ?, 
					last_name = ?, 
					specialization = ?, 
					experience_years = ?, 
					known_languages = ?, 
					portfolio_link = ?, 
					date_added = ? 
			WHERE Applicant_id = ?";
	$stmt = $pdo->prepare($sql);
	
	$executeQuery = $stmt->execute([$first_name, $last_name, $specialization, 
		$experience_years, $known_languages, $portfolio_link, $date_added, $Applicant_id]);

	if ($executeQuery) {
		return true;
	}
}



function deleteApplicant($pdo, $Applicant_id) {

	$sql = "DELETE FROM comprendio WHERE Applicant_id = ?";
	$stmt = $pdo->prepare($sql);

	$executeQuery = $stmt->execute([$Applicant_id]);

	if ($executeQuery) {
		return true;
	}

}




?>