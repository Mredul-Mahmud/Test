

<?php
session_start();
require_once '../models/Pauth_model.php';
if(isset($_REQUEST['submit']))
{
    $Pusername= $_REQUEST['Pusername'];
    $Ppassword= $_REQUEST['Ppassword'];

    $flag= false;
    if( $Pusername=='' || $Ppassword == ''){
        echo " <h3 align='center'>Username or Password can not be empty </h3>";
        
    }
    else {
        $status = Pauth($Pusername, $Ppassword);
            if($status)
            {
                $_SESSION['Pusername'] = $Pusername;
                $_SESSION['Ppassword'] = $Ppassword;
                setcookie('Phflag', 'true', time()+300, '/');
                if ($_REQUEST['remember']){
                    setcookie('Phflag',true,time()+10000000000,'/'); 
                }
                header('location: ../views/homeph.php');


            }
            else{
                header('location: ../views/Ph_login.php?msg=error');
            }

    }
}
else
{
    echo "<h2 align='center'>Invalid User Request</h2>";
}
?>