<?php
//get data from form  
    
    $name= $_POST['name'];
    $email = $_POST['emailaddress'];
    $message = $_POST['message'];
    $to="aphi-aphinan22@gmail.com";

    $subject = "Mail from website";

    $txt= "Name: ".$name."\r\n Email: ".$email."\r\n Message: ".$message;
    $header = "From: noreply@yousite.com" . "\r\n" . "CC: somebody@example.com";
    if($email!=NULL){
        mail($to,$subject,$txt,$header);
    }

?>