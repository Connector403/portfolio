<?php 

  if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];

    $mailTo = "hafiz_2010@outlook.com";
    $headers = "From: ". $mailFrom;
    $txt = "You have received an e-mail from ". $name. ".\n\n".$message;

    mail($mailTo , $subject, $txt, $headers);
    header("Location: ../../index.html?mailsend");
    $_SESSION['sent-message']='Thank you, Youre message have been Sent!';
  }