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
      <script src="<?php echo $global['assets.prefix'];?>/themes/scblog/assets/js/html5shiv.min.js"></script>
      <script src="<?php echo $global['assets.prefix'];?>/themes/scblog/assets/js/respond.min.js"></script>
    <![endif]-->
    <link href="<?php echo $global['assets.prefix'];?>/themes/scblog/assets/css/app.css" rel="stylesheet">

  </head>
  <body id="page-home" ng-app="sudCodersHome">

    <?php include("_nav.php"); ?>

  	<!-- begin:header -->
  	<div id="header" class="carousel slide carousel-fade" data-ride="carousel">
      <div class="carousel-inner">
        <div class="item active" style="background-image: url('<?php echo $global['assets.prefix'];?>/themes/scblog/assets/img/podcast_toolkit.jpg');">
        	<div class="container">
        		<div class="row">
        			<div class="col-md-12">
        				<div class="slider-caption">
        					<h2 class="animated fadeInLeftBig">Hablemos de Desarrollo! ;)</h2>
        					<div class="animated fadeInDownBig">
                    <p>Puedes <strong>escucharnos</strong> en :
						<strong>iTunes Podcasts</strong> 
						y en <strong>SoundCloud</strong>.</p>
                    <div class="marg30-top-btm"><!--a href="#" class="btn btn-lucky-secondary btn-xl">Take a tour</a-->
						<a href="http://bit.ly/SudCodersItunes" target="itunes_store" style="display:inline-block;overflow:hidden;background:url(https://linkmaker.itunes.apple.com/htmlResources/assets/es_mx//images/web/linkmaker/badge_subscribe-lrg.png) no-repeat;width:135px;height:40px;@media only screen{background-image:url(https://linkmaker.itunes.apple.com/htmlResources/assets/es_mx//images/web/linkmaker/badge_subscribe-lrg.svg);}"></a>&nbsp;<a href="http://bit.ly/SudCodersSoundCloud"><img src="https://w.soundcloud.com/icon/assets/images/orange_white_64-94fc761.png"/></a></div>
                  </div>
        				</div>
        			</div>
        		</div>
        	</div>
        </div>
        <div class="item" style="background-image: url('<?php echo $global['assets.prefix'];?>/themes/scblog/assets/img/kanban_sample.jpg');">
        	<div class="container">
        		<div class="row">
        			<div class="col-md-12">
        				<div class="slider-caption">
        					<h2 class="animated fadeInUpBig">Es Simple</h2>
        					<div class="animated fadeInDownBig">
                    			 <p>Puedes <strong>escucharnos</strong> en :
										<strong>iTunes Podcasts</strong> 
										y en <strong>SoundCloud</strong>.</p>
                    <div class="marg30-top-btm"><a href="http://bit.ly/SudCodersItunes" target="itunes_store" style="display:inline-block;overflow:hidden;background:url(https://linkmaker.itunes.apple.com/htmlResources/assets/es_mx//images/web/linkmaker/badge_subscribe-lrg.png) no-repeat;width:135px;height:40px;@media only screen{background-image:url(https://linkmaker.itunes.apple.com/htmlResources/assets/es_mx//images/web/linkmaker/badge_subscribe-lrg.svg);}"></a>&nbsp;<a href="http://bit.ly/SudCodersSoundCloud"><img src="https://w.soundcloud.com/icon/assets/images/orange_white_64-94fc761.png"/></a></div>
                  </div>
        				</div>
        			</div>
        		</div>
        	</div>
        </div>
        <div class="item" style="background-image: url('<?php echo $global['assets.prefix'];?>/themes/scblog/assets/img/plaza_de_armas.jpg');">
        	<div class="container">
        		<div class="row">
        			<div class="col-md-12">
        				<div class="slider-caption">
        					<h2 class="animated fadeInUpBig">Sudamerican <span class="font-kaushan resaltado" >&nbsp;{Coders}&nbsp;</span></h2>
        					<div class="animated rollIn">
                    <p>Hecho por <strong>Desarrolladores</strong> para <strong>Desarrolladores</strong>!</p>
                    <div class="marg30-top-btm"><a href="http://bit.ly/SudCodersItunes" target="itunes_store" style="display:inline-block;overflow:hidden;background:url(https://linkmaker.itunes.apple.com/htmlResources/assets/es_mx//images/web/linkmaker/badge_subscribe-lrg.png) no-repeat;width:135px;height:40px;@media only screen{background-image:url(https://linkmaker.itunes.apple.com/htmlResources/assets/es_mx//images/web/linkmaker/badge_subscribe-lrg.svg);}"></a>&nbsp;<a href="http://bit.ly/SudCodersSoundCloud"><img src="https://w.soundcloud.com/icon/assets/images/orange_white_64-94fc761.png"/></a></div>
                  </div>
        				</div>
        			</div>
        		</div>
        	</div>
        </div>
      </div>
      <a class="left carousel-control" href="#header" role="button" data-slide="prev">
        <i class="fa fa-angle-left"></i>
      </a>
      <a class="right carousel-control" href="#header" role="button" data-slide="next">
        <i class="fa fa-angle-right"></i>
      </a>
    </div>
  	<!-- end:header -->

  	<!-- begin:episodios -->
  	<div id="episodios">
		<br/><br/>
  		<div class="container">
  			<div class="row">
  				<div class="col-md-12">
  					<div class="page-title">
  						<h2>Escúchanos <span class="fa fa-soundcloud"></span>. <small>Nuestros episodios son pensados para desarrolladores</small></h2>
						<!--h2>Escucha <span class="fa fa-soundcloud"></span><small>Nuestros últimos Episodios!</small></h2-->
  					</div>
  				</div>
  			</div>
  			<!-- break -->
  			<div class="row" ng-controller="EpisodesController">
  				<div ng-repeat="item in items | limitTo:3" ng-show="item.title" class="col-md-4 col-sm-4">
  					<div  class="service-content">
						<small>{{item.created_at | formatDateToDayAndMonth}} - {{getEpisodeCode(item)}}</small><br/>
  						<h3 class="font-kaushan text-red">{{getEpisodeTitle(item)}}</h3>
	  					<p ng-bind-html="item.description | formatOverview"></p>
	  					<span class="service-icon">  <i class="fa fa-volume-up"></i></span>
						<audio controls preload="none">
							<source ng-src="{{getURL(item)}}"/>
						</audio>
            <a ng-href="{{getEpisodeNotesLink(item)}}">Notas del episodio</a>
  					</div>
  				</div>	
  			</div>
        <div class="row" style="padding-bottom:20px">
          <div class="col-md-4 col-md-offset-8 text-right">
            <a class="btn btn-danger" href="/notas">Todos nuestros episodios</a>
          </div>
        </div>
  		</div>
  	</div>
  	<!-- end:service -->

  	<!-- begin:about -->
  	<div id="about" ng-controller="CodersController">
  		<div class="container">
  			<div class="row">
  				<div class="col-md-12">
  					<div class="page-title">
  						<h2>{&nbsp;Coders&nbsp;} <small>Un equipo con voluntad de cambio!</small></h2>
  					</div>
  				</div>
  			</div>
  			<!-- break -->
  			<div class="row">
  				<div class="col-md-6 col-sm-6">
  					<div class="heading-title">
  						<h3>Nuestros <span class="font-kaushan resaltado">&nbsp;Panelistas&nbsp;</span></h3>
  					</div>
					&nbsp;<br/>
  					<p>Todos somos <span class="font-kaushan text-red">apasionados</span> por la tecnología, el desarrollo
	 					y por hacer las cosas mejor.
						Creemos  que  es  sumamente  importante entregar a  la 
						<span class="font-kaushan text-black">comunidad de desarrolladores</span> contenido de calidad y en 
						<span class="font-kaushan text-red">nuestro idioma</span>.</p>
  				</div>
  				<!-- break -->
  				<div class="col-md-6 col-sm-6">
            <div class="row">
              <div ng-repeat="coder in coders" class="col-md-3 col-sm-3">
                <div class="team-container coder-picture center-block">
                  <img ng-src="<?php echo $global['assets.prefix'];?>/themes/scblog/assets/img/{{coder.foto}}" class="img-responsive" alt="lucky - business theme">
                  <div class="team-desc">
                    <h4>{{coder.nombre}} <small>@{{coder.twitter}}</small></h4>
                    <ul class="list-inline">
                      <li><a href="http://twitter.com/{{coder.twitter}}" target="_{{coder.twitter}}">Twitter</a></li>
                      <!--li><a href="#">Facebook</a></li-->
                      <li><a href="http://{{coder.linkedin}}" target="_{{coder.twitter}}">Linkedin</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
  				</div>
  			</div>
  		</div>
  	</div>
  	<!-- end:about -->

