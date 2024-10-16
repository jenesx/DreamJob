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
	<h1>Would you really like to remove this user?</h1>
	<?php $getUserByID = getUserByID($pdo, $_GET['user_id']); ?>
	<form action="handleForm.php?user_id=<?php echo $_GET['user_id']; ?>" method="POST">

		<div class="UserContainer" style="border-style: solid; 
		font-family: 'Times New Roman';">
			<p>First Name: <?php echo $getUserByID['firstname']; ?></p>
			<p>Last Name: <?php echo $getUserByID['lastname']; ?></p>
			<p>Position: <?php echo $getUserByID['position']; ?></p>
			<p>Age: <?php echo $getUserByID['age']; ?></p>
			<p>DesigningSkills_rate: <?php echo $getUserByID['DesigningSkills_rate']; ?></p>
			<p>Creativity_rate: <?php echo $getUserByID['Creativity_rate']; ?></p>
			<p>CommunicationSkills_rate: <?php echo $getUserByID['CommunicationSkills_rate']; ?></p>
            <p>Projectmanagement_rate: <?php echo $getUserByID['Projectmanagement_rate']; ?></p>
			<input type="submit" name="deletearchiskills" value="Delete">
		</div>
	</form>
</body>
</html>
