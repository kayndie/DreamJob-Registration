<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
		body {
			font-family: "Arial";
		}
		input {
			font-size: 1.5em;
			height: 50px;
			width: 200px;
		}
		table, th, td {
		  border:1px solid black;
		}
	</style>
</head>
<body>
	<h1>Are you sure you want to delete this user?</h1>
	<?php $getApplicantById = getApplicantById($pdo, $_GET['Applicant_id']); ?>
	<form action="core/handleForms.php?Applicant_id=<?php echo $_GET['Applicant_id']; ?>" method="POST">

		<div class="ApplicantContainer" style="border-style: solid; 
		font-family: 'Arial';">
			<p>first_name: <?php echo $getApplicantById['first_name']; ?></p>
			<p>last_name: <?php echo $getApplicantById['last_name']; ?></p>
			<p>specialization: <?php echo $getApplicantById['specialization']; ?></p>
			<p>experience_years: <?php echo $getApplicantById['experience_years']; ?></p>
			<p>known_languages: <?php echo $getApplicantById['known_languages']; ?></p>
			<p>portfolio_link: <?php echo $getApplicantById['portfolio_link']; ?></p>
			<p>date_added: <?php echo $getApplicantById['date_added']; ?></p>
			<input type="submit" name="deleteApplicantBtn" value="Delete">
		</div>
	</form>
</body>
</html>