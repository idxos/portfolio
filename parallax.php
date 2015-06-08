<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Portfolio Theme</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">

<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
<link rel="stylesheet" href="themes/portfolio-theme/assets/css/site.css">
<!--
<link rel="stylesheet" href="themes/portfolio-theme/assets/css/animatecss/animate.css">
-->
<!-- Behavioral Styles -->
  <link rel="stylesheet" type="text/css" href="themes/portfolio-theme/assets/css/parallax-advanced/styles.css"/>
<!-- /behavioral styles -->



<style type="text/css">
  body {
      padding-top:50px;
  }
  
</style>

</head>
<body>
<?php include('themes/portfolio-theme/partials/top-nav.php'); ?>
    
 

  <div id="container" class="parallax-container">
    <ul id="scene" class="scene">
      <li class="layer" data-depth="0.15"><img src="themes/portfolio-theme/assets/images/palmer-parallax/sky2.png"></li>
      <li class="layer" data-depth="0.15"><img src="themes/portfolio-theme/assets/images/palmer-parallax/trees.png"></li>
      <li class="layer" data-depth="0.10"><img src="themes/portfolio-theme/assets/images/palmer-parallax/dirt-ramp.png"></li>
      <li class="layer" data-depth="0.70"><img src="themes/portfolio-theme/assets/images/palmer-parallax/flyer.png"></li>
    </ul>
  </div>







  <div class="container">
    <div class="row">
      <section class="col-xs-12">
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.</p>
      </section>
    </div>
  </div>
    





        <!-- Start advanced-parallax scripts -->
        <script src="themes/portfolio-theme/assets/js/parallax-advanced/jquery.js"></script>
        <script src="themes/portfolio-theme/assets/js/parallax-advanced/jquery.parallax.js"></script>
        <script>
          $('#scene').parallax({
            // calibrateX: false,
            // calibrateY: true,
            // invertX: false,
            // invertY: true,
            // limitX: false,
            // limitY: 10,
            // scalarX: 2,
            // scalarY: 8,
            // frictionX: 0.2,
            // frictionY: 0.8,
            // originX: 0.0,
            // originY: 1.0
          });
                  </script>
        <!-- /advanced-parallax -->


        <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="themes/portfolio-theme/assets/js/bootswatch/bootswatch.js"></script>
        <script src="themes/portfolio-theme/assets/js/buttons/buttons.js"></script>

</body>
</html>
















