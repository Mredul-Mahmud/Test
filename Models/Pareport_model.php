<?php
    require_once "db.php";

    function addUser ($user){
        $con = getConnection();
        $sql = "insert into pareport values('{$user['Paid']}','{$user['Paname']}', '{$user['Title']}', '{$user['Report']}')";
        $status = mysqli_query($con, $sql);
        return $status;
    }


?>