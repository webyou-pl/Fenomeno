<?php

$name = scrip_tags(trim($_POST["name"]));
$name = str_replace(array("\r","\n"),array(" "," "),$name);
$email = filter_var(trim($POST["email"]), FILTER_SANITIZE_EMAIL);
$message = trim ($_POST["message"]);

if (empty($name) OR empty ($message) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Locatuib: http://www. TUTAJ PODAC DOMENE =>koncowka=> ?success=-1#form"); // if error ocures riderect to error page
    exit;
}

$recipient = "adam0mazurkiewicz@gmail.com";


$subject = "New contact from $name";


$email_content = "Name: $name\n";
$email_content .= "Email: $email\n\n";
$email_content .= "Message: \n$message\n";


$email_headers = "From: $name <$email>";

mail($recipient, $subject, $email_content, $email_headers);

header("Location: http://www. TUTAJ PODAC DOMENE =>koncowka=> ?success=1#form"); //if there is a success then ridirect to success page