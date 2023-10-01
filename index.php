<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
    
</head>
<style>
    body{
    background-image: url('con2.jpg');
    background-repeat: no-repeat;
    background-size: cover;
}
   
    .login-content{
        display: flex;
        align-items: center;
        justify-content: center;
        height: 480px;
        width: 400px;
        flex-direction: column;
        margin: auto auto;
        margin-top: 13vh;
        margin-bottom: auto;
        border-style: groove;
        border-width: 5px;
        border-radius: 15px;
        border-color: #44474e;
        background-color:#ffffffcf;
    }
    .login-btn{
        margin-left: 50%;
    }
</style>
<body>
    
    <div class="login-content">
        <h1><u>Nakshatra club</u></h1><br>
    <h2>Login</h2>
    <form action="login.php" method="post" class="formc">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required><br><br>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required><br><br>

        <!-- Use type="submit" for the login button -->
        
        <input class="button , login-btn" type="submit" name="login" value="Login">
    </form>
    <br><br>
    <!-- <br><br><br><br><br><br><br><br><br><br><br><br> -->

    <!-- Use a link or a form submit button for the signup button -->
    <p style="font-family:cursive;">New here??? no issues! signup and join our club!</p>
    <a class="button" href="http://localhost/hcl%20project%20test/signup.php"><button>Signup</button></a>
    </div>
</body>
</html>
