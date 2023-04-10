<?php 
    session_start();
?>
<html>
    <head>
        <title>Articles</title>
        <body align= center>
        <form method="POST" action="../controllers/articlescheck.php" enctype="">
            <h1>Here are some articles for you</h1>
            <li>Add a new article</li>
            Article id: <input type="text" name="Articleid" value="" /><br><br>
            Article name: <input type="text" name="ArticleName" value="" /><br><br>
            AuthorName: <input type="text" name="AuthorName" value="" /><br><br>
            Body: <input type="text" name="Body" value="" /><br><br>
            <input type="submit" name="submit" value="Add" /> <br>
            <br>

        </body>
    </head>
</html>
