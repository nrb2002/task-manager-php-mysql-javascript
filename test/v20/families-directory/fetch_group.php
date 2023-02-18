<?php
	include_once('../db/connection.php');

	$database = new Connection();
	$db = $database->open();

	try{	
	    $sql = 'SELECT * FROM family_group ORDER BY group_name';
		foreach ($db->query($sql) as $row) {
	    	?>
	    	<option value="<?php echo $row['group_id']; ?>"><?php echo $row['group_name']; ?></option>
	    	<?php 
	    }
	}
	catch(PDOException $e){
		echo "There is some problem in connection: " . $e->getMessage();
	}

	//close connection
	$database->close();
	
?>