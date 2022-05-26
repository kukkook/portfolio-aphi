<?php
//get data from form  
    $to="aphi-aphinan22@gmail.com";
    $name=["name"];
    $message = "message";
    $from = "youremail@example.com";
    $header= 'From: '.$name.'' .'Email: '.$from.''."\r\n".
    'content-type: text/html; charset=utf8'.'X-Mailer: PHP/'.phpversion();

    mail($to,$message,$header);
?>