<?php 

  if(isset($_POST['submit'])) {
    $success = $_SESSION['sent-message']='Thank you, Your message have been Sent!';
    $failure =  $_SESSION['error-message']='Sorry, Failure to send your message!';
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];

    $mailTo = "hafiz_2010@outlook.com";
    $headers = "From: ". $mailFrom;
    $txt = "You have received an e-mail from ". $name. ".\n\n".$message;

    if(  mail($mailTo , $subject, $txt, $headers)){
    
      header("Location: ../../index.html?mailsend");
      echo  $success;
      
    } else {
      echo $failure ;
    }
  
    // $_SESSION['sent-message']='Thank you, Youre message have been Sent!';
  }