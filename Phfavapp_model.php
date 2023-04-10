<?php
    require_once "db.php";

    function addUser ($user){
        $con = getConnection();
        $sql = "insert into phfavapp values('{$user['Appointment no']}','{$user['Phname']}', '{$user['Location']}', '{$user['Date']}')";
        $status = mysqli_query($con, $sql);
        return $status;
    }


?>