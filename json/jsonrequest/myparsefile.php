<?php 
include_once('../../PDO_OOP/Connection.php');
$con = new Connection();
if(isset($_POST['post_query'])){
	$query = $_POST['post_query'];
	$result=$con->connect()->query($query);
	$row=$result->fetch(PDO::FETCH_ASSOC);
	echo json_encode($row); 
}



/*
while ($row=$result->fetch(PDO::FETCH_ASSOC)) {
	echo $row['fname'] . "<br>";

*/


?>