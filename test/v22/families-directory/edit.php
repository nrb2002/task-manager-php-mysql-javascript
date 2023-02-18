<?php
	include_once('../database/connection.php');

	$output = array('error' => false);

	$database = new Connection();
	$db = $database->open();
	try{
		$id = $_POST['id'];
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$address = $_POST['address'];
		$group_id = $_POST['group_match'];

		$sql = "UPDATE family SET firstname = '$firstname', lastname = '$lastname', phone = '$phone', email = '$email', address = '$address', group_id = '$group_id' WHERE id = '$id'";
		//if-else statement in executing our query
		if($db->exec($sql)){
			$output['message'] = 'Family updated successfully';
		} 
		else{
			$output['error'] = true;
			$output['message'] = 'Something went wrong. Cannot update family';
		}

	}
	catch(PDOException $e){
		$output['error'] = true;
		$output['message'] = $e->getMessage();
	}

	//close connection
	$database->close();

	echo json_encode($output);
	
?>