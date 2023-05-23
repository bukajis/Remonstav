<?php
// Nastavenie premenných
$to = "prijemca@emailu.com";
$subject = $_POST['subject'];
$name = $_POST['name'];
$surname = $_POST['surname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

// Spracovanie správy
$body = "Meno: $name\nPriezvisko: $surname\nEmail: $email\nTelefónne číslo: $phone\nPredmet: $subject\nSpráva:\n$message";

// Odoslanie správy
mail($to, $subject, $body);

// Potvrdenie odoslanie správy
echo "Vaša správa bola úspešne odoslaná.";

?>
