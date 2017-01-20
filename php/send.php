<?php 
$FIO = $_POST['FIO'];
$MAIL = $_POST['MAIL'];
$PHONE = $_POST['PHONE'];
$MES = $_POST['MES'];

$to = 'kulishov.oleg@gmail.com';
$message = 'FROM: '.$FIO.' Email: '.$MAIL.'Message: '.$MES;
$headers = 'From: youremail@domain.com' . "\r\n";
 
if (filter_var($MAIL, FILTER_VALIDATE_EMAIL)) { // this line checks that we have a valid email address
mail($to, $PHONE, $message, $headers); //This method sends the mail.
echo "Your email was sent!"; // success message
}else{
echo "Invalid Email, please provide an correct email.";
}

?>