<?php
if(!isset($_POST['submit']))
{
	//This page should not be accessed directly. Need to submit the form.
	echo "error; you need to submit the form!";
}
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'makuyumutuma@gmail.com';
$email_subject = "new form submission";
$email_body = "You have received a new message from $name.\n".
    "email address: $visitor_email \n".
    "subject: $subject \n".
    "Here is the message:\n $message";

$to = 'makuyumutuma@gmail.com';
$headers = "From: $email_from \r\n";
$headers = "Reply_to: $visitor_email \r\n";


//send the email
mail($to, $email_subject,$email_body,$headers);
//header('Location: thank-you.html');
?>
