<?php 
    session_start();
    
?>
<html lang="en">
<head>
    <title>Login Page</title>
</head>
<body align ='center'>
<h1> Welcome to Log in</h1>
        <form method="POST" action="../controllers/Pa_logincheck.php" enctype="">
            Username: <input type="text" name="username" value="" /><br> <br>
            Password: <input type="password" name="password" value="" /> <br><br>
            <input type="submit" name="submit" value="Login" /> <br>
            <input type="submit" name="submit" value="Back" <a href="homep.html" target="_blank"></a><br><br>
            <li> Don't have an account?</li>
            <a href="Pa_signup.php" target="_blank">Sign up instead</a>         
        </form>
</body>
</html>