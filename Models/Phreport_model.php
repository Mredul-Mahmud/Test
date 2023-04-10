<?php
    require_once "db.php";

    function addUser ($user){
        $con = getConnection();
        $sql = "insert into phreport values('{$user['phid']}','{$user['phname']}', '{$user['Title']}', '{$user['Report']}')";
        $status = mysqli_query($con, $sql);
        return $status;
    }


?>