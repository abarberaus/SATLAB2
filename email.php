<?php 
if(isset($_POST['submit'])){
    $to = "info@satelliteprintlab.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name']; // this is the sender's Name
    $phone = $_POST['phone']; // this is the sender's Phone Number
    $the_message = $_POST['message']; // this is the sender's Message
    $subject = "Form submission";
    $message = $name . " " . " from " . $from . "." . " They have this phone number: " . $phone . ", and their message is this: " . $the_message;

    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);
    header("Location: thank_you.php");

    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    }
?>