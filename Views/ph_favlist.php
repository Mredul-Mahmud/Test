<?php 
    session_start();
?>
<html>
    <head>
        <title>My Favorites</title>
        <body align= center>
        <form method="POST" action="../controllers/ph_favlistcheck.php" enctype="">
            <h1>Here are your Favorites</h1>
            <li>Add a new patient information</li>
            Doctor id: <input type="text" name="Phid" value="" /><br>
            Name: <input type="text" name="Phname" value="" /><br>
           Location: <input type="text" name="Phlocation" value="" /><br><br>
            <input type="submit" name="submit" value="Add" /> <br>
            <a href="homeph.php" target="_blank"> Back</a>

        </body>
    </head>
</html>
