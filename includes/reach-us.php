<?php 
    
   // check if fields passed are empty
if(empty($_POST['name'])  		||
   empty($_POST['contact']) 		||
   empty($_POST['email']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name=$_POST['name'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $message=$_POST['message'];
	
// create email body and send it	
$to = 'jobith@three38inc.com'; // PUT YOUR EMAIL ADDRESS HERE
$email_subject = "CUSTOMER ENQUERY : REACH US"; // EDIT THE EMAIL SUBJECT LINE HERE
$email_body = "You have received a new message from THRREE38inc website's contact form.\n\n"."Here are the details:\n\nName: $name\n\nContact: $contact\n\nEmail: $email\n\nMessage:\n$message";
$headers = "From: $email";	
mail($to,$email_subject,$email_body,$headers);
return true;			
?>