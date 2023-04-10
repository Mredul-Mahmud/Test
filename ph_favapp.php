<?php 
    session_start();
?>
<html>
    <head>
        <title>My Favorites</title>
        <body align= center>
        <form method="POST" action="../controllers/ph_favappcheck.php" enctype="">
            <h1>Here are your Favorites</h1>
            <li>Add a new appointment</li>
           Appointment No: <input type="text" name="Appointmentno" value="" /><br><br>
           Name: <input type="text" name="Phname" value="" /><br><br> 
           Location: <input type="text" name="Location" value="" /><br><br>
           Date: <input type="date" name="Date" value="" /><br><br>
           <input type="submit" name="submit" value="Add" /> <br>
            <a href="homeph.php" target="_blank"> Back</a><br> <br><br>

            <li>Your Favorites</li>

        </body>
    </head>
</html>
