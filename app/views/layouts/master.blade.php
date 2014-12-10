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
    
        {{ HTML::style('css/uikit.min.css') }}
        {{ HTML::style('css/components/cover.min.css') }}


        <!-- {{ HTML::style('css/sticky-footer-navbar.css') }} -->
        <!-- Custom styles for this template -->
        {{ HTML::style('css/styles.css') }}

        <!-- <link href="css/bootstrap.css" rel="stylesheet"> -->
        <!-- <link href="css/sticky-footer-navbar.css" rel="stylesheet"> -->
        <!-- <link href="css/styles.css" rel="stylesheet"> -->
    </head>
    <body>

        @yield('content')

        
        <footer>
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

            
        </footer>


        {{ HTML::script('js/lib/jquery.min.js') }}
        {{ HTML::script('js/uikit.min.js') }}
        {{ HTML::script('js/lib/imagesloaded.pkgd.min.js') }}
        {{ HTML::script('js/lib/masonry.pkgd.min.js') }}

        <script>
            var $container = $('.uk-grid');

            $container.imagesLoaded( function() {
                
                 $container.masonry({
                      columnWidth: '.uk-width-medium-1-3',
                      itemSelector: '.uk-width-medium-1-3'
                    });
            });
                // initialize
           
        </script>


    </body>
</html>