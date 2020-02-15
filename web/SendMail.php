<?php
$name = $_POST['name'];
$from = $_POST['email'];
$subject = $_POST['title_subject'];
$message = $_POST['subject'];
$headers = "From: ".$from;
$to = "fastarrow999@gmail.com";

$result = mail($to, $subject, $message, $headers);
if($result == true){
	echo "Message sent successfully...";
}else {
    echo "Message could not be sent...";
}
?>