<?php
include("poziviKlasa.php");
$code = new Glavna();
if($_SESSION['code']=="")
	$_SESSION['code'] = $code->slucajniString(6);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Opis sajta">
    <title>Guitar Shop</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  	<link href="css/stil.css" rel="stylesheet">
</head>
<body>	
	<?php
	include("header.php");
	if($_GET['strana']=="kategorija")
		include("strane/kategorija.php");
	elseif($_GET['strana']=="artikal")
		include("strane/artikal.php");
	elseif($_GET['strana']=="korpa")
		include("strane/korpa.php");
	elseif($_GET['strana']=="poruci")
		include("strane/poruci.php");
	elseif($_GET['strana']=="admin")
		include("strane/admin.php");
	else
		include("strane/pocetna.php");
	?>
	<footer id="footer">
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Авторские права © 2020 Guitar SHOP. Все права защищены.</p>
					<p class="pull-right">Sugawara Koushi</p>
				</div>
			</div>
		</div>		
	</footer>
	<!--<p><a href="easter_egg/easter_egg.html">easter_egg</a></p>-->	  
	
	
	<div class="modal" id="poruci" tabindex="-1" role="basic" aria-hidden="true">
		<div class="modal-dialog ">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times" aria-hidden="true"></i></button>
					<h4 class="modal-title">Заказ на покупку</h4>
				</div>
				<div class="modal-body">
					<form action="" method="post" id="poruciForma">
						Имя и фамилия<br/>
						<input type="text" class="form-control" name="ime" required><br/>
						Адреса<br/>
						<input type="text" class="form-control" name="adresa" required><br/>
						Телефон<br/>
						<input type="text" class="form-control" name="telefon" required><br/>
						Email<br/>
						<input type="email" class="form-control" name="email" required><br/>
				</div>
				<div class="modal-footer">	
					<div style="width:60%;float:left" id="poruciInfo"></div>
					<button type="button" class="btn btn-primary " id="poruciDugme">Заказать</button>
					<button type="button" class="btn default" data-dismiss="modal">Закрыть</button>					
				</div>
				</form>
			</div>		
		</div>
	</div>

	
    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<?php include("ajax.php");?>	
</body>
</html>