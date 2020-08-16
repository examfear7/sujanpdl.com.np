<?php
$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$text=$_POST['text'];

$email_from='sujanpdl.com.np';
$email_subject= 'Message from your Website @sujanpdl.com.np';
$email_body= "Name: $name\n"
             "Phone no.: $phone\n"
             "Email: $email\n"
              "Message: $text\n";

 $to ="info.sujanpdl.com.np@gmail.com" ;
 $headers ="From: $email_from \r\n";
 $headers.="Reply-To: $email \r\n";
 mail($to,$email_subject,$email_body,$headers);
 header("location: https://www.sujanpdl.com.np/dcom-notes.html");
 

?>