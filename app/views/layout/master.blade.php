<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>IBG Africa</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        {{ HTML::style("bootstrap/css/bootstrap.css") }}
        {{ HTML::style("bootstrap/css/bootstrap-theme.css") }}
        {{ HTML::style("font-awesome/css/font-awesome.css") }}
        {{ HTML::style("jqueryui/css/start/jquery-ui.css") }}
        {{ HTML::style("css/css.css") }}
        {{ HTML::script("js/jquery-1.9.1.js") }}
    </head>
    <body style="background-image: url({{asset("pattern/pattern16.png")}})">
        
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
    </body>
</html>
