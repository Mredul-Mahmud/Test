<?php 
    session_start();
?>
<html lang="en">
<head>
    <title>Signup</title>
</head>
<body align='center'>
        <h1> Welcome to sign up</h1>
        <form method="POST" action="../controllers/Ph_signupcheck.php" enctype="">
            Id: <input type="text" name="Pid" value="" /><br><br>
            Username: <input type="text" name="Pusername" value="" /><br><br>
            Email: <input type="email" name="Pemail" value="" /> <br><br>
            Location: <input type="text" name="Plocation" value="" /><br>
            Date of Birth: <input type="Date" name="Pdob" value="" /><br><br>
            Post: <input type="text" name="Ppost" value="" /><br>
            Password: <input type="password" name="Ppassword" value="" /> <br><br>
           
            <input type="submit" name="submit" value="Signup" /><br><br>
             "<a href='homep.html'>Back</a>";<br><br>
             <li> Already have an account?</li>
             <a href="Ph_login.php" target="_blank"> Log in instead</a>         
            
            
        </form>
</body>
</html>

