<?php

//fetch.php

$connect = new PDO("mysql:host=localhost;dbname=testing", "root", "");

$column = array("student_id", "student_first_name", "student_last_name", "student_email", "student_gender");

$query = "SELECT * FROM student_table ";

if(isset($_POST["search"]["value"]))
{
	$query .= '
	WHERE student_id LIKE "%'.$_POST["search"]["value"].'%" 
	OR student_first_name LIKE "%'.$_POST["search"]["value"].'%" 
	OR student_last_name LIKE "%'.$_POST["search"]["value"].'%" 
	OR student_email LIKE "%'.$_POST["search"]["value"].'%" 
	OR student_gender LIKE "%'.$_POST["search"]["value"].'%" 
	';
}

if(isset($_POST['order']))
{
	$query .= 'ORDER BY '.$column[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' ';
}
else
{
	$query .= 'ORDER BY student_id DESC ';
}

$query1 = '';

if($_POST['length'] != -1)
{
	$query1 = 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}

$statement = $connect->prepare($query);

$statement->execute();

$number_filter_row = $statement->rowCount();

$result = $connect->query($query . $query1);

$data = array();

foreach($result as $row)
{
	$sub_array = array();

	$sub_array[] = $row['student_id'];

	$sub_array[] = $row['student_first_name'];

	$sub_array[] = $row['student_last_name'];

	$sub_array[] = $row['student_email'];

	$sub_array[] = $row['student_gender'];

	$data[] = $sub_array;
}

function count_all_data($connect)
{
	$query = "SELECT * FROM student_table";

	$statement = $connect->prepare($query);

	$statement->execute();

	return $statement->rowCount();
}

$output = array(
	"draw"		=>	intval($_POST["draw"]),
	"recordsTotal"	=>	count_all_data($connect),
	"recordsFiltered"	=>	$number_filter_row,
	"data"		=>	$data
);

echo json_encode($output);

?>