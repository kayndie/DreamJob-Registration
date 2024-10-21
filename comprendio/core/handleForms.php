<?php 

require_once 'dbConfig.php'; 
require_once 'models.php';

if (isset($_POST['insertNewApplicantBtn'])) {
	$first_name = trim($_POST['first_name']);
	$last_name = trim($_POST['last_name']);
	$specialization = trim($_POST['specialization']);
	$experience_years = trim($_POST['experience_years']);
	$known_languages = trim($_POST['known_languages']);
	$portfolio_link = trim($_POST['portfolio_link']);
	$date_added = trim($_POST['date_added']);

	if (!empty($first_name) && !empty($last_name) && !empty($specialization) && !empty($experience_years) && !empty($known_languages)  && !empty($portfolio_link) && !empty($date_added)) {
			$query = insertnewapplicant($pdo, $first_name, $last_name, 
			$specialization, $experience_years, $known_languages, $portfolio_link, $date_added);

		if ($query) {
			header("Location: ../index.php");
		}

		else {
			echo "Insertion failed";
		}
	}

	else {
		echo "Make sure that no fields are empty";
	}
	
}


if (isset($_POST['editApplicantBtn'])) {
	$Applicant_id = $_POST['Applicant_id'];
	$first_name = trim($_POST['first_name']);
	$last_name = trim($_POST['last_name']);
	$specialization = trim($_POST['specialization']);
	$experience_years = trim($_POST['experience_years']);
	$known_languages = trim($_POST['known_languages']);
	$portfolio_link = trim($_POST['portfolio_link']);
	$date_added = trim($_POST['date_added']);

	if (!empty($Applicant_id) && !empty($first_name) && !empty($last_name) && !empty($specialization) && !empty($experience_years) && !empty($known_languages) && !empty($portfolio_link) && !empty($date_added)) {

		$query = updateApplicant($pdo, $Applicant_id, $first_name, $last_name, $specialization, $experience_years, $known_languages, $portfolio_link, $date_added);

		if ($query) {
			header("Location: ../index.php");
		}
		else {
			echo "Update failed";
		}

	}

	else {
		echo "Make sure that no fields are empty";
	}

}





if (isset($_POST['deleteApplicantBtn'])) {

	$query = deleteApplicant($pdo, $_GET['Applicant_id']);

	if ($query) {
		header("Location: ../index.php");
	}
	else {
		echo "Deletion failed";
	}
}




?>