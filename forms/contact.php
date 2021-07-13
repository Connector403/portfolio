<?php 

  if(isset($_POST['submit'])) {

    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];

    $mailTo = "hafiz_2010@outlook.com";
    $headers = "From: ". $mailFrom;
    $txt = "You have received an e-mail from ". $name. ".\n\n".$message;

    if(  mail($mailTo , $subject, $txt, $headers)){
    
      header("Location: ../../index.html?mailsend");
      echo $_SESSION['sent-message']='Thank you, Your message have been Sent!';
      
    } else {
      echo $_SESSION['error-message']='Sorry, Failure to send your message!';
    }
  
    // $_SESSION['sent-message']='Thank you, Youre message have been Sent!';
  }