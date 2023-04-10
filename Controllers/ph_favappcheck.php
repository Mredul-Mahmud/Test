<?php 
    session_start();
    require "../Models/Phfavapp_model.php";
    
    if(isset($_REQUEST['submit'])){
    
        $Appointmentno = $_REQUEST['Appointmentno'];
        $Phname = $_REQUEST['Phname'];
        $Location = $_REQUEST['Location'];
        $Date = $_REQUEST['Date'];
       
        

        

        if($Appointmentno == "" && $Phname == "" && $Location == ""  && $Date == ""){
            echo "Please enter all the required keywords";
        }else{
            $favapp = ['Appointment no'=> $Appointmentno,'Phname'=> $Phname, 'Location'=> $Location, 'Date'=> $Date];
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