<?php
//Check if data is valid & generate error if not so
$errors = [];
if ($aantal == "") {
    $errors[] = 'Aantal moet ingevuld zijn'; //Alternative for errors behind input and not in summary
}
if ($datum == "") {
    $errors[] = 'Datum moet ingevuld zijn';
}
if ($tijd == "") {
    $errors[] = 'Tijd moet ingevuld zijn';
}
if ($voornaam == "") {
    $errors[] = 'Voornaam moet ingevuld zijn';
}
if ($achternaam == "") {
    $errors[] = 'Achternaam moet ingevuld zijn';
}
if ($telefoonnummer == "") {
    $errors[] = 'Telefoonnummer moet ingevuld zijn';
}
if ($email == "") {
    $errors[] = 'Email moet ingevuld zijn';
}