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
        <li><a href="{{ route('addpost') }}"><i class="fa fa-plus text-muted"></i> Add</a></li>
        <li><a href="{{ route('managepost') }}"><i class="fa fa-cog text-muted"></i> Manage</a></li>
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
        <li><a href="{{ route('addcat') }}"><i class="fa fa-plus text-muted"></i> Add</a></li>
        <li><a href="{{ route('managecat') }}"><i class="fa fa-cog text-muted"></i> Manage</li>
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
        <li><a href="{{ route('addsubcat') }}"><i class="fa fa-plus text-muted"></i> Add</a></li>
        <li><a href="{{ route('managesubcat') }}"><i class="fa fa-cog text-muted"></i> Manage</a></li>
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
        <li><a href="{{ route('adduser') }}"><i class="fa fa-plus text-muted"></i> Add</a></li>
        <li><a href="{{ route('manageuser') }}"><i class="fa fa-cog text-muted"></i> manage</a></li>
      </ul>
      </div>
    </div>
  </div>
    
    <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a  href="{{ route('logout') }}">
         Logout<i class='fa fa-chevron-circle-right pull-right'></i>
        </a>
      </h4>
    </div>
    <div id="collapseFour" class="panel-collapse collapse">
      <div class="panel-body">
        <ul class="nav nav-pills nav-stacked">
            <li><a href="{{ route('adduser') }}"><i class="fa fa-plus text-muted"></i> Add</a></li>
        <li><a href="{{ route('manageuser') }}"><i class="fa fa-cog text-muted"></i> manage</a></li>
      </ul>
      </div>
    </div>
  </div>
</div>
      
