<?php
    require_once "db.php";

    function auth($Username, $Password)
    {
        $con = getConnection();
        $sql = "select * from login where Username='{$Username}' and Password='{$Password}'";
        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);

        if($count == 1){
            return true;
        }else{
            return false;
        }
    }
    function addUser ($user){
        $con = getConnection();
        $sql = "insert into login values('{$user['Id']}','{$user['Username']}', '{$user['Email']}', '{$user['Location']}','{$user['Date of Birth']}','{$user['Password']}')";
        $status = mysqli_query($con, $sql);
        return $status;
    }


?>