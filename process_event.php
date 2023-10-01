<?php
// Connect to the database (Replace with your database credentials)
$mysqli = new mysqli("localhost", "root", "", "event_hosting");

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $event_name = $_POST["event_name"];
    $venue = $_POST["venue"];
    $date_time = $_POST["date_time"];
    $details = $_POST["details"];
    $username = $_POST["username"];

    // Handle image upload
    $target_dir = "posters/"; // The directory where images will be saved
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if the image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["image"]["tmp_name"]);
        if($check !== false) {
            // Image is valid
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }

    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    // Check file size (adjust as needed)
    if ($_FILES["image"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats (adjust as needed)
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
        echo "Sorry, only JPG, JPEG, and PNG files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        // If everything is ok, save the image to the folder
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            // Insert event data into the database
            $sql = "INSERT INTO events (event_name, venue, date_time, image, details, username) 
                    VALUES (?, ?, ?, ?, ?, ?)";
            $stmt = $mysqli->prepare($sql);
            $stmt->bind_param("ssssss", $event_name, $venue, $date_time, $target_file, $details, $username);

            if ($stmt->execute()) {
                echo "Event submitted successfully!";
            } else {
                echo "Error: " . $stmt->error;
            }

            $stmt->close();
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}

$mysqli->close();
?>
