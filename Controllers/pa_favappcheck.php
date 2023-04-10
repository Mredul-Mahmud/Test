<?php 
    session_start();
    require "../Models/Pafavapp_model.php";
    
    if(isset($_REQUEST['submit']))
    {
    
        $Appointmentno = $_REQUEST['Appointmentno'];
        $Paname = $_REQUEST['Paname'];
        $Location = $_REQUEST['Location'];
        $Date = $_REQUEST['Date'];
       
        

        

        if($Appointmentno == "" && $Paname == "" && $Location == "" && $Date == "" ){
            echo "Please enter all the required keywords";
        }else{
            $favapp = ['Appointment no'=> $Appointmentno,'Paname'=> $Paname, 'Location'=> $Location, 'Date'=> $Date];
            $status = addUser($favapp);
            if($status)
            {
            echo "Appointment Added";
        }
        }
    }
    else{
        echo "Something went wrong. Try again";
    }
?>