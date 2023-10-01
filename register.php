<?php
// Database connection parameters
$host = "localhost";
$username = "your_db_username";
$password = "your_db_password";
$database = "mydb"; // Change this to your database name

// Create a database connection
$conn = new mysqli($host, $username, $password, $database);

// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get user input
$username = $_POST['username'];
$password = $_POST['password'];

// Hash the password (use a better hashing algorithm in a real application)
$hashedPassword = md5($password);

// Check if the username is already taken
$checkQuery = "SELECT * FROM users WHERE username='$username'";
$checkResult = $conn->query($checkQuery);

if ($checkResult->num_rows > 0) {
    echo "Username already taken. Please choose a different one.";
} else {
    // Insert the new user into the database
    $insertQuery = "INSERT INTO users (username, password) VALUES ('$username', '$hashedPassword')";
    if ($conn->query($insertQuery) === TRUE) {
        echo "Registration successful. You can now <a href='index.php'>login</a>.";
    } else {
        echo "Error: " . $insertQuery . "<br>" . $conn->error;
    }
}

$conn->close();
?>
