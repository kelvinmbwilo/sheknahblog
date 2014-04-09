<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sheknah Garden</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        {{ HTML::style("/css/ie.css") }}
        {{ HTML::style("/css/reset.css") }}
        {{ HTML::style("bootstrap/css/bootstrap.css") }}
        {{ HTML::style("bootstrap/css/bootstrap-theme.css") }}
        {{ HTML::style("font-awesome/css/font-awesome.css") }}
        {{ HTML::style("jqueryui/css/start/jquery-ui.css") }}
        {{ HTML::style("css/css.css") }}
        {{ HTML::script("js/jquery-1.9.1.js") }}
        <!--[if lt IE 9]>
        {{ HTML::script("js/html5.js") }}
        <![endif]-->
        <link href="http://fonts.googleapis.com/css?family=Chewy" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Abel" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Terminal+Dosis+Light" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Maven+Pro" rel="stylesheet" type="text/css">
    <style>
        #divHeaderLine1{
            font-family: 'Terminal Dosis Light';
            font-size: 41px; line-height: 44px;
            margin-top: 16px; text-transform: none;
            color: rgb(47, 47, 47);
            letter-spacing: 1px;
        }
        #divHeaderLine2{
            font-family: 'Terminal Dosis Light';
            font-size: 31px; line-height: 41px;
            margin-top: 11px; color: rgb(148, 148, 148);
            letter-spacing: 1px; text-shadow:
            rgba(255, 255, 255, 0.6) 1px 1px 1px;
        }
        a:visited{
            text-decoration: none;
        }

    </style>
    </head>
    <body style="background-image: url({{asset("pattern/pattern10.png")}})">
    <?php

    ini_set('post_max_size', '64M');
    ini_set('upload_max_filesize', '64M');
    ?>
        <!--facebook sdk-->
        <div id="fb-root"></div>
            <script>(function(d, s, id) {
              var js, fjs = d.getElementsByTagName(s)[0];
              if (d.getElementById(id)) return;
              js = d.createElement(s); js.id = id;
              js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
              fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>
            
            
        @include("header")
        <div class="container">
            <div class="row">
                
                <!--left menus-->
                <div class="col-md-3">
                    @include("menus")
                    @yield("menu")
                </div>
                
                <!--contents menus-->
                <div class="col-md-9">
                    @yield("content")
                </div>
            </div>
        </div>
        
        @include("footer")
        {{ HTML::script("bootstrap/js/bootstrap") }}
        {{ HTML::script("js/script1.js") }}
       {{ HTML::script("jqueryui/js/jquery-ui-1.10.3.custom.js") }}
    <script>
        $(document).ready(function(){
            $("#error").hide();
            $("#login").click(function(){
                if($("#email").val() === ""){
                    $("#email").focus();
                }else if($("#password").val() === ""){
                    $("#password").focus();
                }else{

                    //prepare data for a login
                    var email = $("#email").val();
                    var password = $("#password").val();
                    var btn = $(this);
                    $(this).html("<i class='fa fa-spinner fa-spin'></i> login in...");
                    //use ajax method to post the form while displaying the loading image
                    $.ajax({
                        type: "GET",
                        url:'<?php echo url("user"); ?>',
                        data: {
                            email: email,
                            password: password
                        }
                    }).done(function( msg ) {
                        if(msg == 'nope'){
                            $("#error").show("slow");
                            btn.html("Sign In");
                        }else{
                            window.location = "<?php echo url('admin') ?>"
                        }

                    });
                }
            });
        })
    </script>
    </body>
</html>
