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
      echo '<div class="sent-message"> Your message has been sent. Thank you!</div>';
    } else {
      echo '  <div class="error-message">Failure to send message</div> ';
    }
  
    // header("Location: ../../index.html?mailsend");
    // $_SESSION['sent-message']='Thank you, Youre message have been Sent!';
  }