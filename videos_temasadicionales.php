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
<!--Poner buen título, ver si lo blanco le podemos bajar un poco la opacidad-->
  <center>Las dos generaciones-Vicky de Olivares</center>
       
  <center>    
      	<iframe width="660" height="400"
src="http://www.youtube.com/embed/e7M9QemfqLY">
</iframe>
    </center>
     <br/><br/> <!--Poner imagen-->
    <div style="font-family: 'Carrois Gothic SC', sans-serif; font-size: 28px;" ><a href="./series_video.php" target="_self">Regresar</a></div>
    
      
</div>

<!--=======bottom================================-->
<?php include('./includes/bottom_block.php'); ?>
<!--==============================footer=================================-->

</div>
<?php include('./includes/footer.php'); ?>

</body>
</html>