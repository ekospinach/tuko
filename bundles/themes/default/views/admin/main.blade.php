<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title') &middot; TukoCMS</title>
    @section('css')
        {{ HTML::style('css/bootstrap.min.css') }}
        {{ HTML::style('css/icon.css') }}
        {{ HTML::style('css/responsive.min.css') }}
        {{ HTML::style('css/private.css') }}
    @yield_section

        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    <body>
    <!-- Prompt IE 8 users to install Chrome Frame. -->
    <!--[if lt IE 9]>
        <p>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p>
    <![endif]-->

        @include('themes::admin.navbar')

        <div class="container">
            @yield('content')
        </div>

        @include('themes::admin.footer')

        @section('js')
            <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
            <script>window.jQuery || document.write('<script src="{{ URL::base() }}/js/jquery.js"><\/script>')</script>
            {{ HTML::script('js/bootstrap.min.js') }}
            <script>
                $(document).ready(function(){
                    $("a[rel=tooltip]").tooltip();
                });
            </script>

        @yield_section
    </body>
</html>