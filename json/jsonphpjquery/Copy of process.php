<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to create table
$sql = "SELECT customer_email, customer_password FROM customer";
$result = $conn->query($sql);

$customer_array = array();

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $customer_array [] = $row;
    }
} else {
    echo "0 results";
}
$conn->close();

echo json_encode($customer_array);

?>


