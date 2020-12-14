<?php
include("../poziviKlasa.php");
$dodaj = new Glavna();
$dodaj->dodajKategorija($_POST['Название'], $_POST['Описание']);
?>