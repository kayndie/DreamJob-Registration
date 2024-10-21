<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
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
<body>
    <style>
        p,h1,h3,input{
            font-family: sans-serif;
        }
        input, select{
            height: 25px;
			width: 150px;
        }
        table, th, td {
		  border:1px solid black;
		}
        img{
            width: 30px;
            height: auto;
        }
    </style>

    <h1>Game Developer</h1>
    <h3>Registration Form</h3>
    <form action="core/handleForms.php" method="POST">  
        <P><label for="first_name">First Name</label><input type="text" name="first_name"></p>
        <P><label for="last_name">Last Name</label><input type="text" name="last_name"></p>
        <P><label for="specialization">Specialization</label><input type="text" name="specialization"></p>

        <p><label for="experience_years">Experience Years</label><input type="text" name="experience_years"></p>
        <P><label for="known_languages">Known Languages</label><input type="text" name="known_languages"></p>
        <P><label for="portfolio_link">Portfolio link</label><input type="text" name="portfolio_link"></p>
        <p><label for="date_addded">Date Added</label><input type="date" name="date_added"></p>
        
        <input type="submit" name="insertNewApplicantBtn">

    <table style="width:50%; margin-top: 50px;">
	  <tr>
	    <th>Applicant ID</th>
	    <th>First Name</th>
	    <th>Last Name</th>
	    <th>Specialization</th>
	    <th>Experience Years</th>
	    <th>Known Languages</th>
	    <th>Portfolio Link</th>
	    <th>Date Added</th>
        <th>Edit</th>
        <th>Delete</th>
	  </tr>

	  <?php $seeAllApplicants = seeAllApplicants($pdo); ?>
	  <?php foreach ($seeAllApplicants as $row) { ?>
	  <tr>
	  	<td><?php echo $row['Applicant_id']; ?></td>
	  	<td><?php echo $row['first_name']; ?></td>
	  	<td><?php echo $row['last_name']; ?></td>
	  	<td><?php echo $row['specialization']; ?></td>
	  	<td><?php echo $row['experience_years']; ?></td>
	  	<td><?php echo $row['known_languages']; ?></td>
	  	<td><?php echo $row['portfolio_link']; ?></td>
        <td><?php echo $row['date_added']; ?></td>
	  	<td>
          <a href="editApplicant.php?Applicant_id=<?php echo $row['Applicant_id'];?>">
        <img src="edit.png" alt="Edit">
        </a>
        </td>
        <td>
        <a href="deleteApplicant.php?Applicant_id=<?php echo $row['Applicant_id'];?>">
        <img src="delete.png" alt="Delete">
        </a>
	  	</td>
	  </tr>
	  <?php } ?>
	</table>
    </form>
</body>
</html>