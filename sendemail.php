<?php

  //Email information
  $admin_email = "ventas@electrosur.com.ec";
  $name = $_REQUEST['name'];
  $email = $_REQUEST['email'];
  $subject = $_REQUEST['subject'];
  $comment = $_REQUEST['message']; 

echo $name;
echo $email;
echo $subject;
echo $comment;

  //send email
  mail($admin_email, $subject, $comment, "From:" . $email);	

  
  
?>
