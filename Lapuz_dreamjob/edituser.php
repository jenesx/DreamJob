<?php require_once 'dbconfig.php'; ?>
<?php require_once 'models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		body {
			font-family: "Times New Roman";
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
	<?php $getUserByID = getUserByID($pdo, $_GET['user_id']); ?>
	<form action="handleForm.php" method="POST">
		<p>
			<label for="firstname">First Name</label> 
			<input type="text" name="firstname" value="<?php echo $getUserByID['firstname']; ?>">
		</p>
		<p>
			<label for="lastname">Last Name</label> 
			<input type="text" name="lastname" value="<?php echo $getUserByID['lastname']; ?>">
		</p>
		<p>
			<label for="position">Position</label>
			<input type="text" name="position" value="<?php echo $getUserByID['position']; ?>">
		</p>
		<p>
			<label for="age">AGE</label>
			<input type="text" name="age" value="<?php echo $getUserByID['age']; ?>">
		</p>
		<p>
			<label for="DesigningSkills_rate">DesigningSkills rate</label>
			<input type="text" name="DesigningSkills_rate" value="<?php echo $getUserByID['DesigningSkills_rate']; ?>">
		</p>
		<p>
			<label for="Creativity_rate">Creativity rate</label>
			<input type="text" name="Creativity_rate" value="<?php echo $getUserByID['Creativity_rate']; ?>">
        </p>
        <p>
			<label for="CommunicationSkills_rate">CommunicationSkills rate</label>
			<input type="text" name="CommunicationSkills_rate" value="<?php echo $getUserByID['CommunicationSkills_rate']; ?>">
		</p>
		<p>
			<label for="Projectmanagement_rate">Projectmanagement rate</label>
			<input type="text" name="Projectmanagement_rate" value="<?php echo $getUserByID['Projectmanagement_rate']; ?>">
			<input type="submit" name="editarchiskills">
		</p>
	</form>
</body>
</html>
