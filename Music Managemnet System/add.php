<?php
// Database connection
$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "music";

$conn = new mysqli("localhost:3307", "root","", "music");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert music into the database
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $artist = $_POST['artist'];

    $sql = "INSERT INTO music (title, artist) VALUES ('$title', '$artist')";

    if ($conn->query($sql) === TRUE) {
        echo "New music added successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>