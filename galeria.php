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
     <script>
     $(window).load(function(){
       $().UItoTop({ easingType: 'easeOutQuart' });
      });
       $(function(){
  
  // Initialize the gallery
  $('.gallery a.gal').touchTouch();
 });  
      
      
     </script>
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
  <div class="container_12">
       <div class="gallery">
     
      <div class="clear"></div>
      <div class="grid_4">
        <div class="view view-sixth" style="margin:0 auto 30px;"><img src="images/vuelvete.jpg" alt="" width="360" height="200"><div class="mask">
             <h2>Congreso 2013</h2>
             <p>Escucha y/o descarga los temas que se compartieron durante el evento.</p>
                 <a href="./galeria_vlm.php" class="info" target="_self">Ver más</a>
             </div>
		</div>
      </div>
      <div class="grid_4">
        <div class="view view-sixth" style="margin:0 auto 30px;"><img src="images/gorra2.jpg" alt="" width="360" height="200"><div class="mask">
             <h2>Tarde de gorra</h2>
             <p>Escucha y/o descarga el tema que Raúl Borboa compartió durante el evento.</p>
                 <a href="http://webstutorial.com" class="info" target="_blank">Ver más</a>
             </div>
		</div>
      </div>
      <div class="grid_4">
         <div class="view view-sixth" style="margin:0 auto 30px;"><img src="images/Libertad2.jpg" alt="" width="360" height="200"><div class="mask">
             <h2>Firmes en la libertad</h2>
             <p>Escucha y/o descarga el tema que Rito Llamas compartió durante el evento.</p>
                 <a href="./prueba2.php" class="info" target="_self">Ver más</a>
             </div>
		</div>
      </div>
   <!--   <div class="clear"></div>
      <div class="grid_4">
        <a href="images/big7.jpg" class="gal img_inner"><img src="images/page3_img7.jpg" alt=""></a>
      </div>
      <div class="grid_4">
        <a href="images/big8.jpg" class="gal img_inner"><img src="images/page3_img8.jpg" alt=""></a>
      </div>
      <div class="grid_4">
        <a href="images/big9.jpg" class="gal img_inner"><img src="images/page3_img9.jpg" alt=""></a>
      </div>-->
    </div>
      <div class="clear"></div>
  </div>
</div>

<!--=======bottom================================-->
<?php include('./includes/bottom_block.php'); ?>
<!--==============================footer=================================-->

</div>
<?php include('./includes/footer.php'); ?>

</body>
</html>