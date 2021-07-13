<?php

if (isset($_POST['submit'])) {
  $success = $_SESSION['sent-message'] = 'Thank you, Your message have been Sent!';
  $failure =  $_SESSION['error-message'] = 'Sorry, Failure to send your message!';
  $name = $_POST['name'];
  $subject = $_POST['subject'];
  $mailFrom = $_POST['mail'];
  $message = $_POST['message'];

  $mailTo = "hafiz_2010@outlook.com";
  $headers = "From: " . $mailFrom;
  $txt = "You have received an e-mail from " . $name . ".\n\n" . $message;

  if (mail($mailTo, $subject, $txt, $headers)) {
    // header("Location: ../../index.html?mailsend");

    //   echo  '<script> alert("Thank you, Your message was send successfully!")</script>';
    echo "<script>
            alert('Message  sent successfully');
            window.location.href='../../index.html';
            </script>";
  } else {
    header("Location: ../../index.html?mailsendFailure");
    echo '<script> alert("Sorry, Failure to send message!")</script>';
  }

  // $_SESSION['sent-message']='Thank you, Youre message have been Sent!';
}
