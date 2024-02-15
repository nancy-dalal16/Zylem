<?php 

$errors = '';
$myemail = 'sales@sapl.net';//<-----Put Your email address here.
if(empty($_POST['name'])  ||
	empty($_POST['email']))
{
    $errors .= "\n Error: all fields are required";
}

$name = $_POST['name'];
$email = $_POST['email']; 
$phone = $_POST['phone'];
$product = $_POST['product'];
$comment = $_POST['comment'];
$url = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$utm_source = ! $_REQUEST['utm_source'] ? 'null' : $_REQUEST['utm_source'];
$utm_medium = ! $_REQUEST['utm_medium'] ? 'null' : $_REQUEST['utm_medium'];
$utm_campaign = ! $_REQUEST['utm_campaign'] ? 'null' : $_REQUEST['utm_campaign'];
$utm_term = ! $_REQUEST['utm_term'] ? 'null' : $_REQUEST['utm_term'];
$utm_content = ! $_REQUEST['utm_content'] ? 'null' : $_REQUEST['utm_content'];

	$to = $myemail; 
	$email_subject = "Contact Inquiry From: $name";
	$email_body = "You have received a new message. ".
	" Here are the details:\n Name: $name \n Email: $email \n Phone: $phone \n Product: $product  \n Comment: $comment \n URL: $url \n Utm Source: $utm_source \n Utm Medium: $utm_medium \n Utm Campaign: $utm_campaign \n Utm Term: $utm_term \n Utm Content: $utm_content"; 
	
	$headers = "From: sales@sapl.net"; 
	
	mail($to,$email_subject,$email_body,$headers);
	//redirect to the 'thank you' page
	header('Location:thanks');

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