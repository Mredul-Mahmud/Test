<html lang =en>
    <body>
        <table class = "table" border=1>
</body>
    </html>
<?php 
    session_start();
    require '../Models/article_model.php';
    
    if(isset($_REQUEST['submit'])){
    
        $articleinfo= $_REQUEST['articleinfo'];
       

        if($articleinfo == ""){
            echo "Article information can not be empty";
        }else{
            
            $status = searchUser($articleinfo);
            
            if($status){

                if(mysqli_num_rows($status)>0)
                {
                    echo '
                    <thead>
                    <tr>
                    <th>Article Id</th>
                    <th>Article Name</th>
                    <th>Author Name</th>
                    <th>Body</th>
                    </tr>
                    </thead>';
                    $row=mysqli_fetch_assoc($status);
                    echo '<tbody>
                    <tr>
                    <td>'.$row['Articleid'].'</td>
                    <td>'.$row['ArticleName'].'</td>
                    <td>'.$row['AuthorName'].'</td>
                    <td>'.$row['Body'].'</td>


                    </tr>
                    </tbody>';

                    
                    
                }
                else{
                    echo '<h2>Article not found</h2>';
                }
            }

        }
    }else{
        echo "Something went wrong. Try again";
    }
?>
</table>