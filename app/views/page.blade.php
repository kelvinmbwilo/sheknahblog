@extends("layout.master")

@section('content')
<h3 style="margin: 3px">
    <span class="text-left" style="color: darkgreen">Welcome to Sheknah Garden... Beautiful Garden... Work of Heart..</span>

</h3>
@include('slideshow')
<?php
if(isset($_GET['cat']) ){
    $post = Post::where('category',$_GET['cat'])->orderBy('created_at','desc')->paginate(4);

}
else
{
    $post = Post::orderBy('created_at','desc')->paginate(4);
}

?>
<div class="row">
    <div class="col-md-9">

        <div class="row">
            <div class="col-sm-12" style='padding: 10px; background-image: url({{ asset("img/alu.png")}})'>
            <h3 id="divHeaderLine1"><a href="#"> {{ $onepost->name }}</a></h3>
                <div class="row"><span class="pull-right" id="divHeaderLine2">{{ date('j M Y',strtotime($onepost->event_date)) }}</span></div>
            <div class="row">
                @foreach($onepost->images as $po)
            <div class="col-sm-6">
                <img class="img-rounded" width="100%" height="350px" src='{{ asset("uploads/rooms/{$po->name}") }}' />
                <p style="text-align: center;font-family: Chewy" class="text-center"> {{ $po->discr }}</p>
            </div>
            @endforeach
            </div>
            <p style="font-family: Maven pro; padding: 10px">{{ $onepost->discr }}</p>
            <div class="fb-share-button pull-right" data-href='{{ url("post/{$onepost->id}") }}' data-type="button_count"></div>&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="https://twitter.com/share" class="twitter-share-button pull-right" data-url='{{ url("post/{$onepost->id}") }}'>Tweet</a>
        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
    </div>
</div>
    </div>
<div class="col-md-3">
    <h3 id="divHeaderLine1" style="font-size: 24px">Recent Post</h3>
    @foreach($post as $po)
    <img width="100%" height="100px" src="{{ asset("uploads/rooms/{$po->images->first()->name}") }}" />
    <h4><a href='{{ url("post/{$po->id}") }}' style="font-family: Chewy"> {{ $po->name }} </a> </h4>
    <h5><a href='{{ url("post/{$po->id}") }}' style="font-family: Chewy"> {{ date('j M Y',strtotime($po->event_date)) }} </a> </h5>

    <hr style="color: #000000; height: 2px"/>
    @endforeach

</div>
</div>

@stop