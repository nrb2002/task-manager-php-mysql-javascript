<?php
	session_start();
	include '../session.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Families Manager</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
	
<div class="container">
	<header><br><?php echo "Welcome, "."<i>".$active_user."</i>";?><hr></header>
	<h1 class="page-header text-center">Families Directory</h1>
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
			<button id="addnew" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span> Add New Family</button>
			<a href="../welcome" class="btn btn-default">Return to Dashboard</a>
            <div id="alert" class="alert alert-info text-center" style="margin-top:20px; display:none;">
            	<button class="close"><span aria-hidden="true">&times;</span></button>
                <span id="alert_message"></span>
            </div>  
			<table class="table table-bordered table-striped table-hover table-responsive" style="margin-top:20px;">
				<thead >
					<th>ID</th>
					<th>Head's Firstname</th>
					<th>Family Name</th>
					<th>Address</th>
					<th>Action</th>
				</thead>
				<tbody id="tbody"></tbody>
			</table>
		</div>
	</div>
</div>
<!-- Modals -->
<?php include('modal.html'); ?>
<script src="jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="app.js"></script>
</body>
</html>