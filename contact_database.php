<?php
$servername = "localhost"; // Change if different
$username = "root"; // Your MySQL username
$password = ""; // Your MySQL password
$dbname = "contact_db"; // Your database name

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$comment = $_POST['comment']; // Changed to match your table column

// Insert the data into the database
$sql = "INSERT INTO feedback (name, email, comment) VALUES ('$name', '$email', '$comment')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the connection
$conn->close();
?>
