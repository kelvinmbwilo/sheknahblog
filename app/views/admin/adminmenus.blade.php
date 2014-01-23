<div class="panel-group" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
          Posts <i class='fa fa-chevron-circle-right pull-right'></i>
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse">
      <div class="panel-body">
        <ul class="nav nav-pills nav-stacked">
        <li><a href="{{ route('addpost') }}">Add</a></li>
        <li><a href="#">Manage</a></li>
        <li><a href="#">featured</a></li>
      </ul>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
          Categories <i class='fa fa-chevron-circle-right pull-right'></i>
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse">
      <div class="panel-body">
       <ul class="nav nav-pills nav-stacked">
        <li><a href="{{ route('addcat') }}">Add</a></li>
        <li><a href="{{ route('managecat') }}">Manage</li>
      </ul>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
          Subcategories<i class='fa fa-chevron-circle-right pull-right'></i>
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse">
      <div class="panel-body">
        <ul class="nav nav-pills nav-stacked">
        <li><a href="{{ route('addsubcat') }}">Add</a></li>
        <li><a href="{{ route('managesubcat') }}">Manage</a></li>
      </ul>
      </div>
    </div>
  </div>
          
   <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
          Users<i class='fa fa-chevron-circle-right pull-right'></i>
        </a>
      </h4>
    </div>
    <div id="collapseFour" class="panel-collapse collapse">
      <div class="panel-body">
        <ul class="nav nav-pills nav-stacked">
        <li><a href="{{ route('adduser') }}">Add</a></li>
        <li><a href="{{ route('manageuser') }}">manage</a></li>
      </ul>
      </div>
    </div>
  </div>
</div>
      
