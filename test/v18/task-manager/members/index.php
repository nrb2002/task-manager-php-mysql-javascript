<?php
    session_start();
    //include('database/config.php');//Import the server connect to allow access to the database
    //include ('database/login.php'); //Import the login form processor
    include ("../../session.php");
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Families Directory</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
		<link rel="stylesheet" href="../../styles/main.css">
		<link href="../../styles/welcome.css" rel="stylesheet">
		
		<!-- Local styles for this template -->
		<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
		
		<!-- Main  styles for this template -->
		<link href="/docs/5.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">	
		
		
		
	</head>
	<body>		
		<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark" aria-label="Main navigation">
		<div class="container-fluid">
			<a class="navbar-brand" href="#">Welcome back,<br><i><?php echo $active_user; ?></i> !</a>
			<button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>

			<div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
			<ul class="navbar-nav me-auto mb-2 mb-lg-0">
				<li class="nav-item">
				<a class="nav-link active" aria-current="page" href="../../welcome">Dashboard</a>
				</li>
				
				<li class="nav-item">
				<a class="nav-link" href="../../profile">User Profile</a>
				</li>
				
				<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Actions</a>
				<ul class="dropdown-menu">
					<li><a class="dropdown-item" href="./">Members</a></li>
					<li><a class="dropdown-item" href="../assignments/">Assignments</a></li>
					<li><a class="dropdown-item" href="..//reports/">Reports</a></li>
				</ul>
				</li>
				<li class="nav-item text-nowrap">
				<a href="../../logout" class="nav-link px-3">Sign out</a>
				</li>
			</ul>
			<form class="d-flex" role="search">
				<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
				<button class="btn btn-outline-success" type="submit">Search</button>
			</form>
			</div>
		</div>
		</nav> 
  
		<main class="container">		
			<div class="d-flex align-items-center p-3 my-3 mt-3 text-white bg-purple rounded shadow-sm">
				<img class="me-3" src="/docs/5.2/assets/brand/bootstrap-logo-white.svg" alt="" width="48" height="38">
				<div class="lh-1">
					<h1 class="h6 mb-0 text-white lh-1">Families Directory</h1>
				</div>
			</div>
			<div class="my-3 p-3 bg-body rounded shadow-sm">
        		<h6 class="border-bottom pb-2 mb-3">Add, delete, or update families</h6>
				
				<button id="addnew" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span> Add New Family</button>
					
				<div class="row g-3">
					<div id="alert" class="alert alert-info text-center" style="margin-top:20px; display:none;">
						<button class="close"><span aria-hidden="true">&times;</span></button>
						<span id="alert_message"></span>
					</div>  
					<table class="table table-bordered table-striped table-hover table-responsive text-center" style="margin-top:20px;">
						<thead >
							<th>ID</th>
							<th>Head's Firstname</th>
							<th>Family Name</th>
							<th>Phone Number</th>
							<th>Email Address</th>
							<th>Action</th>
						</thead>
						<tbody id="tbody"></tbody>
					</table>
				</div>
			</div>
		</main>
		<!-- Modals -->
		<?php include('modal.html'); ?>
		<!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
		-->
    	<script src="../../scripts/main.js"></script>
		<script src="../scripts/jquery.min.js"></script>
		<script src="../bootstrap/js/bootstrap.min.js"></script>
		<script src="../scripts/app.js"></script>
		  
		
	</body>
</html>