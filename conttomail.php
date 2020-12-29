<?php
$firstname = $_REQUEST['firstname'];
$lastname = $_REQUEST['lastname'];
$email = $_REQUEST['email'];
$message = $_REQUEST['message'];

$mailTo = "abhaykumarojha@gmail.com";
$headers = "Form: ". $email;
$txt = "You have received an email from ". $firstname. $lastname. ".\n\n".$message;
mail($mailTo, $txt, $headers);
$msg = '<div class="alert" role="alert">Sent Successfully </div>';

?>