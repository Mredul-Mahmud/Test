<?php 
    session_start();
    require '../Models/Pareport_model.php';
    
    if(isset($_REQUEST['submit'])){
    
        $Paid= $_REQUEST['Paid'];
        $Paname = $_REQUEST['Paname'];
        $Title = $_REQUEST['Title'];
        $Report = $_REQUEST['Report'];
       
       
        

        

        if($Paid == "" && $Paname ==""  && $Title ==""  && $Report ==""){
            echo "Please enter all the required keyword";
        }else{
            $pareport = ['Paid'=> $Paid,'Paname'=> $Paname, 'Title'=> $Title, 'Report'=> $Report];
            $status = addUser($pareport);
            if($status)
            {
            echo "Thank you. We will try solve this problem.";
            }
            
        }
    }else{
        echo "Something went wrong. Try again";
    }
?>