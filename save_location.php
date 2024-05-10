<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "location_tracker";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve data sent from JavaScript
$data = json_decode(file_get_contents('php://input'), true);

$latitude = $data['latitude'];
$longitude = $data['longitude'];
$timestamp = $data['timestamp'];

// Insert data into the database
$sql = "INSERT INTO locations (latitude, longitude, timestamp) VALUES ('$latitude', '$longitude', '$timestamp')";

if ($conn->query($sql) === TRUE) {
    echo "Location saved successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
