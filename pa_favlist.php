<?php 
    session_start();
?>
<html>
    <head>
        <title>My Favorites</title>
        <body align= center>
        <form method="POST" action="../controllers/pa_favlistcheck.php" enctype="">
            <h1>Here are your Favorites</h1>
            <li>Add a new patient information</li>
            Patient id: <input type="text" name="Paid" value="" /><br>
            Patient name: <input type="text" name="Paname" value="" /><br>
           Location: <input type="text" name="Palocation" value="" /><br><br>
           Problems: <input type="text" name="Problems" value="" /><br> 
           <input type="submit" name="submit" value="Add" /> <br>
            <a href="home.php" target="_blank"> Back</a>

        </body>
    </head>
</html>
