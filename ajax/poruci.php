<?php
include("../poziviKlasa.php");
$dodaj = new Glavna();
$dodaj->poruci($_POST['Название'], $_POST['Адрес'], $_POST['Телефон'], $_POST['email']);
?>