<?php
include("../poziviKlasa.php");
$dodaj = new Glavna();
$dodaj->dodajArtikal($_POST['Название'],$_POST['Описание'],$_POST['Цена'],$_POST['Категория'],$_POST['Видный']);
?>