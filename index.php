<?php include('./includes/head.php'); ?>
		 <link rel="stylesheet" href="css/style.css">
		 <link rel="stylesheet" href="css/slider.css">
		 <script src="js/jquery.js"></script>
		 <script src="js/jquery-migrate-1.1.1.js"></script>
		 <script src="js/superfish.js"></script>
         <script src="js/jquery.equalheights.js"></script>
		 <script src="js/jquery.easing.1.3.js"></script>
         <script src="js/jquery.ui.totop.js"></script>
		 <script src="js/jquery.jqtransform.js"></script>
		 <script src="js/sForm.js"></script>
		 <script src="js/tms-0.4.1.js"></script>
		 <script src="js/jquery-ui-1.10.3.custom.min.js"></script>
		 <script>
			$(window).load(function(){
			$('.slider')._TMS({
							show:0,
							pauseOnHover:false,
							prevBu:'.prev',
							nextBu:'.next',
							playBu:false,
							duration:800,
							preset:'random', 
							pagination:false,//'.pagination',true,'<ul></ul>'
							pagNums:false,
							slideshow:8000,
							numStatus:false,
							banners:true,
					waitBannerAnimation:false,
				progressBar:false
			})	;
			 $( "#tabs" ).tabs();
		 
		$().UItoTop({ easingType: 'easeOutQuart' });
			});
			
			
			
		 </script>
		 <!--[if lt IE 8]>
			 <div style=' clear: both; text-align:center; position: relative;'>
				 <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
					 <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
				 </a>
			</div>
		<![endif]
		<!--[if lt IE 9]>
			<script src="js/html5shiv.js"></script>
			<link rel="stylesheet" media="screen" href="css/ie.css">

		<![endif]-->
		 </head>
		 <body	class="page1">
<!--==============================header=================================-->
<?php include('./includes/header.php'); ?>

<div class="main">
	<div class="container_12">
		<div class="grid_12">
	 <div class="slider-relative">
			<div class="slider-block">
				<div class="slider">
					<a href="#" class="prev"></a><a href="#" class="next"></a>
					<ul class="items">
                    <li><img src="images/bienvenido.jpg" alt="">
                    <div class="banner">		<!--FIXME: No quitar porque se desconfigura la tabla de abajo-->								</div></li>
						<li><img src="images/congre14.jpg" alt="">
								
						</li>
						
						<li><img src="images/Youtube.jpg" alt=""></li>
						<li><img src="images/bienvenido3.jpg" alt=""></li>
					</ul>
				</div>
			</div>
		</div>
	</div></div>
	
<!--=======content================================-->

<div class="content">
	<div class="container_12">
		<div class="grid_12">
			<h3></h3>
		</div>
		<div class="boxes">
		<div class="grid_4">
					<figure>
						<div><img src="./images/DSC00798.JPG" alt=""></div>
						<figcaption>
							<h3>Alabanza y adoración</h3>
							“Bendeciré a Jehová en todo tiempo; 
Su alabanza estará de continuo en mi boca”.
<p align="right">Salmo 34:1 </p>
Aquí encontrarás cantos de las reuniones de Jóvenes, las cuales podrás escuchar o descargar completamente gratis.<a href="" class="btn">Ver más</a>
						</figcaption>
					</figure>
				</div>
				<div class="grid_4">
					<figure>
						<div><img src="./images/DSC03953.JPG" alt=""></div>
						<figcaption>
							<h3>Galería</h3>
					“¡Qué maravilloso y agradable es
    cuando los hermanos conviven en armonía!”   <br/>        <p align="right">Salmo 133:1</p>
Da clic en este apartado y podrás disfrutar las capturas de los diferentes tiempos durante los eventos de jóvenes. 
							<a href="" class="btn">Ver más</a>
						</figcaption>
					</figure>
				</div>
				<div class="grid_4">
					<figure>
						<div><img src="./images/DSC09062.JPG" alt=""></div>
						<figcaption>
							<h3>Biblicomania</h3>
                            “Toda la Escritura es inspirada por Dios, y útil para enseñar, para redargüir, para corregir, para instruir en justicia...”. 
<p align="right">2a Timoteo 3:16-17</p>
							Lee, medita y comparte el estudio de la Palabra, que siempre será de edificación para nuestras vidas. 
							<a href="./biblicomania_intro.php" class="btn">Ver más</a>
						</figcaption>
					</figure>
				</div>
				<div class="clear"></div>
				</div>
				<div class="grid_8">
					 <div id="tabs">
	<ul>
		<li><a href="#tabs-1">Series</a></li>
		<li><a href="#tabs-2">Vídeos</a></li>
		<li><a href="#tabs-3">Música</a></li>
	</ul>
	<div class="clear"></div>
	<div class="tab_cont" id="tabs-1"><br/>
        <img src="images/CongreMini14.jpg" alt="">
		<div class="extra_wrapper">
			<!--<div class="text1"><p></p>Vuélvete a mi ley. </div>-->
			<p class="style1">Escucha, descarga y comparte las predicaciones del congreso 2014. <br/><br/>Ingresa a través del siguiente enlace:</p>
			

