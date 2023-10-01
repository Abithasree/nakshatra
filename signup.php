<!DOCTYPE html>
<html>
<head>
    <title>Sign Up</title>
</head>
<style>
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
    </style>
<body>
<div class="login-content">
        <h1><u>Nakshatra club</u></h1><br>
    <h2>Sign Up</h2>
    <form action="register.php" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required><br><br>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required><br><br>

        <input type="submit" class="login-btn" value="Sign Up">
    </form></div>
</body>
</html>
