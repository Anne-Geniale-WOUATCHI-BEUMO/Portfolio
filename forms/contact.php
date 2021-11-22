<?php
  
  $name = $_POST['name'];
  $visitor_email = $_POST['email'];
  $message = $_POST['subject'];
  $email_from = $visitor_email;

	$email_subject = "New Form submission";

	$email_body = "You have received a new message from the user $name.\n".
                            "Here is the message:\n $message".

  $to = "anne.wouatchi@facsciences-uy1.cm";

  $headers = "From: $email_from \r\n";
                          
  $headers .= "Reply-To: $visitor_email \r\n";
  mail($to,$email_subject,$email_body,$headers);
  echo $contact->send();
?>
