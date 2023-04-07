<?php
if(!isset($_POST["submit"]))
{
    echo "error;you need to submit the form!";
}
$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];
$email = $_POST["email"];
$message = $_POST["message"];

if(empty(firstName)||empty($lastName)||empty($email)||empty($message))
{
    echo"All fields are mandatory!";
    exit;
}

$email_from = "thoughtswithtee@gmail.com";
$email_subject = "new form submission";
$email_body = "You have received a message from the user $firstName.\n".
    "last Name: $lastName.\n".
    "email address: $email\n".
    "Here is the message:\n $message".

$to = "thoughtswithtee@gmail.com";
$headers = "From: $email_from \r\n";

mail($to,$email_subject,$email_body,$email_headers);
?>