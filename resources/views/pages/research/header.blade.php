<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="{{ isset($_GET['lang']) ? $post->excerpt_ar : $post->excerpt }}" />
    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="Sharjah Architecture Triennial || Research">
    <meta itemprop="description" content="{{ isset($_GET['lang']) ? $post->excerpt_ar : $post->excerpt }}">
    <meta itemprop="image" content="{{asset('public/'.$post->slider->square->url)}}">

    <!-- Twitter Card data -->
    <meta name="twitter:card" content="http://sharjaharchitecture.org/og.JPG">
    <meta name="twitter:site" content="@publisher_handle">
    <meta name="twitter:title" content="Sharjah Architecture Triennial || Research">
    <meta name="twitter:description" content="{{ isset($_GET['lang']) ? $post->excerpt_ar : $post->excerpt }}">
    <meta name="twitter:creator" content="@author_handle">
    <!-- Twitter summary card with large image must be at least 280x150px -->
    <meta name="twitter:image:src" content="{{asset('public/'.$post->slider->square->url)}}">

    <!-- Open Graph data -->
    <meta property="og:title" content="Sharjah Architecture Triennial || Research" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="{{ url('pages/podcasts/'.$post->slug) }}" />
    <meta property="og:image" content="{{asset('public/'.$post->slider->square->url)}}" />
    <meta property="og:description" content="{{ isset($_GET['lang']) ? $post->excerpt_ar : $post->excerpt }}" />
    <meta property="og:site_name" content="Sharjah Architecture Triennial" />
    <meta property="article:published_time" content="2018-10-28T05:59:00+01:00" />
    <meta property="article:modified_time" content="2018-010-28T19:08:47+01:00" />
    <meta property="article:section" content="Homepage" />
    <meta property="article:tag" content="SAT" />

    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/fontawesome.js"
            integrity="sha384-7ox8Q2yzO/uWircfojVuCQOZl+ZZBg2D2J5nkpLqzH1HY0C1dHlTKIbpRz/LG23c" crossorigin="anonymous"></script>

    <link rel="shortcut icon" href="{{ asset('public/favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('public/favicon.ico') }}" type="image/x-icon">

    <title>Sharjah Architecture Triennial || Research</title>
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('public/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Cairo:400,700&amp;subset=arabic" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lateef&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700,800,900" rel="stylesheet">
    <link href="{{ asset('public/fonts/stylesheet.css') }}" rel="stylesheet">
    <link href="{{ asset('public/fonts/roboto/stylesheet.css') }}" rel="stylesheet">
    <link href="{{ asset('public/css/research.css?v=2.9') }}" rel="stylesheet">
    <link href="{{ asset('public/css/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('public/css/owl.carousel.min.css') }}" rel="stylesheet"><link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/simplebar@latest/dist/simplebar.css"
    />

    @yield('css')

    @if($lang=='ar')
        <link href="https://fonts.googleapis.com/css?family=Cairo:400,700&amp;subset=arabic" rel="stylesheet">
        <style>
            .simplebar-track.simplebar-vertical {
                left: 0;
                right: auto;
            }

            body {
                direction: rtl !important;
                text-align: right;
                font-family: 'Cairo';
            }

            .filterlabel {
                float: right;
            }

            #boxlinks {
                float: left;
            }

            .breadcrumbs {
                float: right;
            }

            #boxlinks a {
                margin-right: 20px;
                margin-left: 0;
            }
            #boxlinks li {
                float: none;
                display: inline-block;
            }

            #catpop {
                left: auto;
                right: -100%;
                transition: right 600ms;
            }

            .mapcontent {
                text-align: right;
                font-family: 'Cairo';
            }

            #timeline {
                left: -100%;
            }

            #timelineSelect li span {
                left: -100%;
            }

            #timelineSelect li a:before {
                left: auto;
                right: -8px;
            }

            #timelineSelect li span a {
                padding: 10px 15px 10px 10px;
            }

            .catdetail {
            }

            .simplebar-content-wrapper {
                padding-left: 18px;
                padding-right: 0;
            }

            #intropop {
                left: auto;
                right: -100%;
            }

            .backbutton {
                float: right;
                padding-left: 0;
                padding-right: 30px;
                background-position: right center;
                background-image: url({{ asset('public/img/research/back-arrow-right.png') }});
            }

            .video-pop {
                left: auto;
                right: -120%;
                transition: right 600ms;
            }

            .video-pop.active {
                right: 0;
            }

            .video-pop .backbutton {
                right: 12px;
                left: auto;
            }

            #form .submit {
                float: left;
            }

            .page-4 .arrows {
                display: none !important;
            }

            @media only screen and (max-width: 1100px) {

                #intropop {
                    left: -100%;
                    right: auto;
                }

                #boxlinks {
                    float: none;
                }

                .pagecontent {
                    max-height: 50vh;
                }

                #timelineSelect li span {
                    left: 0;
                }

                #timelineSelect li a:before {
                    left: 50%;
                    right: auto;
                    top: -11px;
                }

            }

            @media only screen and (max-width: 420px) {
                #timelineSelect li span a {
                    padding: 10px 0;
                }
                #boxlinks a {
                    margin-right: 10px;
                }
            }
        </style>
    @endif
