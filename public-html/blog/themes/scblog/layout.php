<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Sudamerican Coders landing page">
    <meta name="keywords" content="bootstrap, responsive, one page, parallax, business theme">
    <meta name="author" content="templateninja">
    <title>Sudamerican Coders</title>

    <!-- Bootstrap -->
    <link href="<?php echo $global['assets.prefix'];?>/themes/scblog/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,700,600" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href="<?php echo $global['assets.prefix'];?>/themes/scblog/assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo $global['assets.prefix'];?>/themes/scblog/assets/css/animate.css" rel="stylesheet">
    <link href="<?php echo $global['assets.prefix'];?>/themes/scblog/assets/css/style.min.css" rel="stylesheet">
    <link href="<?php echo $global['assets.prefix'];?>/themes/scblog/assets/css/responsive.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
    <link href="<?php echo $global['assets.prefix'];?>/themes/scblog/assets/css/app.css" rel="stylesheet">

  </head>
  <body id="page-home">

  	<!-- begin:navbar -->
  	<nav class="navbar navbar-default navbar-fixed-top navbar-transparent navbar-scroll" role="navigation">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand menus" href="#page-home">Sudamerican { Coders }</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li class="hidden"><a href="#page-home"></a></li>
            <li><a href="#episodios">Episodios&nbsp;[&nbsp;]</a></li>
            <li><a href="#about">{&nbsp;Coders&nbsp;}</a></li>
            <!--li><a href="#portfolio">Portfolio</a></li>
            <li><a href="#component">Component</a></li-->
            <li><a href="#contact">Contactenos</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
  	<!-- end:navbar -->
    
    <?php echo $content; ?>

    <!-- begin:social -->
    <div id="social">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <ul class="list-inline social-icon">
              <li><a href="http://twitter.com/sudamericancode"><i class="fa fa-twitter"></i></a></li>
              <!--li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-tumblr"></i></a></li>
              <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li-->
              <li><a href="http://bit.ly/SudCodersSoundCloud" target="_soundcloud"><i class="fa fa-soundcloud"></i></a></li>
			 <li style="vertical-align: bottom;"><a href="http://bit.ly/SudCodersItunes" target="itunes_store" style="vertical-align:bottom;display:inline-block;overflow:hidden;background:url(https://linkmaker.itunes.apple.com/htmlResources/assets/es_mx//images/web/linkmaker/badge_subscribe-lrg.png) no-repeat;width:135px;height:40px;@media only screen{background-image:url(https://linkmaker.itunes.apple.com/htmlResources/assets/es_mx//images/web/linkmaker/badge_subscribe-lrg.svg);}"></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- end:social -->

  	<!-- begin:footer -->
    <div class="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-12 col-xs-12">
            <div class="footer-widget-logo">
              <h2>Sudamerican {Coders}</h2>
              <small>Cuéntale a tus amigos</small>
			  
            </div>
          </div>
          <!-- break -->
          <div class="col-md-2 col-sm-6 col-xs-12">
            <div class="footer-widget">
              <div class="widget-header">
                <h3>FaceBook</h3>
              </div>
<iframe src="http://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.sudamericancoders.fm&amp;width&amp;layout=box_count&amp;action=like&amp;show_faces=true&amp;share=true&amp;height=65&amp;appId=131502016865532" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:65px;" allowTransparency="true"></iframe>
              <!--ul class="list-unstyled">
                <li><a href="#">Lorem dolor voluvat</a></li>
                <li><a href="#">Consectetur adis</a></li>
                <li><a href="#">Elit lorem dolor</a></li>
              </ul-->
            </div>
          </div>
          <!-- break -->
          <div class="col-md-2 col-sm-6 col-xs-12">
            <div class="footer-widget">
              <div class="widget-header">
                <h3>Widget Title</h3>
              </div>

              <ul class="list-unstyled">
                <li><a href="#">Lorem ipsum</a></li>
                <li><a href="#">Dolor consectetur</a></li>
                <li><a href="#">Adisplicing elit</a></li>
              </ul>
            </div>
          </div>
          <!-- break -->
          <div class="col-md-2 col-sm-6 col-xs-12">
            <div class="footer-widget">
              <div class="widget-header">
                <h3>Widget Title</h3>
              </div>

              <ul class="list-unstyled">
                <li><a href="#">Consectetur adis</a></li>
                <li><a href="#">Elit lorem dolor</a></li>
                <li><a href="#">Lorem ipsum</a></li>
              </ul>
            </div>
          </div>
          <!-- break -->
          <div class="col-md-2 col-sm-6 col-xs-12">
            <div class="footer-widget">
              <div class="widget-header">
                <h3>Widget Title</h3>
              </div>

              <ul class="list-unstyled">
                <li><a href="#">Lorem ipsum</a></li>
                <li><a href="#">Dolor consectetur</a></li>
                <li><a href="#">Adisplicing elit</a></li>
              </ul>
            </div>
          </div>
          <!-- break -->
        </div>
      </div>
    </div>
  	<!-- end:footer -->

    <!-- begin:copyright -->
    <div id="copyright">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <a class="btn btn-lucky menus text-center btn-totop" href="#page-home"><i class="fa fa-angle-up"></i></a>
          </div>
        </div>
      </div>
    </div>
    <!-- end:copyright -->

    <script src="<?php echo $global['assets.prefix'];?>/themes/scblog/assets/js/jquery.min.js"></script>
    <script src="<?php echo $global['assets.prefix'];?>/themes/scblog/assets/js/bootstrap.min.js"></script>
    <script src="<?php echo $global['assets.prefix'];?>/themes/scblog/assets/js/jquery.nicescroll.min.js"></script>

  </body>
</html>