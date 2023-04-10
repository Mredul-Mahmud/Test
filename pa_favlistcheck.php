<?php 
    session_start();
    require '../Models/Pafavlist_model.php';
    if(isset($_REQUEST['submit'])){
    
        $Paid = $_REQUEST['Paid'];
        $Paname = $_REQUEST['Paname'];
        $Palocation = $_REQUEST['Palocation'];
        $Problems = $_REQUEST['Problems'];
        

       
        

        

        if($Paid == "" && $Paname== "" && $Palocation == "" && $Problems== "" ){
            echo "Please enter all the required keywords";
        }else{
            $pafavlist = ['Paid'=> $Paid,'Paname'=> $Paname, 'Palocation'=> $Palocation, 'Problems'=> $Problems];
            $status = addUser($pafavlist);
            if($status)
            {
            echo "Person Added";
        }
        }
    
    }else{
        echo "Something went wrong. Try again";
    }
?>