<?php
ini_set('display_errors',1);
error_reporting(E_ALL);

$user_name = htmlspecialchars($_POST["username"]);
$user_phone = htmlspecialchars($_POST['userphone']);

$token = "5904555399:AAFXnwQ3__hrAnmNYfdAMIoCLGa0fijojSw";
$chat_id = "-819505433";
$text = "";

$formData = array(
  "Client: " => $user_name, 
  "Phone Number: " => $user_phone
);

foreach($formData as $key => $value) {
  $text .= $key . "<b>" . urlencode($value) . "</b>" . "%0A" ;
}

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&text={$text}&parse_mode=html", "r");

if ($sendToTelegram) {
  echo "Success";
} else {
  echo "Error";
}