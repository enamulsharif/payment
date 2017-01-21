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

$sql = "INSERT INTO customer (customer_email, customer_password)
VALUES ( 'john@example.com','johndoe');";
$sql .= "INSERT INTO customer (customer_email, customer_password)
VALUES ( 'mary@example.com','MaryMoe');";
$sql .= "INSERT INTO customer (customer_email, customer_password)
VALUES ( 'john@example.com','johndoe')";

if ($conn->multi_query($sql) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
