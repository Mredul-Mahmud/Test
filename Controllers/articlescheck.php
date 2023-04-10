<?php 
    session_start();
    require '../Models/article_model.php';
    
    if(isset($_REQUEST['submit'])){
    
        $Articleid = $_REQUEST['Articleid'];
        $ArticleName = $_REQUEST['ArticleName'];
        $AuthorName = $_REQUEST['AuthorName'];
        $Body = $_REQUEST['Body'];
       
       
        

        

        if($Articleid == "" && $ArticleName ==""  && $AuthorName ==""  && $Body ==""){
            echo "Please enter all the required items";
        }else{
            $article = ['Articleid'=> $Articleid,'ArticleName'=> $ArticleName, 'AuthorName'=> $AuthorName, 'Body'=> $Body];
            $status = addUser($article);
            if($status)
            {
            header('location:../Views/displayarticle.php');
            }
        }
    }else{
        echo "Something went wrong. Try again";
    }
?>