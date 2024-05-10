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

// Retrieve data from the database
$sql = "SELECT * FROM locations";
$result = $conn->query($sql);

// Check if there are any rows
if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Latitude: " . $row["latitude"]. " - Longitude: " . $row["longitude"]. " - Timestamp: " . $row["timestamp"]. "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>
