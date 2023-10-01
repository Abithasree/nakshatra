<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Page</title>
    <style type="text/css">* {cursor: url(https://cur.cursors-4u.net/nature/nat-7/nat606.cur), auto !important;}</style><a href="https://www.cursors-4u.com/cursor/2009/04/20/planet-saturn.html" target="_blank" title="Planet Saturn"><img src="https://cur.cursors-4u.net/cursor.png" border="0" alt="Planet Saturn" style="position:absolute; top: 0px; right: 0px;" /></a>
    <link rel="stylesheet" type="text/css" href="welcome.css">
    <link rel="stylesheet" type="text/css" href="display_events.css">
    

</head>

<!-- this is styling part please ignore -->

<style>
body{
    background-image: url('whitespace.jpg');
    background-color: white;
    
    color: black;
    
} 
.nav{
   background-color: #84879a;
}
.logo{
    background-image: url('images\png\logo-no-background.png');
}

</style>




<body>

<nav class="navbar">
            <div class="container">
           
                <a href="http://localhost/hcl%20project%20test/welcome.php" class="logo"> <img src="images\png\logo-white-small.png" alt="Astronomy Club Logo"></a>
                <ul class="nav-links">
                    <li><a href="http://localhost/hcl%20project%20test/welcome.php">Home</a></li>
                    
                    <li><a href="http://127.0.0.1:5500/game.html">Game</a></li>
                    <li class="dropdown">
                        <a href="#">Events</a>
                        <div class="dropdown-content">
                            <a href="http://localhost/hcl%20project%20test/event_form.php">Host an Event</a>
                            <a href="http://localhost/hcl%20project%20test/display_events.php">Ongoing Events</a>
                            
                            
                        </div>
                    </li>
                    <li><a href="http://localhost:5000/">Chat</a></li>
                    
                    <!-- ... (previous HTML code) ... -->
                    <li class="dropdown">
                        <a href="#">News</a>
                        <div class="dropdown-content">
                            <a href="http://127.0.0.1:5500/spod.html">space pic of day</a>
                            <a href="http://127.0.0.1:5500/spaceWnews.html">space weather news</a>
                            <a href="http://127.0.0.1:5500/meteors.html">meteorology news</a>
                            
                        </div>
                    </li>
<!-- ... (continue with other navigation items) ... -->
<!-- #region -->    <li class="dropdown">
                        <a href="#">Others</a>
                        <div class="dropdown-content">
                            <a href="#">Pitch your idea!</a>
                            <a href="#">Borrow books</a>
                            
                            
                        </div>
                    </li>   

                    <!-- <li><a href="#">Gallery</a></li> -->
                    
                    <li> <a href="http://localhost/hcl%20project%20test/logout.php">Logout</a></li>
                </ul>
            </div>
        </nav><br><br>
    <div class="superclass">
<?php
// Connect to the database (Replace with your database credentials)
$mysqli = new mysqli("localhost", "root", "", "event_hosting");

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Retrieve and display events
$sql = "SELECT * FROM events ORDER BY s_no DESC";
$result = $mysqli->query($sql);

?>
<?php if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {?>
        <!-- // Display event details here -->

        <div class="event">
        <h1> <?php echo $row["event_name"] . "<br>"; ?> </h1>
    
       <p><?php echo "Venue: " . $row["venue"] . "<br>"; ?> </p>
       <p> <?php echo "Date and Time: " . $row["date_time"] . "<br>"; ?></p>
        
        <!-- // Display the image (poster) -->
      <?php  $posterPath = $row["image"]; ?>

      
        
       <?php echo '<img src="'.$posterPath.'" class= "poster" alt="Event Poster" /><br>'; ?>
        
        <p><?php echo "Details: " . $row["details"] . "<br>"; ?> </p>
        <!-- // Display other details as needed -->
        </div> <br><br><br><br>
  <?php  }
} else {
    echo "No events found.";
} ?>


<?php

$mysqli->close();
?>
</div>
</body>
</html>