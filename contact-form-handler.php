<?php
if (isset($_POST['submit'])){
  $name =$_POST['Name'];
  $visitors_email=$_POST['email'];
  $message=$_POST['message'];

  $email_form = 'tanishmehta203@gmail.com';
  $email_subject ='New form submission';
  $email_body ="User Name :$name.\n".
                  "User Email :$name.\n".
                  "User Message :$name.\n".

    $mailTo ="tanishmehta203@gmail.com";
    $headers ="From:$email_form\r\n";
      $headers .="Reply-To:$email_form\r\n";
      mail($to,$email_subject,$email_body,$headers);
      header(" Location:index.html")

}
?>
