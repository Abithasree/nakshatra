<?php
session_start();

// Database connection parameters
$host = "localhost";
$username = "root";
$password = "";
$database = "event_hosting"; // Change this to your database name

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

// Query to check if the user exists in the database
$query = "SELECT * FROM users WHERE username='$username' AND password='$hashedPassword'";
$result = $conn->query($query);

if ($result->num_rows == 1) {
    // User is authenticated
    $_SESSION['username'] = $username;
    header("Location: welcome.php"); // Redirect to a welcome page
} else {
    // Authentication failed
    echo "Login failed. Please check your username and password.";
    header("Location: 404.html");
} 

$conn->close();
?>

