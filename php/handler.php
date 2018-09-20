<?php
// if(!isset($_POST['submit']))
// {
	// //This page should not be accessed directly. Need to submit the form.
	// echo "error; you need to submit the form!";
// }
$name = $_POST['name'];
$phone = $_POST['phone'];
$message = $_POST['message'];

//Validate first
if(empty($name)||empty($phone)) 
{
    echo "Name and phone are required!";
    exit;
}

// if(IsInjected($message))
// {
    // echo "Please try again!";
    // exit;
// }

$email_from = '';//<== update the email address
$email_subject = "New Message - Lash Dolls!";
$email_body = "You have received a new message from the $name.\n".
    "\nHere is the message:\n$message\n"."\nHere is the phone number:\n$phone";
    
$to = "liam.gardner@hotmail.com";//<== update the email address
$headers = "From: $name \r\n";
$headers .= "Reply-To: $name \r\n";
//Send the email!
mail($to,$email_subject,$email_body,$headers);
//done. redirect to thank-you page.
header('Location: ../form-submission.html');


// Function to validate against any email injection attempts
// function IsInjected($str)
// {
  // $injections = array('(\n+)',
              // '(\r+)',
              // '(\t+)',
              // '(%0A+)',
              // '(%0D+)',
              // '(%08+)',
              // '(%09+)'
              // );
  // $inject = join('|', $injections);
  // $inject = "/$inject/i";
  // if(preg_match($inject,$str))
    // {
    // return true;
  // }
  // else
    // {
    // return false;
  // }
// }
 ini_set('display_errors', 1);  
?> 