<!DOCTYPE html>
<html>
<head>
    <title>Event Submission Form</title>
    <link rel="stylesheet" type="text/css" href="welcome.css">
</head>
<style>
    .sub-cont{
        width: 100%;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    align-items: center;
    }
    body{
        background-color: white;
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
        </nav>
        <div class="sub-cont">
    <h2>Submit an Event</h2>
    <form action="process_event.php" method="post" enctype="multipart/form-data">
        <label>Event Name:</label>
        <input type="text" name="event_name" required><br><br>
        
        <label>Venue:</label>
        <input type="text" name="venue" required><br><br>
        
        <label>Date and Time:</label>
        <input type="datetime-local" name="date_time" required><br><br>
        
        <label>Image:</label>
        <input type="file" name="image" accept="image/*" required><br><br>
        
        <label>Details:</label>
        <textarea name="details" required></textarea><br><br>
        
        <label>Username:</label>
        <input type="text" name="username" required><br><br>
        
        <input type="submit" value="Submit">
    </form>
    </div>
</body>
</html>
