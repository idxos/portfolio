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


<style type="text/css">
body {
    padding-top:50px;
}

.parallax-window {
    min-height: 491px;
    background: transparent;
}


</style>

</head>
<body>
<?php include('themes/portfolio-theme/partials/top-nav.php'); ?>


<div class="container">
    <div class="page-header" id="banner">
        <div class="row">
            <div class="col-lg-8 col-md-7 col-sm-6">
                <h1>Lumen</h1>
                <p class="lead">Light and shadow</p>
            </div>
            <div class="col-lg-4 col-md-5 col-sm-6">
                <div class="sponsor">

                </div>
            </div>
        </div>
    </div>
</div><!-- /.container-->



    <?php include('themes/portfolio-theme/partials/footer.php'); ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script>
      $(function(){
        if (navigator.userAgent.match(/(iPod|iPhone|iPad|Android)/)) {
          $('#ios-notice').removeClass('hidden');
          $('.parallax-container').height( $(window).height() * 0.5 | 0 );
        } else {
          $(window).resize(function(){
            var parallaxHeight = Math.max($(window).height() * 0.7, 200) | 0;
            $('.parallax-container').height(parallaxHeight);
          }).trigger('resize');
        }
      });
    </script>
    <script src="themes/portfolio-theme/assets/js/parallaxjs/parallax.js"></script>



    <script src="themes/portfolio-theme/assets/js/bootswatch/bootswatch.js"></script>
    <script src="themes/portfolio-theme/assets/js/buttons/buttons.js"></script>
    <script type="text/javascript">
    /* <![CDATA[ */
    (function(){try{var s,a,i,j,r,c,l=document.getElementsByTagName("a"),t=document.createElement("textarea");for(i=0;l.length-i;i++){try{a=l[i].getAttribute("href");if(a&&a.indexOf("/cdn-cgi/l/email-protection") > -1  && (a.length > 28)){s='';j=27+ 1 + a.indexOf("/cdn-cgi/l/email-protection");if (a.length > j) {r=parseInt(a.substr(j,2),16);for(j+=2;a.length>j&&a.substr(j,1)!='X';j+=2){c=parseInt(a.substr(j,2),16)^r;s+=String.fromCharCode(c);}j+=1;s+=a.substr(j,a.length-j);}t.innerHTML=s.replace(/</g,"&lt;").replace(/>/g,"&gt;");l[i].setAttribute("href","mailto:"+t.value);}}catch(e){}}}catch(e){}})();
    /* ]]> */
    </script>

</body>
</html>
















