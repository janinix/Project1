<?php


$name= $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$subject="Dotaz";

$mailheader="From: ".$name."<".$email.">\r\n";

$myadress="janomarecek2002@gmail.com";

mail($myadress,$subject,$message,$mailheader)
or die("Error")



?>