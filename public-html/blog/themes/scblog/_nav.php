	<!-- begin:navbar -->
  	<nav class="navbar navbar-default navbar-fixed-top navbar-transparent <?php if($global["route"] != "__root__") { echo "navbar-scroll"; } ?>" role="navigation">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand menus" href="/">Sudamerican { Coders }</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li class="hidden"><a href="/#page-home"></a></li>
            <li><a href="/#episodios">Episodios&nbsp;[&nbsp;]</a></li>
            <li><a href="/#about">{&nbsp;Coders&nbsp;}</a></li>
            <!--li><a href="#portfolio">Portfolio</a></li>
            <li><a href="#component">Component</a></li-->
            <li class="dropdown <?php if($global["route"] == "category") echo "active";?>">
              <a class="dropdown-toggle" id="drop5" role="button" data-toggle="dropdown" href="#">// Blog <b class="caret"></b></b></a>
              <ul id="menu3" class="dropdown-menu" role="menu" aria-labelledby="drop5">
                <?php
                  foreach ($global['categories'] as $slug => $category) {
                    if($category == "episodios") { continue; }
                    echo '<li><a tabindex="-1" href="' . $global["base.url"] . '/category/'.$slug.'">'. $category .'</a></li>';
                  }
                ?>
              </ul>
            </li>
            <li><a href="/#contact">Contactenos</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
  	<!-- end:navbar -->