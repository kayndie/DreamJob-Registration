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
	<?php $getApplicantByID = getApplicantByID($pdo, $_GET['Applicant_id']); ?>
	<form action="core/handleForms.php" method="POST">
	<input type="hidden" name="Applicant_id" value="<?php echo $_GET['Applicant_id']; ?>">
		<p>
			<label for="first_name">First Name</label> 
			<input type="text" name="first_name" value="<?php echo $getApplicantByID['first_name']; ?>">
		</p>
		<p>
			<label for="last_name">Last Name</label> 
			<input type="text" name="last_name" value="<?php echo $getApplicantByID['last_name']; ?>">
		</p>
		<p>
			<label for="specialization">specialization</label>
			<input type="text" name="specialization" value="<?php echo $getApplicantByID['specialization']; ?>">
		</p>
		<p>
			<label for="experience_years">experience years</label>
			<input type="text" name="experience_years" value="<?php echo $getApplicantByID['experience_years']; ?>">
		</p>
		<p>
			<label for="known_languages">known languages</label>
			<input type="text" name="known_languages" value="<?php echo $getApplicantByID['known_languages']; ?>">
		</p>
		<p>
			<label for="portfolio_link">portfolio link</label>
			<input type="text" name="portfolio_link" value="<?php echo $getApplicantByID['portfolio_link']; ?>"></p>
		<p>
			<label for="date_added">date added</label>
			<input type="date" name="date_added" value="<?php echo $getApplicantByID['date_added']; ?>">
			<input type="submit" name="editApplicantBtn">
		</p>
	</form>
</body>
</html>