<?php
include("../poziviKlasa.php");
$izmeni = new Glavna();
$izmeni->izmeniKategorija($_POST['Название'], $_POST['Описание'], $_POST['id']);
?>