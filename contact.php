<?php
$FirstName = $_POST['FirstName'];
$LastName = $_POST['LastName'];
$email = $_POST['email'];
$service = $POST['service'];
$item = $_POST['item'];
$purpose = $_POST['purpose'];
$formcontent="From: $FirstName $LastName \n Service Needed: $service \n Item Descripton: $item \n Intended Use: $purpose" ;
$recipient = "dftaappraisal@gmail.com";
$subject = "Contact Form from Appraisal Website";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>
