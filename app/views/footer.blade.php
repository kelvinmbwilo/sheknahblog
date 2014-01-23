<div style="background-image: url(pattern/pattern191.png)">
    <div class="container" style="">
        <div class="row">
            <div class="col-md-3">
                <ul class="nav nav-pills nav-stacked">
                    <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
                    <li><a href="#"><i class="fa fa-rss"></i> About Us</a></li>
                    <li><a href="#"><i class="fa fa-envelope-o"></i> Contacts</a></li>
                </ul>
            </div>
            <div class="col-md-6">
                <h3 class="text-info">Suscribe for our news later</h3>
                <div class="form-group col-md-8 ">
                    <label for="exampleInputEmail1" class="text-center text-info">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                    
                  </div>
                <div class="col-md-8"><button type="submit" class="btn btn-warning btn-sm">Submit</button></div>
            </div>
            <div class="col-md-3">
                <ul class="nav nav-pills nav-stacked">
                    <li><a href="#"><i class="fa fa-facebook-square text-info fa-3x"></i> Facebook</a></li>
                    <li><a href="#"><i class="fa fa-twitter-square fa-3x" style="color: #00C0F7"></i> Twitter</a></li>
                    <li><a href="#"><i class="fa fa-instagram fa-3x" style="color: #3D6B92"></i> Instagram</a></li>
                </ul>
                
                <!-- Button trigger modal -->
                <button class="btn btn-primary btn-sm pull-right" data-toggle="modal" data-target="#myModal">
                  Adminstration
                </button>

                <!-- Modal -->
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <!--<h4 class="modal-title" id="myModalLabel">Modal title</h4>-->
                      </div>
                      <div class="modal-body" id="contentarea">
                          <h4 class="text-danger" id="error">Incorect Username or password</h4>
                        <form class="form-horizontal" role="form">
                            <div class="form-group">
                              <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                              <div class="col-sm-10">
                                <input type="email" class="form-control" id="email" placeholder="Email">
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                              <div class="col-sm-10">
                                <input type="password" class="form-control" id="password" placeholder="Password">
                              </div>
                            </div>
                          </form>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" id="login">Sign in</button>
                      </div>
                    </div><!-- /.modal-content -->
                  </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->

            </div>
        </div>
    </div>
</div>
