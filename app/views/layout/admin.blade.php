
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>TOMCAT Fashions - Administration page</title>
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
        @yield('styles')
    </head>
    <body style="background-image: url(pattern/pattern8.png)">
       
        @include("header")
        <div class="container">
            <div class="row">
                
                <!--left menus-->
                <div class="col-md-3">
                    @include("admin.adminmenus")
                </div>
                
                <!--contents menus-->
                <div class="col-md-9">
                    @yield("content")
                </div>
            </div>
        </div>
        
        {{ HTML::script("bootstrap/js/bootstrap") }}
        {{ HTML::script("js/script1.js") }}
        {{ HTML::script("jqueryui/js/jquery-ui-1.10.3.custom.js") }}
    </body>
</html>
