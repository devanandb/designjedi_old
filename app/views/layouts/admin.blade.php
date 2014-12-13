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
        {{ HTML::style('css/components/sticky.min.css') }}
        
        {{ HTML::syle('css/lib/codemirror.css') }}

        {{ HTML::script('js/lib/jquery.min.js') }}
        {{ HTML::script('js/uikit.min.js') }}
        {{ HTML::script('js/components/sticky.min.js') }}

        <!-- Codemirror and marked dependencies -->
        
        {{ HTML::script('js/lib/codemirror/lib/codemirror.js') }}
        {{ HTML::script('js/lib/codemirror/mode/markdown/markdown.js') }}
        {{ HTML::script('js/lib/codemirror/addon/mode/overlay.js') }}
        {{ HTML::script('js/lib/codemirror/mode/xml/xml.js') }}
        {{ HTML::script('js/lib/codemirror/mode/gfm/gfm.js') }}
        {{ HTML::script('js/lib/marked.js') }}

        <!-- HTML editor CSS and JavaScript -->
        <link rel="stylesheet" href="htmleditor.css">
        <script src="htmleditor.js"></script>



        <!-- {{ HTML::style('css/sticky-footer-navbar.css') }} -->
        <!-- Custom styles for this template -->
        {{ HTML::style('css/styles.css') }}

        <!-- <link href="css/bootstrap.css" rel="stylesheet"> -->
        <!-- <link href="css/sticky-footer-navbar.css" rel="stylesheet"> -->
        <!-- <link href="css/styles.css" rel="stylesheet"> -->

        {{ HTML::script('js/lib/imagesloaded.pkgd.min.js') }}
        {{ HTML::script('js/lib/masonry.pkgd.min.js') }}


    </head>
    <body>

        @yield('content')
        

        <!-- <div class="uk-clearfix">&nbsp;</div> -->
        
        <footer class='uk-nbfc'>
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