<div style="background-image: url({{ asset('img/black_paper.png') }})">
    <div class="container" style="">
        <div class="row">
            <div class="col-md-3" style="color: cornflowerblue">
                <h3>Contact Us</h3>
                <address>
                    Plot No. 2<br>

                    Mbezi Beach (Makonde)<br>

                    P.O.Box 550<br>

                    Dar-es-Salaam Tz<br>

                    Direct Line: +255 (22) 2627116<br>

                    Office Cell: +255 767 333 239<br>

                    +255 655 627 116<br>

                    +255 765 856 029<br>
                </address>
            </div>
            <div class="col-md-6" style="padding-top: 5px">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63394.67833954273!2d39.163746999999994!3d-6.7494289999999815!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x185c51c71f6b1b65%3A0x15d397480f1ec5ed!2sShekinah+Garden!5e0!3m2!1sen!2s!4v1397042716686" width="450" height="220" frameborder="0" style="border:0"></iframe>

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