</head>

<body>

<main role="main" class="container-fluid main" id="menu">
    <div class="row">
        <div class="container">
            <div class="row">
                <a href="#" id="main-logo"></a>
                <div class="buttons">
                    <a href="#" class="menu-icon menu-close-click" id="menu-bt-close"></a>
                    <a href="#" class="menu-icon search-click" id="search-bt"></a>
                    <form action="{{ url('search') }}" method="post">
                        <input type="hidden" value="{!! csrf_token() !!}" name="_token">
                        <input type="text" id="search" name="keyword">
                        <input type="submit" value="" id="search-submit">
                    </form>
                </div>
                <div class="menu-holder auto-height">
                    <div class="headline auto-height-holder">
                        @include('menu-desktop')
                        @include('menu-mobile')
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<header class="clearfix" id="header">
    <div class="dark min floating" id="floating-header">
        <div class="container" style="position: relative">
            <div class="relative">
                <a href="{{ url('/') }}/" class="logo-link">
                    <div id="logo" class="clearfix oneline">
                        <img src="{{ asset('public/img/svg/ar-1.svg') }}" class="ar1">
                        <img src="{{ asset('public/img/svg/ar-2.svg') }}" class="ar2">
                        <img src="{{ asset('public/img/svg/ar-3.svg') }}" class="ar3">
                        <img src="{{ asset('public/img/svg/en-1.svg') }}" class="en1">
                        <img src="{{ asset('public/img/svg/en-2.svg') }}" class="en2">
                        <img src="{{ asset('public/img/svg/en-3.svg') }}" class="en3">
                    </div>
                </a>
                <div class="buttons">
                    <a href="#" class="menu-icon menu-click dark" id="menu-bt"></a>
                </div>
            </div>
            <div class="relative clearfix" dir="" id="bottommenu">
                <div class="container-fluid" style="padding:0;">
                    <div class="breadcrumbs en" style="height: 40px;">
                        @if($lang=='ar')
{{--                            <a href="{{ url('research?lang=ar') }}" style="margin-left: 15px;">AR</a> / <a href="{{ url('research') }}">EN</a> &nbsp; |&nbsp;&nbsp;--}}
                            <a href="{{ url('/') }}" style="color: rgb(0, 0, 0);margin-right: 0">
                                العودة إلى الصفحة الرئيسية
                            </a>
                        @else
                            <a href="{{ url('/') }}" style="color: rgb(0, 0, 0);margin-right: 15px">
                                Back to home
                            </a>
{{--                            |--}}
{{--                            <a href="{{ url('research?lang=ar') }}" style="margin-left: 15px;">AR</a> / <a href="{{ url('research') }}">EN</a>--}}
                        @endif
                    </div>
                    <ul id="boxlinks">
                        <li><a href="#" class="active link" data-id="home">
                            @if($lang=='ar')
                                Map
                            @else
                                Map
                            @endif
                        </a></li>

                        @if(!$content['tab-1']->is_hidden)
                            <li><a href="#" class="link" data-id="page-1">
                                {{ $lang=='ar' ? $content['tab-1']->title_ar : $content['tab-1']->title}}
                            </a></li>
                        @endif

                        @if(!$content['tab-2']->is_hidden)
                            <li><a href="#" class="link" data-id="page-2">
                                {{ $lang=='ar' ? $content['tab-2']->title_ar : $content['tab-2']->title}}
                            </a></li>
                        @endif

                        @if(!$content['tab-3']->is_hidden)
                            <li><a href="#" class="link" data-id="page-3">
                                {{ $lang=='ar' ? $content['tab-3']->title_ar : $content['tab-3']->title}}
                            </a></li>
                        @endif

                        @if(!$content['tab-4']->is_hidden)
                            <li><a href="#" class="link" data-id="page-4">
                                {{ $lang=='ar' ? $content['tab-4']->title_ar : $content['tab-4']->title}}
                            </a></li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>