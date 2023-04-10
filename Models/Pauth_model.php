<?php
    require_once "db.php";

    function Pauth($Pusername, $Ppassword)
    {
        $con = getConnection();
        $sql = "select * from plogin where Pusername='{$Pusername}' and Ppassword='{$Ppassword}'";
        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);

        if($count == 1){
            return true;
        }else{
            return false;
        }
    }
    function PaddUser ($user){
        $con = getConnection();
        $sql = "insert into plogin values('{$user['Pid']}','{$user['Pusername']}', '{$user['Pemail']}', '{$user['Plocation']}','{$user['PDateofBirth']}','{$user['Ppost']}','{$user['Ppassword']}')";
        $status = mysqli_query($con, $sql);
        return $status;
    }



?>