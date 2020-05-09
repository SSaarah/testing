<$php
    $name = $_POST['fullname'];
    $user_email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $email_from = $user_email;
    $email_subject = "New User Query Submission";
    $email_body = "User Name: $name.\n".
                  "User Email: $user_email.\n".
                  "Query Subject: $subject.\n".
                  "Message: $message.\n";
    $to = "realtimeWeather@mail.com";
    $headers = "From: $email_from \r\n";
    $headers .= "Reply-To: $user_email \r\n";
    mail($to,$email_subject,$email_body,$headers);
    header("Location: contact.html");
?>