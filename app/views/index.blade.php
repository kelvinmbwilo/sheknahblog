@extends("layout.master")

@section('content')
<h3 style="margin: 3px">
    <span class="text-left" style="color: #E9E9E9">Look good..feel good... let your confidence shine..</span>
    
</h3>
<?php
 $slides = Post::orderBy('created_at','desc')->take(4)->get(); 
 $i = 0;
 $k = 0;
?>
@if($slides->count() != 0)
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
     @foreach($slides as $pos)
          <?php $k++;
 $dur =  (time() - strtotime($pos->created_at))/(3600*24);
          ?>
                <div class="col-md-6">
                 <div class="thumbnail" style="height: 300px;background-image: url({{ asset("img/alu.png")}})">
                  @if($dur < 30)
                     <i class="tag"></i>
                  @endif
                 {{ HTML::image("uploads/rooms/{$pos->img1}","",array("class"=>"img-responsive img-rounded","style"=>"width:95%;height:300px;padding-bottom:15px")) }}
             <div class="caption text-center">
                     <h3 class="text-success">{{ $pos->name }}</h3>
                   <p class="text-success">{{ $pos->discr }}</p>
                   <button class="btn btn-warning btn-xs">{{ $pos->price }}</button>

                   <div class="fb-share-button pull-right" data-href="{{ url("post/{$pos->id}") }}" data-type="button_count"></div>&nbsp;&nbsp;&nbsp;&nbsp;

              <a href="https://twitter.com/share" class="twitter-share-button pull-right" data-url="{{ url("post/{$pos->id}") }}">Tweet</a>
           <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

                 </div>
               </div>
             </div>
       @if($k == 2)
          </div></div><div class="item"><div class="row">
              
       @endif
     @endforeach
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
@endif

<?php
if(isset($_GET['cat']) && isset($_GET['sub'])){
    $post = Post::where('category',$_GET['cat'])->where('subcategory',$_GET['sub'])->orderBy('created_at','desc')->paginate(10);
}elseif(isset($_GET['cat']) && !isset($_GET['sub'])) {
    $post = Post::where('category',$_GET['cat'])->orderBy('created_at','desc')->paginate(10);
    
}
else
{
    $post = Post::orderBy('created_at','desc')->paginate(10);
}

?>
@if($post->count() != 0)
@foreach($post as $po)
   <div class="row">
    <div class="thumbnail" style="background-image: url({{ asset("img/alu.png")}})">
        @if($po->img2 == "" && $po->img3 == "")
                <div class='col-md-4 col-md-offset-1 text-center' style="padding-top: 50px;color: #24613E">
                    <h3>{{ $po->name }}</h3>
                <p>{{ $po->discr }}.</p>

                </div>
                <div class='col-md-6 col-md-offset-1'>
              {{ HTML::image("uploads/rooms/{$po->img1}","",array("class"=>"img-responsive img-rounded","style"=>"width:85%;height:250px;padding-bottom:15px")) }}
              </div>
              <div class="caption text-center">
                  <span class="lead pull-left text-danger">{{ date("j M, Y",strtotime($po->created_at)) }}</span>
                <button class="btn btn-primary btn-sm">{{ $po->price }}</button>
                <div class="fb-share-button pull-right" data-href="{{ url("post/{$po->id}") }}" data-type="button_count"></div>&nbsp;&nbsp;&nbsp;&nbsp;

            <a href="https://twitter.com/share" class="twitter-share-button pull-right" data-url="{{ url("post/{$po->id}") }}">Tweet</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

              </div>
        
        @else
        <div class="row">
          
        @if($po->img2 != "" && $po->img3 != "")
        <div class='col-xs-4'>
            {{ HTML::image("uploads/rooms/{$po->img1}","",array("class"=>"img-responsive img-rounded","style"=>"width:85%;height:200px")) }}
        </div>
        
       <div class='col-xs-4'>
            {{ HTML::image("uploads/rooms/{$po->img2}","",array("class"=>"img-responsive img-rounded","style"=>"width:80%;height:200px")) }}
        </div>
        
        <div class='col-xs-4'>
            {{ HTML::image("uploads/rooms/{$po->img3}","",array("class"=>"img-responsive img-rounded","style"=>"width:85%;height:200px")) }}
        </div>
        @endif
        
        @if($po->img2 != "" && $po->img3 == "" )
       <div class='col-xs-5 col-xs-offset-1'>
            {{ HTML::image("uploads/rooms/{$po->img1}","",array("class"=>"img-responsive img-rounded","style"=>"width:85%;height:200px")) }}
        </div>
        <div class='col-xs-5 col-xs-offset-1'>
            {{ HTML::image("uploads/rooms/{$po->img2}","",array("class"=>"img-responsive img-rounded","style"=>"width:85%;height:200px")) }}
        </div>
        @endif
        
        @if($po->img3 != "" && $po->img2 == "" )
       <div class='col-xs-5 col-xs-offset-1'>
            {{ HTML::image("uploads/rooms/{$po->img1}","",array("class"=>"img-responsive img-rounded","style"=>"width:85%;height:200px")) }}
        </div>
        <div class='col-xs-5 col-xs-offset-1'>
            {{ HTML::image("uploads/rooms/{$po->img3}","",array("class"=>"img-responsive img-rounded","style"=>"width:85%;height:200px")) }}
        </div>
        @endif
        </div>
        
      <div class="caption text-center text-success">
        <h3 class="text-success">{{ $po->name }}</h3>
        <p class="text-success">{{ $po->discr }}</p>
        <span class="lead pull-left text-danger">{{ date("j M, Y",strtotime($po->created_at)) }}</span>
        <button class="btn btn-primary btn-xs">{{ $po->price }}</button>
        <div class="fb-share-button pull-right" data-href="{{ url("post/{$po->id}") }}" data-type="button_count"></div>&nbsp;&nbsp;&nbsp;&nbsp;
   
   <a href="https://twitter.com/share" class="twitter-share-button pull-right" data-url="{{ url("post/{$po->id}") }}">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
      
  </div>
        
        @endif
    </div>
  </div>

@endforeach

{{$post->appends(Request::except('page'))->links() }}
@else
<h2>No Posts</h2>
@endif
@stop