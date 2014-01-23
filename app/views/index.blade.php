@extends("layout.master")

@section('content')
<h3 class='text-muted'>Featured Products</h3>
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
        <div class="row">
    
  <div class="col-md-6">
    <div class="thumbnail">
        <i class="tag"></i>
      {{ HTML::image("img/b1.jpg") }}
      <div class="caption text-center">
          <h3 class="text-muted">Product Name</h3>
        <p class="text-muted">this is a good shoes for outing and for drinks with friends.</p>
        <p class="text-center"><button class="btn btn-primary btn-xs">Tsh 444 only</button></p>
        
        <div class="fb-share-button pull-right" data-href="http://developers.facebook.com/docs/plugins/" data-type="button_count"></div>&nbsp;&nbsp;&nbsp;&nbsp;
   
   <a href="https://twitter.com/share" class="twitter-share-button pull-right" data-url="http://fsfsafs">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
      
      </div>
    </div>
  </div>
    <div class="col-md-6">
    <div class="thumbnail">
      {{ HTML::image("img/b2.jpg") }}
      <div class="caption text-center text-muted">
        <h3 class="text-muted">Product Name</h3>
        <p class="text-muted">this is a good shoes for outing and for drinks with friends.</p>
        <p class="text-center"><button class="btn btn-primary btn-xs">Tsh 444 only</button></p>
        
        <div class="fb-share-button pull-right" data-href="http://developers.facebook.com/docs/plugins/" data-type="button_count"></div>&nbsp;&nbsp;&nbsp;&nbsp;
   
   <a href="https://twitter.com/share" class="twitter-share-button pull-right" data-url="http://fsfsafs">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
      
      </div>
    </div>
  </div>
</div>
    </div>
      
      <div class="item">
     <div class="row">
  <div class="col-md-6">
    <div class="thumbnail">
        
      {{ HTML::image("img/b3.jpg") }}
      <div class="caption text-center">
        <h3 class="text-muted">Product Name</h3>
        <p class="text-muted">this is a good shoes for outing and for drinks with friends.</p>
        <p class="text-center"><button class="btn btn-primary btn-xs">Tsh 444 only</button></p>
        
        <div class="fb-share-button pull-right" data-href="http://developers.facebook.com/docs/plugins/" data-type="button_count"></div>&nbsp;&nbsp;&nbsp;&nbsp;
   
   <a href="https://twitter.com/share" class="twitter-share-button pull-right" data-url="http://fsfsafs">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
      
      </div>
    </div>
  </div>
    <div class="col-md-6">
    <div class="thumbnail">
        <i class="tag"></i>
      {{ HTML::image("img/b4.jpg") }}
      <div class="caption text-center">
        <h3 class="text-muted">Product Name</h3>
        <p class="text-muted">this is a good shoes for outing and for drinks with friends.</p>
        <p class="text-center"><button class="btn btn-primary btn-xs">Tsh 444 only</button></p>
        
        <div class="fb-share-button pull-right" data-href="http://developers.facebook.com/docs/plugins/" data-type="button_count"></div>&nbsp;&nbsp;&nbsp;&nbsp;
   
   <a href="https://twitter.com/share" class="twitter-share-button pull-right" data-url="http://fsfsafs">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
      
      </div>
    </div>
  </div>
</div>
    </div>
    
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div>




<div class="col-xs-12">
    <div class="thumbnail">
        <div class='col-md-4 col-md-offset-1 text-center text-muted' style="padding-top: 50px">
            <h3>Product Name</h3>
        <p>this is a good shoes for outing and for drinks with friends.</p>
        </div>
        <div class='col-md-5 col-md-offset-1'>
      {{ HTML::image("img/b7.jpg","",array("class"=>"img-responsive","style"=>"width:50%;height:200px")) }}
      </div>
      <div class="caption text-center">
        
        <p class="text-center"></p>
        <button class="btn btn-primary btn-xs">Tsh 444 only</button>
        <div class="fb-share-button pull-right" data-href="http://developers.facebook.com/docs/plugins/" data-type="button_count"></div>&nbsp;&nbsp;&nbsp;&nbsp;
   
   <a href="https://twitter.com/share" class="twitter-share-button pull-right" data-url="http://fsfsafs">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
      
      </div>
    </div>
  </div>

<div class="col-xs-12">
    <div class="thumbnail">
        <div class='col-xs-4'>
            {{ HTML::image("img/b1.jpg","",array("class"=>"img-responsive","style"=>"width:85%;height:200px")) }}
        </div>
        <div class='col-xs-4'>
            {{ HTML::image("img/b2.jpg","",array("class"=>"img-responsive","style"=>"width:80%;height:200px")) }}
        </div>
        <div class='col-xs-4'>
            {{ HTML::image("img/b3.jpg","",array("class"=>"img-responsive","style"=>"width:85%;height:200px")) }}
        </div>
      
      
      
      <div class="caption text-center text-muted">
        <h3 class="text-muted">Product Name</h3>
        <p class="text-muted">this is a good shoes for outing and for drinks with friends.</p>
        <button class="btn btn-primary btn-xs">Tsh 444 only</button>
        <div class="fb-share-button pull-right" data-href="http://developers.facebook.com/docs/plugins/" data-type="button_count"></div>&nbsp;&nbsp;&nbsp;&nbsp;
   
   <a href="https://twitter.com/share" class="twitter-share-button pull-right" data-url="http://fsfsafs">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
      
      </div>
    </div>
  </div>

@stop