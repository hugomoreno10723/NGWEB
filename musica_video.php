<?php include('./includes/head.php'); ?>
	
     <link rel="stylesheet" href="css/style.css">
     <link rel="stylesheet" href="css/touchTouch.css">
     <link rel="stylesheet" href="css/youtube-video-gallery.css" type="text/css"/>
    <link rel="stylesheet" href="css/test.css" type="text/css"/>
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
    <script src="js/jquery.youtubevideogallery.js"></script>
    
    <!--[if lt IE 9]>
    <link href="css/youtube-video-gallery-legacy-ie.css" type="text/css" rel="stylesheet"/>
    <![endif]-->

    <!-- add colorbox -->
    <link rel="stylesheet" href="http://www.jacklmoore.com/colorbox/example1/colorbox.css" />
    <script src="http://www.jacklmoore.com/colorbox/jquery.colorbox.js"></script>
     </head>
     <body  class="">
<!--==============================header=================================-->
  <?php include('./includes/header.php'); ?>

<div class="main">
<!--=======content================================-->

<div class="content">
  <div class="container_12">
    <div class="gallery">
      <div class="grid_4">
       <ul class="youtube-videogallery">
        <li><a href="http://www.youtube.com/watch?v=zgjtsa6ByYs">Gloria y loor</a></li>
        </ul>
      </div>
      <div class="grid_4">
        <ul class="youtube-videogallery">
        <li><a href="http://www.youtube.com/watch?v=-yqlIQ-cHRM">Salmo 63</a></li>
        </ul>
      </div>
      <div class="grid_4">
        <ul class="youtube-videogallery">
        <li><a href="http://www.youtube.com/watch?v=A0M93rnaNcM">Glorioso Rey</a></li>
        </ul>
      </div>
      <div class="clear"></div>
      <div class="grid_4">
        <ul class="youtube-videogallery">
        <li><a href="http://www.youtube.com/watch?v=lpq_odqazG0">Salmo 84</a></li>
        </ul>
      </div>
      <div class="grid_4">
        <ul class="youtube-videogallery">
        <li><a href="http://www.youtube.com/watch?v=SyspBW9e8kY">Los que confían en Dios</a></li>
        </ul>
      </div>
      <div class="grid_4">
        <ul class="youtube-videogallery">
        <li><a href="http://www.youtube.com/watch?v=45VxnI0fWZQ">Ven, Señor Jesús</a></li>
        </ul>
      </div>
    </div>
    
</div>
      <div class="clear"></div>
  </div>

<!--=======bottom================================-->
<?php include('./includes/bottom_block.php'); ?>
<!--==============================footer=================================-->


</div>
<?php include('./includes/footer.php'); ?>
</div>
<script>
      $(document).ready(function(){
          $("ul.youtube-videogallery").youtubeVideoGallery({
              plugin:'colorbox'
          });
      });
  </script>
</body>
</html>