<a href="#" class="btn">Ver más</a>
<div class="clear "></div>

		</div>
		<div class="clear cl1"></div>
		<img src="images/vuelvete.jpg" alt="">
		<div class="extra_wrapper">
			<!--<div class="text1"><p></p>Vuélvete a mi ley. </div>-->
			<p class="style1">Si te lo perdiste o deseas revivirlo; escucha o descarga <br/>las predicaciones del congreso 2013. ¡Compártelo!<br/><br/>Ingresa a través del siguiente enlace:  </p>
			

<a href="#" class="btn">Ver más</a>
			<div class="clear "></div>

		</div>	<br/>
	</div>
	<div class="tab_cont" id="tabs-2">
<center><script type='text/javascript'>
var vid = [ 
// Aca colocar e ID del video
"bh8fjb2EUDU",
"rBcrg3NVLrI",
"-yqlIQ-cHRM",
"VUpi7RzJTL0",
"I2mErCSccd4",];
var ancho_vid = '520'; // Ancho
var alto_vid = '295'; // Alto 
var ran_unrounded = Math.random()*vid.length;
var ran_number = Math.floor(ran_unrounded);
document.write('<object width="'+ancho_vid+'" height="'+alto_vid+'"><param name="movie" value="http://www.youtube.com/v/'+vid[ran_number]+'&hl=es&fs=1"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="http://www.youtube.com/v/'+vid[ran_number]+'&hl=es&fs=1" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="'+ancho_vid+'" height="'+alto_vid+'"></embed></object>');
</script></center>
		<div class="extra_wrapper">
			<div class="text1"><br/>Canal del Ministerio. </div>
			<p class="style1">En esta sección encontrarás material útil de edificación para ti y para otros. <br/>¡Comparte, escucha y suscríbete!</p>
<a href="http://www.youtube.com/nuevageneracionmx" class="btn">Ver más</a>
<div class="clear "></div>

		</div>
		<div class="clear cl1"></div>

	</div>
 <div class="tab_cont" id="tabs-3">
 <br/>
<img src="images/vuelvete.jpg" alt="">
		<div class="extra_wrapper"><br/>
			<!--<div class="text1">Sesión de alabanza. </div>-->
			<p class="style1">Aquí encontrarás música, letras y acordes que podrás;<br/> descargar, escuchar y compartir.</p>
			<iframe width="238" height="48" frameborder="0" allowfullscreen="" scrolling="no" src="http://www.ivoox.com/player_ek_2355134_1.html"></iframe><br/>
<a href="#" class="btn">Ver más</a>
<div class="clear "></div>

		</div>
		<div class="clear cl1"></div>
	<!--	<img src="images/page1_img5.jpg" alt="">
		<div class="extra_wrapper">
			<div class="text1 tx1">Hem psuf abr sit dmety. </div>
			Julla facilisi. Ut ut tincidunt lacus, ut auctor libero. Fuis ommodo vel ipsum sed volutpat. Phasellus a sagittis dui, eu adipiscinget nisi. Vestibulum eu eleifend metus, ut ornare nibh. Vestibulumul tincidunt interdum libero vitae faucibus. Gonec dapibus feugiate auctor. In ac dapibus lacus. Maecenas in pharetra mim asellus a sagittis dui, eu adipiscinget nisi. 
			<div class="clear"></div>
			<a href="#" class="btn bt1">Details</a>
			<div class="clear "></div>

		</div>	-->
		
	</div>
</div>
		</div>
	
	<div class="grid_4">
	 <div class="newsletter_title">Tweetline </div>
	 <div class="n_container">
			 <BR/>
							<!--<ul class="list">
								<li><a href="#">Congreso de Jóvenes 2014 </a></li>
								<li><a href="#">Retiro 2014 </a></li>
								<li><a href="#">Campamento de Jóvenes 2014 </a></li>
								<li><a href="#">Cena navideña </a></li>
							</ul>
                            <br/>-->
                            <a class="twitter-timeline" href="https://twitter.com/NuevaGen_Mexico" data-widget-id="439665709597982720">Tweets por @NuevaGen_Mexico</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>




			</div>
	</div>
	<div class="clear"></div></div>
</div>

<!--=======bottom================================-->
<?php include('./includes/bottom_block.php'); ?>
<!--==============================footer=================================-->

</div>
<?php include('./includes/footer.php'); ?>

</body>
</html>