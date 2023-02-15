<?php
	include_once('../db/connection.php');

	$output = array('error' => false);

	$database = new Connection();
	$db = $database->open();
	try{
		//make use of prepared statement to prevent sql injection
		$stmt = $db->prepare("INSERT INTO family (firstname, lastname, phone, address, email, group_id) VALUES (:firstname, :lastname, :phone, :address, :email, :group_id)");
		//if-else statement in executing our prepared statement
		if ($stmt->execute(array(':firstname' => $_POST['firstname'] , ':lastname' => $_POST['lastname'], ':phone' => $_POST['phone'], ':address' => $_POST['address'], ':email' => $_POST['email'], ':group_id' => $_POST['group_id'])) ){
			$output['message'] = 'Family added successfully';
		}
		else{
			$output['error'] = true;
			$output['message'] = 'Something went wrong. Cannot add family';
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