<?php 

require_once 'dbConfig.php'; 
require_once 'models.php';

if (isset($_POST['insertNewarchiskills'])) {
	$firstname = trim($_POST['firstname']);
	$lastname = trim($_POST['lastname']);
	$position = trim($_POST['position']);
	$age = trim($_POST['age']);
	$DesigningSkills_rate = trim($_POST['DesigningSkills_rate']);
	$Creativity_rate = trim($_POST['Creativity_rate']);
	$CommunicationSkills_rate = trim($_POST['CommunicationSkills_rate']);
    $Projectmanagement_rate = trim($_POST['Projectmanagement_rate']);


	if (!empty($firstname) && !empty($lastname) && !empty($position) && !empty($age) && !empty($DesigningSkills_rate)  && !empty($Creativity_rate)  && !empty($CommunicationSkills_rate) && !empty($Projectmanagement_rate)) {
			$query = insertIntoarchiskills($pdo, $firstname, $lastname, $position, $age, $DesigningSkills_rate, $Creativity_rate, $CommunicationSkills_rate, $Projectmanagement_rate);

		if ($query) {
			header("Location: index.php");
		}

		else {
			echo "Insertion failed";
		}
	}

	else {
		echo "Be sure there are no blank fields.";
	}
	
}


if (isset($_POST['editarchiskills'])) {
	$user_id = $_GET['user_id'];
	$firstname = trim($_POST['firstname']);
	$lastname = trim($_POST['lastname']);
	$position = trim($_POST['position']);
	$age = trim($_POST['age']);
	$DesigningSkills_rate = trim($_POST['DesigningSkills_rate']);
	$Creativity_rate = trim($_POST['Creativity_rate']);
	$CommunicationSkills_rate = trim($_POST['CommunicationSkills_rate']);
    $Projectmanagement_rate = trim($_POST['Projectmanagement_rate']);

		$query = updateAUser($pdo,$user_id, $firstname, $lastname, $position, $age, $DesigningSkills_rate, $Creativity_rate, $CommunicationSkills_rate, $Projectmanagement_rate);

		if ($query) {
			header("Location: index.php");
		}
		else {
			echo "Update error";
		}

	}

if (isset($_POST['deletearchiskills'])) {

	$query = deleteAUser($pdo, $_GET['user_id']);

	if ($query) {
		header("Location: index.php");
	}
	else {
		echo "Deletion ERROR";
	}
}


?>


