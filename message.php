<?php
include 'config2.php';

$formname = $_POST['name'];
$formemail = $_POST['email'];
$formsubject = $_POST['subject'];
$formtext = $_POST['text'];

date_default_timezone_set('Asia/Kolkata');
$time = date("Y-m-d h:i:sa");

if(isset($_POST['text'])){
    $dbConn->query("INSERT INTO `messages`(`name`,`email`,`subject`,`text`,`time`) 
    VALUES ('{$formname}','{$formemail}','{$formsubject}','{$formtext}','{$time}');");

            echo '<script>alert("Thank you for your Valuable Time for messaging us...");
            window.location="../index.php";</script>';
}
else{
    
    echo '<script>alert("Please Enter Message");
    window.history.back();</script>';
    
}
?>