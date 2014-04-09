<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="margin-bottom: 20px">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    </ol>
<style>
    .active img{
        height: 180px;
    }
</style>
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item active">
            <div class="col-xs-4"><img src="{{ asset('img/EID_1.JPG') }}" alt="..." class="img-responsive img-rounded" style="width: 100%"></div>
            <div class="col-xs-4"><img src="{{ asset('img/EID_8.JPG') }}" alt="..." class="img-responsive img-rounded"></div>
            <div class="col-xs-4"><img src="{{ asset('img/EID_9.JPG') }}" alt="..." class="img-responsive img-rounded"></div>
        </div>
        <div class="item">
            <div class="col-xs-4"><img src="{{ asset('img/EID_10.JPG') }}" alt="..." class="img-responsive img-rounded"></div>
            <div class="col-xs-4"><img src="{{ asset('img/EID_8.JPG') }}" alt="..." class="img-responsive img-rounded"></div>
            <div class="col-xs-4"><img src="{{ asset('img/EID_1.JPG') }}" alt="..." class="img-responsive img-rounded"></div>
    </div>
    <div class="item">
        <div class="col-xs-4"><img src="{{ asset('img/EID_9.JPG') }}" alt="..." class="img-responsive img-rounded"></div>
        <div class="col-xs-4"><img src="{{ asset('img/EID_10.JPG') }}" alt="..." class="img-responsive img-rounded"></div>
        <div class="col-xs-4"><img src="{{ asset('img/EID_1.JPG') }}" alt="..." class="img-responsive img-rounded"></div>
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