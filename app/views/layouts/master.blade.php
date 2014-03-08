<!DOCTYPE html>
<html lang="en" ng-app="eventApp">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="img/favicon.ico">
        <title>DesignJedi | Home</title>
        
        <!-- Bootstrap core CSS -->
    
        {{ HTML::style('css/bootstrap.css') }}

        {{ HTML::style('css/sticky-footer-navbar.css') }}
        <!-- Custom styles for this template -->
        {{ HTML::style('css/styles.css') }}

        <!-- <link href="css/bootstrap.css" rel="stylesheet"> -->
        <!-- <link href="css/sticky-footer-navbar.css" rel="stylesheet"> -->
        <!-- <link href="css/styles.css" rel="stylesheet"> -->
    </head>
    <body ng-controller="globalController">
        <!-- Fixed navbar -->
        <div class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/">DesignJedi</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav pull-right">
                        <li class="active"><a href="/">Home</a></li>
                        <li><a href="#about">Blog</a></li>
                        <li><a href="#contact">Reache Me</a></li>
                        
                    </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </div>
            <!-- Begin page content -->
            <div class="container">
                <div ng-view>
                    
                </div>

                @yield('content')

            </div>
            <div id="footer">
                <div class="container">
                    <p class="text-muted text-center">All Rights Reserved &copy; 2014</p>
                </div>
            </div>
            {{ HTML::script('js/lib/jquery.min.js') }}
            {{ HTML::script('js/lib/bootstrap.min.js') }}

            <!--script src="js/lib/jquery.min.js"></script>
            <script src="js/lib/bootstrap.min.js"></script>
            <script src="js/lib/angular.min.js"></script>
            <script src="js/lib/angular-route.min.js"></script>
            <script src="js/app.js"></script>
            <script src="js/controllers.js"></script>
            <script src="js/routes.js"></script-->
        </body>
    </html>