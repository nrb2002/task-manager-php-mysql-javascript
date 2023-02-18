<?php
	include_once('../database/connection.php');

	$database = new Connection();
	$db = $database->open();

	try{	
		?>
		<option value=""> -- Select Group -- </option>
		<?php
	    $sql = 'SELECT * FROM family_group ORDER BY group_name';
		foreach ($db->query($sql) as $row) {

	    	echo "<option value='".$row['group_id']."'>".$row['group_name']."</option>";
	    }
	}
	catch(PDOException $e){
		echo "Unable to connect to the database: " . $e->getMessage();
	}

	//close connection
	$database->close();
	
?>