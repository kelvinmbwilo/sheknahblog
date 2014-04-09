<?php $slide = Slideshow::all();
$i=0; $j=0; $no = $slide->count();?>
@if($no == 0 )

@else
<div id="myCarousel3" class="carousel slide" data-ride="carousel" style="margin-bottom: 5px">
    <!-- Indicators -->
    <div class="carousel-inner">

        <div class="item active"><div class="row">
                @foreach($slide as $room)
                <?php $i++; $j++;?>

                <div class="col-xs-4">
                    <img style="height:180px;width: 350px" class="img-thumbnail img-rounded img-responsive" src="{{asset("uploads/slideshow/{$room->picture}")}}" alt="Generic placeholder image">
                    </div><!-- /.col-lg-4 -->
                @if($i == 3 && $j<$no)
            </div></div><div class="item"><div class="row">
                <?php $i = 0; ?>
                @endif
                @endforeach
            </div></div><!-- /.row -->

    </div>
    <a class="left carousel-control" href="#myCarousel3" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
    <a class="right carousel-control" href="#myCarousel3" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
</div><!-- /.carousel -->
@endif