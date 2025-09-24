<!DOCTYPE html>
<html lang="en-US" class="ac-theme-html no-js windows">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('meta')
    <title>@yield('title', 'h office')</title>

    {{-- HTML5 shim and Respond.js for IE8 support
    [if lt IE 9]
        <script src="http://h-office.com/content/themes/bloc/assets/js/vendor/html5shiv.js"></script>
        <script src="http://h-office.com/content/themes/bloc/assets/js/vendor/respond.min.js"></script>
    [endif] --}}

    {{-- Core Styles --}}
    
    @vite([
        'resources/assets/css/styles2f54.css',
        'resources/assets/css/settingsab53.css',
        'resources/assets/css/isotope8f76.css',
        'resources/assets/css/prettyPhoto8f76.css',
        'resources/assets/css/js_composer8f76.css',
        'resources/assets/css/custom8f76.css',
        'resources/assets/css/royalslider.css',
        'resources/assets/css/slickcfbc.css',
        'resources/assets/css/fontellocfbc.css',
        'resources/assets/css/ac-framework.css',
        'resources/assets/css/ac-vc-plugins.css',
        'resources/assets/css/theme-scipts.css',
        'resources/assets/css/app.css',
        'resources/assets/css/alleycat.css',
        'resources/assets/css/style.css',
    ])

    {{-- External Google Fonts --}}
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400&subset=latin&ver=4.1.28" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:600&subset=latin&ver=4.1.28" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:700&subset=latin&ver=4.1.28" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100&subset=latin&ver=4.1.28" />


    {{-- Inline Styles --}}

    <style type="text/css">

        a.bbp-author-avatar {
            display: inline-block;
        }

        .bbp-reply-author img,
        .bbp-topic-started-by-avatar-avatar img,
        .bbp-topic-freshness-author img {
            border-radius: 50%;
        }

        .bbp-topic-freshness-author a {
            display: inline-block;
        }

        .bbp-topic-freshness-author a.bbp-author-name {
            display: none;
        }

        .bbp-topic-freshness-author p.bbp-topic-meta {
            display: inline-block;
        }

        .tp-caption a {
            color: #ff7302;
            text-shadow: none;
            -webkit-transition: all 0.2s ease-out;
            -moz-transition: all 0.2s ease-out;
            -o-transition: all 0.2s ease-out;
            -ms-transition: all 0.2s ease-out;
        }

        .tp-caption a:hover {
            color: #ffa902;
        }

        .navbar-static-top {
            margin-top: 0px !important;
            margin-bottom: 0px !important;
        }

        footer.content-info {
            background: #ffffff;
        }

        #copyright-bar {
            line-height: 22px;
        }

        #footer_social_bar {
            line-height: 30px;
            font-size: 20px;
            text-align: center;
        }

        .archive.woocommerce ul.products li.product,
        .archive.woocommerce-page ul.products li.product {
            width: 25%;
        }

        .recentcomments a {
            display: inline !important;
            padding: 0 !important;
            margin: 0 !important;
        }

        @yield('styles');
    </style>

    {{-- Favicons --}}
    <link rel="shortcut icon"
        href="{{ asset('/assets/images/HOC_browser_logo_32x32.png') }}"
        type="image/x-icon">
    <link rel="apple-touch-icon-precomposed"
        href="{{ asset('/assets/images/h-office-logo-sm.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114"
        href="{{ asset('/assets/images/h-office-logo-sm.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72"
        href="{{ asset('/assets/images/h-office-logo-sm.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144"
        href="{{ asset('/assets/images/h-office-logo-sm.png') }}">

    {{-- Core Scripts --}}

    <script src="{{ asset('/assets/js/jquery90f9.js') }}"></script>
    <script src="{{ asset('/assets/js/jquery-migrate.min1576.js') }}"></script>
    <script src="{{ asset('/assets/js/jquery.themepunch.tools.minab53.js') }}"></script>
    <script src="{{ asset('/assets/js/jquery.themepunch.revolution.minab53.js') }}"></script>
    <script src="{{ asset('/assets/js/isotope.pkgd.min8f76.js') }}"></script>
    <script src="{{ asset('/assets/js/packery-mode.pkgd.mincfbc.js') }}"></script>
    <script src="{{ asset('/assets/js/slick.mincfbc.js') }}"></script>
    <script src="{{ asset('/assets/js/ac-frameworkcfbc.js') }}"></script>
    <script src="{{ asset('/assets/js/modernizr-2.7.0.min.js') }}"></script>

    @yield('head')
</head>

<body class="@yield('body-class', 'home page')">
    <x-preloader />

    @yield('content')

    <!-- Footer Scripts -->
    <script src="{{ asset('/assets/js/jquery.form.mind03d.js') }}"></script>
    <script>
        var _wpcf7 = {
            "loaderUrl": "{{ asset('/assets/images/ajax-loader.gif') }}",
            "sending": "Sending ..."
        };
    </script>
    <script src="{{ asset('/assets/js/scripts2f54.js') }}"></script>
    <script src="{{ asset('/assets/js/jquery.prettyPhoto8f76.js') }}"></script>
    <script src="{{ asset('/assets/js/jquery.royalslider.mincfbc.js') }}"></script>
    <script src="{{ asset('/assets/js/theme-scriptscfbc.js') }}"></script>
    <script src="{{ asset('/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/assets/js/main.js') }}"></script>
    <script src="{{ asset('/assets/js/retina.js') }}"></script>
    <script src="{{ asset('/assets/js/jquery.fitvids.js') }}"></script>
    <script src="{{ asset('/assets/js/lgs_jquery.cycle2cfbc.js') }}"></script>
    <script src="{{ asset('/assets/js/js_composer_front8f76.js') }}"></script>
    @yield('scripts')
</body>

</html>