<!-- begin:contact -->
    <div id="contact">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="page-title">
              <h2>Contact Us <small>If you have any questions, please leave us a message.</small></h2>
            </div>
          </div>
        </div>
        <!-- break -->
        <div class="row">
          <div class="col-md-5 col-sm-5 marg30-btm">
            <h4 class="text-uppercase text-xbold">Aditional Information</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi.</p>
            <br>
            <address>
              <strong>Templateninja, Inc.</strong><br><br>
              231 Yogyakarta, INA 55791<br>
              mail@domain.com<br>
              http://www.domain.com <br>
              <abbr title="Phone">Telp.</abbr> (0274) 441-5000
            </address>
          </div>

          <div class="col-md-7 col-sm-7">
            <form role="form" class="contact-form">
              <div class="form-group">
                <label for="name" class="sr-only">Name</label>
                <input type="text" class="form-control input-lg" id="author" placeholder="Name: " required>
                <span class="form-focus-icon focus-icon-name"></span>
              </div>
              <div class="form-group">
                <label for="email" class="sr-only">Email address</label>
                <input type="email" class="form-control input-lg" id="email" placeholder="Email: " required>
                <span class="form-focus-icon focus-icon-mail"></span>
              </div>
              <div class="form-group">
                <label for="phone" class="sr-only">Phone</label>
                <input type="text" class="form-control input-lg" id="phone" placeholder="Phone: " required>
                <span class="form-focus-icon focus-icon-phone"></span>
              </div>
              <div class="form-group">
                <label for="message" class="sr-only">Message</label>
                <textarea class="form-control input-lg" id="message" placeholder="Message: " rows="5" required></textarea>
                <span class="form-focus-icon focus-icon-message"></span>
              </div>
              <button type="submit" class="btn btn-lucky btn-lg"><i class="fa fa-envelope-o"></i> Send Message</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- end:contact -->

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

    <!-- begin:modal -->
    <div class="modal-portfolio modal fade" id="modal01" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-content">
        <div class="modal-close" data-dismiss="modal"></div>
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <div class="modal-body">
                <div class="page-title">
                  <h2>Web Development <small>Redesign Official Website Superduper</small></h2>
                </div>
                <img src="img/img04.jpg" class="img-responsive" alt="">
                <p>Lorem ipsum dolor sit amet, <strong>consectetur</strong> adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. <a href="#">Duis aute irure</a></p>
                
                <ul class="list-inline project-detail">
                  <li>Client : <strong>Superduper, Inc.</strong></li>
                  <li>Date : <strong>Sept 02, 2014</strong></li>
                  <li>Service : <strong>Web Design</strong></li>
                  <li>Live <strong><a href="#">Demo</a></strong></li>
                </ul>
                <button type="button" class="btn btn-lucky" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end:modal -->

    <!-- begin:modal -->
    <div class="modal-portfolio modal fade" id="modal02" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-content">
        <div class="modal-close" data-dismiss="modal"></div>
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <div class="modal-body">
                <div class="page-title">
                  <h2>Town Photography <small>Lorem ipsum dolor sit!</small></h2>
                </div>
                <img src="img/img05.jpg" class="img-responsive" alt="">
                <p>Lorem ipsum dolor sit amet, <strong>consectetur</strong> adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. <a href="#">Duis aute irure</a></p>
                
                <ul class="list-inline project-detail">
                  <li>Client : <strong>Unknown, Inc.</strong></li>
                  <li>Date : <strong>Sept 02, 2014</strong></li>
                  <li>Service : <strong>Photography</strong></li>
                </ul>
                <button type="button" class="btn btn-lucky-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end:modal -->

    <script src="<?php echo $global['assets.prefix'];?>/themes/scblog/assets/js/jquery.min.js"></script>
    <script src="<?php echo $global['assets.prefix'];?>/themes/scblog/assets/js/bootstrap.min.js"></script>
    <script src="<?php echo $global['assets.prefix'];?>/themes/scblog/assets/js/gmap3.min.js"></script>
    <script src="<?php echo $global['assets.prefix'];?>/themes/scblog/assets/js/jquery.nicescroll.min.js"></script>
    <script src="<?php echo $global['assets.prefix'];?>/themes/scblog/assets/js/jquery.easing.js"></script>
    <script src="<?php echo $global['assets.prefix'];?>/themes/scblog/assets/js/classie.js"></script>
    <script src="<?php echo $global['assets.prefix'];?>/themes/scblog/assets/js/cbpAnimatedHeader.js"></script>
    <script src="<?php echo $global['assets.prefix'];?>/themes/scblog/assets/js/jquery.parallax.js"></script>
    <script src="<?php echo $global['assets.prefix'];?>/themes/scblog/assets/js/script.js"></script>
	<script src="<?php echo $global['assets.prefix'];?>/themes/scblog/assets/js/angular.min.js">	</script>
	<script src="<?php echo $global['assets.prefix'];?>/themes/scblog/assets/js/angular-sanitize.min.js"></script>
	<script src="<?php echo $global['assets.prefix'];?>/themes/scblog/assets/js/app.js"></script>

  </body>
</html>