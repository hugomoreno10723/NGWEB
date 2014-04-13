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
     <script type="text/javascript" src="jquery-1.3.2.js"></script>
    <script type="text/javascript" src="jquery-ui-1.7.2.custom.js"></script>
	 <script type="text/javascript" src="jquery.jcoverflip.js"></script>
     <script>
    jQuery( document ).ready( function(){
        jQuery( '#flip' ).jcoverflip();
        
      });
      
      
    </script>
     <script>
     $(window).load(function(){
       $().UItoTop({ easingType: 'easeOutQuart' });
      });
       $(function(){
  
  // Initialize the gallery
  $('.gallery a.gal').touchTouch();
 });  
      
      
     </script>
     
     <style>
	  /* Basic jCoverflip CSS */
	  
      .ui-jcoverflip {
        position: relative;
      }
      
      .ui-jcoverflip--item {
        position: absolute;
        display: block;
      }
      
      
      /* Basic sample CSS */
      #flip {
        height: 200px;
        width: 830px;
        margin-bottom: 50px;
      }
      
      #flip .ui-jcoverflip--title {
        position: absolute;
        bottom: -30px;
        width: 100%;
        text-align: center;
        color: #555;
      }
      
      #flip img {
        display: block;
        border: 0;
        outline: none;
      }
      
      #flip a {
        outline: none;
      }
	  #wrapper {
        height: 300px;
        width: 630px;
        overflow: hidden;
        position: relative;
      }
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
  <div class="container_12">
   <div class="gallery">
   <center>

               
              <ul id="flip">
            <li><span class="title"><a href="./audio_vuelvete.php">El conocimiento de Cristo</a></span><img src="images/CongreMini14.jpg" /></li>
              <li><span class="title">Vuélvete a mi ley</span><img src="images/vuelvete.jpg" /></li>
              <li><span class="title">El conocimiento de Cristo</span><img src="images/congre14_350x200.jpg"/></li>
              <li><span class="title">Vuélvete a mi ley</span><img src="images/congre2_0.jpg" /></li>
              <li><span class="title">El mejor regalo</span><img src="images/regalo.jpg"/></li>
          </ul>
             
</center>

      
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