<?php include('./includes/head.php'); ?>
     <link rel="stylesheet" href="css/style.css">
     <link rel="stylesheet" href="css/style-img.css">
     <link rel="stylesheet" href="css/touchTouch.css">
     <script src="js/jquery.js"></script>
     <script src="js/jquery-migrate-1.1.1.js"></script>
     <script src="js/superfish.js"></script>
     <script src="js/jquery.equalheights.js"></script>
     <script src="js/jquery.easing.1.3.js"></script>
     <script src="js/jquery.ui.totop.js"></script>
     <script src="js/touchTouch.jquery.js"></script>
     <script src="js/share.min.js"></script>
     <script>
     $(window).load(function(){
       $().UItoTop({ easingType: 'easeOutQuart' });
      });
       $(function(){
  
  // Initialize the gallery
  $('.gallery a.gal').touchTouch();
 });  
      
      
     </script>
     
<?php include('./includes/fb.php'); ?>
     <style>
	 .share-button { margin:auto; position:relative; top: 1; left: 0; bottom: 0; right: 0; }
	 </style>
     <!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
         </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <link rel="stylesheet" media="screen" href="css/ie.css">

    <![endif]-->
     </head>
     <body  class="">
<!--==============================header=================================-->
<?php include('./includes/header.php'); ?>

<div class="main">
<!--=======content================================-->

<div class="content">
<!--Poner buen título, ver si lo blanco le podemos bajar un poco la opacidad-->
  <center><div style="font-family: 'Carrois Gothic SC', sans-serif; font-size: 28px;" >"vencidos por su amor y su gracia"<br/><br/>raúl borboa</div></center><br/>
       
  <center>    
      	<iframe width="660" height="400"
src="http://www.youtube.com/embed/I2mErCSccd4">
</iframe>
    </center>
     <br/><br/> <!--Poner imagen-->
   <div style="font-family: 'Carrois Gothic SC', sans-serif; font-size: 28px;" > <a href="./series_video.php" target="_self">regresar</a></div><br/>
   
    <div id="share-button-top" class='share-button share-button-top'></div>
  <script>
    var share = new Share("#share-button-top", {
      networks: {
        facebook: {
          app_id: "176010679219733",
		  title: "Escucha la plenaria que compartió con nosotros, Raúl Borboa",
		  url: "http://ngmexico.com/jovenes/series.html",
		  caption: "Vencidos por su amor y su gracia",
		  image: "http://ngmexico.com/NGWEB/images/LNG.png",
		  text: "blabla",
        },
		twitter: {
      url: "http://ngmexico.com/jovenes/series.html",
      text: "Escucha la plenaria que compartió con nosotros, Raúl Borboa",
    },
	google_plus: {
      url: "http://ngmexico.com/jovenes/series.html",
    },
      }
    });
  </script>
    
      
</div>

<!--=======bottom================================-->
<?php include('./includes/bottom_block.php'); ?>
<!--==============================footer=================================-->

</div>
<?php include('./includes/footer.php'); ?>

</body>
</html>