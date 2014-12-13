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



        <!-- {{ HTML::style('css/sticky-footer-navbar.css') }} -->
        <!-- Custom styles for this template -->
        {{ HTML::style('css/styles.css') }}

        <!-- <link href="css/bootstrap.css" rel="stylesheet"> -->
        <!-- <link href="css/sticky-footer-navbar.css" rel="stylesheet"> -->
        <!-- <link href="css/styles.css" rel="stylesheet"> -->
    </head>
    <body>

        @yield('content')
        

        <!-- <div class="uk-clearfix">&nbsp;</div> -->
        
        @include('layouts.footer')


        {{ HTML::script('js/lib/jquery.min.js') }}
        {{ HTML::script('js/uikit.min.js') }}
        {{ HTML::script('js/components/sticky.min.js') }}

        {{ HTML::script('js/lib/imagesloaded.pkgd.min.js') }}
        {{ HTML::script('js/lib/masonry.pkgd.min.js') }}

        <script>
            var $container = $('.matrix');

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