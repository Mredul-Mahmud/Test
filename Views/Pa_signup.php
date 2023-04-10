<?php 
    session_start();
?>
<html lang="en">
<head>
    <title>Signup</title>
</head>
<body align='center'>
        <h1> Welcome to sign up</h1>
        <form method="POST" action="../controllers/Pa_signupCheck.php" enctype="">
           id: <input type="text" name="Id" value="" /><br><br>
            Username: <input type="text" name="Username" value="" /><br><br>
            Email: <input type="email" name="Email" value="" /> <br><br>
            Location: <input type="text" name="Location" value="" /> <br>
            Date of Birth: <input type="date" name="Dob" value="" /> <br><br>
            Password: <input type="password" name="Password" value="" /> <br><br>
           
            <input type="submit" name="submit" value="Submit" /><br><br>
             <a href='homep.html'>Back</a>;<br><br>
             <li> Already have an account?</li>
            <a href="userlogin.php" target="_blank"> Log in instead</a>         
            
            
        </form>
</body>
</html>

