<?php 
    session_start();
    require_once "../Models/Phreport_model.php";
    
    if(isset($_REQUEST['submit'])){
    
        $phid = $_REQUEST['phid'];
        $phname = $_REQUEST['phname'];
        $Title = $_REQUEST['Title'];
        $Report = $_REQUEST['Report'];
       
       
        

        

        if($phid == "" && $phname ==""  && $Title ==""  && $Report ==""){
            echo "Please enter all the required items";
        }else{
            $phreport = ['phid'=> $phid,'phname'=> $phname, 'Title'=> $Title, 'Report'=> $Report];
            $status = addUser($phreport);
            if($status)
            {
            echo "Thank you. We will try solve this problem.";
            }
        }
    }else{
        echo "Something went wrong. Try again";
    }
?>