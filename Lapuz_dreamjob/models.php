<?php 

require_once 'dbconfig.php';

function insertIntoarchiskills($pdo, $firstname, $lastname, $position, $age, $DesigningSkills_rate, $Creativity_rate, $CommunicationSkills_rate, $Projectmanagement_rate) {

	$sql = "INSERT INTO archiskills (firstname,lastname,position,age,DesigningSkills_rate,Creativity_rate,CommunicationSkills_rate,Projectmanagement_rate) VALUES (?,?,?,?,?,?,?,?)";

	$stmt = $pdo->prepare($sql);

	$executeQuery = $stmt->execute([$firstname, $lastname, $position, $age, $DesigningSkills_rate, $Creativity_rate, $CommunicationSkills_rate, $Projectmanagement_rate]);

	if ($executeQuery) {
		return true;	
	}
}

#Function to see all the Architecture Records

function seeAllarchiskills($pdo) {
	$sql = "SELECT * FROM archiskills";
	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute();
	if ($executeQuery) {
		return $stmt->fetchAll();
	}
}

#Function for Getting a User by their ID

function getUserByID($pdo, $user_id) {
	$sql = "SELECT * FROM archiskills WHERE user_id = ?";
	$stmt = $pdo->prepare($sql);
	if ($stmt->execute([$user_id])) {
		return $stmt->fetch();
	}
}

#Function for Editing a User

function updateAUser($pdo, $user_id, $firstname, $lastname, $position, $age, $DesigningSkills_rate, $Creativity_rate, $CommunicationSkills_rate, $Projectmanagement_rate) {

	$sql = "UPDATE archiskills 
				SET firstname = ?, 
					lastname = ?, 
					position = ?, 
					age = ?, 
					DesigningSkills_rate = ?, 
					Creativity_rate = ?, 
					CommunicationSkills_rate = ?,
                    Projectmanagement_rate = ?
			WHERE user_id = ?";
	$stmt = $pdo->prepare($sql);
	
	$executeQuery = $stmt->execute([$firstname, $lastname, $position, $age, $DesigningSkills_rate, $Creativity_rate, $CommunicationSkills_rate, $Projectmanagement_rate, $user_id]);

	if ($executeQuery) {
		return true;
	}
}

#Function for Deleting a User

function deleteAUser($pdo, $user_id) {

	$sql = "DELETE FROM archiskills WHERE user_id = ?";
	$stmt = $pdo->prepare($sql);

	$executeQuery = $stmt->execute([$user_id]);

	if ($executeQuery) {
		return true;
	}

}

?>