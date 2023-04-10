<?php 
    session_start();
    require_once "../models/Pauth_model.php";
    if(isset($_REQUEST['submit'])){
    
        $Pid = $_REQUEST['Pid'];
        $Pusername = $_REQUEST['Pusername'];
        $Pemail = $_REQUEST['Pemail'];
        $Plocation = $_REQUEST['Plocation'];
        $Pdateofbirth = $_REQUEST['Pdob'];
        $Ppost = $_REQUEST['Ppost'];
        $Ppassword = $_REQUEST['Ppassword'];
        

        

        if($Pid == "" && $Pusername == "" && $Pemail == "" && $Plocation == "" && $Pdateofbirth == "" && $Ppost == "" && $Ppassword == "" ){
            echo "Please enter all the information";
        }else{
            $user = ['Pid'=> $Pid,'Pusername'=> $Pusername,'Pemail'=> $Pemail, 'Plocation'=> $Plocation, 'Pdob'=> $Pdateofbirth, 'Ppost'=> $Ppost, 'Ppassword'=> $Ppassword];
            $status = PaddUser($user);
            if($status){
                header('location: ../views/Ph_login.php');
            }else{
                echo " Something went wrong in db, try again";
            }
        }
    }else{
        echo "Something went wrong";
    }
?>