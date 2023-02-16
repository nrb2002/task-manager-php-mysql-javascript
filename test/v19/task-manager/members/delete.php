<?php
	include_once('../db/connection.php');

	$output = array('error' => false);

	$database = new Connection();
	$db = $database->open();
	try{
		$sql = "DELETE FROM family WHERE id = '".$_POST['id']."'";
		//if-else statement is executing our query
		if($db->exec($sql)){
			$output['message'] = 'Family deleted successfully';
		}
		else{
			$output['error'] = true;
			$output['message'] = 'Something went wrong. Cannot delete family';
		} 
	}
	catch(PDOException $e){
		$output['error'] = true;
		$output['message'] = $e->getMessage();;
	}

	//close connection
	$database->close();

	echo json_encode($output);

?>