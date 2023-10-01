<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
    <style type="text/css">* {cursor: url(https://cur.cursors-4u.net/nature/nat-7/nat606.cur), auto !important;}</style><a href="https://www.cursors-4u.com/cursor/2009/04/20/planet-saturn.html" target="_blank" title="Planet Saturn"><img src="https://cur.cursors-4u.net/cursor.png" border="0" alt="Planet Saturn" style="position:absolute; top: 0px; right: 0px;" /></a>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Mooli&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Kanit:wght@400;500&display=swap" rel="stylesheet">
</head>
<link rel="stylesheet" type="text/css" href="welcome.css">
<link rel="stylesheet" type="text/css" href="styles/welcome.css">

<body>
    <div class="pseudob">
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

        

    <?php session_start();
?>
<div class="exceptb">
<div class="say_hi">
    <h2>Welcome, <?php echo $_SESSION['username']; ?>!</h2>
    <p>You are now logged in.</p>
    
    </div>
<!-- this is where html of site starts from work here -->


    <div class="content">
    <img class="planet" src="images\other_png\pngwing.com.png" height="450" width="600">
    <div class="welcome">
    <h1>Welcome to</h1>
    <h1>Nakshatra Club!</h1>
    <h4>a club for stars like you</h4>
</div>




</div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    </div>
</body>

</html>

