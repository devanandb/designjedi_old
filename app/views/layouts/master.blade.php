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

            $(document).ready(function () {

                var count = $('a.each-tg').length;
                var back = ["#3fc380","#89c4f4","#e08283", "#b388dd", "#fec956"];
                var hcolor = ["#e0684b","#333333","#135a7b", "#9551d8", "#fec956"];
                

                var hrand = hcolor[Math.floor(Math.random() * hcolor.length)];

                $('.pg-header').css('background-color', hrand);
                $('.uk-navbar-nav > li.uk-active > a').css('background-color', hrand);
                $('.uk-navbar').css('border-bottom-color', hrand);



                for (var i = 0; i < count; i++) {
                    var rand = back[Math.floor(Math.random() * back.length)];
                    $('a.each-tg').eq(i).find('.tag-part').css('background',rand);
                    $('a.each-tg').eq(i).find('.arrow-left').css('border-right-color',rand);

                };
                // $('div').css('background',rand);
            });
           
        </script>


    </body>
</html>