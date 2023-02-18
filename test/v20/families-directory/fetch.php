<?php
	include_once('connection.php');

	$database = new Connection();
	$db = $database->open();

	try{	
	    $sql = 'SELECT * FROM family';
	    foreach ($db->query($sql) as $row) {
	    	?>
	    	<tr>
	    		<td class="text-center"><?php echo $row['id']; ?></td>
	    		<td><?php echo $row['lastname']; ?></td>
				<td><?php echo $row['firstname']; ?></td>
	    		<td class="text-center"><?php echo $row['phone']; ?></td>
				<td><?php echo $row['email']; ?></td>
				
				<td class="justify-content-center text-center">
	    			<button class="fas fa-solid fa-edit btn btn-primary edit" data-id="<?php echo $row['id']; ?>"><span class="glyphicon glyphicon-edit"></span> Edit</button>
	    			<button class="btn btn-danger btn-sm delete" data-id="<?php echo $row['id']; ?>"><span class="glyphicon glyphicon-trash"></span> Delete</button>
	    		</td>
	    	</tr>
	    	<?php 
	    }
	}
	catch(PDOException $e){
		echo "There is some problem in connection: " . $e->getMessage();
	}

	//close connection
	$database->close();
	
?>