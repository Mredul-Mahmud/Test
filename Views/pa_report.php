<?php 
    session_start();
?>
<html>
    <head>
        <title>Report</title>
        <body align= center>
        <form method="POST" action="../controllers/pa_reportcheck.php" enctype="">
            <h1>Report a problem</h1>
            <li>How can we help us?</li>
            Your id: <input type="text" name="Paid" value="" /><br><br>
            Your name: <input type="text" name="Paname" value="" /><br><br>
            Title: <input type="text" name="Title" value="" /><br><br>
           Write the problem you're facing: <input type="text" name="Report" value="" /><br><br>
            <input type="submit" name="submit" value="Add" /> <br>
            <a href="home.php" target="_blank"> Back</a>

        </body>
    </head>
</html>
