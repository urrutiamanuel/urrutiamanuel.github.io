<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];

    $email_from = 'murrutia@humana.com';

    $email_subject = "Feedback form";

    $email_body = "user name: $name.\n".
                    "User Email: $visitor_email.\n".
                        "User message: $message.\n";

    $to = "andisamadrid@gmail.com"

    $headers = "from: $email_from\r\n";
    $headers = "reply-to: $visitor_email \r\n";

    mail($to,$email_subject.$email_body,$headers);
    header("Location: index.html");
?>