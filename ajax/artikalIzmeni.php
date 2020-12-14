<?php
include("../poziviKlasa.php");
$izmeni = new Glavna();
$izmeni->izmeniArtikal($_POST['Название'],$_POST['Описание'],$_POST['Цена'],$_POST['Категория'],$_POST['Видный'], $_POST['id']);
?>