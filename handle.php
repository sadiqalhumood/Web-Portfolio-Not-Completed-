<?php
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $visitor_email = isset($_POST['email']) ? $_POST['email'] : '';
    $message = isset($_POST['message']) ? $_POST['message'] : '';

    $email_from = 'sadiq.humood@gmail.com';

    $email_subject = "New Form Submission";

    $email_body = "User Name: $name.\n".
                        "User Email: $visitor_email.\n".
                            "User Message: $message.\n";

    $to = "sadiq.humood@gmail.com";

    $headers = "From: $email_from \r\n";
    $headers .= "Reply-To: $visitor_email \r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8 \r\n";

    if(mail($to,$email_subject,$email_body,$headers)){
        header("Location: contact.html");
    } else{
        error_log("Email failed to send. Check your PHP mail configuration.", 3, "mail_error_log.txt");
    }
?>
