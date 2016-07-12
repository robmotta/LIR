<?php 
$errors = '';
$myemail = 'motta.vantuyl@gmail.com';//<-----Put Your email address here.


$name = $_POST['first'];
$lname = $_POST['lastname']; 
$email_address = $_POST['email']; 
$message = $_POST['message'];
$phone = $_POST['phone'];
$category = $_POST['category']; 

if (!preg_match(
"/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", 
$email_address))
{
    $errors .= "\n Error: Invalid email address";
}

if( empty($errors))
{
	$to = $myemail; 
	$email_subject = "Love in Roatan: $name";
	$email_body = "Contact form Submission. ".
	" Here are the details:\n Name: $name \n Email: $email_address \n Message \n $message \n Phone: \n $phone \n Category: \n $category"; 
	
	$headers = "From: $myemail\n"; 
	$headers .= "Reply-To: $email_address";
	
	mail($to,$email_subject,$email_body,$headers);
	//redirect to the 'thank you' page
	header('Location: ../index.php');
} 
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"> 
<html>
<head>
	<title>Contact form handler</title>
</head>

<body>
<!-- This page is displayed only if there is some error -->
<?php
echo nl2br($errors);
?>


</body>
</html>