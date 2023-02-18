<?php
	include_once('../database/connection.php');

	$output = array('error' => false);

	$database = new Connection();
	$db = $database->open();
	try{
		//make use of prepared statement to prevent sql injection
		$stmt = $db->prepare("INSERT INTO family (firstname, lastname, phone, email, address, group_id) VALUES (:firstname, :lastname, :phone, :email, :address, :group_id)");
		
		//If biding OK, execute statement
		if ($stmt->execute(array(':firstname' => $_POST['firstname'] , ':lastname' => $_POST['lastname'] , ':phone' => $_POST['phone'], ':email' => $_POST['email'], ':address' => $_POST['address'], ':group_id' => $_POST['group_id'])) ){
			$output['message'] = 'Family added successfully';
		}
		//Otherwise, throw error
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