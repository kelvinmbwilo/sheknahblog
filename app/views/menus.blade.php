
<div class="panel panel-default" style="background-image: url({{asset("pattern/pattern8.png")}})">
  <div class="panel-body">
      <div class="panel-group" id="accordion">
          <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle=""  href="{{ url("/") }}">
                      All  <i class='fa fa-chevron-circle-right pull-right'></i>
                    </a>
                  </h4>
                </div>
                 <div id="" class="panel-collapse collapse">
                    <div class="panel-body">
                      
                    </div>
                  </div>
                </div>
          @foreach(Category::all() as $cat )
               <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a href="{{url("/?cat={$cat->id}")}}">
                      {{ $cat->name }} <i class='fa fa-chevron-circle-right pull-right'></i>
                    </a>
                  </h4>
                </div>
                 <div id="collapse{{$cat->id }}" class="panel-collapse collapse">
                    <div class="panel-body">
                      <ul class="nav nav-pills nav-stacked">
                      <li><a href="{{url("/?cat={$cat->id}")}}"><b>All</b> </a></li>
                      @foreach($cat->subcategory as $sub)
                        <li><a href="{{url("/?cat={$cat->id}&sub={$sub->id}")}}">{{ $sub->name }}<i class='fa fa-chevron-right pull-right'></i></a></li>
                      @endforeach
                    </ul>
                    </div>
                  </div>
                </div>
          @endforeach
  
</div>
      
  </div>
</div>

<div class="thumbnail">
    <div class="fb-like-box" data-href="https://www.facebook.com/pages/Shekinah-Garden/331496433608668" data-width="250" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="true" data-show-border="false"></div>

</div>




