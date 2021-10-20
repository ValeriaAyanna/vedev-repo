<?php $firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent="From: $firstname $lastname \n Message: $message";
$recipient = "vyanna16@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
if(mail($recipient, $subject, $formcontent, $mailheader))
    echo "<script>alert(Thanks for your message!);</script>";
else
    echo "<script>alert('Failure.');</script>";
    
header("Location: test_html.html");
?>