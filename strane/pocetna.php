<section id="slider">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div id="slider-carousel" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
						<li data-target="#slider-carousel" data-slide-to="1"></li>
						<li data-target="#slider-carousel" data-slide-to="2"></li>
					</ol>					
					<div class="carousel-inner">
						<div class="item active">
							<div class="col-sm-6">
								<h1>ЛУЧШЕЕ</h1>
								<h2>Электрогитары в Сербии</h2>
								<p>Узнайте, почему мы являемся лидером на рынке гитар и почему нам доверяют лучшие музыканты! </p>								
							</div>
							<div class="col-sm-6">
								<img src="images/gitara1.jpg" class=" img-responsive" alt="" />								
							</div>
						</div>	
						<div class="item">	
							<div class="col-sm-6">
								<h1>БОЛЬШОЙ ВЫБОР</h1>
								<h2>Акустические гитары</h2>
								<p>Играйте любимые аккорды на наших акустических гитарах</p>
							</div>
							<div class="col-sm-6">
								<img src="images/gitara2.jpg" class=" img-responsive" alt="" />								
							</div>
						</div>
						<div class="item">
							<div class="col-sm-6">
								<h1>ВСЕ ДЛЯ ГИТАР</h1>
								<h2>Аксессуары и усилители</h2>
								<p>Самый большой выбор аксессуаров, аксессуаров и усилителей на отечественном рынке.</p>
							</div>
							<div class="col-sm-6">
								<img src="images/oprema.jpg" class=" img-responsive" alt="" />
								
							</div>
						</div>
					</div>					
					<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
						<i class="fa fa-angle-left"></i>
					</a>
					<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
						<i class="fa fa-angle-right"></i>
					</a>
				</div>
				
			</div>
		</div>
	</div>
</section>
<section>
	<div class="container">
		<div class="row">
			<div class="col-sm-12 padding-right">
				<h1 class="title">Guitar Shop</h1>
				<p>
				Электрогита́ра — разновидность гитары с электромагнитными звукоснимателями, преобразующими колебания металлических струн в колебания электрического тока. Сигнал со звукоснимателей может быть обработан для получения различных звуковых эффектов и усилен — для воспроизведения через акустическую систему. Слово «электрогитара» возникло от словосочетания «электрическая гитара».
				<br/><br/>
				Электрогитары изготавливаются, как правило, из дерева. Самые распространённые материалы — ольха, ясень, махагони (красное дерево), клён. В качестве накладок на гриф применяют палисандр, чёрное дерево и клён.
				</p>
			</div>
		</div>
	</div>
</section>
<section>
	<div class="container">
		<div class="row">
			<br/><br/>
			<div class="col-md-12">
				<h2 class="title">Популярные товары</h2>
			</div>
			<div class="features_items">
				<?php
				$upit="SELECT * FROM artikli WHERE istaknuto = 1 ORDER BY RAND() LIMIT 4";
				$rez=$db->izvrsiUpit($upit);
				while($red=$db->procitajRed($rez))
				{
					?>
					<div class="col-sm-3">
						<div class="product-image-wrapper">
							<div class="single-products">
								<div class="productinfo text-center">
									<a href="index.php?strana=artikal&id=<?php echo $red->id;?>"><img src="images/shop/<?php echo $red->slika;?>" alt="<?php echo $red->naziv;?>" /></a>
									<h2><?php echo $red->naziv;?></h2>										
									<p><?php echo $red->cena;?> RU</p>
									<a href="index.php?strana=artikal&id=<?php echo $red->id;?>" class="btn btn-default add-to-cart">Подробнее</a>
								</div>
								
							</div>								
						</div>
					</div>
					<?php						
				}
				?>						
			</div>			
		</div>
	</div>
</section>