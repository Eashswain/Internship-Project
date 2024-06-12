<?php
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "trek";

// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);

// // Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

include('db_config.php');

// Fetch data from the database

$sql = "SELECT destination,price,start_date,image1 ,people_allowed FROM trek_details WHERE state_region='".$_GET['state']."'";
$result = $conn->query($sql);

$tours = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $tours[] = $row;
    }
}

echo json_encode($tours);


$conn->close();
