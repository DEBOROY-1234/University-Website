<?
$name=$_POST['name'];
$visitor_email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$email_form='info@yourwebsite.com';

$email_subject='new form submission';

$email_body="user name : $name.\n".
"user email : $visitor_email.\n".
"user name : $subject.\n".
"user name : $message.\n";

$to = 'deboroy2002@gmail.com';

$headers="From: $email_form \r\n";

$headers .= "From: $visitor_email \r\n";

mail($to.$email_subject,$email_body,$headers);

header("location : contact.html");

?>