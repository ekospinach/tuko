<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title') &middot; Purwandi Blog</title>

        @yield('meta')

        @section('css')
            {{ HTML::style('css/bootstrap.min.css') }}
            {{ HTML::style('css/responsive.min.css') }}
            {{ HTML::style('js/google-code-prettify/prettify.css') }}
            {{ HTML::style('css/icon.css') }}
            {{ HTML::style('css/app.css') }}
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
        <!-- Part 1: Wrap all page content here -->
        <div id="wrap">

            <!-- Begin page content -->
            <div class="container">
                <div class="page-header">
                    <h1>Purwandi Blog</h1>
                </div>
                @yield('content')
            </div>

          <div id="push"></div>
        </div>

        <div id="footer">
            <div class="footer-inner">
                <div class="container">
                    <h4>{{ HTML::link('','Purwandi') }}</h4>
                    <p>
                        Biasa dipanggil dengan "pur", adalah alumnus <a href="http://www.mercubuana.ac.id">Universtias Mercu Buana angkatan 2008</a>. <br />
                        Seorang pemuda yang belajar menjadi calon suami yang baik untuk Neki Arismi. <br />
                        PHP, XML JavaScript dan Ajax adalah keahlian saya. <br />
                        Salam Kenal.
                    </p>

                    <ul class="meta-footer">
                        <li>{{ HTML::link('https://twitter.com/purwandi_m','<i class="icon-twitter-2"></i> Twitter') }}</li>
                        <li>{{ HTML::link('https://github.com/purwandi','<i class="icon-github"></i> GitHub') }}</li>
                    </ul>

                </div>
            </div>
        </div>


        @section('js')
            <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
            <script>window.jQuery || document.write('<script src="{{ URL::base() }}/js/jquery.js"><\/script>')</script>
            {{ HTML::script('js/bootstrap.min.js') }}
            {{ HTML::script('js/google-code-prettify/prettify.js') }}
            <script type="text/javascript">
                $(document).ready(function(){
                    // make code pretty
                    window.prettyPrint && prettyPrint();
                });
            </script>
        @yield_section
    </body>
</html>