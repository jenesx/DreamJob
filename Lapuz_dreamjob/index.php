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
    <h3>WELCOME TO THE ARCHITECTURE INFORMATION RECORDS SYSTEM. Type your informations here to register</h3>
        <form action="handleForm.php" method="POST">
            <P><label for="firstname">First Name</label> <input type="text" name="firstname"></p>
            <P><label for="lastname">Last Name</label> <input type="text" name="lastname"></p>
            <P><label for="position">Position</label> <input type="text" name="position"></p>
            <P><label for="age">Age</label> <input type="text" name="age"></p>
            <P><label for="DesigningSkills_rate	">DesigningSkills rate</label> <input type="text" name="DesigningSkills_rate"></p>
            <P><label for="Creativity_rate">Creativity rate</label> <input type="text" name="Creativity_rate"></p>
            <P><label for="CommunicationSkills_rate">CommunicationSkills rate</label> <input type="text" name="CommunicationSkills_rate"></p>
            <P><label for="Projectmanagement_rate">Projectmanagement rate</label> <input type="text" name="Projectmanagement_rate">
            <input type="submit" name="insertNewarchiskills">
		</p>
	</form>

	<table style="width:50%; margin-top: 50px;">
	  <tr>
	    <th>User ID</th>
	    <th>First Name</th>
	    <th>Last Name</th>
	    <th>Position</th>
	    <th>Age</th>
	    <th>DesigningSkills rate</th>
	    <th>Creativity rate</th>
	    <th>CommunicationSkills rate</th>
	    <th>Projectmanagement rate</th>
	  </tr>

	  <?php $seeAllarchiskills = seeAllarchiskills($pdo); ?>
	  <?php foreach ($seeAllarchiskills as $row) { ?>
	  <tr>
	    <td><?php echo $row['user_id']; ?></td>
	  	<td><?php echo $row['firstname']; ?></td>
	  	<td><?php echo $row['lastname']; ?></td>
	  	<td><?php echo $row['position']; ?></td>
	  	<td><?php echo $row['age']; ?></td>
	  	<td><?php echo $row['DesigningSkills_rate']; ?></td>
	  	<td><?php echo $row['Creativity_rate']; ?></td>
	  	<td><?php echo $row['CommunicationSkills_rate']; ?></td>
        <td><?php echo $row['Projectmanagement_rate']; ?></td>

	  	<td>
	  		<a href="edituser.php?user_id=<?php echo $row['user_id'];?>">Edit</a>
	  		<a href="deleteuser.php?user_id=<?php echo $row['user_id'];?>">Delete</a>
	  	</td>
	  </tr>
	  <?php } ?>
	</table>


</body>
</html>
