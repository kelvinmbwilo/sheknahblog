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
    <div class="col-md-8">

        <div class="row">
            <div class="col-sm-12" style='padding: 10px; background-image: url({{ asset("img/alu.png")}})'>
            <h3 id="divHeaderLine1"><a href="#"> {{ $onepost->name }}</a></h3>
                <div class="row"><span class="pull-right" id="divHeaderLine2">{{ date('j M Y',strtotime($onepost->event_date)) }}</span></div>
            <div class="row">
                @foreach($onepost->images as $po)
                <div style="padding-left: 70px">
                    <img class="img-rounded" width="450px"  src='{{ asset("uploads/rooms/{$po->name}") }}' />
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
    <div class="col-md-4">
        <h3 class="text-center text-success" id="divHeaderLine2">Welcome</h3>
        <p style="font-family: Maven pro; padding: 10px">Shekinah Gardens, delightfully Tanzanian with a range of hospitality details is proud to be a host of a number of functions 0f your choice. At the garden we strive to attain excellence in making you holistically catered for as far as your recreational and corporate needs are concerned. A hearty welcome!</p>
        <h3 id="divHeaderLine1" style="font-size: 24px">Recent Post</h3>
        @foreach(Post::orderBy('created_at','desc')->get()->take(5) as $po)
        <div style="padding-left: 10%">
            <img class="img-rounded" width="80%" height="200px" src="{{ asset("uploads/rooms/{$po->images->first()->name}") }}" />
        </div>
        <h4 class="text-center"><a href='{{ url("post/{$po->id}") }}' style="font-family: Abel"> {{ $po->name }} </a> </h4>
        <h5 class="text-center"><a href='{{ url("post/{$po->id}") }}' style="font-family: Abel"> {{ date('j M Y',strtotime($po->event_date)) }} </a> </h5>

        <hr style="color: #000000; height: 2px"/>
        @endforeach

    </div>
</div>

@stop