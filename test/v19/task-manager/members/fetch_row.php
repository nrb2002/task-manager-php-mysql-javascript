<?php
	include_once('../db/connection.php');

	$output = array('error' => false);

	$database = new Connection();
	$db = $database->open();

	try{
		$id = $_POST['id'];
		$sql = $db->prepare("SELECT * FROM family WHERE id = :id");
		$sql->bindParam(':id', $id);
		$sql->execute();
		$output['data'] = $sql->fetch();
	}
	catch(PDOException $e){
		$output['error'] = true;
		$output['message'] = $e->getMessage();
	}

	//close connection
	$database->close();

	echo json_encode($output);

?>