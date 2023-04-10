<?php 
    session_start();
    require "../Models/auth_model.php";
    if(isset($_REQUEST['submit'])){
    
        $Id = $_REQUEST['Id'];
        $Username = $_REQUEST['Username'];
        $Email = $_REQUEST['Email'];
        $Location = $_REQUEST['Location'];
        $Dateofbirth = $_REQUEST['Dob'];
        $Password = $_REQUEST['Password'];
        

        

        if($Id == "" && $Username == "" && $Email == "" && $Location == "" && $Dateofbirth == "" && $Password == "" ){
            echo "Please enter all the information";
        }else{
            $user = ['Id'=> $Id,'Username'=> $Username,'Email'=> $Email,'Location'=> $Location, 'Date of Birth'=> $Dateofbirth, 'Password'=> $Password];
            $status = addUser($user);
            if($status){
                header('location: ../views/userlogin.php');
            }else{
                echo " Something went wrong in db, try again";
            }
        }
    }else{
        echo "Something went wrong";
    }
?>