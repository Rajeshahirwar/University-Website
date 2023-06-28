<?<php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'info@yourwebsite.com';
$email_subject = 'new form Submission';
$email_body = "User Name: $name.\n".
               "User Email: $visitor_email".
               "Subject : $subject.\n".
               "User Message : $message:$message .\n";

    $to = 'rajeshahirwar9587@gmail.com';

    $headers = "Form : $email_form\r\n";

    $header .="Reply-To:$visitor_email \r\n;

    mail($to,$email_subject,$email_body,$headers);
    
    header("Location: contect.html");



?>  