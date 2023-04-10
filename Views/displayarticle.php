<?php 
    session_start();
    include '../Models/db.php';
    ?>
<html>
    <head>
        <body>
        <title>Articles</title>
        <body align= center>
        <form method="POST" action="../controllers/articlescheck.php" enctype="">
            <h1>Here are some articles for you</h1>

            <input type="submit" name="submit" value="Add" /> <br>
            <table class = "table" border= 1>
                <thead>
                    <tr>
                        <th>Article Id</th>
                        <th>Article Name</th>
                        <th>Author Name</th>
                        <th>Body</th>
</tr>
</thead>
<tbody>
    <?php 
    $dbhost = "127.0.0.1";
$dbuser = "root";
$dbpass = "";
$dbname = "userlogin";
    $con = getConnection();
    $sql = "Select * from `article`";
     $result = mysqli_query($con, $sql);
        return $result;
    //showArticle ($articleinfo)
    if($result)
    {
        while($row=mysqli_fetch_assoc($result)){
       
        echo '
        <tr>
        <td>'.$row['Articleid'].'</td>
        <td>'.$row['ArticleName'].'</td>
        <td>'.$row['AuthorName'].'</td>
        <td>'.$row['Body'].'</td>
        

</tr>


        
        ';
        }
        
    }
    
    ?>


</tbody>
        </table>
</body>
    </head>
</html>