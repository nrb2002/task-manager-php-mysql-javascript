$(document).ready(function(){
	fetch();
	getGroup();		//populate the dropdown list with family groups sorted by name
	//add
	$('#addnew').click(function(){  //When the Add New Family button is clicked
		$('#add').modal('show');   //Open the add modal window
		
	});
	$('#addForm').submit(function(e){
		e.preventDefault();
		var addform = $(this).serialize();
		//console.log(addform);
		$.ajax({
			method: 'POST',
			url: 'add.php',
			data: addform,
			dataType: 'json',
			success: function(response){
				$('#add').modal('hide');
				if(response.error){
					$('#alert').show();
					$('#alert_message').html(response.message);
				}
				else{
					$('#alert').show();
					$('#alert_message').html(response.message);
					fetch();
				}
			}
		});
	});
	//

	//edit
	$(document).on('click', '.edit', function(){
		var id = $(this).data('id');
		getDetails(id);
		$('#edit').modal('show');
	});
	$('#editForm').submit(function(e){
		e.preventDefault();
		var editform = $(this).serialize();
		$.ajax({
			method: 'POST',
			url: 'edit.php',
			data: editform,
			dataType: 'json',
			success: function(response){
				if(response.error){
					$('#alert').show();
					$('#alert_message').html(response.message);
				}
				else{
					$('#alert').show();
					$('#alert_message').html(response.message);
					fetch();
				}

				$('#edit').modal('hide');
			}
		});
	});
	//

	//delete
	$(document).on('click', '.delete', function(){
		var id = $(this).data('id');
		getDetails(id);
		$('#delete').modal('show');
	});

	$('.id').click(function(){
		var id = $(this).val();
		$.ajax({
			method: 'POST', 
			url: 'delete.php',
			data: {id:id},
			dataType: 'json',
			success: function(response){
				if(response.error){
					$('#alert').show();
					$('#alert_message').html(response.message);
				}
				else{
					$('#alert').show();
					$('#alert_message').html(response.message);
					fetch();
				}
				
				$('#delete').modal('hide');
			}
		});
	});
	//

	//hide message
	$(document).on('click', '.close', function(){
		$('#alert').hide();
	});

});

//populate the table with an id of tbody, which can be found in the index page
//the data processing is done in fetch.php and the result is appended to the table
function fetch(){
	$.ajax({
		method: 'POST',
		url: 'fetch.php',
		success: function(response){
			$('#tbody').html(response); 			
		}
	});
}

function getGroup(){
	$.ajax({
		method: 'POST',
		url: 'fetch_group.php',
		success: function(response){
			$('.family_group').html(response);
		}
	});
}

function getDetails(id){
	$.ajax({
		method: 'POST',
		url: 'fetch_row.php',
		data: {id:id},
		dataType: 'json',
		success: function(response){
			if(response.error){
				$('#edit').modal('hide');
				$('#delete').modal('hide');
				$('#alert').show();
				$('#alert_message').html(response.message);
			}
			else{
				$('.id').val(response.data.id);
				$('.firstname').val(response.data.firstname);
				$('.lastname').val(response.data.lastname);
				$('.phone').val(response.data.phone);
				$('.email').val(response.data.email);
				$('.address').val(response.data.address);
				$('.group_id').val(response.data.group_id);
				$('.fullname').html(response.data.firstname + ' ' + response.data.lastname);
			}
		}
	});
}