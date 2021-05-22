<?php

if (isset($_POST['submit'])) {
  $name =$_POST['name'];
  $subject =$_POST['subject'];
  $mailFrom =$_POST['mail'];
  $message =$_POST['message'];

  $mailTo ="lorenz.falkson@mkh-mail.de";
  $headers = "From: ".$mailFrom;
  $txt = "You have receved an e-mail from ".$name.".\n\n".$message;

  mail($mailTo,$subject,$txt, $headers);
  header("Location: index.php?mailsend");
}
