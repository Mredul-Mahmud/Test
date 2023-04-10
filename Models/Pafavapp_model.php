<?php
    require_once "db.php";

    function addUser ($user){
        $con = getConnection();
        $sql = "insert into pafavapp values('{$user['Appointment no']}','{$user['Paname']}', '{$user['Location']}', '{$user['Date']}')";
        $status = mysqli_query($con, $sql);
        return $status;
    }


?>