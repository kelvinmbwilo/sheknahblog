<nav class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#">{{ HTML::image('img/logo.jpg','',array('class'=>'img-responsive','style'=>'height:100px;width:250px')) }}</a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <div style="padding-bottom: 25px;padding-top: 10px">
          <span style="padding-left: 10px">Welcome to IBG Africa Limited</span>
          <span class="pull-right">
              <i class="fa fa-facebook-square fa-3x text-info"></i> 
              <i class="fa fa-twitter-square fa-3x" style="color: #00C0F7"></i> 
              <i class="fa fa-instagram fa-3x" style="color: #3D6B92"></i>
          </span>
      </div>
<!--    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Link</a></li>
      <li><a href="#">Link</a></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="#">Action</a></li>
          <li><a href="#">Another action</a></li>
          <li><a href="#">Something else here</a></li>
          <li class="divider"></li>
          <li><a href="#">Separated link</a></li>
          <li class="divider"></li>
          <li><a href="#">One more separated link</a></li>
        </ul>
      </li>
    </ul>-->
    <form class="navbar-form navbar-left" role="search">
      <div class="form-group">
        <input type="text" class="form-control search-query" placeholder="Search">
      </div>
        <button type="submit" class="btn btn-default btn-primary"><i class="fa fa-search"></i></button>
    </form>
    
<ul class="nav navbar-nav pull-right">
    <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
      <li><a href="#"><i class="fa fa-rss"></i> About Us</a></li>
      <li><a href="#"><i class="fa fa-envelope-o"></i> Contacts</a></li>
</ul>
      

  </div><!-- /.navbar-collapse -->
  </div>
</nav>
