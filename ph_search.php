<?php 
    session_start();
?>
<html>
    <head>
        <title>My Favorite Articles</title>
        <body align= center>
        <form method="POST" action="../Controllers/ph_searchcheck.php" enctype="">
            <h1>Search for articles</h1>
            <li>Search Article from your library</li>
          Enter article information: <input type="text" name="articleinfo" value="" /><br>
            <input type="submit" name="submit" value="Search" /> <br>
            <a href="home.php" target="_blank"> Back</a>

        </body>
    </head>
</html>
