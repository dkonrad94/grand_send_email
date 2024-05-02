<?php
// Beolvasni az e-mail címet
$email = $_POST['email'];

// Elküldeni az e-mailt a sablon alapján
// Például:
$to = $email;
$subject = "Sikeres regisztráció";
$message = file_get_contents("sablon.html"); // Olvassa be az HTML sablont
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: yourname@example.com' . "\r\n"; // Saját e-mail címed

mail($to, $subject, $message, $headers);
?>
