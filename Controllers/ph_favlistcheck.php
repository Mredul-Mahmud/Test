<?php 
    session_start();
    require_once "../Models/Phfavlist_model.php";
    
    if(isset($_REQUEST['submit'])){
    
        $Phid = $_REQUEST['Phid'];
        $Phname = $_REQUEST['Phname'];
        $Phlocation = $_REQUEST['Phlocation'];

       
        

        

        if($Phid == "" && $Phname== "" && $Phlocation== "" ){
            echo "Please enter all the required keyword";
        }else{
            $phfavlist = ['Phid'=> $Phid,'Phname'=> $Phname, 'Phlocation'=> $Phlocation];
            $status = addUser($phfavlist);
            if($status)
            {
            echo "Person Added";
        }
    }
    }
    else{
        echo "Something went wrong. Try again";
    }
?>