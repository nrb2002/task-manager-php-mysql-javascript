<?php
//fetch_member.php
include ("../database/config.php");

$column = array("id", "firstname", "lastname", "phone", "email");
$query = "SELECT * FROM member ";
if(isset($_POST["search"]["value"]))
{
    $query .= '
    WHERE id LIKE "%'.$_POST["search"]["value"].'%"
    OR firstname LIKE "%'.$_POST["search"]["value"].'%"
    OR lastname LIKE "%'.$_POST["search"]["value"].'%"
    OR phone LIKE "%'.$_POST["search"]["value"].'%"
    OR email LIKE "%'.$_POST["search"]["value"].'%"
    ';
}
if(isset($_POST['order']))
{
    $query .= 'ORDER BY '.$column[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' ';
}
else
{
    $query .= 'ORDER BY id DESC ';
}
$query1 = '';
if($_POST['length'] != -1)
{
    $query1 = 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}
$statement = $conn->prepare($query);
$statement->execute();
$number_filter_row = $statement->rowCount();
$result = $conn->query($query . $query1);
$data = array();
foreach($result as $row)
{
    $sub_array = array();
    $sub_array[] = $row['id'];
    $sub_array[] = $row['firstname'];
    $sub_array[] = $row['lastname'];
    $sub_array[] = $row['phone'];
    $sub_array[] = $row['email'];
    $data[] = $sub_array;
}
function count_all_data($conn)
{
    $query = "SELECT * FROM member";
    $statement = $conn->prepare($query);
    $statement->execute();
    return $statement->rowCount();
}
$output = array(
    "draw"      =>  intval($_POST["draw"]),
    "recordsTotal"  =>  count_all_data($conn),
    "recordsFiltered"   =>  $number_filter_row,
    "data"      =>  $data
);
echo json_encode($output);
?>