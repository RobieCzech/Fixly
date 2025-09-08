<?php
// Nastavení příjemce
$to = "Robinsladek@seznam.cz";
$subject = "Nový dotaz z kontaktního formuláře";

// Získání dat z POST
$name = isset($_POST['name']) ? trim($_POST['name']) : '';
$email = isset($_POST['email']) ? trim($_POST['email']) : '';
$message = isset($_POST['message']) ? trim($_POST['message']) : '';

if ($name && $email && $message) {
    $headers = "From: $email\r\nReply-To: $email\r\nContent-Type: text/plain; charset=UTF-8";
    $body = "Jméno: $name\nE-mail: $email\nZpráva:\n$message";
    if (mail($to, $subject, $body, $headers)) {
        echo "OK";
    } else {
        echo "Chyba při odesílání e-mailu.";
    }
} else {
    echo "Vyplňte všechna pole.";
}