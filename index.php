<?php
// Database connection
$servername = "10.41.59.68"; 
$username = "m2_user"; 
$password = "password"; 
$dbname = "m2_db"; 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to get the message
$sql = "SELECT message FROM greetings WHERE id = 1"; 
$result = $conn->query($sql); 

if ($result->num_rows > 0) {
    // Output the message
    while ($row = $result->fetch_assoc()) { echo "Hello World: " . $row["message"];
    }
} else {
    echo "Hello World: No message found.";
}

$conn->close();
?>