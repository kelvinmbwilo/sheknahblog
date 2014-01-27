
<div class="panel panel-default" style="background-image: url(pattern/pattern8.png)">
  <div class="panel-body">
      <div class="panel-group" id="accordion">
          @foreach(Category::all() as $cat )
               <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse{{ $cat->id }}">
                      {{ $cat->name }} <i class='fa fa-chevron-circle-right pull-right'></i>
                    </a>
                  </h4>
                </div>
                 <div id="collapse{{$cat->id }}" class="panel-collapse collapse">
                    <div class="panel-body">
                      <ul class="nav nav-pills nav-stacked">
                      <li><a href="#"><b>All</b> </a></li>
                      @foreach($cat->subcategory as $sub)
                        <li><a href="#">{{ $sub->name }}<i class='fa fa-chevron-right pull-right'></i></a></li>
                      @endforeach
                    </ul>
                    </div>
                  </div>
                </div>
          @endforeach
  
</div>
      
  </div>
</div>

<div class="thumbnail" style="background-image: url(pattern/pattern8.png)">
    <h4 class='text-muted text-center'>Latest Product </h4>
      {{ HTML::image("img/b2.jpg","",array('class'=>"img-responsive img-rounded")) }}
      <div class="caption">
        <h3>Name of Product</h3>
        <p>this is a good shoes for outing and for drinks with friends.</p>
        <p class="text-center"><button class="btn btn-primary btn-xs">Tsh 444 only</button></p>
        <div class="fb-share-button pull-left" data-href="http://developers.facebook.com/docs/plugins/" data-type="button_count"></div>&nbsp;&nbsp;&nbsp;&nbsp;
   
   <a href="https://twitter.com/share" class="twitter-share-button " data-url="http://fsfsafs">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
      
      </div>
    </div>

