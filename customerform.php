<?php

         $name = $_POST['name'];

         $visitor_email = $_POST['email'];

         $message = $_POST['message'];

 

 

         $email_form = 'divyapolukonda2000@gmail.com';

        

         $email_subject = "New Eorm Submission";

   

         $email_body = "User Name: $name.\n".

                                      "User Email: $visitor_email.\n".

                                          "User Message: $message.\n";

 

         $to = "srikanthveedhi143@gmail.com;

 

         $headers = "Form: $email_from\r\n";

 

         $headers  .= "Reply-To:  $visitor_email \r\n";

 

        mail($to,$email_subject,$email_body,$headers);

 

       header("location"; index.html");

 

 

?>