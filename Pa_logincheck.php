

<?php
session_start();
require_once '../models/auth_model.php';
if(isset($_REQUEST['submit']))
{
    $username= $_REQUEST['username'];
    $password= $_REQUEST['password'];

    $flag= false;
    if( $username=='' || $password == ''){
        echo " <h3 align='center'>Username or Password can not be empty </h3>";
        
    }
    else 
    {
        $status = auth($username, $password);
            if($status)
            {
                $_SESSION['username'] = $username;
                $_SESSION['password'] = $password;
                setcookie('Paflag', 'true', time()+300, '/');
                if ($_REQUEST['remember']){
                    setcookie('Paflag',true,time()+10000000000,'/'); 
                }
                header('location: ../views/home.php');
                
            }
            else{
                header('location: userlogin.php?msg=error');
            }
            


    }
}
else
{
    echo "<h2 align='center'>Invalid User Request</h2>";
}
?>