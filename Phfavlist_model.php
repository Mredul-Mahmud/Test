<?php
    require_once "db.php";

    function addUser ($user){
        $con = getConnection();
        $sql = "insert into phfavlist values('{$user['Phid']}','{$user['Phname']}', '{$user['Phlocation']}')";
        $status = mysqli_query($con, $sql);
        return $status;
    }


?>