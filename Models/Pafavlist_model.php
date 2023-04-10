<?php
    require_once "db.php";

    function addUser ($user){
        $con = getConnection();
        $sql = "insert into pfavlist values('{$user['Paid']}','{$user['Paname']}', '{$user['Palocation']}', '{$user['Problems']}')";
        $status = mysqli_query($con, $sql);
        return $status;
    }


?>