<!DOCTYPE html>
<html lang="en" ng-app="jedi">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="img/favicon.ico">
        <title>DesignJedi | Home</title>
        
        <!-- Bootstrap core CSS -->
    
        {{ HTML::style('css/uikit.min.css') }}
        {{ HTML::style('css/components/cover.min.css') }}
        {{ HTML::style('css/components/sticky.min.css') }}
        {{ HTML::style('css/components/notify.min.css') }}

        
        <!-- {{ HTML::style('css/lib/codemirror.css') }} -->

        {{ HTML::script('js/lib/jquery.min.js') }}
        {{ HTML::script('js/lib/angular.min.js') }}

        {{ HTML::script('js/app.js') }}
        {{ HTML::script('js/controllers.js') }}



        {{ HTML::script('js/uikit.min.js') }}
        {{ HTML::script('js/components/sticky.min.js') }}
        {{ HTML::script('js/components/notify.min.js') }}


        <!-- Codemirror and marked dependencies -->
        
        <!-- {{ HTML::script('js/lib/codemirror/lib/codemirror.js') }}
        {{ HTML::script('js/lib/codemirror/mode/markdown/markdown.js') }}
        {{ HTML::script('js/lib/codemirror/addon/mode/overlay.js') }}
        {{ HTML::script('js/lib/codemirror/mode/xml/xml.js') }}
        {{ HTML::script('js/lib/codemirror/mode/gfm/gfm.js') }}
        {{ HTML::script('js/lib/marked.js') }} -->

        <!-- HTML editor CSS and JavaScript
        <link rel="stylesheet" href="htmleditor.css">
        <script src="htmleditor.js"></script> -->



        <!-- {{ HTML::style('css/sticky-footer-navbar.css') }} -->
        <!-- Custom styles for this template -->
        {{ HTML::style('css/styles.css') }}

        <!-- <link href="css/bootstrap.css" rel="stylesheet"> -->
        <!-- <link href="css/sticky-footer-navbar.css" rel="stylesheet"> -->
        <!-- <link href="css/styles.css" rel="stylesheet"> -->

        {{ HTML::script('js/lib/imagesloaded.pkgd.min.js') }}
        {{ HTML::script('js/lib/masonry.pkgd.min.js') }}


    </head>
    <body ng-controller="adminCtrl">

        

        <nav class="uk-navbar admin">

            <div class="uk-container-center uk-container ">
                <ul class="uk-navbar-nav">
                    <li><a href="/">Admin Panel</a></li>
                    
                </ul>

                <div class="uk-navbar-flip">
                    <ul class="uk-navbar-nav">
                        <li class="{{ set_active('leadership/articles') }}"><a href="/admin/create">Create Article</a></li>
                        <li class="{{ set_active('disruptive-design/articles') }}"><a href="/admin/edit">Edit Articles</a></li>
                        <li class="{{ set_active('/life') }}"><a href="/">Settings</a></li>
                        <li class="{{ set_active('tags') }}"><a href="/tags"><i class="uk-icon-sign-out"></i> Logout</a></li>
                    </ul>
                </div>
            </div>


        </nav>

        @yield('content')
        

        <!-- <div class="uk-clearfix">&nbsp;</div> -->
        
        <!-- <footer class='uk-nbfc'>
            <div class="uk-container-center uk-container">
                &copy; Copyright Jim Nieters, 2007 - 2014
                <ul class="social-links uk-list">
                    <li>
                        <a href="">
                        <i class="uk-icon-facebook-square"></i>
                        </a>
                    </li>
                    <li>
                        <a href=""><i class="uk-icon-linkedin-square"></i></a>
                    </li>
                    <li>
                        <a href=""><i class="uk-icon-twitter-square"></i></a>
                    </li>
                    <li>
                        <a href=""><i class="uk-icon-rss-square"></i></a>
                    </li>
                </ul>
            </div>

            
        </footer> -->


        

      


    </body>
</html>