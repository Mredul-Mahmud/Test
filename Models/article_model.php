<?php
    require_once "db.php";

    function addUser ($user){
        $con = getConnection();
        $sql = "insert into article values('{$user['Articleid']}','{$user['ArticleName']}', '{$user['AuthorName']}', '{$user['Body']}')";
        $status = mysqli_query($con, $sql);
        return $status;
    }
    function searchUser ($articleinfo){
        $con = getConnection();
        $sql = "Select * from article where Articleid ='$articleinfo' or ArticleName = '$articleinfo' or AuthorName='$articleinfo'";
        $status = mysqli_query($con, $sql);
        return $status;
    }

    function showArticle ($articleinfo){
        $con = getConnection();
        $sql = "Select * from article ";
        $result = mysqli_query($con, $sql);
        return $result;
    }

?>