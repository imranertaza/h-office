<!DOCTYPE html>
<html lang="en-US" class="ac-theme-html no-js windows">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('meta')
    <title>@yield('title', 'h office')</title>

    <!-- HTML5 shim and Respond.js for IE8 support -->
    <!--[if lt IE 9]>
        <script src="http://h-office.com/content/themes/bloc/assets/js/vendor/html5shiv.js"></script>
        <script src="http://h-office.com/content/themes/bloc/assets/js/vendor/respond.min.js"></script>
    <![endif]-->

    <!-- Core Styles -->
    <link rel='stylesheet' href="{{ asset('/assets/content/plugins/contact-form-7/includes/css/styles2f54.css') }}" type='text/css' media='all' />
    <link rel='stylesheet' href="{{ asset('/assets/content/plugins/revslider/rs-plugin/css/settingsab53.css') }}" type='text/css' media='all' />
    <link rel='stylesheet' href="{{ asset('/assets/content/plugins/js_composer/assets/css/lib/isotope8f76.css') }}" type='text/css' media='all' />
    <link rel='stylesheet' href="{{ asset('/assets/content/plugins/js_composer/assets/lib/prettyphoto/css/prettyPhoto8f76.css') }}" type='text/css' media='screen' />
    <link rel='stylesheet' href="{{ asset('/assets/content/plugins/js_composer/assets/css/js_composer8f76.css') }}" type='text/css' media='all' />
    <link rel='stylesheet' href="{{ asset('/assets/content/uploads/js_composer/custom8f76.css') }}" type='text/css' media='screen' />
    {{-- <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Raleway%3A400&amp;subset=latin&amp;ver=4.1.28' type='text/css' media='all' />
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Raleway%3A600&amp;subset=latin&amp;ver=4.1.28' type='text/css' media='all' />
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Raleway%3A700&amp;subset=latin&amp;ver=4.1.28' type='text/css' media='all' />
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Raleway%3A100&amp;subset=latin&amp;ver=4.1.28' type='text/css' media='all' /> --}}
    <link rel='stylesheet' href="{{ asset('/assets/content/themes/bloc/includes/royalslider/royalslider.css') }}" type='text/css' media='screen' />
    <link rel='stylesheet' href="{{ asset('/assets/content/themes/bloc/includes/slick-slide/slickcfbc.css') }}" type='text/css' media='all' />
    <link rel='stylesheet' href="{{ asset('/assets/content/themes/bloc/includes/fonts/css/fontellocfbc.css') }}" type='text/css' media='all' />
    <link rel='stylesheet' href="{{ asset('/assets/content/themes/bloc/ac-framework/ac-framework.css') }}" type='text/css' media='screen' />
    <link rel='stylesheet' href="{{ asset('/assets/content/themes/bloc/ac-framework/vc-plugins/ac-vc-plugins.css') }}" type='text/css' media='screen' />
    <link rel='stylesheet' href="{{ asset('/assets/content/themes/bloc/includes/theme-scipts.css') }}" type='text/css' media='screen' />
    <link rel='stylesheet' href="{{ asset('/assets/content/themes/bloc/assets/css/app.css') }}" type='text/css' media='all' />
    <link rel='stylesheet' href="{{ asset('/assets/content/themes/bloc/assets/css/alleycat.css') }}" type='text/css' media='screen' />
    <link rel='stylesheet' href="{{ asset('/assets/content/themes/bloc/style.css') }}" type='text/css' media='screen' />

    <!-- Inline Styles -->
    <style type="text/css">
        a.bbp-author-avatar { display: inline-block; }
        .bbp-reply-author img, .bbp-topic-started-by-avatar-avatar img, .bbp-topic-freshness-author img { border-radius: 50%; }
        .bbp-topic-freshness-author a { display: inline-block; }
        .bbp-topic-freshness-author a.bbp-author-name { display: none; }
        .bbp-topic-freshness-author p.bbp-topic-meta { display: inline-block; }
        .tp-caption a { color: #ff7302; text-shadow: none; -webkit-transition: all 0.2s ease-out; -moz-transition: all 0.2s ease-out; -o-transition: all 0.2s ease-out; -ms-transition: all 0.2s ease-out; }
        .tp-caption a:hover { color: #ffa902; }
        .navbar-static-top { margin-top: 0px !important; margin-bottom: 0px !important; }
        footer.content-info { background: #ffffff; }
        #copyright-bar { line-height: 22px; }
        #footer_social_bar { line-height: 30px; font-size: 20px; text-align: center; }
        .archive.woocommerce ul.products li.product, .archive.woocommerce-page ul.products li.product { width: 25%; }
        .recentcomments a { display: inline !important; padding: 0 !important; margin: 0 !important; }
        @yield('styles')
    </style>

    <!-- Favicons -->
    <link rel="shortcut icon" href="{{ asset('/assets/client/h-office_latest/cms/content/uploads/2015/02/HOC_browser_logo_32x32.png') }}" type="image/x-icon">
    <link rel="apple-touch-icon-precomposed" href="../alleycatthemes.com/themes/bloc/demo/content/uploads/2015/01/bloc.html">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../alleycatthemes.com/themes/bloc/demo/content/uploads/2015/01/bloc.html">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../alleycatthemes.com/themes/bloc/demo/content/uploads/2015/01/bloc.html">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../alleycatthemes.com/themes/bloc/demo/content/uploads/2015/01/bloc.html">

    <!-- Core Scripts -->
    <script src="{{ asset('/assets/includes/js/jquery/jquery90f9.js') }}"></script>
    <script src="{{ asset('/assets/includes/js/jquery/jquery-migrate.min1576.js') }}"></script>
    <script src="{{ asset('/assets/content/plugins/revslider/rs-plugin/js/jquery.themepunch.tools.minab53.js') }}"></script>
    <script src="{{ asset('/assets/content/plugins/revslider/rs-plugin/js/jquery.themepunch.revolution.minab53.js') }}"></script>
    <script src="{{ asset('/assets/content/plugins/js_composer/assets/lib/isotope/dist/isotope.pkgd.min8f76.js') }}"></script>
    <script src="{{ asset('/assets/content/themes/bloc/assets/js/vendor/packery-mode.pkgd.mincfbc.js') }}"></script>
    <script src="{{ asset('/assets/content/themes/bloc/includes/slick-slide/slick.mincfbc.js') }}"></script>
    <script src="{{ asset('/assets/content/themes/bloc/ac-framework/ac-frameworkcfbc.js') }}"></script>
    <script src="{{ asset('/assets/content/themes/bloc/assets/js/vendor/modernizr-2.7.0.min.js') }}"></script>

    @yield('head')
</head>
<body class="@yield('body-class', 'home page')">
    @yield('content')
    
    <!-- Footer Scripts -->
    <script src="{{ asset('/assets/content/plugins/contact-form-7/includes/js/jquery.form.mind03d.js') }}"></script>
    <script>
        var _wpcf7 = {
            "loaderUrl": "{{ asset('/assets/content/plugins/contact-form-7/images/ajax-loader.gif') }}",
            "sending": "Sending ..."
        };
    </script>
    <script src="{{ asset('/assets/content/plugins/contact-form-7/includes/js/scripts2f54.js') }}"></script>
    <script src="{{ asset('/assets/content/plugins/js_composer/assets/lib/prettyphoto/js/jquery.prettyPhoto8f76.js') }}"></script>
    <script src="{{ asset('/assets/content/themes/bloc/includes/royalslider/jquery.royalslider.mincfbc.js') }}"></script>
    <script src="{{ asset('/assets/content/themes/bloc/includes/theme-scriptscfbc.js') }}"></script>
    <script src="{{ asset('/assets/content/themes/bloc/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/assets/content/themes/bloc/assets/js/main.js') }}"></script>
    <script src="{{ asset('/assets/content/themes/bloc/assets/js/vendor/retina.js') }}"></script>
    <script src="{{ asset('/assets/content/themes/bloc/assets/js/vendor/jquery.fitvids.js') }}"></script>
    <script src="{{ asset('/assets/content/plugins/logo-slider/lgs_jquery.cycle2cfbc.js') }}"></script>
    <script src="{{ asset('/assets/content/plugins/js_composer/assets/js/js_composer_front8f76.js') }}"></script>
    @yield('scripts')
</body>
</html>